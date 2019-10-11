<?php 
/* 
  Template Name: Portfolio 
*/
get_header(); ?>

<?php while(have_posts()){
    the_post();
    get_template_part('top-page-headers');
} ?>


<div class="container">
    <div class="page-session">
        <?php the_content();?>
    </div>
</div>

<?php get_footer(); ?>