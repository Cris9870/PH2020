<?php get_header(); ?>
<div>
  


<?php  		while ( have_posts() ) : the_post(); ?>




                                                                                 

                
                                        
                              
                                    
<?php endwhile?>
    </div>








<?php get_template_part('template-parts/content', 'sidebar');?>
       <?php get_footer();?>