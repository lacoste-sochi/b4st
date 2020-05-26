<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php b4st_navbar_before();?>

<nav class="header__nav">
  <div class="container h-100">
    <div class="row align-items-center h-100 px-2 px-md-0">
      <div class="col-9 col-md-4 order-2 order-md-1 d-flex align-center">
        <img src="<?= get_template_directory_uri(); ?>/theme/img/phone.svg" alt="иконка телефона"><a class="header__phone" href="tel:<?php the_field('nomer_telefona', 5); ?>"><?php the_field('nomer_telefona', 5); ?></a>
      </div>
      <div class="col-12 col-md-4 order-1 order-md-2 text-center">

      <a class="logo" href="/">
        <?php if( get_field('logotipNoWhite', 5) ): ?>
          <img src="<?php the_field('logotipNoWhite', 5); ?>" />
        <?php endif; ?>
      </a>
         <!-- b4st_navbar_brand()  -->
      <a class="logo2" href="/">
        <?php if( get_field('logotipWhite', 5) ): ?>
          <img src="<?php the_field('logotipWhite', 5); ?>" />
        <?php endif; ?>
      </a>

      </div>
      <div class="col-3 col-md-4 order-3 order-md-3 text-right">
        <?php
          wp_nav_menu( array(
            'theme_location'  => 'navbar',
            'container'       => false,
            'menu_class'      => '',
            'fallback_cb'     => '__return_false',
            'items_wrap'      => '<ul id="%1$s" class="cd-primary-nav %2$s">%3$s</ul>',
            'depth'           => 2,
            'walker'          => new b4st_walker_nav_menu()
          ) );
        ?>

	      <div class="cd-overlay-nav">
	      	<span></span>
	      </div> <!-- cd-overlay-nav -->
          
	      <div class="cd-overlay-content">
	      	<span></span>
	      </div> <!-- cd-overlay-content -->
          
	      <a href="#0" class="cd-nav-trigger">Меню<span class="cd-icon"></span></a>
      </div>
    </div>

  </div>
</nav>
<?php b4st_navbar_after();?>