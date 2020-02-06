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
        loadingInner: '<img width="100" src="/assets/dist/images/logo.png" class="img-resp h-auto" alt="Mon superbe logo">',
        onLoadEvent: true,
        browser: [ 'animation-duration', '-webkit-animation-duration'],
        transition: function(url){ window.location.href = url; }
    });

    $('[data-toggle=offcanvas] img').click(function() {
        $('.offcanvas').toggleClass('active');
    });
})
