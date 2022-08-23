<?php $hero = get_field('hero');?>

<section class=" slider_section position-relative">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          
          <?php
         $testimonial=new WP_Query(array(
            'post_type' => 'slidertop',
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