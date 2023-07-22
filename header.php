<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset');  ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>


<body class="relative">
    <?php wp_body_open(); ?>

    <div class="header__bg ">
        <header class="d-flex justify-content-between align-items-center">
            <div class="header__logo">
                <?php the_custom_logo(); ?>
            </div>
            <div class="main-menu">
                 <!-- Mobil menu -->
                <div class="menu-hamburger d-md-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="64" height="64" viewBox="0 0 24 24" stroke-width="2" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M4 6l16 0" />
                        <path d="M4 12l16 0" />
                        <path d="M4 18l16 0" />
                    </svg>
                </div>

                <?php 
              $args_menu = array(
                    'theme_location' => 'menu-main',
                    'menu_id'        => 'primary-menu',
                    'container_class'=> 'ms-auto header__menu--container d-none d-md-flex', 
                    'menu_class'     => 'navbar-nav d-flex flex-column flex-md-row'
                );
            wp_nav_menu($args_menu);
          ?>

            </div>
        </header>
    </div>
    <script>
        const valuesServices = [];
    </script>