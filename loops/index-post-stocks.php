<?php
/*
 * The Index Post (or excerpt)
 * ===========================
 * Used by index.php, category.php and author.php
 */
?>
  <article role="article" id="post_<?php the_ID()?>" <?php post_class("border-bottom mb-5 stocksPreviewBlock"); ?> >

  <div class="imgStocksArchive" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
    <div class="wrapperGradientStocks"></div>
      <div class="container StocksArchiveContainer">
        <div class="row">
          <div class="col-12">
            <h1 class="main__title--stocks"><?php the_title()?></h1>
            <p class="main__desc--stocks"><?php the_field('korotkoe_opisanie'); ?></p>
          </div>
          <a class="linkStocksBtn" href="<?php the_permalink(); ?>">
            Подробнее
          </a>
        </div>
      </div>
    </div>









  <!-- <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?> </a>
    <header>
      <a class="linkTitleNews" href="<?php the_permalink(); ?>">
        <h2>
            the_title()
        </h2>
      </a> -->
      <!-- <p class="text-muted">
        <i class="far fa-calendar-alt"></i>&nbsp;<?php b4st_post_date(); ?>&nbsp;|
        <i class="far fa-user"></i>&nbsp; <?php _e('By ', 'b4st'); the_author_posts_link(); ?>&nbsp;|
        <i class="far fa-comment"></i>&nbsp;<a href="<?php comments_link(); ?>"><?php printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), '', 'b4st' ), number_format_i18n( get_comments_number() ) ); ?></a>
      </p> -->
    <!-- </header> -->

    <!-- <section>
    <div class="excerptPostBlock"><?php the_excerpt();?></div>
    <div class="pb-3 infoBottomPost">
      <span class="datePost"><?php echo get_the_date(); ?></span>
      <a class="readMoreLink" href="<?php the_permalink(); ?>">Читать дальше</a>
    </div>
    </section> -->
  </article>
