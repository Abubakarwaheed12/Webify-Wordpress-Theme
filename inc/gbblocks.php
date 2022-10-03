<?php
    function my_acf_block_register_type(){
        if(function_exists('my_acf_block_register_type')){
        //  home hero section 
        acf_register_block_type(array(
            'name'              => 'home hero',
            'title'             => __('home hero'),
            'description'       => __('A custom  home hero section.'),
            'render_template'   => 'inc/blocks/hemo_hero.php',
            'category'          => 'formatting',
        ));

         // Register a footer logo block.
     acf_register_block_type(array(
            'name'              => 'footer logo section',
            'title'             => __('footer logo section'),
            'description'       => __('A custom footer logo section.'),
            'render_template'   => 'inc/widgets/footer_logo_section.php',
            'category'          => 'formatting',
         ));
     acf_register_block_type(array(
            'name'              => 'footer menu section',
            'title'             => __('footer navigation menu '),
            'description'       => __('A custom footer logo section.'),
            'render_template'   => 'inc/widgets/footer_nav_menu.php',
            'category'          => 'formatting',
         ));
     acf_register_block_type(array(
            'name'              => 'footer services menu section',
            'title'             => __('footer services menu '),
            'description'       => __('A custom footer logo section.'),
            'render_template'   => 'inc/widgets/footer_services_menu.php',
            'category'          => 'formatting',
         ));
            
     acf_register_block_type(array(
            'name'              => 'footer social icon section',
            'title'             => __('social icon menu'),
            'description'       => __('A custom footer logo section.'),
            'render_template'   => 'inc/widgets/social_icons.php',
            'category'          => 'formatting',
         ));
            
        }
    }

    add_action('acf/init','my_acf_block_register_type');
?>