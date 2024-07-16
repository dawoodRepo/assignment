<?php function enqueue_theme_style_and_script(){

    //enqueue css files
    wp_enqueue_style('bootstrap', get_theme_file_uri('css/bootstrap.css'));
    wp_enqueue_style('font-awesome.min', get_theme_file_uri('css/font-awesome.min.css'));
    wp_enqueue_style('main_style', get_theme_file_uri('css/style.css'));
    wp_enqueue_style('responsive_style', get_theme_file_uri('css/responsive.css'));
    wp_enqueue_style('owl_carousal(slider)', get_theme_file_uri('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'));

    // enqueue js files
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js');
    wp_enqueue_script('bootstrap', get_theme_file_uri('/js/bootstrap.js'));
    wp_enqueue_script('owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js');
    wp_enqueue_script('custom', get_theme_file_uri('/js/custom.js'));
    wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap');
}
add_action('wp_enqueue_scripts', 'enqueue_theme_style_and_script');


function register_my_menus() {
    register_nav_menu('primary', __('Primary Menu', 'my_theme'));   //nav_menu name is "primary" and "my_theme" is my theme name which you can write anything
  }
  add_action('after_setup_theme', 'register_my_menus');


function theme_features(){
    add_theme_support('post-thumbnails');   //after writing this function image option will appear inside wordpress(when we click on edit post)
  }
  add_action('after_setup_theme', 'theme_features');



  function add_navwalker() {
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'add_navwalker');

?>