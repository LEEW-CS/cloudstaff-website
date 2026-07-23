<?php
/**
 * Site header — generated from src/header.html by build.py.
 *
 * @package Cloudstaff
 */
?><!doctype html>
<html <?php language_attributes(); ?> data-theme="light">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#main-content">Skip to content</a>
<header class="topbar topbar-website">
  <div class="topbar-logo">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Cloudstaff — home">
      <svg class="brand-logo logo-size-header" role="img" aria-label="Cloudstaff"><use href="#sym-logo-landscape"></use></svg>
    </a>
  </div>
  <nav class="topbar-nav" aria-label="Main navigation">
    <a href="<?php echo esc_url( home_url( '/what-is-remote-staffing/' ) ); ?>" <?php if ( is_page( 'what-is-remote-staffing' ) ) echo 'aria-current="page"'; ?>>What Is Remote Staffing?</a>
    <a href="<?php echo esc_url( home_url( '/how-it-works/' ) ); ?>" <?php if ( is_page( 'how-it-works' ) ) echo 'aria-current="page"'; ?>>How It Works</a>
    <a href="<?php echo esc_url( home_url( '/pricing/' ) ); ?>" <?php if ( is_page( 'pricing' ) ) echo 'aria-current="page"'; ?>>Pricing &amp; Savings</a>
    <a href="<?php echo esc_url( home_url( '/roles/' ) ); ?>" <?php if ( is_page( 'roles' ) ) echo 'aria-current="page"'; ?>>Roles &amp; Industries</a>
    <a href="<?php echo esc_url( home_url( '/security/' ) ); ?>" <?php if ( is_page( 'security' ) ) echo 'aria-current="page"'; ?>>Security</a>
    <a href="<?php echo esc_url( home_url( '/why-cloudstaff/' ) ); ?>" <?php if ( is_page( 'why-cloudstaff' ) ) echo 'aria-current="page"'; ?>>Why Cloudstaff</a>
    <a href="<?php echo esc_url( home_url( '/cfo-guide/' ) ); ?>" <?php if ( is_page( 'cfo-guide' ) ) echo 'aria-current="page"'; ?>>CFO Guide</a>
  </nav>
  <div class="topbar-auth">
    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="button">Talk to an Expert</a>
  </div>
</header>
