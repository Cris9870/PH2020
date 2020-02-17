<div class="slider">
	


                              <ul class="bxslider">


<?php if (have_posts()):?>

	<?php while(have_posts()): the_post();?>
	
	
    <li>
    <figure >
    	<figcaption class="text-center" >
    		
	<a href="<?php the_permalink();?>"><h2><?php the_title();?></h2></a>
	    <h4> By: <?php the_author();?></h4>

<h4><?php  the_date('Y-m-d'); ?></h4>
    	</figcaption>
 <?php the_post_thumbnail();?>   	

    </figure>                 
 

</li>


<?php endwhile?>
	
<?php else :?>

<?php endif?>

  
</ul>
          
 


</div>