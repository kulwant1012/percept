/* #Init photoswipe
================================================== */
$.fn.addPhotoswipeWrap = function() {
    return this.each(function(k, link) {
        var $this = $(this);
        $this.on('click', function(e){
            e.preventDefault();
        })
        $this.parents('figure').first().addClass("photoswipe-item");
        if ($this.hasClass("pspw-wrap-ready")) {
            return;
        }
        if(!$this.parents().hasClass('dt-gallery-container')){
            $this.parent().addClass("photoswipe-wrapper");
        }
        $this.addClass("pspw-wrap-ready");
    });
};

$(".dt-pswp-item, figure .dt-gallery-container a").addPhotoswipeWrap();

//Share btns array
var shareButtonsPattern = [
    {id:'facebook', label: '<i class="fab fa-facebook-f" aria-hidden="true"></i> ' + dtShare.shareButtonText.facebook, url:'https://www.facebook.com/sharer/sharer.php?u={{url}}&picture={{raw_image_url}}&description={{text}}'},

    {id:'twitter', label: '<i class="fab fa-twitter" aria-hidden="true"></i> ' + dtShare.shareButtonText.twitter, url:'https://twitter.com/intent/tweet?text={{text}}&url={{url}}'},

    {id:'pinterest', label: '<i class="fab fa-pinterest" aria-hidden="true"></i> ' + dtShare.shareButtonText.pinterest, url:'http://www.pinterest.com/pin/create/button/?url={{url}}&media={{image_url}}&description={{text}}'},

    {id:'linkedin', label: '<i class="fab fa-linkedin-in" aria-hidden="true"></i> ' + dtShare.shareButtonText.linkedin, url:'http://www.linkedin.com/shareArticle?mini=true&url={{url}}&title={{text}}'},

    {id:'whatsapp', label: '<i class="fab fa-whatsapp" aria-hidden="true"></i> ' + dtShare.shareButtonText.whatsapp, url:'whatsapp://send?text={{url}}'},

    {id:'google', label: '<i class="fab fa-google-plus-g" aria-hidden="true"></i> ' + dtShare.shareButtonText.google, url:'http://plus.google.com/share?url={{url}}&title={{text}}'}
];

//Videos array
var patterns = {
    youtube: {
        index: 'youtube.com',
        id: 'v=',
        src: '//www.youtube.com/embed/%id%',
        type: 'youtube'
    },
    vimeo: {
        index: 'vimeo.com/',
        id: '/',
        src: '//player.vimeo.com/video/%id%',
        type: 'vimeo'
    },
    gmaps: {
        index: '//maps.google.',
        src: '%id%&output=embed'
    }
};


