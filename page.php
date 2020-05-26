<?php
  get_header(); 
  b4st_main_before();
?>

<?php /* if (function_exists('dimox_breadcrumbs')) { ?>
  <?php dimox_breadcrumbs(); ?>
<?php } */ ?>

<main id="site-main">

  <?php get_template_part('loops/page-content'); ?>

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
          <?php get_template_part('loops/page-content'); ?>
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

  if(is_active_sidebar('main-widget-area')): ?>
  <section id="site-main-widgets" class="bg-light">
    <div class="container">
      <div class="row pt-5 pb-4" id="main-widget-area" role="navigation">
        <?php
          b4st_main_widgets_before();
          dynamic_sidebar('main-widget-area');
          b4st_main_widgets_after();
        ?>
      </div>
    </div>
  </section>
  <?php endif;
  
  get_footer(); 
?>
