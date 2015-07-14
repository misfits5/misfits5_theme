<!DOCTYPE html>
<html lang="ja" dir="ltr">

<head>

<title>
<?php if ( is_home() || is_front_page() ) : ?>
<?php bloginfo('name'); ?>
<?php else : ?>
<?php the_title(); ?>
|
<?php bloginfo('name'); ?>
<?php endif; ?>
</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSS -->
<link href="<?php bloginfo('template_url'); ?>/css/materialize.min.css"  rel="stylesheet" >
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

<!--googlefont-->

<!-- font awesome -->
<link href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css"  rel="stylesheet">

<!-- favicon -->
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">

<!-- JS -->
<script src="<?php bloginfo('template_url'); ?>/js/materialize.min.js"></script>

<!-- wp_head -->
<?php wp_head()?>
</head>

<body class="yellow lighten-5">
<header>
  <nav class="blue darken-1">
    <div class="nav-wrapper container"> <a href="#" class="brand-logo"><img src="<?php bloginfo('template_url'); ?>/img/logo.jpg
      " width="100" height="60"></a>

      <!-- スマホメニュー -->
      <ul id="slide-out" class="side-nav">
        <li><a href="#!">First Sidebar Link</a></li>
        <li><a href="#!">Second Sidebar Link</a></li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li> <a class="collapsible-header">Dropdown<i class="mdi-navigation-arrow-drop-down"></i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="#!">First</a></li>
                  <li><a href="#!">Second</a></li>
                  <li><a href="#!">Third</a></li>
                  <li><a href="#!">Fourth</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
      </ul>

      <!-- デスクトップメニュー -->
      <ul class="right hide-on-med-and-down">
        <li><a href="#!">First Sidebar Link</a></li>
        <li><a href="#!">Second Sidebar Link</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
        <ul id='dropdown1' class='dropdown-content'>
          <li><a href="#!">First</a></li>
          <li><a href="#!">Second</a></li>
          <li><a href="#!">Third</a></li>
          <li><a href="#!">Fourth</a></li>
        </ul>
      </ul>
      <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a> </div>
  </nav>
</header>
