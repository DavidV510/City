<?php get_header(); ?>

   <div class="container">
    
   
        <ul class="slider">
        <?php 
            $args=array(
                'posts_per_page'=>4,
                'order'=>'rand'
            );

            $imgs=new WP_Query($args);
            while($imgs->have_posts()):$imgs->the_post();
        ?>
           <li>
             <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(); ?>
            </a>
           </li>
        <?php endwhile; ?>
        </ul>
        
    <div class="icons">
    <?php dynamic_sidebar('Images Front'); ?>
    </div>

    <div class="bottom-front">
      <div class="bottom-about">
            <div class="bottom-title">
                <p>Where to sleep</p>
            </div>
           <div class="bottom-about-content">
           <h2>About Us</h2>
           <?php 
            $about=new WP_Query('page_id=8');
            while($about->have_posts()):$about->the_post();?>
            
            <?php the_content(); ?>
            <?php endwhile; ?>
           </div>
      </div>

      <div class="bottom-travel">
          <div class="bottom-title">
            <p>What to do</p>
          </div>
        <h2>Tips to Travel Tornto</h2>
            <?php 
            $args=array(
                'cat'=>3,
                'posts_per_page'=>2,
                'order'=>'DESC',
                'orderby'=>'date'
            );
            $travels=new WP_Query($args);?>
            <ul class="travels">
            <?php
            while($travels->have_posts()):$travels->the_post();
            ?>
                <li>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                    </a>
                    <h3><?php the_title(); ?></h3>
                    <?php the_excerpt(); ?>
                </li>

             <?php endwhile;wp_reset_postdata(); ?>
            </ul>
        </div>

        <div class="bottom-eat">
            <div class="bottom-title">
                <p>Where to eat</p>
            </div>
            <h2>Tips to Travel Tornto</h2>
            <?php 
            $args=array(
                'cat'=>4,
                'posts_per_page'=>1,
                'order'=>'DESC',
                'orderby'=>'date'
            );
            $travels=new WP_Query($args);?>
            <ul class="travels">
            <?php
            while($travels->have_posts()):$travels->the_post();
            ?>
                <li>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                    </a>
                    <h3><?php the_title(); ?></h3>
                    <?php the_excerpt(); ?>
                </li>

             <?php endwhile;wp_reset_postdata(); ?>
            </ul>
        </div>


    </div>
   </div>
<?php get_footer(); ?>