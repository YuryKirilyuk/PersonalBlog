<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Peronal_Blog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,900|Open+Sans:400,600,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/style.css" />

</head>

<body <?php body_class('loaded'); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'peronal-blog' ); ?></a>

    <header class="site-header">
        <div class="wrapper">
            <a class="logo" href="/">
                <svg class="">
                    <use xlink:href="<?php bloginfo('stylesheet_directory');?>/assets/img/sprites.svg#logo"></use>
                </svg>
            </a>

            <div class="header-right">

                <div class="mobile-menu-toggle">
                    <div class="dash"></div>
                </div>

                <div class="menu-wrapper">
                    <?php
                    wp_nav_menu(array(
                        'theme_location'  => 'primary',
                        'container'       => 'nav',
                        'container_class' => 'menu-container',
                        'menu_class'      => 'menu'
                    ));
                    ?>

                    <div class="socials">
                        <a href="facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
                        <a href="linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
                    </div>
                    <div class="lang">
                        <form>
                            <select>
                                <option>En</option>
                                <option>Ru</option>
                            </select>
                        </form>
                    </div>
                </div><!-- //.menu-container -->
            </div><!-- //.header-right -->

        </div>
    </header>


    <main class="content">