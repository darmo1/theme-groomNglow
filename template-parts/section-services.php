<div id="services" class="bg bg-dog">
  <section id="landing-section" class="container-fluid">
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

            <h1 class="my-3 landing-section__heading">
                <?php the_title(); ?></h1>
            <?php } 
            }?>
        </div>
            <div class=" row">
                <div class="col d-flex flex-column justify-content-center align-items-center border card py-5 container-cards">
        <?php 
          $args = array(
          'post_type' => 'services'      
          );
          $services = new WP_Query($args);
          if($services->have_posts()){
          while($services->have_posts()){
              $services->the_post(); 
        ?>
        <?php get_template_part('template-parts/service', 'details');              
        }}?>
              <div class="custom-services">
                <?php get_template_part('template-parts/service', 'additional');  ?>
              </div>
              <div>
                <span>TOTAL PRICE: $</span>
                <span class="total-price">0</span>
              </div>
                </div>
               
                <div class="col">
                  <?php get_template_part('template-parts/service', 'options'); ?>

                  <button onclick="sendForm()" >BOOK NOW</button>
                </div>
            </div>
  </section>
</div>

<?php get_template_part('template-parts/section', 'popUp'); ?>

