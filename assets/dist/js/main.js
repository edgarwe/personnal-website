function animOnLoad(){
    if (!window.AnimationEvent) { return; } //for IE
    var anim = document.getElementById('loadAnim');
    anim.classList.add('overlay-slide-in-right');
    anim.addEventListener("webkitAnimationEnd", animationEnd);
    anim.addEventListener("animationend", animationEnd);
}
animOnLoad();
function animationEnd(){
    //document.getElementById('loadAnim').outerHTML = "";
    var anim = document.getElementById('loadAnim');
    anim.classList.add('d-none');
    anim.classList.remove('overlay-slide-in-right');
    anim.removeEventListener('animationend', animationEnd);
}
document.addEventListener('DOMContentLoaded', function() {
    if (!window.AnimationEvent) { return; }
    var anchors = document.getElementsByTagName('a');
    for (var idx=0; idx<anchors.length; idx+=1) {
        /*
        Remove animation if link is to another website
        if (anchors[idx].hostname !== window.location.hostname ||
            anchors[idx].pathname === window.location.pathname) {
            continue;
        }
        */
        anchors[idx].addEventListener('click', function(event) {
            var anim = document.getElementById('loadAnim'),
                anchor = event.currentTarget;
            var listener = function() {
                window.location = anchor.href;
                anim.removeEventListener('animationend', listener);
            };
            anim.addEventListener('animationend', listener);
            event.preventDefault();
            anim.classList.remove('d-none');
            anim.classList.add('overlay-slide-out-right');
        });
    }
});
window.addEventListener('pageshow', function (event) {
    if (!event.persisted) {
        return;
    }

    var anim = document.getElementById('loadAnim');
    anim.classList.remove('fade-in');
});

$(document).ready(function(){
    /* $(".animsition-overlay").animsition({
     inClass: 'overlay-slide-in-right',
     outClass: 'overlay-slide-out-right',
     inDuration: 1000,
     outDuration: 1000,
     linkElement: '.animsition-link',
     loading: true,
     loadingParentElement: 'body',
     loadingClass: 'animsition-loading',
     loadingInner: '<svg width="75" viewBox="0 0 190 190" xmlns="http://www.w3.org/2000/svg"><circle cx="95" cy="95" fill="#333" r="95"/><text fill="#fff" font-family="MonotypeCorsiva, Monotype Corsiva" font-size="100" transform="translate(30.74 119.49)">EP</text></svg>',
     onLoadEvent: true,
     browser: [ 'animation-duration', '-webkit-animation-duration'],
     transition: function(url){ window.location.href = url; }
 })*/

    $('[data-toggle=offcanvas] img').click(function() {
        $('.offcanvas').toggleClass('active');
    })
})