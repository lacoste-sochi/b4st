<?php
    /*
    Template Name: Главная страница
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

<section class="sliderSection-1">
<?php
// проверяем есть ли в повторителе данные
if( have_rows('section1') ):
   // перебираем данные
    while ( have_rows('section1') ) : the_row();
    // переменные
		$image = get_sub_field('photo_slide');
		$zagolovok = get_sub_field('zagolovok');
    $podzagolovok = get_sub_field('podzagolovok');
    $inc++;
?>
    <div class="FullSlide" style="background-image: url(<?= $image ?>)">
    <div class="wrapperGradient"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <?php if ($inc == 1) : ?>
              <h1 class="main__title"><?= $zagolovok ?></h1>
            <?php else: ?>
              <h2 class="main__title"><?= $zagolovok ?></h2>
            <?php endif; ?>
              <span class="main__title--desc"><?= $podzagolovok ?></span>
          </div>
          <div class="col-12" id="WidGetHotel"></div>
        </div>
      </div>
    </div>
<?php
    endwhile;
else :
    // no rows found
endif;
?>
</section>

  <section class="section__advantages" id="section__advantages">
    <img src="<?= get_template_directory_uri() ?>/theme/img/advantages__background.png" class="section__advantages--elBackground">
    <div class="container">
      <div class="row">
        <div class="offset-2 col-10">
          <h2 class="title">Наши преимущества</h2>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-12 col-lg-5">
<?php
// проверяем есть ли в повторителе данные
if( have_rows('sleva_ikonki_opisanie') ):
 	// перебираем данные
    while ( have_rows('sleva_ikonki_opisanie') ) : the_row();
    // переменные
		$icon = get_sub_field('ikonka');
		$zagolovok = get_sub_field('zagolovok');
    $opisanie = get_sub_field('opisanie');
?>
<div class="row advantagesBlock">
  <div class="col-3">
    <img src="<?= $icon ?>" alt="Иконка преимуществ">
  </div>
  <div class="col-9">
    <h3 class="advantagesSubtitle"><?= $zagolovok ?></h3>
    <p class="advantagesSub"><?= $opisanie ?></p>
  </div>
</div>
<?php
    endwhile;
else :
    // no rows found
endif;
?>

        </div>
        <div class="col-md-12 col-lg-5">
<?php
// проверяем есть ли в повторителе данные
if( have_rows('sprava_ikonki_opisanie') ):
 	// перебираем данные
    while ( have_rows('sprava_ikonki_opisanie') ) : the_row();
    // переменные
		$icon = get_sub_field('ikonka');
		$zagolovok = get_sub_field('zagolovok');
    $opisanie = get_sub_field('opisanie');
?>
<div class="row advantagesBlock">
  <div class="col-3">
    <img src="<?= $icon ?>" alt="Иконка преимуществ">
  </div>
  <div class="col-9">
    <h3 class="advantagesSubtitle"><?= $zagolovok ?></h3>
    <p class="advantagesSub"><?= $opisanie ?></p>
  </div>
</div>
<?php
    endwhile;
else :
    // no rows found
endif;
?>
        </div>
        <div class="col-2 d-none">
        </div>
    </div>
  </section>

  <section class="section_about_us" id="section_about_us">
    <div class="container">
      <div class="row">
        <div class="offset-2 col-10">
          <h2 class="title">О нас</h2>
        </div>
        <div class="col-12 about_us--desc">
        <?php the_field('opisanie_about_us'); ?>
        </div>
      </div>
    </div>
  </section>

  <section class="section__gallery" id="section__gallery">
    <div class="container">
      <div class="row">
        <div class="offset-2 col-10">
          <h2 class="title">Фотогалерея</h2>
        </div>
        <div class="row photoBlock">
<?php 
$images = get_field('fotografii');
if( $images ): ?>
        <?php foreach( $images as $key => $image ) {
        if ($key <= 5) : ?>
          <div class="col-12 col-md-6">
            <a href="<?php echo esc_url($image['url']); ?>">
                       <img class="photoSlider" src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                  </a>
                  <p><?php echo esc_html($image['caption']); ?></p>
          </div>
        <?php else : ?>
          <a class="d-none" href="<?php echo esc_url($image['url']); ?>"></a>
        <?php 
        endif;
        }
        ?>
<?php endif; ?>
        </div>
        <div class="col-12">
          <span class="galleryShow mx-auto">Посмотреть еще</span>
        </div>
      </div>
    </div>
  </section>

  <section class="section__reviews" id="section__reviews">
    <div class="container h-100">
      <div class="row">
        <div class="offset-2 col-10">
          <h2 class="title">Отзывы</h2>
        </div>
          <div class="col-12 col-md-6 mx-auto reviewsSlider">
            <?php
            // Выводим из таблицы отзывы с букинга
            $reviews = $wpdb->get_results( "SELECT * FROM assessments");

            // Для теста
            // echo '<pre>';
            // var_dump($reviews);
            // echo '</pre>';

            foreach ($reviews as $value) {
              echo "<div class='reviewsBlock'>
              <p class='reviews__name'>" .
              $value->name .
              "</p><p class='reviews__comment'>" .
               $value->comment .
              "</p></div>";
            };

            ?>
          </div>
      </div>
    </div>
  </section>

</main>

<?php 
  b4st_main_after();

  get_footer(); 
?>
