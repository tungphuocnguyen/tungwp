<section class="client_section layout_padding">
    <div class="container">
    <?php $testimonial = get_field('testimonial');?>
      <h2 class="custom_heading"><?php echo get_field('section_title','option');?></h2>
      <p class="custom_heading-text">
      <?php echo get_field('section_desc','option');?>
      </p>
      <div>
      <?php $testislide = get_field('slide_testimonial');?>
      <div id="carouselExampleControls-2" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
          <?php
         $testimonial=new WP_Query(array(
            'post_type' => 'testislider',
         ));
        ?>
        <?php if($testimonial->have_posts( )):
            while($testimonial->have_posts()):
            $testimonial->the_post(); ?>
        <?php the_content( ); ?>
        <?php endwhile;
    endif; ?>
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