//Photos pspw
$.fn.photoswipeGallery = function(gallerySelector){
    var parseThumbnailElements = function(el) {
        var thumbElements = $(el).find('.photoswipe-item').get(),
            numNodes = thumbElements.length,
            items = [],
            figureEl,
            linkEl,
            size,
            item;

        for (var i = 0; i < numNodes; i++) {

            figureEl = thumbElements[i];

            // include only element nodes
            if (figureEl.nodeType !== 1) {
                continue;
            }

            linkEl = figureEl.children[0]; // <a> element
            var $this_data_w = (typeof $(linkEl).attr( 'data-large_image_width' )  != 'undefined'  && $(linkEl).attr( 'data-large_image_width' ).length > 0 && $(linkEl).attr( 'data-large_image_width' )  != '' )  ? $(linkEl).attr( 'data-large_image_width' ) : $(linkEl).find('img').attr('width'),

                $this_data_h = (typeof $(linkEl).attr( 'data-large_image_height' )  != 'undefined'  && $(linkEl).attr( 'data-large_image_height' ).length > 0 && $(linkEl).attr( 'data-large_image_height' )  != '' )  ? $(linkEl).attr( 'data-large_image_height' ) : $(linkEl).find('img').attr('height'),

                $this_data_title = (typeof $(linkEl).attr( 'title' )  != 'undefined'  && $(linkEl).attr( 'title' ).length > 0)  ? '<h5>' + $(linkEl).attr( 'title' ) + '</h5>\n' : "",

                $this_data_desc_var = (typeof $(linkEl).attr( 'data-dt-img-description' )  != 'undefined')  ? $(linkEl).attr( 'data-dt-img-description' ) : "",

                $this_data_desc = $this_data_title + $this_data_desc_var  || "";

                       // console.log($this_data_desc);

            // create slide object
            if ($(linkEl).hasClass('pswp-video')) {
                var embedSrc = linkEl.href,
                iframeSt = $('.video-wrapper iframe'),
                embedType;

                $.each(patterns, function() {
                    if(embedSrc.indexOf( this.index ) > -1) {
                        if(this.id) {
                                if(typeof this.id === 'string') {
                                    embedSrc = embedSrc.substr(embedSrc.lastIndexOf(this.id)+this.id.length, embedSrc.length),
                                embedType  = this.type;
                                } else {
                                    embedSrc = this.id.call( this, embedSrc ),
                                embedType  = this.type;
                                }
                        }
                        embedSrc = this.src.replace('%id%', embedSrc );
                        return false; // break;
                    }
                });
                var item = {
                    html: '<div class="pswp-video-wrap " data-type="'+ embedType+'"><div class="video-wrapper"><iframe class="pswp__video"src=" '+ embedSrc +' " frameborder="0" allowfullscreen></iframe></div></div>',
                      title: $this_data_desc
                };
            } else {
                var item = {
                    src: linkEl.getAttribute('href'),
                    w: $this_data_w,
                    h: $this_data_h,
                    title: $this_data_desc
                };
            }

            // if (figureEl.children.length > 1) {
            //     // <figcaption> content
            //     item.title = $(figureEl).find('.caption').html();

            //     console.log(figureEl);
            // }

            if (linkEl.children.length > 0) {
                // <img> thumbnail element, retrieving thumbnail url
                item.msrc = linkEl.children[0].getAttribute('src');
            }

            item.el = figureEl; // save link to element for getThumbBoundsFn
            items.push(item);
        }

        return items;
    };

    // find nearest parent element
    var closest = function closest(el, fn) {
        return el && (fn(el) ? el : closest(el.parentNode, fn));
    };

    function hasClass(element, cls) {
        return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
    }

    // triggers when user clicks on thumbnail
    var onThumbnailsClick = function(e) {
        // e = e || window.event;
        // e.preventDefault ? e.preventDefault() : e.returnValue = false;

        var eTarget = e.target || e.srcElement;

        // find root element of slide
        var clickedListItem = closest(eTarget, function(el) {
            return (hasClass(el, 'photoswipe-item'));
        });

        if (!clickedListItem) {
            return;
        }

        // find index of clicked item by looping through all child nodes
        // alternatively, you may define index via data- attribute
        var clickedGallery = $(clickedListItem).closest('.dt-gallery-container')[0],
            childNodes = $($(clickedListItem).closest('.dt-gallery-container')[0]).find('.photoswipe-item').get(),
            numChildNodes = childNodes.length,
            nodeIndex = 0,
            index;
        for (var i = 0; i < numChildNodes; i++) {
            if (childNodes[i].nodeType !== 1) {
                continue;
            }

            if (childNodes[i] === clickedListItem) {
                index = nodeIndex;
                break;
            }
            nodeIndex++;
        }

        if (index >= 0) {
            // open PhotoSwipe if valid index found
            openPhotoSwipe(index, clickedGallery);
        }

        return false;
    };

    // parse picture index and gallery index from URL (#&pid=1&gid=2)
    var photoswipeParseHash = function() {
        var hash = window.location.hash.substring(1),
        params = {};

        if (hash.length < 5) {
            return params;
        }

        var vars = hash.split('&');
        for (var i = 0; i < vars.length; i++) {
            if (!vars[i]) {
                continue;
            }
            var pair = vars[i].split('=');
            if (pair.length < 2) {
                continue;
            }
            params[pair[0]] = pair[1];
        }

        if (params.gid) {
            params.gid = parseInt(params.gid, 10);
        }

        return params;
    };

    var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
        var pswpElement = document.querySelectorAll('.pswp')[0],
            gallery,
            options,
            items;
       // $shareButtonsList = $(galleryElement).attr('data-pretty-share') ? $(galleryElement).attr('data-pretty-share').split(',') : new Array();

        items = parseThumbnailElements(galleryElement);
        var $shareButtonsList = $(galleryElement).attr('data-pretty-share') ? $(galleryElement).attr('data-pretty-share').split(',') : new Array();
        if ( $shareButtonsList.length <= 0 || typeof $shareButtonsList  == 'undefined'  ) {
           $('.pswp__scroll-wrap').addClass("hide-pspw-share");
        }
        for (var prop in $shareButtonsList) {
            var showShare = $shareButtonsList[prop];
            
            switch(showShare) {
                case 'facebook':
                    $('.pswp__share-tooltip').addClass('show-share-fb');
                    break;
                case 'twitter':
                    $('.pswp__share-tooltip').addClass('show-share-tw');
                    break;
                case 'pinterest':
                    $('.pswp__share-tooltip').addClass('show-share-pin');
                    break;
                case 'linkedin':
                    $('.pswp__share-tooltip').addClass('show-share-in');
                     break;
                case 'whatsapp':
                    $('.pswp__share-tooltip').addClass('show-share-wp');
                     break;
                case 'google':
                    $('.pswp__share-tooltip').addClass('show-share-g');
                     break;
                default:
                    $('.pswp__share-tooltip').removeClass('show-share-in show-share-pin show-share-tw show-share-fb show-share-g show-share-wp');
                    break;
            }
            // return $shareButtonsList[prop];
        }

        options = {
            closeOnScroll: false,
            // define gallery index (for URL)
            galleryUID: galleryElement.getAttribute('data-pswp-uid'),
            bgOpacity: dtShare.overlayOpacity/100,
            loop: true,
            history:false,
            showHideOpacity:true,
            showAnimationDuration: 0,
            shareButtons: shareButtonsPattern,

           
            getImageURLForShare: function( shareButtonData ) {
                return gallery.currItem.src || $(gallery.currItem.el).find('a').attr('data-dt-location') || '';
            },
            getPageURLForShare: function( shareButtonData ) {
                if(shareButtonData.id == "linkedin"){
                    return $(gallery.currItem.el).find('a').attr('data-dt-location') || window.location.href;
                }else{
                    return $(gallery.currItem.el).find('a').attr('data-dt-location') || window.location.href;
                }
            },
            getTextForShare: function( shareButtonData ) {

                var htmlString= gallery.currItem.title;
                var stripedHtml = (typeof htmlString !="undefined") ? htmlString.replace(/<[^>]+>/g, '') : '';
                return stripedHtml || '';
            },

            // Parse output of share links
            parseShareButtonOut: function(shareButtonData, shareButtonOut) {
               
               
                return shareButtonOut;

            }

        };


        // PhotoSwipe opened from URL
        if (fromURL) {
            if (options.galleryPIDs) {
                // parse real index when custom PIDs are used
                // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
                for (var j = 0; j < items.length; j++) {
                    if (items[j].pid == index) {
                        options.index = j;
                        break;
                    }
                }
            } else {
                // in URL indexes start from 1
                options.index = parseInt(index, 10) - 1;
            }
        } else {
            options.index = parseInt(index, 10);
        }

        // exit if index not found
        if (isNaN(options.index)) {
            return;
        }

        if (disableAnimation) {
            options.showAnimationDuration = 0;
        }

        // Pass data to PhotoSwipe and initialize it
        gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
        gallery.init();

        $(".pswp__zoom-wrap").removeClass("active-item");
        $('.pswp__video').removeClass('active');

        var currItem = $(gallery.currItem.container);
        currItem.addClass("active-item");
        //start video
        if(currItem.find('.pswp__video').length > 0){
            currItem.find('.pswp__video').addClass('active');
            currItem.parents(".pswp").addClass("video-active");
            var videoURL = currItem.find('.pswp__video').prop('src');
            videoURL += "?autoplay=1";
            

            currItem.find('.pswp__video').prop('src',videoURL);
        };


        gallery.listen('beforeChange', function() {
            var currItem = $(gallery.currItem.container);
            $(".pswp__zoom-wrap").removeClass("active-item");
            currItem.addClass("active-item");
            $('.pswp__video').removeClass('active');
            $(".pswp").removeClass("video-active");
            currItem.find('.pswp__video').addClass('active')
            var currItemIframe = currItem.find('.pswp__video');
            if(currItem.find('.pswp__video').length > 0){
                currItem.parents(".pswp").addClass("video-active");
                $runVideo = 0;
            }
            $('.pswp__video').each(function() {
                var $this = $(this);
                if (!$this.hasClass('active')) {
                    var videoURL = $this.prop('src');
                    if($this.parents('.pswp-video-wrap ').attr('data-type') == "youtube" || $this.parents('.pswp-video-wrap ').attr('data-type') == "vimeo"){
                        videoURL = videoURL.replace("?autoplay=1", "?enablejsapi=1");
                    }else{
                        videoURL = videoURL.replace("?autoplay=1", "");
                    }

                    $this.prop('src','');
                    $this.prop('src',videoURL);
                    //$('.pswp__video').removeClass('active');
                    var iframe =  $this[0].contentWindow;
                    if($this.hasClass('active')){
                        func = 'playVideo';
                    }else{
                        func = 'pauseVideo';
                    }
                    iframe.postMessage('{"event":"command","func":"' + func + '","args":""}','*');
                }
            });
        });

        var pswpVideoTimer,
        pswpdestroyTimer;
        gallery.listen('close', function() {
            $('.pswp__video').each(function() {
                var $this = $(this);
                $this.attr('src', $(this).attr('src'));
                var videoURL = $this.prop('src');
               // videoURL = videoURL.replace("?autoplay=1", "?enablejsapi=1");
                if($this.parents('.pswp-video-wrap ').attr('data-type') == "youtube" || $this.parents('.pswp-video-wrap ').attr('data-type') == "vimeo"){
                    videoURL = videoURL.replace("?autoplay=1", "?enablejsapi=1");
                }else{
                    videoURL = videoURL.replace("?autoplay=1", "");
                }

                $this.prop('src','');
                $this.prop('src',videoURL);
                $('.pswp__video').removeClass('active');
                var iframe =  $(this)[0].contentWindow;
                if($(this).hasClass('active')){
                    func = 'playVideo';
                }else{
                    func = 'pauseVideo';
                }
                iframe.postMessage('{"event":"command","func":"' + func + '","args":""}','*');
                clearTimeout( pswpVideoTimer );
                pswpVideoTimer = setTimeout(function(){
                    $('.pswp-video-wrap').remove();
                },200);
            });
        });
        gallery.listen('destroy', function() {
            clearTimeout( pswpdestroyTimer );
            pswpdestroyTimer = setTimeout(function() {
                $('.pswp').removeClass().addClass('pswp');
            }, 100);
        });

    };

    // loop through all gallery elements and bind events
    var galleryElements = document.querySelectorAll(gallerySelector);

    for (var i = 0, l = galleryElements.length; i < l; i++) {
        galleryElements[i].setAttribute('data-pswp-uid', i + 1);
        galleryElements[i].onclick = onThumbnailsClick;
    }

    // Parse URL and open gallery if it contains #&pid=3&gid=1
    var hashData = photoswipeParseHash();
    if (hashData.pid && hashData.gid) {
        openPhotoSwipe(hashData.pid, galleryElements[hashData.gid - 1], true, true);
    }


};

