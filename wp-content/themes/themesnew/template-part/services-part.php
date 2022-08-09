
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

  