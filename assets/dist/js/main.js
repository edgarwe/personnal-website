$(document).ready(function(){
    $(".animsition-overlay").animsition({
        inClass: 'overlay-slide-in-right',
        outClass: 'overlay-slide-out-right',
        inDuration: 1000,
        outDuration: 1000,
        linkElement: 'a',
        loading: true,
        loadingParentElement: 'body',
        loadingClass: 'animsition-loading',
        loadingInner: '<svg width="75" viewBox="0 0 190 190" xmlns="http://www.w3.org/2000/svg"><circle cx="95" cy="95" fill="#333" r="95"/><text fill="#fff" font-family="MonotypeCorsiva, Monotype Corsiva" font-size="100" transform="translate(30.74 119.49)">EP</text></svg>',
        onLoadEvent: true,
        browser: [ 'animation-duration', '-webkit-animation-duration'],
        transition: function(url){ window.location.href = url; }
    });

    $('[data-toggle=offcanvas] img').click(function() {
        $('.offcanvas').toggleClass('active');
    });
})
