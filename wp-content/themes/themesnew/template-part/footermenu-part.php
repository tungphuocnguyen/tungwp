<?php $Footer = get_field('footer','option');?>
  <section class="info_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
        <?php test_menu('footer-menu'); ?>
        </div>
        <div class="col-md-3">
        <?php test_menu('footer2-menu'); ?>
        </div>
        <div class="col-md-3">
        <?php test_menu('footer3-menu'); ?>
        </div>
        <div class="col-md-3">
          <div class="social_container">
            <h5>
            <?php echo get_field('follow_us_footer','option');?>
            </h5>
            <div class="social-box">
        

          <?php
            if( have_rows('Social','option')  ):

    while( have_rows('Social','option') ) : the_row();
    //  $image = get_sub_field('image');
        ?>
                <?php if(get_sub_field('link_social','option' )!= ''): ?>
                        <a href="">
                            <img src="<?php the_sub_field('icon_social','option'); ?>" alt="">
                        </a>
                        <?php
                        else :
                            ?>
                            <?php
                        endif;
                    endwhile;
// No value.
else :
    // Do something...
endif;
?>
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











 