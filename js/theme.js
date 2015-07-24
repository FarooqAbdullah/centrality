jQuery(document).ready(
    function ($) {
		
		//$(".page-template-home .brand-change").slideDown(10000);
		$(".page-template-home .brand-change").fadeIn();
		
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
                $('.logo-right-wrapper ul.nav li.dropdown.why-centrality .dropdown-menu.why-centrality').css({'display':'none'});
            }
            else if($('li.dropdown.why-centrality').hasClass('open') ){
                $('.logo-right-wrapper').addClass('staticClass');
                $('.logo-right-wrapper ul.nav li.dropdown.why-centrality .dropdown-menu.why-centrality').css({'display':'block'});
                $('.logo-right-wrapper ul.nav li.dropdown.solution .dropdown-menu.solutions').css({'display':'none'});
            }
            else {
                $('.logo-right-wrapper').removeClass('staticClass');
                $('.logo-right-wrapper ul.nav li.dropdown.solution .dropdown-menu.solutions').css({'display':'none'});
                $('.logo-right-wrapper ul.nav li.dropdown.why-centrality .dropdown-menu.why-centrality').css({'display':'none'});

            }
        }
        execBrowser();
        divSlide();
        $('body').click(
            function() {
                //setTimeout(megamenuRelative, 1);
            }
        );
		
		var imgheight=$('.team-mate').height();
		$('.claimBox').height(imgheight);
		
		$(window).resize(function(){
		var imgheight=$('.team-mate').height();
		$('.claimBox').height(imgheight);


	
});
        $(function(){
            var $class, $className;
            $('.dropdown').hover(function() {
                    $class = $(this).context.className;
                    $className = $.trim($class.replace('open', ''));
                    $className = $className.replace(/ /g, '.');
                    if($className == "dropdown"){
                        return  false;
                    }else {
                        $(this).addClass('open');
                        $('.logo-right-wrapper').addClass('staticClass');
                        $($className + ' .dropdown-menu').css({'display':'block','top':'65px'});
                    }
                },
                function() {
                    $class = $(this).context.className;
                    $className = $class.replace(/ /g, '.');
                    if($className == "dropdown.open"){
                        return  false;
                    }else {
                        $(this).removeClass('open');
                        $('.logo-right-wrapper').removeClass('staticClass');
                        $($className + ' .dropdown-menu').css({'display':'none','top':'85px'});
                    }
                });
        });

        $('.page-template-page-whycentrality .wrapper .content-wrapper .header-wrapper .container > a').click(
            function(e) {
                e.preventDefault();
                setTimeout(
                    function(){
                        $('#serviceRequest').addClass('open');
                    },100
                );
            }
        );

        // navigation click actions
        $('.page-template-page-employment .wrapper .content-wrapper .header-wrapper .container > a').on('click', function(event){
            event.preventDefault();
            var sectionID = "jobs";
            scrollToID('#' + sectionID, 1000);
        });
        // scroll function
        function scrollToID(id, speed){

            var offSet = 50;
            var targetOffset = $(id).offset().top - offSet;
            $('html,body').animate({scrollTop:targetOffset}, speed);

        }

    // Click Events Code
	 $(".tophat-wrapper").click(function(){
		 $(".brand-change").fadeIn();
	 });
	 $("#close-brand-change").click(function(){
		 $(".brand-change").fadeOut();
	 });
    }
	
);


