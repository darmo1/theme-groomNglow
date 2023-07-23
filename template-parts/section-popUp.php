
<div id="pop-up" class="modal is-closed mt-2" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Booking</h5>
        <button 
        type="button" 
        class="close" 
        data-dismiss="modal" 
        aria-label="Close"  
        id='close-btn'
       >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="all-services">

        </div>
        <div class="wp-block-bookingpress-bookingpress-appointment-form">

    <?php echo do_shortcode('[bookly-form category_id="-1" service_id="2" hide="categories,services,staff_members"]'); ?>

        </div>
      </div>
    </div>
  </div>
</div>







