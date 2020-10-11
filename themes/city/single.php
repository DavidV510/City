<?php get_header(); ?>

   <div class="container aboutCont">
   <?php while(have_posts()):the_post(); ?>
        <div class="single">

            <div class="single-img">
            <?php the_post_thumbnail(); ?>
            <h2 class="single-title"><?php echo the_title(); ?></h2>
            </div>

            
            <div class="single-info">
            <span>By: <?php the_author(); ?><br><br>
            <span>Tags for this post:<?php the_category(', '); ?></span>
            </div>
            <div class="single-content">
                <?php echo the_content(); ?>
                <?php comments_template(); ?>
                <?php edit_post_link(); ?>
            </div>

        </div>
        
       <?php endwhile; ?>
      
     <div class="side">
      <?php get_sidebar(); ?>
    </div>

   </div>
<?php get_footer(); ?>