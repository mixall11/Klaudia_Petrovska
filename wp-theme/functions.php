<?php
defined('ABSPATH') || exit;

function klaudia_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form','comment-form','gallery','caption']);
}
add_action('after_setup_theme', 'klaudia_setup');

function klaudia_enqueue() {
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Lato:wght@300;400;700&display=swap',
        [], null
    );
    wp_enqueue_style(
        'klaudia-style',
        get_stylesheet_uri(),
        ['google-fonts'],
        '1.0.0'
    );
    wp_enqueue_script(
        'klaudia-gallery',
        get_template_directory_uri() . '/js/gallery.js',
        [], '1.0.0', true
    );
}
add_action('wp_enqueue_scripts', 'klaudia_enqueue');

// Custom Image Size pre galériu
add_image_size('gallery-thumb', 600, 600, true);

// ACF polia (ak je nainštalovaný Advanced Custom Fields)
function klaudia_acf_fields() {
    if (!function_exists('acf_add_local_field_group')) return;
    acf_add_local_field_group([
        'key'    => 'group_klaudia_profile',
        'title'  => 'Profil – Klaudia',
        'fields' => [
            ['key'=>'field_tagline',   'label'=>'Tagline',        'name'=>'tagline',   'type'=>'text'],
            ['key'=>'field_narodena',  'label'=>'Dátum narodenia','name'=>'narodena',  'type'=>'text'],
            ['key'=>'field_domov',     'label'=>'Domov',          'name'=>'domov',     'type'=>'text'],
            ['key'=>'field_pribeh',    'label'=>'Príbeh (text)',   'name'=>'pribeh',    'type'=>'textarea'],
            ['key'=>'field_citat',     'label'=>'Citát',          'name'=>'citat',     'type'=>'textarea'],
            ['key'=>'field_avatar',    'label'=>'Profilová foto', 'name'=>'avatar',    'type'=>'image', 'return_format'=>'url'],
        ],
        'location' => [[ ['param'=>'page_template','operator'=>'==','value'=>'front-page.php'] ]],
    ]);
}
add_action('acf/init', 'klaudia_acf_fields');
