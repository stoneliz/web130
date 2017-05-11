$(document).ready(function() {
    $('.mobile-only').click(function() {
        $('#nav').toggleClass('expand')
        $('.mobile-only').toggleClass('x')
    });
    
    $('.products').click(function() {
        $('#subnav').toggleClass('expandSubNav');
        $('.products').toggleClass('active');
    });
})