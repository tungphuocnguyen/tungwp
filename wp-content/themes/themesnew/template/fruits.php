<div style="height:0;" >
<?php
/*
 * Template Name: TEMPLATE FRUITS
 */

 get_header();  ?>

</div>

 

 <div>
 <section class="fruit_section layout_padding-top" style="padding-top:150px;">
    <div class="container fresh-fruits" >
      <h2 class="custom_heading"><?php echo get_field('title_fruits','option');?></h2>
      <p class="custom_heading-text">
      <?php echo get_field('description_fruits','option');?>
      </p>
   <?php while( have_rows('fruits_list','option') ): the_row();
         $image = get_sub_field('image_fruits');
         $title = get_sub_field('title_fruits');
         $description = get_sub_field('description_fruits');
         $button = get_sub_field('button_fruits');
         $link = get_sub_field('link');
    ?>
   
   <div class="row layout_padding2">
        <div class="col-md-8">
          <div class="fruit_detail-box">
            <h3>
              <?php echo $title; ?>
            </h3>
            <p class="mt-4 mb-5">
              <?php echo $description; ?>
            </p>
            <div>
              <a href="" class="custom_dark-btn">
              <?php echo $button; ?>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <div class="fruit_img-box d-flex justify-content-center align-items-center">
            <img src="<?php echo $image;?>" alt="" class="" width="" />
          </div>
        </div>
      </div>


<?php endwhile; ?>

    </div>
  </section>


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
            <?php while( have_rows('Social','option') ): the_row();
         $face = get_sub_field('facebook_social');
         $twitter = get_sub_field('twitter_social');
         $linkedin = get_sub_field('linkedin_social');
         $instagram = get_sub_field('instagram_social');
    ?>
            <div class="social-box">
              <a href="">
                <img src="<?php echo $face;?>" alt="">
              </a>

              <a href="">
                <img src="<?php echo $twitter;?>" alt="">
              </a>
              <a href="">
                <img src="<?php echo $linkedin;?>" alt="">
              </a>
              <a href="">
                <img src="<?php echo $instagram;?>" alt="">
              </a>
            </div>
            <?php endwhile; ?>
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
