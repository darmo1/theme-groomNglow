<div>
    <footer
        class="section-container d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 py-5">
        <!-- Button -->
        <div>
            <a href="#book-appointment" class="d-flex">
                <div class="btn-cta">Book Now</div>
            </a>
        </div>

        <!-- Nav-footer -->
        <?php 
        $args_menu = array(
            'theme_location' => 'footer-nav',
            'menu_id'        => 'footer-navigation',
            'menu_class'     => 'nav',
        );
        wp_nav_menu($args_menu); 
        ?>

        <!-- Social Media -->
        <?php 
        $args = array(
            'post_type' => 'contact',   
        );
        $contact_info = new WP_Query($args);

        if ($contact_info->have_posts()) {
            while ($contact_info->have_posts()) {
                $contact_info->the_post(); 
        ?>
        <div class="d-flex">
            <?php
            if (get_field('instagram')) {
                printf(
                    "<a href='%s' target='_blank'>
                        <div class='container-social-media'>
                            <img src='%s' alt='Instagram' />
                        </div>
                    </a>",
                    esc_url(get_field('instagram')),
                    esc_url(get_template_directory_uri() . '/assets/images/logo-instagram.png')
                );
            }

            if (get_field('facebook')) {
                printf(
                    "<a href='%s' target='_blank'>
                        <div class='container-social-media'>
                            <img src='%s' alt='Facebook' />
                        </div>
                    </a>",
                    esc_url(get_field('facebook')),
                    esc_url(get_template_directory_uri() . '/assets/images/logo-facebook.png')
                );
            }

            if (get_field('youtube')) {
                printf(
                    "<a href='%s' target='_blank'>
                        <div class='container-social-media'>
                            <img src='%s' alt='YouTube' />
                        </div>
                    </a>",
                    esc_url(get_field('youtube')),
                    esc_url(get_template_directory_uri() . '/assets/images/youtube.svg')
                );
            }
            ?>
        </div>
        <?php
            } // end while
        } // end if
        ?>
    </footer>
</div>