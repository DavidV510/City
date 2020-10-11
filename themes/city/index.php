<?php get_header(); ?>

<div class="aboutCont container">
   
    <div class="about blogCont">
    <?php while(have_posts()):the_post(); ?>
    <a href="<?php the_permalink(); ?>">
        <div class="blog">
            <div class="aboutImg blogImg">
                    <?php 
                        if(has_post_thumbnail()){
                            the_post_thumbnail(); 
                        }
                        else{
                            echo 'No Image To Display';
                        }
                    ?>
                </div>
            <div class="blog-content">
            <h2><?php the_title(); ?></h2>
            <p><?php the_excerpt(); ?></p>
            </div>
        </div>
        </a>
        <?php endwhile; wp_reset_postdata() ?>
    </div>

    <div class="side">
    <?php get_sidebar(); ?>
    </div>

</div>


<?php get_footer(); ?>