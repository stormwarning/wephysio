<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Wellness
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
    
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" role="home"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-wephysio@2x.png" alt="WePhysio Performance & Wellness" width="267" height="117"></a>
        
        <nav class="nav__wrapper">
            <div class="grid">
                <div class="grid__item  ten-twelfths">
                
                    <ul class="nav  nav--main">
                        <li><a href="/">&nbsp;</a></li>
                        <li><a href="/wellness/">Wellness</a></li>
                        <li><a href="/performance/">Performance</a></li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Patient Resources</a>
                            <ul class="nav  nav--stacked  nav--dropdown">
                                <li><a href="/patient-resources/book-an-appointment/">Book an Appointment</a></li>
                                <li><a href="/patient-resources/payment-coverage/">Payment Coverage</a></li>
                                <li><a href="/patient-resources/physiotherapy-costs/">Physiotherapy Costs</a></li>
                                <li><a href="/patient-resources/cancellation-policy/">Cancellation Policy</a></li>
                            </ul>
                        </li>
                        <li><a href="/the-team/">The Team</a></li>
<!--                         <li><a href="blog/">Blog</a></li> -->
                    </ul>
                    
                </div>
            </div>
        </nav>
    
    </header>