$('.dt-gallery-container.wf-container').photoswipeGallery('.dt-gallery-container.wf-container');


$.fn.photoswipe = function(options){
    var galleries = [],
        _options = options,
        linkEl,
        item;
    
        var init = function($this, el){
            galleries = [];
            $this.each(function(i, gallery){
                galleries.push({
                    id: i,
                    items: []
                });
                var $clickLink  = $(gallery).find('.dt-pswp-item');
                $clickLink.each(function(k, link) {
                    var $link = $(link),
                        $this_data_w = (typeof $link.attr( 'data-large_image_width' )  != 'undefined'  && $link.attr( 'data-large_image_width' ).length > 0 && $link.attr( 'data-large_image_width' ) != '' ) ? $link.attr( 'data-large_image_width' ) : $link.find('img').attr('width'),
                        $this_data_h = (typeof $link.attr( 'data-large_image_height' )  != 'undefined'  && $link.attr( 'data-large_image_height' ).length > 0 && $link.attr( 'data-large_image_height' )  != '')  ? $link.attr( 'data-large_image_height' ) : $link.find('img').attr('height'),
                        
                        $this_data_title = (typeof $link.attr( 'title' )  != 'undefined' && $link.attr( 'title' ).length > 0)  ? '<h5>' + $link.attr( 'title' ) + '</h5>' : "",
                        $this_data_desc_var = (typeof $link.attr( 'data-dt-img-description' )  != 'undefined')  ? $link.attr( 'data-dt-img-description' ) : "",
                        $this_data_desc = $this_data_title + $this_data_desc_var  || "";
                        
                    $link.data('gallery-id',i+1);
                    $link.data('photo-id', k);
                    if(typeof $this_data_w === 'undefined') {
                       var $this_data_w  = $link.find('img').width();
                    }
                    if(typeof $this_data_h === 'undefined') {
                       var $this_data_h  = $link.find('img').height();
                    }
                    
                    if ($(link).hasClass('pswp-video')) {

                                // we don't care and support only one default type of URL by default
                                
                        var embedSrc = link.href,
                            iframeSt = $('.video-wrapper iframe'),
                            embedType;

                        $.each(patterns, function() {
                            if(embedSrc.indexOf( this.index ) > -1) {
                                if(this.id) {
                                    if(typeof this.id === 'string') {
                                        embedSrc = embedSrc.substr(embedSrc.lastIndexOf(this.id)+this.id.length, embedSrc.length),
                                        embedType  = this.type;
                                    } else {
                                        embedSrc = this.id.call( this, embedSrc ),
                                        embedType  = this.type;
                                    }
                                }
                                embedSrc = this.src.replace('%id%', embedSrc );
                                return false; // break;
                            }
                        });
                        var item = {
                            html: '<div class="pswp-video-wrap " data-type="'+ embedType+'"><div class="video-wrapper"><iframe class="pswp__video"src="'+ embedSrc +' " frameborder="0" allowfullscreen></iframe></div></div>',
                            title: $this_data_desc,
                            shareLink: $link.attr('data-dt-location') || $link.parents('.fancy-media-wrap').find('img').attr('data-dt-location') || ''
                        };
                    } else {
                        var item = {
                            src: link.href,
                            w: $this_data_w,
                            h: $this_data_h,
                            title: $this_data_desc,
                            shareLink: $link.attr('data-dt-location') || $link.find('img').attr('data-dt-location') || ''
                        }
                    }
                    galleries[i].items.push(item);
                
                });

                if($(gallery).prev().hasClass('dt-gallery-pswp')){
                      var clickEl = $(gallery).prev('.dt-gallery-pswp');
                }else{
                      var clickEl = $(gallery).find('.dt-pswp-item');
                }
            if($(gallery).prev().hasClass('dt-gallery-pswp')){

                $(gallery).prev('.dt-gallery-pswp').on('click', function(e){
                    e.preventDefault();
                     var $this = $(this);
                   
                    var $dataItem = $(this).next($(gallery)).find('.dt-pswp-item');
                    var gid = $dataItem.data('gallery-id'),
                        pid = $dataItem.data('photo-id');
                    if (!$this.parents(".ts-wrap").hasClass("ts-interceptClicks")) {
                     openGallery(gid,pid, $this);
                    
                    };
                });
            }else{
                $(gallery).on('click', '.dt-pswp-item', function(e){
                     var $this = $(this);
                    
                    e.preventDefault();
                    var gid = $(this).data('gallery-id'),
                        pid = $(this).data('photo-id');

                    if (!$this.parents(".ts-wrap").hasClass("ts-interceptClicks")) {
                        openGallery(gid,pid, $this);
                    };
                });
            }
           
        });
    }
    
    var parseHash = function() {
        var hash = window.location.hash.substring(1),
        params = {};

        if(hash.length < 5) {
            return params;
        }

        var vars = hash.split('&');
        for (var i = 0; i < vars.length; i++) {
            if(!vars[i]) {
                continue;
            }
            var pair = vars[i].split('=');  
            if(pair.length < 2) {
                continue;
            }           
            params[pair[0]] = pair[1];
        }

        if(params.gid) {
            params.gid = parseInt(params.gid, 10);
        }

        if(!params.hasOwnProperty('pid')) {
            return params;
        }
        params.pid = parseInt(params.pid, 10);
        return params;
    };
    
    var openGallery = function(gid,pid,$el){
        var pswpElement = document.querySelectorAll('.pswp')[0],
            items = galleries[gid-1].items,
            item,
        options = {
            index: pid,
            galleryUID: gid,
            shareEl:               true,
            closeOnScroll:         false,
            history:               false,
            shareButtons: shareButtonsPattern,
            getImageURLForShare: function( shareButtonData ) {
                return gallery.currItem.src || '';
            },
            getPageURLForShare: function( shareButtonData ) {
                if(shareButtonData.id == "linkedin"){
                    return gallery.currItem.shareLink || window.location.href;
                }else{
                    return gallery.currItem.shareLink || window.location.href;
                }
            },
            getTextForShare: function( shareButtonData ) {
                var htmlString= gallery.currItem.title;
                var stripedHtml = (typeof htmlString !="undefined") ? htmlString.replace(/<[^>]+>/g, '') : '';
                return stripedHtml || '';
            },

            // Parse output of share links
            parseShareButtonOut: function(shareButtonData, shareButtonOut) {
                return shareButtonOut;
            }
        };
        var $shareButtonsList = "";
        if(typeof $($el).next(".dt-gallery-container").attr('data-pretty-share')  != 'undefined' ){
            var $shareButtonsList = $($el).next(".dt-gallery-container").attr('data-pretty-share').split(',');
        } if(typeof $($el).parents(".dt-gallery-container").attr('data-pretty-share')  != 'undefined' ){
            var $shareButtonsList = $($el).parents(".dt-gallery-container").attr('data-pretty-share').split(',');
        }else if(typeof $($el).parents('.shortcode-single-image-wrap').attr('data-pretty-share')  != 'undefined' ){
            var $shareButtonsList = $($el).parents('.shortcode-single-image-wrap').attr('data-pretty-share').split(',')
        }else if(typeof $($el).attr('data-pretty-share')  != 'undefined' ){
            var $shareButtonsList = $($el).attr('data-pretty-share').split(',')
        }
        if ( $shareButtonsList.length <= 0 || typeof $shareButtonsList  == 'undefined'  ) {
           $('.pswp__scroll-wrap').addClass("hide-pspw-share");
        }
        for (var prop in $shareButtonsList) {
            var showShare = $shareButtonsList[prop];
            
            switch(showShare) {
                case 'facebook':
                    $('.pswp__share-tooltip').addClass('show-share-fb');
                    break;
                case 'twitter':
                    $('.pswp__share-tooltip').addClass('show-share-tw');
                    break;
                case 'pinterest':
                    $('.pswp__share-tooltip').addClass('show-share-pin');
                    break;
                case 'linkedin':
                    $('.pswp__share-tooltip').addClass('show-share-in');
                     break;
                case 'whatsapp':
                    $('.pswp__share-tooltip').addClass('show-share-wp');
                     break;
                case 'google':
                    $('.pswp__share-tooltip').addClass('show-share-g');
                     break;
                default:
                    $('.pswp__share-tooltip').removeClass('show-share-in show-share-pin show-share-tw show-share-fb show-share-g show-share-wp');
                    break;
            }
            // return $shareButtonsList[prop];
        }

        $.extend(options,_options);
        var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
        gallery.init();

        $('.pswp__video').removeClass('active');
        var currItem = $(gallery.currItem.container);
        if(currItem.find('.pswp__video').length > 0){
            currItem.parents(".pswp").addClass("video-active");
        }

        $(".pswp__zoom-wrap").removeClass("active-item");

        currItem.addClass("active-item");
        //start video
        if(currItem.find('.pswp__video').length > 0){
            currItem.find('.pswp__video').addClass('active');
            currItem.parents(".pswp").addClass("video-active");
            var videoURL = currItem.find('.pswp__video').prop('src');
           // if($this.parents('.pswp-video-wrap ').attr('data-type') == "youtube" || $this.parents('.pswp-video-wrap ').attr('data-type') == "vimeo"){
                videoURL += "?autoplay=1";
            //}
         
            currItem.find('.pswp__video').prop('src',videoURL);
        };


        gallery.listen('beforeChange', function() {
            var currItem = $(gallery.currItem.container);
            $(".pswp__zoom-wrap").removeClass("active-item");
            currItem.addClass("active-item");
            $('.pswp__video').removeClass('active');
            $(".pswp").removeClass("video-active");
            var currItemIframe = currItem.find('.pswp__video').addClass('active');
            if(currItem.find('.pswp__video').length > 0){
                currItem.parents(".pswp").addClass("video-active");
            }
            $('.pswp__video').each(function() {
              var $this = $(this);
              if (!$this.hasClass('active')) {
                  var videoURL = $this.prop('src');
                  //if($this.parents('.pswp-video-wrap ').attr('data-type') == "youtube" || $this.parents('.pswp-video-wrap ').attr('data-type') == "vimeo"){
                    videoURL = videoURL.replace("?autoplay=1", "?enablejsapi=1");
                // }else{
                //     videoURL = videoURL.replace("?autoplay=1", "");
                // }
                    //videoURL = videoURL.replace("?autoplay=1", "?enablejsapi=1");
                
                  $this.prop('src','');
                  $this.prop('src',videoURL);
                  $('.pswp__video').removeClass('active');
                  var iframe =  $(this)[0].contentWindow;
                  if($this.hasClass('active')){
                      func = 'playVideo';
                  }else{
                      func = 'pauseVideo';
                  }
                  iframe.postMessage('{"event":"command","func":"' + func + '","args":""}','*');
              }
            });
        });
       
        var pswpVideoTimer,
        pswpdestroyTimer;
        gallery.listen('close', function() {
            $('.pswp__video').each(function() {
                var $this = $(this);
                $this.attr('src', $this.attr('src'));
                var videoURL = $this.prop('src');
                videoURL = videoURL.replace("?autoplay=1", "?enablejsapi=1");

              
                $this.prop('src','');
                $this.prop('src',videoURL);
                $('.pswp__video').removeClass('active');
                var iframe =  $(this)[0].contentWindow;
                if($this.hasClass('active')){
                    func = 'playVideo';
                }else{
                    func = 'stopVideo';
                }
                iframe.postMessage('{"event":"command","func":"' + func + '","args":""}','*');
                clearTimeout( pswpVideoTimer );
                pswpVideoTimer = setTimeout(function(){
                    $('.pswp-video-wrap').remove();
                },200);
            });
        });
        gallery.listen('destroy', function() {
            clearTimeout( pswpdestroyTimer );
            pswpdestroyTimer = setTimeout(function() {
                $('.pswp').removeClass().addClass('pswp');
              }, 100);
        });
    }
    
    // initialize
    init(this);

    //Parse URL and open gallery if it contains #&pid=3&gid=1
    var hashData = parseHash();
    if(hashData.pid > 0 && hashData.gid > 0) {
        openGallery(hashData.gid,hashData.pid);
    }
    return this;
};

