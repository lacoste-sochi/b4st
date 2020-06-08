<?php
    /*
    Template Name: Контакты
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
          <h1 class="title">Контакты</h1>
        </div>
      </div>
      <div class="row sectionsContactsPageBlockContacts">
        <div class="col-12 col-md-4 mt-3 mt-md-0">
          <div class="blockContacts">
            <p class="titleDescContacts"><img class="mr-2" src="<?= get_template_directory_uri(); ?>/theme/img/icon__gps.svg" alt="иконка местонахождения">Адрес</p>
            <a class="infoContacts" href="<?php the_field('mestonahozhdenie', 5); ?>"><?php the_field('mestonahozhdenie', 5); ?></a>
          </div>
        </div>
        <div class="col-12 col-md-4 mt-3 mt-md-0">
          <div class="blockContacts">
            <p class="titleDescContacts"><img class="mr-2" src="<?= get_template_directory_uri(); ?>/theme/img/icon__phone.svg" alt="иконка телефона">Номер телефона</p>
            <a class="infoContacts" href="tel:<?php the_field('nomer_telefona', 5); ?>"><?php the_field('nomer_telefona', 5); ?></a>
          </div>
        </div>
        <div class="col-12 col-md-4 mt-3 mt-md-0">
          <div class="blockContacts">
            <p class="titleDescContacts"><img class="mr-2" src="<?= get_template_directory_uri(); ?>/theme/img/icon__mail.svg" alt="иконка email">Email</p>
            <a class="infoContacts" href="mailto:<?php the_field('email', 5); ?>"><?php the_field('email', 5); ?></a>
          </div>
        </div>
      </div>
    </div>
    <div class="blockMaps">
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad94ca16ec3eabca76f42ec3fc9fb0dd5d940532817599fb25ff26682b44a65f3&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
    </div>
    <div class="container advantagesContactsPage">
      <div class="row">
      <?php
// проверяем есть ли в повторителе данные
if( have_rows('preimushhestva_nizhe_karty') ):
 	// перебираем данные
    while ( have_rows('preimushhestva_nizhe_karty') ) : the_row();
    // переменные
		$icon = get_sub_field('ikonka');
		$preimushhestvo = get_sub_field('preimushhestvo');
    $doptekst = get_sub_field('doptekst');
?>
  <div class="col-12 col-md-4 mt-5 mt-md-0 d-inline">
    <img class="icon__blockContacts" src="<?= $icon ?>" alt="Иконка преимуществ">
    <span class="advantages__blockContacts"><?= $preimushhestvo ?></span>
    <span class="advantages__blockContacts2"><?= $doptekst ?></span>
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

</main>

<?php 
  b4st_main_after();

  get_footer(); 
?>
