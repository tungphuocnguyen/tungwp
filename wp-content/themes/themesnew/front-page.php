<?php get_header(); ?>






<?php $hero = get_field('hero');?>

<section class=" slider_section position-relative">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="slider_item-box">
              <div class="slider_item-container">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="slider_item-detail">
                        <div>
                          <h1>
                          <?php echo $hero['big_title_top'];?><br />
                          <?php echo $hero['big_title_bottom'];?>
                          </h1>
                          <p>
                           <?php echo $hero['small_title'];?>
                          </p>
                          <div class="d-flex">
                            <a href="" class="text-uppercase custom_orange-btn mr-3">
                            <?php echo $hero['link_text_left'];?>
                            </a>
                            <a href="" class="text-uppercase custom_dark-btn">
                            <?php echo $hero['link_text_right'];?>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="slider_img-box">
                        <div>
                          <img src="<?php bloginfo('template_directory');?>/images/slide-img.png" alt="" class="" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="slider_item-box">
              <div class="slider_item-container">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="slider_item-detail">
                        <div>
                          <h1>
                            <?php echo $hero['big_title_top'];?><br />
                            <?php echo $hero['big_title_bottom'];?>
                          </h1>
                          <p>
                          <?php echo $hero['small_title'];?>
                          </p>
                          <div class="d-flex">
                            <a href="" class="text-uppercase custom_orange-btn mr-3">
                            <?php echo $hero['link_text_left'];?>
                            </a>
                            <a href="" class="text-uppercase custom_dark-btn">
                            <?php echo $hero['link_text_right'];?>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="slider_img-box">
                        <div>
                          <img src="<?php bloginfo('template_directory');?>/images/slide-img.png" alt="" class="" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="slider_item-box">
              <div class="slider_item-container">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="slider_item-detail">
                        <div>
                          <h1>
                          <?php echo $hero['big_title_top'];?><br />
                          <?php echo $hero['big_title_bottom'];?>
                          </h1>
                          <?php echo $hero['small_title'];?>
                          <div class="d-flex">
                            <a href="" class="text-uppercase custom_orange-btn mr-3">
                            <?php echo $hero['link_text_left'];?>
                            </a>
                            <a href="" class="text-uppercase custom_dark-btn">
                            <?php echo $hero['link_text_right'];?>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="slider_img-box">
                        <div>
                          <img src="<?php bloginfo('template_directory');?>/images/slide-img.png" alt="" class="" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="custom_carousel-control">
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>

    <!-- end slider section -->
  </div>
















  <!-- service section -->


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

  <!-- end service section -->

  <!-- fruits section -->

  <section class="fruit_section">
    <div class="container">
    
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
          <div class="fruit_detail-box" >
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
            <img src="<?php echo $image;?>" alt="" class="abc"  />
          </div>
        </div>
      </div>


<?php endwhile; ?>

    </div>
  </section>

  <!-- end fruits section -->

  <!-- tasty section -->
  <?php $verytastyfruits = get_field('very_tasty_fruits');?>
  <section class="tasty_section">
    <div class="container_fluid">
      <h2>
      <?php echo $verytastyfruits['title'];?>
      </h2>
    </div>
  </section>

  <!-- end tasty section -->

  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">


    <?php $testimonial = get_field('testimonial');?>
      <h2 class="custom_heading"><?php echo $testimonial['section_title'];?></h2>
      <p class="custom_heading-text">
      <?php echo $testimonial['section_desc'];?>
      </p>
      <div>
      <?php $testislide = get_field('slide_testimonial');?>
      <div id="carouselExampleControls-2" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="client_container layout_padding2">
                <div class="client_img-box">
                <img src="<?php bloginfo('template_directory');?>/images/client copy.png" alt="" class="" />
                </div>
                <div class="client_detail">
                  <h3>
                  <?php echo $testislide['title_testimonial'];?>
                  </h3>
                  <p class="custom_heading-text">
                  <?php echo $testislide['des_testimonial'];?>
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="client_container layout_padding2">
                <div class="client_img-box">
                <img src="<?php bloginfo('template_directory');?>/images/client copy.png" alt="" class="" />
                </div>
                <div class="client_detail">
                  <h3>
                  <?php echo $testislide['title_testimonial'];?>
                  </h3>
                  <p class="custom_heading-text">
                  <?php echo $testislide['des_testimonial'];?>
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="client_container layout_padding2">
                <div class="client_img-box">
                <img src="<?php bloginfo('template_directory');?>/images/client copy.png" alt="" class="" />
                </div>
                <div class="client_detail">
                  <h3>
                  <?php echo $testislide['title_testimonial'];?>
                  </h3>
                  <p class="custom_heading-text">
                  <?php echo $testislide['des_testimonial'];?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="custom_carousel-control">
            <a class="carousel-control-prev" href="#carouselExampleControls-2" role="button" data-slide="prev">
              <span class="" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls-2" role="button" data-slide="next">
              <span class="" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

        </div>
      </div>
    </div>
  </section>


  <!-- end client section -->

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


  <!-- map section -->
  <section class="map_section">
    <div id="map" class="h-100 w-100 ">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99029.84505283511!2d-84.61044109524899!3d39.13645224401073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x884051b1de3821f9%3A0x69fb7e8be4c09317!2zQ2luY2lubmF0aSwgT2hpbywgSG9hIEvhu7M!5e0!3m2!1svi!2s!4v1658717392667!5m2!1svi!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>

  <!-- end map section -->
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


  <?php get_footer(); ?>
  