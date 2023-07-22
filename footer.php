<?php 
              $args_menu = array(
                    'theme_location' => 'menu-main',
                    'menu_id'        => 'primary-menu',
              
                    'menu_class'     => 'navbar-nav d-flex flex-column flex-md-row'
                );
?>

<footer class="">
    <div class="container d-flex justify-content-between align-items-center ">
        <?= wp_nav_menu($args_menu); ?>
    </div>
        <?php 
         $args = array(
           'post_type' => 'contact',   
         );
         $contact_info = new WP_Query($args);

         if($contact_info->have_posts()){
           while($contact_info->have_posts()){
             $contact_info->the_post(); ?>

        <h1 class="my-3 landing-section__heading">
            <div class="d-flex justify-content-around flex-wrap container m-auto footer__container--info">

            <?php
if (get_field('instagram')) {
    printf("
        <a href='%s' target='_blank'>
            <div class='container-social-media'>
                <img src='%s' alt='Instagram' />
                Instagram
            </div>
        </a>",
        esc_url(get_field('instagram')),
        esc_url(get_template_directory_uri() . '/assets/images/instagram.svg')
    );
}

if (get_field('facebook')) {
    printf("
        <a href='%s' target='_blank'>
            <div class='container-social-media'>
                <img src='%s' alt='Facebook' />
                Facebook
            </div>
        </a>",
        esc_url(get_field('facebook')),
        esc_url(get_template_directory_uri() . '/assets/images/fb.svg')
    );
}

if (get_field('youtube')) {
    printf("
        <a href='%s' target='_blank'>
            <div class='container-social-media'>
                <img src='%s' alt='YouTube' />
                YouTube
            </div>
        </a>",
        esc_url(get_field('youtube')),
        esc_url(get_template_directory_uri() . '/assets/images/youtube.svg')
    );
}

if (get_field('number_phone')) {
    printf("
        <div class='d-flex container-social-media'>
            <img src='%s' alt='Phone' />
            <div>%s</div>
        </div>",
        esc_url(get_template_directory_uri() . '/assets/images/tel.svg'),
        esc_attr(get_field('number_phone'))
    );
}

if (get_field('email_address')) {
    printf("
        <div class='d-flex container-social-media'>
            <img src='%s' alt='Email' />
            <div>%s</div>
        </div>",
        esc_url(get_template_directory_uri() . '/assets/images/email.svg'),
        esc_attr(get_field('email_address'))
    );
}
?>





</div>
</h1>
<?php } 
}?>
      
             
</footer>
</body>
</html>