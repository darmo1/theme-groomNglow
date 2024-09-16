<div class="bg bg--green">
    <section id="gallery" class="container-fluid section-container">
        <div class=" row">
            <?php  
                          $args = array(
                            'post_type' => 'section-landing-page',
                            'category_name' => 'section-3'       
                          );
                          $section_gallery = new WP_Query($args);

                          if($section_gallery->have_posts()){
                            while($section_gallery->have_posts()){
                              $section_gallery->the_post(); ?>

            <h1 class="section__heading">
                <?php the_title(); ?>
            </h1>
            <?php } 
            }?>
        </div>
        <div class="row m-auto d-flex flex-wrap d-none d-md-block">
            <?php the_content();?>
        </div>

        <div class="d-block d-md-none position-relative ">
            <?php 
          if (class_exists('SmartSlider3')) {
            echo do_shortcode('[smartslider3 slider="2"]');
                        } 
          ?>
        </div>
    </section>
</div>