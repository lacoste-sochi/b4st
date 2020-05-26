<?php
    /*
    Template Name: Трансфер
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
        <div class="offset-2 col-10">
          <h1 class="title">Трансфер</h1>
        </div>
      </div>
      <div class="row sectionsContactsPageBlockContacts">
<?php
// check if the repeater field has rows of data
if( have_rows('marshruty') ):
// loop through the rows of data
    while ( have_rows('marshruty') ) : the_row(); ?>
    <div class="col-12">
      <div class="imgStocksArchive" style="background-image: url(<?php the_sub_field('fonovaya_kartinka'); ?>)">
      <div class="wrapperGradientTransfer"></div>
        <div class="transferBlock">
          <div class="transferBlockDesc">
              <span class="transferInfo"><?php the_sub_field('ot_kuda'); ?>
              <img src="<?= get_template_directory_uri() ?>/theme/img/Arrow.png" class="mx-3">
              <?php the_sub_field('kuda'); ?></span>
              <div>
<?php
// check if the repeater field has rows of data
if( have_rows('klass_avto_tarif_i_czeny') ):

// loop through the rows of data
    while ( have_rows('klass_avto_tarif_i_czeny') ) : the_row(); ?>
  <div class="d-inline-block mt-3 mr-5">
    <p class="tarifName"><?php the_sub_field('tarif_klass_avto'); ?></p>
    <p class="tarifPrice"><?php the_sub_field('czena'); ?>₽</p>
  </div>

<?php
    endwhile;
else :
    // no rows found
endif;
?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    endwhile;
else :
    // no rows found
endif;
?>
      </div>
      <div class="row">
        <div class="offset-2 col-10">
          <h2 class="title">Класс авто</h2>
        </div>
      </div>
    </div>
  </section>

</main>

<?php 
  b4st_main_after();

  get_footer(); 
?>
