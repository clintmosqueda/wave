<?php
/**
 * The header for our theme.
 *
 * @see https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title>Wave</title>
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1" id="js-viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta property="og:image" content="<?php echo resolve_asset_url('/images/ogp.jpeg'); ?>"/>
  <meta name="description" content="Wave">
  <meta property="og:description" content="Wave">
  <?php import_part('favicon'); ?>    

  <link rel="stylesheet" href="<?php echo resolve_asset_url('/css/app.css'); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>> 

<input id="base-url" type="hidden" value="<?php echo resolve_url(); ?>" /> 
<div class="wrap js-wrap">   
  <header class="header <?php echo is_front_page() ? 'is-top' : '' ?>"> 
    <div class="header-inner">
      <div class="header-right">
        <?php if(is_front_page()) :?>
          <div class="header-sun">
            <?php import_part('sun');?>
          </div>
          <a class="header-logo" href="<?php echo resolve_url(); ?>">
            <img src="<?php echo resolve_asset_url('/images/logo-top.svg'); ?>" alt="">
          </a>
        <?php else: ?>
          <a class="header-logo" href="<?php echo resolve_url(); ?>">
            <img src="<?php echo resolve_asset_url('/images/logo-other-pages.png'); ?>" alt="">
          </a>
        <?php endif; ?>
      </div>
      <?php import_part('menu'); ?>
      <?php import_part('nav'); ?>
    </div>
  </header>