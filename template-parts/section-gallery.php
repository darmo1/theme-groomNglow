
<div id="gallery" class="bg">
    <section id="landing-section">
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

            <h1 class="my-3 landing-section__heading">
                <?php the_title(); ?>
            </h1>
            <?php } 
            }?>
        </div>
        <div class="row m-auto">
            <?php the_content();?>
        </div>
    </section>
</div>