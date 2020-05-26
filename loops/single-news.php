<?php
/*
 * The Single Post news
 */
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
    <header class="container entry-header mb-5">

    <div class="imgPostSingle" style="background-image: url(<?php echo get_the_post_thumbnail_url( $id, 'full' );?>)">
    <div class="wrapperGradient"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="singleDescStocks">НОВОСТИ</h2>
            <h1 class="main__title text-center"><?php the_title()?></h1>
          </div>
        </div>
      </div>
    </div>

    </header>
    <section class="entry-content PostSingleContent">
      <?php
        the_content();
      ?>
    </section>

    <?php wp_link_pages(); ?>

    <footer class="container">

      <div class="row mt-5 border-top pt-3 pb-5">
        <div class="col">
          <?php previous_post_link('%link', '<i class="fas fa-fw fa-angle-left"></i>Предыдущая новость: '.'%title'); ?>
        </div>
        <div class="col text-right">
          <?php next_post_link('%link', 'Следующая новость: '.'%title'.'<i class="fas fa-fw fa-angle-right"></i>'); ?>
        </div>
      </div>
    </footer>
  </article>

  <?php
  endwhile; else :
    get_template_part('loops/404');
  endif;
?>