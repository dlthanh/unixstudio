<?php

function unixstudio_setup() {
    add_theme_support('automatic-feed-links');
    add_theme_support('post_thumbnails');
    add_theme_support(
        'html5',
        array(
            'gallery',
            'caption'
        )
    );
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
    add_theme_support('editor-styles');
    add_editor_style('style-editor.css');
    add_theme_support(
        'editor-font-sizes',
        array(
            array(
                'name'      => __('Small', 'unixstudio'),
                'shortName' => __('S', 'unixstudio'),
                'size'      => 14,
                'slug'      => 'small',
            ),
            array(
                'name'      => __('Normal', 'unixstudio'),
                'shortName' => __('M', 'unixstudio'),
                'size'      => 16,
                'slug'      => 'medium',
            ),
            array(
                'name'      => __('Large', 'unixstudio'),
                'shortName' => __('L', 'unixstudio'),
                'size'      => 18,
                'slug'      => 'large',
            ),
            array(
                'name'      => __('Huge', 'unixstudio'),
                'shortName' => __('H', 'unixstudio'),
                'size'      => 22,
                'slug'      => 'huge',
            ),
        )
    );
    add_theme_support('responsive-embeds');

    register_nav_menus(
        array(
            'navigator' => __('Navigator', 'unixstudio')
        )
    );
}
add_action('after_setup_theme', 'unixstudio_setup');