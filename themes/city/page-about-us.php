<?php get_header(); ?>

<div class="aboutImg">
        <?php 
            if(has_post_thumbnail()){
                the_post_thumbnail(); 
            }
            else{
                echo 'No Image To Display';
            }
        ?>
    </div>
<div class="aboutCont container">
   
    <div class="about">
        <?php while(have_posts()):the_post(); ?>
        
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
        <?php endwhile; wp_reset_postdata() ?>
    </div>

    <div class="side">
    <?php get_sidebar(); ?>
    </div>

</div>


<?php get_footer(); ?>