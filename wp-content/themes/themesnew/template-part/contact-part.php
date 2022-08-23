<?php $contact = get_field('contact');?>
  <section class="contact_section layout_padding">
    <div class="container">
      <h2 class="font-weight-bold">
      <?php echo get_field('contact_header','option');?>
      </h2>
      <div class="row">
        <div class="col-md-8 mr-auto">
          <div class="contact_form-container">
            <?php echo do_shortcode(get_field('contact_content', 'option')); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
