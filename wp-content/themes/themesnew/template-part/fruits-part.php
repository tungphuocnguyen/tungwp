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