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

    <div class="header__bg position-sticky top-0 shadow  z-3">
        <header class="d-flex justify-content-between align-items-center section-container py-2 px-2 px-md-0">
            <div class="d-flex p-3">
                <?php the_custom_logo(); ?>
            </div>
            <div class="main-menu  position-relative">
                <!-- Mobil menu -->
                <div class="container-hamburger-close-icons position-relative">
                    <div class="menu-hamburger d-block d-md-none position-absolute top-50 start-0 translate-middle-y">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="30"
                            height="30" viewBox="0 0 30 30" stroke-width="2" stroke="#2c3e50" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 6l16 0" />
                            <path d="M4 12l16 0" />
                            <path d="M4 18l16 0" />
                        </svg>
                    </div>
                    <div class="d-none d-md-none position-absolute top-50 start-0 translate-middle-y" id="menu-close">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#2c3e50" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M18 6l-12 12" />
                            <path d="M6 6l12 12" />
                        </svg>

                    </div>
                </div>


                <?php 
                $args_menu = array(
                    'theme_location' => 'menu-main',
                    'menu_id'        => 'primary-menu',
                    'container_class'=> 'ms-auto header__menu--container', 
                    'menu_class'     => 'nav navbar-nav d-flex flex-column flex-md-row'
                ); ?>
                <!-- Desktop -->
                <div class="d-none d-md-block">
                    <?php wp_nav_menu($args_menu); ?>
                </div>
            </div>
        </header>
        <div id="menu-items-mobile" class="position-absolute top-100  w-100 start-0  d-none d-md-none">
            <?php wp_nav_menu($args_menu); ?>
        </div>
    </div>


    <script>
    const valuesServices = [];
    </script>