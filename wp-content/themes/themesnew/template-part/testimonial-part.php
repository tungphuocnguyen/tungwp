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