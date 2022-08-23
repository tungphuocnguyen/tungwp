<?php

/*
 * Template Name: TEMPLATE SEARCH
 */

 get_header();  ?>
 <section class="info_section layout_padding">
<div class="search-page" >
<?php get_template_part( 'template-part/search', 'part' ); ?>
</div>
</section>
<section class="info_section layout_padding">
<div class="container footer-search">
<?php get_template_part( 'template-part/footermenu', 'part' ); ?>
</div>
</section>

<?php get_footer(); ?>