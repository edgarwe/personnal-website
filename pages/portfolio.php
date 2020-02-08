<?php
require_once dirname(__DIR__) . '/require_all.php';

get_block('header');
?>
  <div class="global_container container-fluid h-100 portfolio">
    <div class="row h-100">
      <div class="col-md-2">
        <h2 class="filtres_titre">filtres</h2>
        <div class="filtres">
          <div class="filtre">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
            <h2>Web</h2>
          </div>
          <div class="filtre">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 5.5A3.5 3.5 0 0 1 8.5 2H12v7H8.5A3.5 3.5 0 0 1 5 5.5z"></path><path d="M12 2h3.5a3.5 3.5 0 1 1 0 7H12V2z"></path><path d="M12 12.5a3.5 3.5 0 1 1 7 0 3.5 3.5 0 1 1-7 0z"></path><path d="M5 19.5A3.5 3.5 0 0 1 8.5 16H12v3.5a3.5 3.5 0 1 1-7 0z"></path><path d="M5 12.5A3.5 3.5 0 0 1 8.5 9H12v7H8.5A3.5 3.5 0 0 1 5 12.5z"></path></svg>
            <h2>Design</h2>
          </div>
          <div class="filtre">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
            <h2>Github</h2>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <h1>Différents projets</h1>
        <div class="row">
          <div class="projet col-md-6">
            <div class="img_container">
              <img src="<?php echo get_img('batiment2.jpg') ?>" alt="Batiment 2" class="img-resp">
            </div>
            <div class="text_container">
              <h3>Titre</h3>
            </div>
          </div>
          <div class="projet col-md-6">
            <div class="img_container">
              <img src="<?php echo get_img('batiment2.jpg') ?>" alt="Batiment 2" class="img-resp">
            </div>
            <div class="text_container">
              <h3>Titre</h3>
            </div>
          </div>
          <div class="projet col-md-6">
            <div class="img_container">
              <img src="<?php echo get_img('batiment2.jpg') ?>" alt="Batiment 2" class="img-resp">
            </div>
            <div class="text_container">
              <h3>Titre</h3>
            </div>
          </div>
          <div class="projet col-md-6">
            <div class="img_container">
              <img src="<?php echo get_img('batiment2.jpg') ?>" alt="Batiment 2" class="img-resp">
            </div>
            <div class="text_container">
              <h3>Titre</h3>
            </div>
          </div>
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