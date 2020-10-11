<?php 
 //  Php Queries
 require get_template_directory().'/inc/queries.php';

 
function city_scripts(){
    wp_enqueue_style('normalize',get_template_directory_uri().'/css/normalize.css',array(),'8.0.1');
    wp_enqueue_style('head',get_template_directory_uri().'/css/header.css',NULL, '2.0.2.8');
    wp_enqueue_style('foot',get_template_directory_uri().'/css/footer.css',NULL, '2.0.2.8');
    wp_enqueue_style('sidebar',get_template_directory_uri().'/css/sidebar.css',NULL, '2.0.2.8');
    wp_enqueue_style('what',get_template_directory_uri().'/css/what.css',NULL, '2.0.2.8');
    wp_enqueue_style('blog',get_template_directory_uri().'/css/blog.css',NULL, '2.0.2.8');
    wp_enqueue_style('front',get_template_directory_uri().'/css/front.css',NULL, '2.0.2.8');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize','head','foot','sidebar','what','blog','front'), '2.0.2.8');

    wp_enqueue_script('jquery');

    wp_enqueue_script('script', get_template_directory_uri().'/js/script.js',array('jquery'), '1.0.0.2',true);
}
function city_thumbnails(){
    add_image_size('small',100,100,true );
    add_image_size('medium',250,300,true);

    add_theme_support('post-thumbnails');
}

function city_menu(){
    register_nav_menus(array(
        'main-menu'=>'Main Menu'
    ));
}

function city_widgets(){
    register_sidebar(array(
        'name'=>__('Sidebar Testimonials'),
        'id'=>'testimonial',
        'description'=>'Testimonials Widget',
        'before_widget'=>'<aside id="%1$s" class="widget %2$s">',
        'after_widget'=>'</aside>',
        'before_title'=>'<div class="widget-title">',
        'after_title'=>'</div>'
    ));

    register_sidebar(array(
        'name'=>__('Images Front'),
        'id'=>'front-page',
        'description'=>'Widgets Images',
        'before_widget'=>'<div id="%1$s" class="widget %2$s">',
        'after_widget'=>'</div>',
        'before_title'=>'<div class="widget-title">',
        'after_title'=>'</div>'
    ));
}

//Hooks
add_action('init','city_menu');
add_action('wp_enqueue_scripts','city_scripts');
add_action('after_setup_theme','city_thumbnails');
add_action('widgets_init','city_widgets');

?>
