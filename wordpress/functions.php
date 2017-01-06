<?php
    
    //CSS一元管理
    if (!is_admin()) {
        function register_style() {
            wp_register_style('bootstrap', get_bloginfo('template_directory').'/css/bootstrap.paper.min.css');
            wp_register_style('xxx-common', get_bloginfo('template_directory').'/css/common.css');
            wp_register_style('pagename', get_bloginfo('template_directory').'/css/pagename.css');
        }
        function add_stylesheet() {
            // 共通
            register_style();
                wp_enqueue_style('bootstrap');
                wp_enqueue_style('xxx-common');
            if (is_front_page()) {
                wp_enqueue_style('pagename');
            }
        }
        add_action('wp_print_styles', 'add_stylesheet');
    }

    //JS一元管理
    if (!is_admin()) {
        function register_script(){
            wp_register_script('bootstrap', get_bloginfo('template_directory').'/js/bootstrap.min.js',array(),false,true);
        }
        function add_script() {
            register_script();
                wp_enqueue_script('bootstrap');
        }
        add_action('wp_print_scripts', 'add_script');
    }

?>