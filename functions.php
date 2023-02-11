<?php

error_reporting(0);
require_once get_template_directory() . '/acf/init.php';

if ( ! function_exists('theme_support')) :

    function theme_support() {
        // Add support for block styles.
        add_theme_support( 'wp-block-styles' );
        // Enqueue editor styles.
        add_editor_style( 'style.css' );
    }

endif;

add_action('after_setup_theme', 'theme_support');

if ( ! function_exists('theme_setup')) :

    function theme_setup() {
        register_nav_menus(array(
            'Top menu' => esc_html__('Top Menu', 'themeU'),
            'Bottom menu' => esc_html__('Bottom menu', 'themeU'),
        ));


        if (!str_contains($_SERVER['REQUEST_URI'], 'wp-admin')) {

            wp_enqueue_style('header_theme', get_stylesheet_directory_uri() . '/assets/css/header.css');
            wp_enqueue_style('main_page', get_stylesheet_directory_uri() . '/assets/css/main.css');
            wp_enqueue_style('main_page_styles', get_stylesheet_directory_uri() . '/assets/css/main-page.css');
            wp_enqueue_style('about_us_styles', get_stylesheet_directory_uri() . '/assets/css/about-us-page.css');
            wp_enqueue_style('services_page', get_stylesheet_directory_uri() . '/assets/css/services-page.css');
            wp_enqueue_style('implantation_page', get_stylesheet_directory_uri() . '/assets/css/implantation-page.css');
            wp_enqueue_style('specialists', get_stylesheet_directory_uri() . '/assets/css/specialists.css');
            wp_enqueue_style('treatment_page', get_stylesheet_directory_uri() . '/assets/css/treatment-page.css');
            wp_enqueue_style('rentgen_page', get_stylesheet_directory_uri() . '/assets/css/rentgen-page.css');
            wp_enqueue_style('spa_page', get_stylesheet_directory_uri() . '/assets/css/spa-page.css');
            wp_enqueue_style('doctor_post', get_stylesheet_directory_uri() . '/assets/css/doctor-post.css');
            wp_enqueue_style('pricus_page', get_stylesheet_directory_uri() . '/assets/css/pricus-page.css');
            wp_enqueue_style('pro_page', get_stylesheet_directory_uri() . '/assets/css/prosthentics-page.css');
            wp_enqueue_style('whit_page', get_stylesheet_directory_uri() . '/assets/css/whitening-page.css');
            wp_enqueue_style('insurance_page', get_stylesheet_directory_uri() . '/assets/css/insurance-page.css');
            wp_enqueue_style('contact_page', get_stylesheet_directory_uri() . '/assets/css/contact-page.css');
            wp_enqueue_style('price_page', get_stylesheet_directory_uri() . '/assets/css/price-page.css');
            wp_enqueue_style('achiv_page', get_stylesheet_directory_uri() . '/assets/css/achiv-page.css');
            wp_enqueue_style('empty_no_secure', get_stylesheet_directory_uri() . '/assets/css/empty-no-secure.css');

            wp_enqueue_script('main', get_stylesheet_directory_uri() . '/assets/js/main.js');
        }
    }

endif;

add_action('after_setup_theme', 'theme_setup');

add_action( 'init', 'register_post_types' );

function register_post_types(){

    flush_rewrite_rules( false );

    register_post_type( 'doctor_type', [
        'label'  => null,
        'labels' => [
            'name'               => 'Доктора',
            'singular_name'      => 'Доктор',
            'add_new'            => 'Добавить доктора',
            'add_new_item'       => 'Добавление доктора',
            'edit_item'          => 'Редактирование доктора',
            'new_item'           => 'Новый доктор',
            'view_item'          => 'Смотреть доктора',
            'search_items'       => 'Искать доктора',
            'not_found'          => 'Не найдено',
            'not_found_in_trash' => 'Не найдено в корзине',
            'parent_item_colon'  => '',
            'menu_name'          => 'Доктора',
        ],
        'description'         => '',
        'public'              => true,
        'show_in_menu'        => true,
        'show_in_rest'        => null,
        'rest_base'           => null,
        'menu_position'       => null,
        'menu_icon'           => null,
        'hierarchical'        => false,
        'supports'            => [ 'title' ],
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );

}
//
//add_action('admin_menu', function(){
//    add_menu_page( 'Дополнительные настройки сайта', 'Режим работы', 'manage_options', 'site-options', 'add_my_setting', '', 4 );
//} );