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