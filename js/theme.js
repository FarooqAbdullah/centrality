jQuery(document).ready(
    function ($) {
        console.log($(window).width());
        $(window).resize(
            function () {
                console.log($(window).width());
                execBrowser();
            }
        );
        function get_browser_info(){
            var ua=navigator.userAgent,tem,M=ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
            if(/trident/i.test(M[1])){
                tem=/\brv[ :]+(\d+)/g.exec(ua) || [];
                return {name:'IE',version:(tem[1]||'')};
            }
            if(M[1]==='Chrome'){
                tem=ua.match(/\bOPR\/(\d+)/)
                if(tem!=null)   {return {name:'Opera', version:tem[1]};}
            }
            M=M[2]? [M[1], M[2]]: [navigator.appName, navigator.appVersion, '-?'];
            if((tem=ua.match(/version\/(\d+)/i))!=null) {M.splice(1,1,tem[1]);}
            return {
                name: M[0],
                version: M[1]
            };
        }
        function execBrowser (){
            var browser = get_browser_info();
            if(browser.name == 'Safari' && browser.version < 7) {
                var $windowWidth = $(document).width();
                if($windowWidth >= 1440) {
                    var $boxWidth = 560;
                }
                else if($windowWidth >= 1280 && $windowWidth < 1440) {
                    var $boxWidth = 500;
                }
                else if($windowWidth >= 1024 && $windowWidth < 1280) {
                    var $boxWidth = 450;
                }
                else if($windowWidth >= 768 && $windowWidth < 1024) {
                    var $boxWidth = 400;
                }
                else if($windowWidth >= 480 && $windowWidth < 768) {
                    var $boxWidth = 350;
                }
                else if($windowWidth >= 337 && $windowWidth < 480) {
                    var $boxWidth = 560;
                }

                var $widthForApply = ($windowWidth - $boxWidth) / 2;
                var $leftContent = $('.in-it-body-left-content');
                var $rightContent = $('.in-it-body-right-content');
                if($windowWidth >= 337 && $windowWidth < 480) {
                    $leftContent.css('display', 'none');
                    $rightContent.css('display', 'none');
                }
                else {
                    $leftContent.width($widthForApply);
                    $rightContent.width($widthForApply);
                    $rightContent.css('max-width', $widthForApply);
                }
            }
        }
        function divSlide () {
            $('.content-wrapper').find('.i-m').click(
                function(e){
                    if($('.content-wrapper').find('.in-it-body.collapse').hasClass('in')) {
                        $('.centrality-service-wrapper').addClass('upper-open');
                        console.log(e);
                        e.stopPropagation();
                        e.preventDefault();

                    }
                    //setTimeout(parentsSiblingSelector, 400);
                    function parentsSiblingSelector(e) {
                        if($('.content-wrapper').find('.in-it-body.collapse').hasClass('in')) {
                            $('.centrality-service-wrapper').addClass('upper-open');
                            console.log(e);
                            e.stopPropagation();

                        }
                        else {
                            $('.centrality-service-wrapper').removeClass('upper-open');
                        }
                    }

                }
            );
        }
        function megamenuRelative() {
            if($('li.dropdown.solution').hasClass('open')) {
                $('.logo-right-wrapper').addClass('staticClass');
                $('.logo-right-wrapper ul.nav li.dropdown.solution .dropdown-menu.solutions').css({'display':'block'});
            }
            else {
                $('.logo-right-wrapper').removeClass('staticClass');
                $('.logo-right-wrapper ul.nav li.dropdown.solution .dropdown-menu.solutions').css({'display':'none'});

            }
        }
        execBrowser();
        divSlide();
        $('body').click(
            function() {
                setTimeout(megamenuRelative, 1);
            }
        );
		
		var imgheight=$('.team-mate').height();
		$('.claimBox').height(imgheight);
		
		$(window).resize(function(){
		var imgheight=$('.team-mate').height();
		$('.claimBox').height(imgheight);
	
});
    }
);


