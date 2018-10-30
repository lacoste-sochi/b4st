<?php
    b4st_action_header_before();
    get_header(); 
    b4st_action_header_after();
    b4st_action_main_before();
?>

<main class="container mt-5">
  <div class="row">

    <div class="col-sm">
      <div id="content" role="main">
        <?php get_template_part('loops/single-post', get_post_format()); ?>
      </div><!-- /#content -->
    </div>

    <?php get_sidebar(); ?>

  </div><!-- /.row -->
</main><!-- /.container -->

<?php 
    b4st_action_main_after();
    b4st_action_footer_before();
    get_footer(); 
    b4st_action_footer_after();
?>
