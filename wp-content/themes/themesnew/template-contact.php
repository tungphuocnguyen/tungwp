<?php get_header(); ?>

<!-- contact section -->
<?php $contact = get_field('contact');?>
  <section class="contact_section layout_padding">
    <div class="container">
      <h2 class="font-weight-bold">
      <?php echo get_field('contact_header','option');?>
      </h2>
      <div class="row">
        <div class="col-md-8 mr-auto">
          <form action="">
            <div class="contact_form-container">
              <div>
              	<?php echo apply_shortcodes( '[contact-form-7 id="1234" title="Contact form 1"]' ); ?>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->
  



  <?php $Footer = get_field('footer','option');?>
  <section class="info_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h5>
          <?php echo get_field('fruits_footer','option');?>
          </h5>
          <ul>
            <li>
            <?php echo get_field('randomised_footer','option');?>
            <li>
            <?php echo get_field('words_which_footer','option');?>
            </li>
            <li>
            <?php echo get_field('dont_look_even_footer','option');?>
            </li>
            <li>
            <?php echo get_field('slightly_footer','option');?>
            </li>
            <li>
            <?php echo get_field('believable_if_you_footer','option');?>
            </li>
            <li>
            <?php echo get_field('are_going_to_use_footer','option');?>
            </li>
            <li>
            <?php echo get_field('a_passage_of_footer','option');?>
            </li>
            <li>
            <?php echo get_field('lorem_ipsum_footer','option');?>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>
          <?php echo get_field('services_footer','option');?>
          </h5>
          <ul>
            <li>
            <?php echo get_field('randomised_footer','option');?>
            <li>
            <?php echo get_field('words_which_footer','option');?>
            </li>
            <li>
            <?php echo get_field('dont_look_even_footer','option');?>
            </li>
            <li>
            <?php echo get_field('slightly_footer','option');?>
            </li>
            <li>
            <?php echo get_field('believable_if_you_footer','option');?>
            </li>
            <li>
            <?php echo get_field('are_going_to_use_footer','option');?>
            </li>
            <li>
            <?php echo get_field('a_passage_of_footer','option');?>
            </li>
            <li>
            <?php echo get_field('lorem_ipsum_footer','option');?>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>
          <?php echo get_field('list_footer','option');?>

          </h5>
          <ul>
            <li>
            <?php echo get_field('randomised_footer','option');?>
            <li>
            <?php echo get_field('words_which_footer','option');?>
            </li>
            <li>
            <?php echo get_field('dont_look_even_footer','option');?>
            </li>
            <li>
            <?php echo get_field('slightly_footer','option');?>
            </li>
            <li>
            <?php echo get_field('believable_if_you_footer','option');?>
            </li>
            <li>
            <?php echo get_field('are_going_to_use_footer','option');?>
            </li>
            <li>
            <?php echo get_field('a_passage_of_footer','option');?>
            </li>
            <li>
            <?php echo get_field('lorem_ipsum_footer','option');?>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <div class="social_container">
            <h5>
            <?php echo get_field('follow_us_footer','option');?>
            </h5>
            <div class="social-box">
              <a href="">
                <img src="<?php echo get_field('facebook', 'option') ?>" alt="">
              </a>

              <a href="">
                <img src="<?php echo get_field('twitter', 'option') ?>" alt="">
              </a>
              <a href="">
                <img src="<?php echo get_field('linkedin', 'option') ?>" alt="">
              </a>
              <a href="">
                <img src="<?php echo get_field('instagram', 'option') ?>" alt="">
              </a>
            </div>
          </div>
          <div class="subscribe_container">
            <h5>
            <?php echo get_field('subscribe_now_footer','option');?>
            </h5>
            <div class="form_container">
              <form action="">
              <?php echo apply_shortcodes( '[contact-form-7 id="125" title="Subscribe Form"]' ); ?>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>





  <?php get_footer(); ?>