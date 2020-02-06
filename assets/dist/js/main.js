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
        loadingInner: '',
        timeout: false,
        timeoutCountdown: 1000,
        onLoadEvent: true,
        browser: [ 'animation-duration', '-webkit-animation-duration'],
        overlay : false,
        overlayClass : 'animsition-overlay-slide',
        overlayParentElement : 'body',
        transition: function(url){ window.location.href = url; }
    });

    $('[data-toggle=offcanvas] img').click(function() {
        $('.offcanvas').toggleClass('active');
    });
})
