<?php

/*
 * Template Name: TEMPLATE SERVICES
 */

get_header(); ?>

<?php $ourservices = get_field('our_services');?>
  <?php $ourserviceslist = get_field('our_services_list');?>
  

  <section class="service_section layout_padding ">
    <div class="container">
      <h2 class="custom_heading"><?php echo get_field('test');?></h2>
      <p class="custom_heading-text">
      <?php echo $ourservices['section_desc'];?>
      </p>
    
      <div class=" layout_padding2">
    
        <div class="card-deck">
        <?php while( have_rows('our_services_list') ): the_row();
         $image = get_sub_field('image');
         $title = get_sub_field('title');
         $description = get_sub_field('description');
    ?>

          <div class="card">
            <img class="card-img-top" src="<?php echo $image['url'];?>" alt="Card image cap" />
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
        <?php echo $ourservices['button_text'];?>
        </a>
      </div>
   
    </div>
  </section>


  <?php get_footer(); ?>