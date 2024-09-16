<div class="bg bg-dog">
    <?php  
                          $args = array(
                            'post_type' => 'section-landing-page',
                            'category_name' => 'section-4'       
                          );
                          $section_about_us = new WP_Query($args);

                          if($section_about_us->have_posts()){
                            while($section_about_us->have_posts()){
                              $section_about_us->the_post(); ?>
    <?php } 
            }?>
    <section id="about-us" class="section-container container-fluid">
        <div class="row" id="<?php the_permalink(); ?>">
            <h1 class="section__heading">
                <?php the_title(); ?></h1>
        </div>
        <div class="row mx-5 mx-md-0">
            <div class="col-12 col-md-6  d-flex justify-content-center align-items-center">
                <?php $img_url = get_field('about_image'); ?>
                <img class="image-about-us" src="<?php echo esc_url($img_url); ?>" alt="Imagen de landing" />
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center my-5 text-normal">
                <?php echo the_content(); ?>
            </div>
        </div>
    </section>
</div>