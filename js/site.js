$(function() {

    var $page = $('#page');

    if($page.hasClass('page-index')) {
        // 首页

        //$('.index-carousel').owlCarousel({
        //    items: 1,
        //    dotsEach:false,
        //    autoplay: true,
        //    autoplayTimeout: 5000,
        //    loop:true
        //});

    } else if($page.hasClass('page-about')) {
        // 关于汇融易

    }

    var $menu_btn = $('.header-button-menu');
    var $menu = $('.menu-mask');
    var $menu_body = $('.menu-mask ul');
    $menu_btn.click(function(){
        $menu.fadeToggle();
    });
    $menu.click(function(){
        $menu.fadeOut();
    });
    $menu_body.click(function () {
        return false;
    });
});