$(document).ready(() => {
    // On Click Mobile Burger Menu Add Active To Mobile Header
    $('header nav.mobile #mobile-burger-menu').click(e => {
        $('nav.mobile').addClass('active');
    })

    $('header nav.mobile #mobile-close-menu').click(e => {
        $('nav.mobile').removeClass('active');
    })
})
