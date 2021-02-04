/* shift + alt + a -> comment out and in */ 

$(function() {

    // ************ NAVBAR ************
     

    var c, currentScrollTop = 0;
    $(window).on('scroll load', function () {

        if ($(window).scrollTop() >= 100) {
            $('.navbar').addClass('active');
        } else {
            $('.navbar').removeClass('active');
        }

        // Navbar functionality
        /* var a = $(window).scrollTop(), b = $('.navbar').height();

        currentScrollTop = a;
        if (c < currentScrollTop && a > b + b) {
            $('.navbar').addClass("scrollUp");
        } else if (c > currentScrollTop && !(a <= b)) {
            $('.navbar').removeClass("scrollUp");
        }
        c = currentScrollTop; */

    });

/*     $('body').scrollspy({
        target: '#navbarSupportedContent',
        offset: 80
    }); */

});