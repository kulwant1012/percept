// source --> https://www.perceptsystems.com/wp-content/plugins/Ultimate_VC_Addons/assets/min-js/slick-custom.min.js?ver=3.16.24 
!function(a){a(document).ready(function(){a(".ult-carousel-wrapper").each(function(){var b=a(this);if(b.hasClass("ult_full_width")){b.css("left",0),b.css("right",0);var c=b.attr("data-rtl"),d=a("html").outerWidth(),e=b.offset().left,f=Math.abs(0-e),g=f;"true"===c||!0===c?b.css({position:"relative",right:"-"+g+"px",width:d+"px"}):b.css({position:"relative",left:"-"+g+"px",width:d+"px"})}}),a(".ult-carousel-wrapper").each(function(b,c){var d=a(c).data("gutter"),e=a(c).attr("id");if(""!=d){var f="<style>#"+e+" .slick-slide { margin:0 "+d+"px; } </style>";a("head").append(f)}}),a(".ult-carousel-wrapper").on("init",function(b){b.preventDefault(),a(".ult-carousel-wrapper .ult-item-wrap.slick-active").each(function(b,c){$this=a(this),$this.addClass($this.data("animation"))})}),a(".ult-carousel-wrapper").on("beforeChange",function(b,c,d){$inViewPort=a("[data-slick-index='"+d+"']"),$inViewPort.siblings().removeClass($inViewPort.data("animation"))}),a(".ult-carousel-wrapper").on("afterChange",function(b,c,d,e){if(slidesScrolled=c.options.slidesToScroll,slidesToShow=c.options.slidesToShow,centerMode=c.options.centerMode,windowWidth=jQuery(window).width(),windowWidth<1025&&(slidesToShow=c.options.responsive[0].settings.slidesToShow),windowWidth<769&&(slidesToShow=c.options.responsive[1].settings.slidesToShow),windowWidth<481&&(slidesToShow=c.options.responsive[2].settings.slidesToShow),$currentParent=c.$slider[0].parentElement.id,slideToAnimate=d+slidesToShow-1,1==slidesScrolled)1==centerMode?(animate=slideToAnimate-2,$inViewPort=a("#"+$currentParent+" [data-slick-index='"+animate+"']"),$inViewPort.addClass($inViewPort.data("animation"))):($inViewPort=a("#"+$currentParent+" [data-slick-index='"+slideToAnimate+"']"),$inViewPort.addClass($inViewPort.data("animation")));else for(var f=slidesScrolled+d;f>=0;f--)$inViewPort=a("#"+$currentParent+" [data-slick-index='"+f+"']"),$inViewPort.addClass($inViewPort.data("animation"))}),a(window).resize(function(){a(".ult-carousel-wrapper").each(function(){var b=a(this);if(b.hasClass("ult_full_width")){var c=b.attr("data-rtl");b.removeAttr("style");var d=a("html").outerWidth(),e=b.offset().left,f=Math.abs(0-e),g=f;"true"===c||!0===c?b.css({position:"relative",right:"-"+g+"px",width:d+"px"}):b.css({position:"relative",left:"-"+g+"px",width:d+"px"})}})})}),a(window).load(function(){a(".ult-carousel-wrapper").each(function(){var b=a(this);if(b.hasClass("ult_full_width")){b.css("left",0),b.css("right",0);var c=b.offset().left,d=Math.abs(0-c),e=b.attr("data-rtl"),f=a("html").outerWidth(),g=d;"true"===e||!0===e?b.css({position:"relative",right:"-"+g+"px",width:f+"px"}):b.css({position:"relative",left:"-"+g+"px",width:f+"px"})}})}),jQuery(document).on("ultAdvancedTabClickedCarousel",function(b,c){a(c).find(".ult-carousel-wrapper").each(function(){var b=a(this);if(b.hasClass("ult_full_width")){b.css("left",0),b.css("right",0);var c=b.offset().left,d=Math.abs(0-c),e=b.attr("data-rtl"),f=a("html").outerWidth(),g=d;"true"===e||!0===e?b.css({position:"relative",right:"-"+g+"px",width:f+"px"}):b.css({position:"relative",left:"-"+g+"px",width:f+"px"})}})})}(jQuery);