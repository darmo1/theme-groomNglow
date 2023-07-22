<?php 

include_once get_template_directory() .'/functions.php'
?>

<div class="card-service-detail my-5 is-closed" id="<?=the_title(); ?>">
    <div class="basic-bath__heading d-flex flex-column mb-4 justify-content-center align-items-center">
        <img 
        src="<?php echo get_template_directory_uri().'/assets/images/basic-bath.svg'; ?>"
        alt="Basic-bath"
        />
        <h2><?php the_title(); ?></h2>
    </div>
    <div class="basic-bath__package">
        <?php the_content();?>
    </div>

    <div class="basic-bath__prices">
        <form id="form-details">
            <div><?php groomNglow_getService('service-one', 'price');  ?>  </div>
            <div><?php groomNglow_getService('service-two', 'price-two');?>  </div>
            <div><?php groomNglow_getService('service-three', 'price-three');  ?>  </div>
            <div><?php groomNglow_getService('service-four', 'price-four');  ?>  </div>
        </form>
    </div>
</div>




