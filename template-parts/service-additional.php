<?php 
include_once get_template_directory() .'/functions.php';
$args = array(
'post_type' => 'additional_services'      
);
$additional_services = new WP_Query($args);
if($additional_services->have_posts()){
while($additional_services->have_posts()){
    $additional_services->the_post(); ?>


<div class="">
    <div>
    <h2><?php the_title();?> 
  <button onclick="toggleService()">
    <img src="<?php echo get_template_directory_uri().'/assets/images/icono-up.svg' ?>"
    alt="arrow-up"
    class="arrow"
    />
  </button>
  </h2>
    </div>
    <div class="toggle-service__container">
        <form id="form-additional">
            <div><?php groomNglow_getAdditionalServices('service-provided-one', 'price-service-provided-one');  ?>  </div>
            <div><?php groomNglow_getAdditionalServices('service-provided-two', 'price-service-two');?>  </div>
            <div><?php groomNglow_getAdditionalServices('service-provided-three', 'price-service-provided-three');  ?>  </div>
            <div><?php groomNglow_getAdditionalServices('service-provided-four', 'price-service-provided-four');  ?>  </div>
            <div><?php groomNglow_getAdditionalServices('service-provided-five', 'price-service-provided-five');  ?>  </div>
            <div><?php groomNglow_getAdditionalServices('service-provided-six', 'price-service-provided-six');  ?>  </div>
        </form>
    </div>
  
</div>





<?php  }} ?>
      