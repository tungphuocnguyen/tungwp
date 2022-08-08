<?php

/*
 * Template Name: TEMPLATE SERVICES
 */

get_header(); ?>

<?php $ourservices = get_field('our_services','option');?>
<?php $ourserviceslist = get_field('our_service_list','option');?>
  

  <section class="service_section layout_padding ">
    <div class="container">
      <h2 class="custom_heading"><?php echo get_field('title_service','option');?></h2>
      <p class="custom_heading-text">
      <?php echo get_field('descrip_service','option');?>
      </p>
    
      <div class=" layout_padding2">
    
        <div class="card-deck">
        <?php while( have_rows('our_service_list','option') ): the_row();
         $image =  get_sub_field('image');
         $title = get_sub_field('title');
         $description = get_sub_field('description');
    ?>

          <div class="card">
            <img class="card-img-top" src="<?php echo $image;?>" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title"><?php echo $title; ?></h5>
              <p class="card-text">
              <?php echo $description; ?>
              </p>
            </div>
           
          </div>
          <?php endwhile; ?>
          </div>
         
        </div>
        
      </div>

      <div class="d-flex justify-content-center">
        <a href="" class="custom_dark-btn">
        <?php echo get_field('button_service','option');?>
        </a>
      </div>
   
    </div>
  </section>



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




  <?php get_footer(); ?>