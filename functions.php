<?php
register_nav_menus(
    array(
        'primary-menu' => 'top-menu',
        'footer-menu' => 'footer-menu',
    )
);

add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('custom-background');
add_theme_support('title-tag');
?>

<?php
//  ADD stylesheet
wp_enqueue_style('home', get_template_directory_uri() . '/assets/css/style.css');
wp_enqueue_style('workflow', get_template_directory_uri() . '/assets/css/workflow.css');
wp_enqueue_style('services', get_template_directory_uri() . '/assets/css/services.css');
wp_enqueue_style('about', get_template_directory_uri() . '/assets/css/about.css');
wp_enqueue_style('about', get_template_directory_uri() . '/assets/css/case_study.css');
wp_enqueue_style('slick css',  get_template_directory_uri() . '/assets/jq plugin/slick1/slick/slick.css ');

//   ADD scripts
wp_enqueue_script('jquery',  get_template_directory_uri() . '/assets/jquery/jquery-3.6.0.js');
wp_enqueue_script('script',  get_template_directory_uri() . '/assets/js/app.js');
wp_enqueue_script('script',  get_template_directory_uri() . '/assets/jq plugin/slick1/slick/slick.min.js');
?>
<?php require  get_template_directory() .'/inc/gbblocks.php'; ?>

<?php
//  webify widgets 

// footrer col-1
register_sidebar(
    array(
        'name'    => 'footer logo image col-1',
        'id'    => 'footer-col-1',
        'class'    => 'custom',
        'description' => 'footer column one that contains logo and some text',
        'before_widget' => ' <div class="ftr_logo">',
        'after_widget'  => '</div>',
    )
);

// footer col-2 
register_sidebar(
    array(
        'name' => 'footer menu col-2',
        'id'   => 'footer-col-2',
        'descreption' => 'footer navigation menu side that contains menu of your site',
        'before_widget' => '<div class="navi">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    )
);

//  footer col-3 
register_sidebar(
    array(
        'name' => 'footer services menu col-3',
        'id' => 'footer-col-3',
        'descreption' => 'footer services menu links',
        'before_widget' => '<div class="ftr_services">',
        'after_widget'  => '</div>',

    )
);

// footer col-4 
register_sidebar(
    array(
        'name' => 'social icons col-4',
        'id'   => 'footer-col-4',
        'descreption' => ' descreption for footer social icons',
        'before_widget' => '<div class="social">',
        'after_widget'  => '</div>',
    )
);


?>