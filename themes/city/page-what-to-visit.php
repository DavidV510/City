<?php
/*
  Template Name:What to visit
*/ 

get_header(); ?>


<div class="container">
    <h1 style="text-align: center;"><?php echo get_the_title(); ?></h1>
    <div class="whatGrid">

    <?php
     $args=array(
         'posts_per_page'=>6,
         'order',
         'orderby'=>'date',
     );
     $visit=new WP_Query($args);
    while($visit->have_posts()):$visit->the_post(); ?>
    
      <div class="what">
         <div class="what-img">
             <a href="<?php the_permalink(); ?>">
               <?php the_post_thumbnail(); ?>
               <div class="what-cat">
                   <?php the_category(', ') ?>
               </div>
            </a>
         </div>
        <div class="what-inner">
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
            <div class="info">
              <div class="author">
                By: <?php the_author(); ?>
              </div>
              <div class="date">
                <?php the_time('F j, Y'); ?>
              </div>
            </div>
        </div>
      </div>
        
    <?php endwhile; wp_reset_postdata() ?>


    </div>
   

</div>



<?php get_footer(); ?>