<div style="height:0;" >
<?php
/*
 * Template Name: TEMPLATE FRUITS
 */
 get_header();  ?>
</div>

 

 <div  style="padding-top:150px;">
 <?php get_template_part( 'template-part/fruits', 'part' ); ?>



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
            <?php while( have_rows('Social','option') ): the_row();
             $icon = get_sub_field('icon_social');
             $link = get_sub_field('link_social');
            ?>
              <a href="<?php echo $link; ?>">
                <img src="<?php echo $icon;?>" alt="">
              </a>
            <?php endwhile; ?>
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
 </div>




  <div>
  <?php get_footer(); ?>
  </div>
