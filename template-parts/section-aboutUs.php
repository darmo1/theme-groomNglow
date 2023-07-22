<div id="about-us"class="bg bg-dog">
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
        <section id="landing-section" class="">
            <div class="row" id="<?php the_permalink(); ?>">
            

            <h1 class="my-3 landing-section__heading">
                <?php the_title(); ?></h1>
           
            </div>
            <div class="row d-flex justify-content-center align-items-center about-us font-weight-bold">
                <?php  the_content(); ?>
            </div>
        </section>

    </div>