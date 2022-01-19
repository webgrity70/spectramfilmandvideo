<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head class="no-js">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head();?>
</head>

<body <?php body_class(); ?> >
    <?php wp_body_open(); ?>


    <header class="header" id="header">

        <div class="topHeader d-flex justify-content-end">
            <a href="#" class="covid">
                <img src="<?php echo site_url(); ?>/wp-content/uploads/2022/01/covid.png"> Covid-19 info
            </a>
            <a href="<?php echo WC_get_cart_url(); ?>" class="cart"> 
                <img src="<?php echo site_url(); ?>/wp-content/uploads/2022/01/cart.png" class="img-fluid" alt="">
                <span class="count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
            </a>
        </div>

        <div class="container">
            <nav class="navbar navbar-expand-lg justify-content-between">
                <?php the_custom_logo(); ?>
                <button class="navbarToggler btn btn-primary" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <?php

                        wp_nav_menu(
                            array(

                                'theme_location' => 'menu-1',
                                'container' => 'ul',
                                'menu_class' => 'navbar-nav ml-auto',                       
                            )
                        );
                    ?>
                </div>
                <div data-toggle="modal" data-target="#searchFormModal"><i class="fa fa-search" aria-hidden="true"></i></div>
                
            </nav>

            
        </div>
    </header>