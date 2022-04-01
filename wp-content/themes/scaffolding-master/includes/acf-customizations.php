<?php

/**
 * Advanced Custom Fields Customizations
 *
 * Include any customizations here.
 *
 * @package Scaffolding
 */

/**
 * Register ACF Gutenberg Blocks
 *
 * @see https://www.advancedcustomfields.com/resources/acf_register_block_type/
 */
function scaffolding_acf_init()
{

    // check function exists.
    if (function_exists('acf_register_block_type')) {
        /*
       Default attributes.
       'name'              => '',        // (String) A unique name that identifies the block (without namespace).
       'title'             => '',        // (String) The display title for your block.
       'description'       => '',        // (String) (Optional) This is a short description for your block.
       'category'          => 'common',  // (String) Blocks are grouped into categories to help users browse and discover them (common, formatting, layout, widgets).
       'icon'              => '',        // (String|Array) (Optional) An icon property can be specified to make it easier to identify a block - https://github.com/WordPress/dashicons/tree/master/svg-min.
       'mode'              => 'preview', // (String) (Optional) The display mode for your block. Available settings are “auto”, “preview” and “edit”. Defaults to “preview”.
       'align'             => '',        // (String) (Optional) The default block alignment. Available settings are “left”, “center”, “right”, “wide” and “full”. Defaults to an empty string.
       'keywords'          => array(),   // (Array) (Optional) An array of search terms to help user discover the block while searching.
       'supports'          => array(),   // (Array) (Optional) An array of features to support.
       'post_types'        => array(),   // (Array) (Optional) An array of post types to restrict this block type to.
       'render_template'   => '',        // (String) The path to a template file used to render the block HTML.
       'render_callback'   => false      // (Callable) (Optional) Instead of providing a render_template, a callback function name may be specified to output the block’s HTML.
       'enqueue_style'     => ''         // (String) (Optional) The url to a .css file to be enqueued whenever your block is displayed (front-end and back-end).
       'enqueue_script'    => ''         // (String) (Optional) The url to a .js file to be enqueued whenever your block is displayed (front-end and back-end).
       'enqueue_assets'    => ''         // (Callable) (Optional) A callback function that runs whenever your block is displayed (front-end and back-end) and enqueues scripts and/or styles.
       */

        // register a homepage banner block.
        acf_register_block_type(
            array(
                'name'            => 'homepage-banner',
                'title'           => __('Homepage Banner', 'scaffolding'),
                'description'     => __('A block to display the homepage banner.', 'scaffolding'),
                'category'        => 'formatting',
                'icon'            => 'cover-image',
                'align'           => 'full',
                'keywords'        => array('banner', 'home'),
                'supports'        => array(
                    'align'    => array('full'),
                    'multiple' => false,
                    'jsx'      => true,
                ),
                'mode'            => 'preview',
                'render_template' => 'template-parts/blocks/homepage-banner.php',
                'enqueue_assets'  => function( $block ) {
                   // only loads the assets if the block is on the page.
                   $block_css_version = filemtime( get_theme_file_path('/css/blocks/homepage-banner.css' ) );
                   wp_enqueue_style( 'scaffolding-homepage-banner', get_stylesheet_directory_uri() . '/css/blocks/homepage-banner.css', array(), $block_css_version, 'all' );
                }
            )
        );

        // register a recent posts block.
        acf_register_block_type(
            array(
                'name'            => 'scaffolding-recent-posts',
                'title'           => __('Recent Scaffolding Posts', 'scaffolding'),
                'description'     => __('A block to display recent scaffolding blog posts.', 'scaffolding'),
                'category'        => 'formatting',
                'icon'            => 'cover-image',
                'align'           => 'full',
                'keywords'        => array('scaffolding', 'recent', 'posts'),
                'supports'        => array(
                    'align'    => array('full'),
                    'multiple' => false,
                    'jsx'      => true,
                ),
                'mode'            => 'preview',
                'render_template' => 'template-parts/blocks/recent-posts.php',
                'enqueue_assets'  => function( $block ) {
                   // only loads the assets if the block is on the page.
                   $block_css_version = filemtime( get_theme_file_path('/css/blocks/recent-posts.css' ) );
                   wp_enqueue_style( 'scaffolding-recent-posts', get_stylesheet_directory_uri() . '/css/blocks/recent-posts.css', array(), $block_css_version, 'all' );
                }
            )
        );
    }
}
add_action('acf/init', 'scaffolding_acf_init');

