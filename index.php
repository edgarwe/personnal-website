<?php
require_once dirname(__FILE__) . '/require_all.php';

get_block('header');
?>
<div class="container-fluid home">
    <div class="row">
        <div class="col-md-4 col-12 home-left">
            <h1 class="h6">Pellissier Edgar</h1>
            <div class="middle">
                <div class="slider" data-slider="titre">
                    <h1 class="main-title">Jumehira Villa</h1>
                    <h1 class="main-title">Jumehira Villa 2</h1>
                    <h1 class="main-title">Jumehira Villa 3</h1>
                </div>
                <div class="prev-next">
                </div>
            </div>
            <div class="paged">
                <h2> / <span class="count">2</span></h2>
            </div>
        </div>
        <div class="col-md-7 col-12">
        <div class="image-container">
            <div class="slider" data-slider="image">
                <img src="<?php echo get_img('batiment1.jpg') ?>" lazyload="lazy" alt="image home" class="img-resp home-img">
                <img src="<?php echo get_img('batiment1.jpg') ?>" lazyload="lazy" alt="image home" class="img-resp home-img">
                <img src="<?php echo get_img('batiment1.jpg') ?>" lazyload="lazy" alt="image home" class="img-resp home-img">
            </div>
            <div class="bg-white details"><p>Details <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M3 11.5C3 11.2239 3.22386 11 3.5 11L19.5 11C19.7761 11 20 11.2239 20 11.5C20 11.7761 19.7761 12 19.5 12L3.5 12C3.22386 12 3 11.7761 3 11.5Z" fill="#333333"/><path fill-rule="evenodd" clip-rule="evenodd" d="M15.6464 7.64645C15.8417 7.45118 16.1583 7.45118 16.3536 7.64645L20.2071 11.5L16.3536 15.3536C16.1583 15.5488 15.8417 15.5488 15.6464 15.3536C15.4512 15.1583 15.4512 14.8417 15.6464 14.6464L18.7929 11.5L15.6464 8.35355C15.4512 8.15829 15.4512 7.84171 15.6464 7.64645Z" fill="#333333"/></svg></p></div>
        </div>
        </div>
            
        <header class="header col-md-1 col-12">
            <?php get_block('nav'); ?>
        </header>
    </div>
</div>
<?php
get_block('footer');
?>
<script>
$(document).ready(function(){
  $('[data-slider=image]').slick({
    arrows: true,
    appendArrows: $('.prev-next'),
    prevArrow: '<div class="prev">Prev</div>',
    nextArrow: '<div class="next">Next</div>',
    dots: true,
    appendDots: $('.paged h2'),
    autoplay: true,
    autoplaySpeed: 3500,
    asNavFor: '[data-slider=titre]'
  });
  $('[data-slider=titre]').slick({
    arrows: false,
    asNavFor: '[data-slider=image]'
  });
  $('.count').replaceWith( $('.paged .slick-dots li').length );
});
</script>