$.fn.initPhotoswipe = function() {
    return this.each(function() {
        var $this = $(this);
        $this.photoswipe({
            bgOpacity: dtShare.overlayOpacity/100,
            loop: true,
            showHideOpacity:true
        });
    });
};

$('.photoswipe-wrapper, .photoswipe-item .dt-gallery-container, .shortcode-gallery.dt-gallery-container, .dt-gallery-container.gallery, .instagram-photos.dt-gallery-container, .images-container .dt-gallery-container, .shortcode-instagram.dt-gallery-container').initPhotoswipe();

$('.dt-trigger-first-pswp').addClass('pspw-ready').on('click', function(e){
    //e.preventDefault();
    var $this = $(this),
        $container = $this.parents('article.post').first();
    //prevent click on moving scroller
    if ($this.parents(".ts-wrap").hasClass("ts-interceptClicks")) return;
    if ( $container.length > 0 ) {

        if($container.find('.dt-gallery-container').length > 0){
            //open gallery (more then one img)
            var $target = $container.find('.dt-gallery-container a.dt-pswp-item');
        }else{
            //open gallery (single img)
            var $target = $container.find('a.dt-pswp-item');
        }

        if ( $target.length > 0 ) {
           // $target.first().trigger('click');
            $container.find('.rollover-click-target').trigger('click');
        }
    };

    return false;
});

 
