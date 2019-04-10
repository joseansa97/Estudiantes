$(document).ready(function() {

    $('body').addClass('js')

    var $menu = $('#menu'),
        $menulink = $('.menu-link'),
        $links = $('#menu').find('a')

    $menulink.click(function() {
        $menulink.toggleClass('active')
        $menu.toggleClass('active')
        return false
    });

    $links.click(function() {
        $menulink.toggleClass('active')
        $menu.toggleClass('active')
    });

    $('.rslides').responsiveSlides()

});