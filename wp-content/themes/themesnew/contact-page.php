<?php get_header(); ?>


<?php $contact = get_field('contact');?>
  <section class="contact_section layout_padding">
    <div class="container">
      <h2 class="font-weight-bold">
      <?php echo $contact['contact_title'];?>
      </h2>
      <div class="row">
        <div class="col-md-8 mr-auto">
          <div action="">
            <div class="contact_form-container">
              <div>
              	<?php echo apply_shortcodes( '[contact-form-7 id="1234" title="Contact form 1"]' ); ?>
              </div>
            </div>
</div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>