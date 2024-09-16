<div class="bg">
    <section id="landing-page-section" class="container-fluid pb-3 pb-md-0">
        <div class="row section-container">
            <div
                class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center align-items-md-start order-2 order-md-1">
                <?php  
                          $args = array(
                            'post_type' => 'section-landing-page',
                            'category_name' => 'section-1'       
                          );
                          $section_langing_page = new WP_Query($args);

                          if($section_langing_page->have_posts()){
                            while($section_langing_page->have_posts()):
                              $section_langing_page->the_post(); ?>

                <h1 class="text-break section__heading text-center text-md-start my-3 my-md-0"> <?php the_title(); ?>
                </h1>
                <p class="my-3 my-md-5 text-break font"> <?php the_content(); ?></p>

                <?php 
                        endwhile;
                        }?>

                <a href="#book-appointment" class="d-flex">
                    <div class="btn-cta ">Book Now</div>
                </a>
            </div>

            <div class="col-12 col-md-6 order-1 order-md-2  d-flex justify-content-center align-items-center">
                <?php   $img_url = get_field('landing_page_image'); ?>
                <img class="dog " src="<?php echo esc_url($img_url); ?>" alt="Imagen de landing" />

            </div>
        </div>
    </section>
</div>