<?php
    /*
    Template Name: Наши номера
    */
?>

<?php
  get_header(); 
  b4st_main_before();
?>

<?php /* if (function_exists('dimox_breadcrumbs')) { ?>
  <?php dimox_breadcrumbs(); ?>
<?php } */ ?>

<main>

  <section class="sectionsContactsPage" id="sectionsContactsPage">
    <div class="container">
      <div class="row">
        <div class="offset-2 col-10 sectionsClassAuto">
          <h1 class="title">Наши номера</h1>
        </div>

        <?php
// check if the repeater field has rows of data
if( have_rows('nomera') ):
// loop through the rows of data
    while ( have_rows('nomera') ) : the_row(); ?>
    <div class="col-12 col-md-6 mt-3 mt-md-0">
    <div class="sliderRooms">
      <?php 
      $images = get_sub_field('fotografii_nomera');
      $medium = 'medium'; // (thumbnail, medium, large, full or custom size)
      $full = 'full'; // (thumbnail, medium, large, full or custom size)

      // echo '<pre>';
      // var_dump($images);
      // echo '</pre>';
      
      if( $images ): ?>
        <?php foreach( $images as $image_id ): 
          // echo '<pre>';
          // var_dump($image_id);
          // echo '</pre>'; ?>
              <a href="<?= $image_id["url"] ?> ">
                <img class="sliderRooms__slide" src="<?=$image_id["sizes"]["medium"]?>" alt="<?= $image_id["name"] ?>">
              </a>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>

    <p class="roomTitle"><?php the_sub_field('nazvanie_nomera'); ?></p>
    <p class="roomDesc"><?php the_sub_field('opisanie_nomera'); ?></p>
    <a href="#test-popup" class="open-popup-link mx-auto mx-md-0">ЗАБРОНИРОВАТЬ</a>
      
    </div>
<?php
    endwhile;
else :
    // no rows found
endif;
?>
      </div>

    </div>
  </section>

  <div id="test-popup" class="white-popup mfp-hide">
        <?php echo do_shortcode( '[contact-form-7 id="200" title="Форма бронирования"]' ); ?>
  </div>
</main>

<?php 
  b4st_main_after();

  get_footer(); 
?>
