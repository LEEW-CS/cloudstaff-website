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
<header class="site-header">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-header-brand" aria-label="Cloudstaff — home"><span class="site-logo"><svg class="site-logo-cloud" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false"><path d="M7.2 18.5a4.7 4.7 0 0 1-.6-9.36 6.2 6.2 0 0 1 11.9 1.6A4.15 4.15 0 0 1 17.9 18.5z"/></svg><span class="site-logo-word">cloudstaff<sup>&reg;</sup></span></span></a>
  <nav class="site-nav" aria-label="Main navigation">
    <a href="<?php echo esc_url( home_url( '/what-is-remote-staffing/' ) ); ?>" <?php if ( is_page( 'what-is-remote-staffing' ) ) echo 'aria-current="page"'; ?>>What Is Remote Staffing?</a>
    <a href="<?php echo esc_url( home_url( '/how-it-works/' ) ); ?>" <?php if ( is_page( 'how-it-works' ) ) echo 'aria-current="page"'; ?>>How It Works</a>
    <a href="<?php echo esc_url( home_url( '/pricing/' ) ); ?>" <?php if ( is_page( 'pricing' ) ) echo 'aria-current="page"'; ?>>Pricing &amp; Savings</a>
    <a href="<?php echo esc_url( home_url( '/roles/' ) ); ?>" <?php if ( is_page( 'roles' ) ) echo 'aria-current="page"'; ?>>Roles &amp; Industries</a>
    <a href="<?php echo esc_url( home_url( '/security/' ) ); ?>" <?php if ( is_page( 'security' ) ) echo 'aria-current="page"'; ?>>Security</a>
    <a href="<?php echo esc_url( home_url( '/why-cloudstaff/' ) ); ?>" <?php if ( is_page( 'why-cloudstaff' ) ) echo 'aria-current="page"'; ?>>Why Cloudstaff</a>
    <a href="<?php echo esc_url( home_url( '/cfo-guide/' ) ); ?>" <?php if ( is_page( 'cfo-guide' ) ) echo 'aria-current="page"'; ?>>CFO Guide</a>
  </nav>
  <div class="site-header-cta">
    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="button">Talk to an Expert</a>
  </div>
</header>
