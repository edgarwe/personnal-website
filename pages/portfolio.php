<?php
require_once dirname(__DIR__) . '/require_all.php';

get_block('header');
?>
<div class="animsition-overlay" data-animsition-overlay="true">
  <div class="container-fluid h-100" data-animsition-overlay="true">
      <div class="row h-100">
          <div class="col-md-2">
            <h2>filtres</h2>
          </div>
          <div class="col-md-9">
            <h1>Différents projets</h1>
          </div>
          <header class="header col-md-1 col-12">
              <?php get_block('nav'); ?>
          </header>
      </div>
  </div>
</div>
<?php
get_block('footer');
?>
<script>
$(document).ready(function() {
  $(".animsition-overlay").animsition({
    inClass: 'overlay-slide-in-right',
    outClass: 'overlay-slide-out-right',
    inDuration: 2500,
    outDuration: 2000,
    linkElement: '.animsition-link',
    // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
    loading: true,
    loadingParentElement: 'body', //animsition wrapper element
    loadingClass: 'animsition-loading',
    loadingInner: '', // e.g '<img src="loading.svg" />'
    timeout: false,
    timeoutCountdown: 1000,
    onLoadEvent: true,
    browser: [ 'animation-duration', '-webkit-animation-duration'],
    overlay : false,
    overlayClass : 'animsition-overlay-slide',
    overlayParentElement : 'body',
    transition: function(url){ window.location.href = url; }
  });
});
</script>