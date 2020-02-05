<?php
require_once dirname(__DIR__) . '/require_all.php';

get_block('header');
?>
<div class="container-fluid"></div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-9"></div>
        <header class="header col-md-1 col-12">
            <?php get_block('nav'); ?>
        </header>
    </div>
</div>
<?php
get_block('footer');
?>