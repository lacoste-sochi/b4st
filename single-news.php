<?php
  get_header();
  b4st_main_before();
?>

<main id="site-main" class="mainNewsPage">

  <!-- if (function_exists('dimox_breadcrumbs')) {
   dimox_breadcrumbs();
php } -->



  <?php get_template_part('loops/single-news', get_post_format()); ?>

  <?php
  /*
  Did you want a traditional article-plus-sidebar layout?
  =======================================================
  Use this below instead of the one line above -- and 
  remove some of the CSS styles controlling `.entry-content`
  
  <div class="container">
    <div class="row"> 
      <div class="col-sm">
        <div id="content" role="main">
          <?php get_template_part('loops/single-post', get_post_format()); ?>
        </div>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
  */
  ?>

</main>

<?php
    b4st_main_after();
    get_footer();
?>
