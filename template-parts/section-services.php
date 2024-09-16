<div class="bg bg--green position-relative min-h-400">
    <image src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Group 57.svg'); ?>"
        class="position-absolute top-0 end-0 transform-Y-middle opacity-40" />

    <image src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Group 58.svg'); ?>"
        class="position-absolute bottom-0 start-0 transform-Y-30 opacity-40" />

    <section id="book-appointment" class="container-fluid section-container">
        <div class="row">
            <?php  
                          $args = array(
                            'post_type' => 'section-landing-page',
                            'category_name' => 'section-2'       
                          );
                          $section_services = new WP_Query($args);

                          if($section_services->have_posts()){
                            while($section_services->have_posts()){
                              $section_services->the_post(); ?>

            <h1 class="section__heading text-break">
                <?php the_title(); ?>
            </h1>
            <?php } 
            }?>
        </div>
        <div class="row col-md-10 offset-md-2 mx-3">

            <?php  the_content(); ?>
        </div>

    </section>
</div>

<?php get_template_part('template-parts/section', 'popUp'); ?>