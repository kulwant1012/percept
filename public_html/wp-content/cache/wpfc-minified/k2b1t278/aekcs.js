// source --> https://www.perceptsystems.com/wp-content/plugins/Ultimate_VC_Addons/assets/min-js/headings.min.js?ver=3.16.24 
!function(a){function b(){var a=0;$jh(".uvc-heading").each(function(){var b,c,d,e=$jh(this).outerWidth(),f=$jh(this).attr("data-hline_width"),g=$jh(this).attr("data-hicon_type"),h=$jh(this).attr("data-halign"),i=$jh(this).attr("data-hspacer");if(left_rtl="left",right_rtl="right",jQuery("body").hasClass("rtl")&&(left_rtl="right",right_rtl="left"),"line_with_icon"==i){var j=$jh(this).attr("id");a=$jh(this).attr("data-hfixer"),a=void 0===a||""===a?0:parseInt(a);var k=e/2;$jh(this).find(".dynamic_ultimate_heading_css").remove(),d="auto"==f||f>e?e:f;var l=d/2;"selector"==g?(c=$jh(this).find(".aio-icon").outerWidth(),b=$jh(this).find(".aio-icon").outerHeight()):(c=$jh(this).find(".aio-icon-img").outerWidth(),b=$jh(this).find(".aio-icon-img").outerHeight());var m=c/2,n=k-m+c+a,o=l;if(b+=3,$jh(this).find(".uvc-heading-spacer").height(b),"center"==h){$jh(this).find(".aio-icon-img").css({margin:"0 auto"});var p="#"+j+" .uvc-heading-spacer.line_with_icon:before{"+right_rtl+":"+n+"px;}#"+j+" .uvc-heading-spacer.line_with_icon:after{"+left_rtl+":"+n+"px;}"}else if("left"==h){$jh(this).find(".aio-icon-img").css({float:h});var p="";p=""!=d?"#"+j+" .uvc-heading-spacer.line_with_icon:before{left:"+(c+a)+"px;right:auto;}#"+j+" .uvc-heading-spacer.line_with_icon:after{left:"+(o+c+a)+"px;right:auto;}":"#"+j+" .uvc-heading-spacer.line_with_icon:before{right:"+(n-c-2*a)+"px;}#"+j+" .uvc-heading-spacer.line_with_icon:after{left:"+(n-a)+"px;}"}else if("right"==h){$jh(this).find(".aio-icon-img").css({float:h});var p="";p=""!=d?"#"+j+" .uvc-heading-spacer.line_with_icon:before{right:"+(c+a)+"px;left:auto;}#"+j+" .uvc-heading-spacer.line_with_icon:after{right:"+(o+c+a)+"px;left:auto;}":"#"+j+" .uvc-heading-spacer.line_with_icon:before{right:"+(n-a)+"px;}#"+j+" .uvc-heading-spacer.line_with_icon:after{left:"+(n-c-2*a)+"px;}"}var q=$jh(this).attr("data-hborder_style"),r=$jh(this).attr("data-hborder_color"),s=$jh(this).attr("data-hborder_height");"auto"==f&&"center"==h&&(o=Math.floor(o-c+a));var t='<div class="dynamic_ultimate_heading_css"><style>#'+j+" .uvc-heading-spacer.line_with_icon:before, #"+j+" .uvc-heading-spacer.line_with_icon:after{width:"+o+"px;border-style:"+q+";border-color:"+r+";border-bottom-width:"+s+"px;}"+p+"</style></div>";$jh(this).prepend(t)}else"line_only"==i&&("right"==h||"left"==h?$jh(this).find(".uvc-heading-spacer").find(".uvc-headings-line").css({float:h}):$jh(this).find(".uvc-heading-spacer").find(".uvc-headings-line").css({margin:"0 auto"}))})}$jh=a.noConflict(),$jh(document).ready(function(a){b(),$jh(window).resize(function(a){b()})}),a(window).load(function(a){b(),jQuery(".ult_exp_section").select(function(){jQuery(this).parent().find(".uvc-heading").length>0&&b()})})}(jQuery);