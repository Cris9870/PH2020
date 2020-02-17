
<?php if (have_posts()):?>
   <?php while(have_posts()): the_post();?>
  
   <?php endwhile?>
   <?php else :?>
   <?php echo __('   
      <h1 class=" rounded  text-center">
      No content found</h1> ')?>
   <?php endif?>
<?php get_template_part( 'template-parts/content', 'trending');?>

<?php get_template_part( 'template-parts/content', 'sidebar');?>

