<?php
  get_header(); 
  b4st_main_before();
?>

<main id="site-main" class="section_news">

    <div class="container">
      <div class="row">
        <div class="offset-2 col-10">
          <h2 class="title">Акции</h2>
        </div>
      </div>
      <div class="row mt-5">
        <?php get_template_part('loops/index-loop-stocks'); ?>
      </div>
    </div>

</main>
<?php 
  b4st_main_after();
  get_footer(); 
?>
