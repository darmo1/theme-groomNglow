
<div id="landing-page-section" class="landing-section bg">
            <section id="landing-section" class="container-fluid">
                <div class=" row">
                    <div class="col d-flex flex-column justify-content-center align-items-center">
                        <?php  
                          $args = array(
                            'post_type' => 'section-landing-page',
                            'category_name' => 'section-1'       
                          );
                          $section_langing_page = new WP_Query($args);

                          if($section_langing_page->have_posts()){
                            while($section_langing_page->have_posts()):
                              $section_langing_page->the_post(); ?>

                        <h1 class="my-3 text-break landing-section__heading"> <?php the_title(); ?></h1>
                        <p class="my-3 text-break"> <?php the_content(); ?></p>

                        <?php 
                        endwhile;
                        }?>

                    </div>
                    <div class="col landing-section__image">
                        <img class="dog"
                            src="<?php echo get_template_directory_uri();?>/assets/images/dog-with-bg.svg" />
                    </div>
                </div>
            </section>
        </div>