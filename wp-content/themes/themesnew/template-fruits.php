<?php get_header(); ?>
/*
   Template Name: TEMPLATE FRUITS     
 */

<section class="fruit_section">
    <div class="container">
    <?php $freshfruits = get_field('fresh_fruits');?>
      <h2 class="custom_heading"><?php echo $freshfruits['section_title'];?></h2>
      <p class="custom_heading-text">
      <?php echo $freshfruits['section_text'];?>
      </p>


   <?php while( have_rows('fresh_fruits_list') ): the_row();
         $image = get_sub_field('image');
         $title = get_sub_field('title');
         $description = get_sub_field('description');
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
                Buy Now
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <div class="fruit_img-box d-flex justify-content-center align-items-center">
            <img src="<?php echo $image['url'];?>" alt="" class="" width="250px" />
          </div>
        </div>
      </div>


<?php endwhile; ?>

  <?php get_footer(); ?>