<?php 

$args = array(
        'post_type' => 'services'      
        );
        $services = new WP_Query($args);
        if($services->have_posts()){
            while($services->have_posts()){
            $services->the_post();?>
        <script>
            var serviceName= '<?php json_encode(the_title()); ?>'
            valuesServices.push(serviceName)  
        </script>
        <details class="card mb-4 p-2">
            <summary class="d-flex">
                <div class="mx-3 ml-2 d-flex align-items-center justify-content-start">
                    <input type="radio" id="" name="service" value="<?php echo the_title();?>" />
                </div>
                <div>
                    <p class="mb-0 ">
                        <label class="label-prices-mini-cart" for="basic-bath">
                            <?php the_title();?>
                        </label>
                    </p>
                    <?php 
                    if (get_field('description')) {
                        printf("
                        <p>%s</p>",
                        get_field('description')
                    );
                }
                    ?>
                </div>
            </summary>
                    </details>

<?php }} ?>