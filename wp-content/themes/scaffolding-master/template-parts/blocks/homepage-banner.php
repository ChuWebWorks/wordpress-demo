<?php

/**
 * Block Name: Homepage Banner
 *
 * This is the template that displays the homepage banner block. Only supports full width.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param (int|string) $post_id The post ID this block is saved to.
 *
 * @package Scaffolding
 */

// create id attribute for specific styling.
$scaffolding_block_id = 'scaffolding-banner-' . $block['id'];

// build block classes.
$scaffolding_block_classes = array(
    'scaffolding-banner',
    'alignfull',
    'clearfix',
);
if ($is_preview && is_admin()) {
    $scaffolding_block_classes[] = 'is-admin';
}
$scaffolding_block_classes = array_map('esc_attr', $scaffolding_block_classes);

if ( get_field( 'homepage_banner' ) ) {
    $scaffolding_homepage_banner_fields = get_field('homepage_banner');

    // Hero Image
    if ($scaffolding_homepage_banner_fields['hero_image']) {
        $hero_image = $scaffolding_homepage_banner_fields['hero_image'];
        ?>
        <style type="text/css">
            .scaffolding-banner {
                background-image: url( <?php echo esc_url(wp_get_attachment_image_url( $hero_image['id'], 'full' )); ?> );
            }
        </style>
        <?php
    }
}

?>

<div id="<?php echo esc_attr($scaffolding_block_id); ?>" class="<?php echo join(' ', $scaffolding_block_classes); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>">
    <div class='homepage_banner__container container'>
        <div class='hompage-banner__content'>
        <?php
        $scaffolding_allowed_blocks = array( 'core/heading', 'core/paragraph', 'core/buttons' );
        $scaffolding_block_template = array(
            array(
                'core/heading',
                array(
                    'content'     => 'Odio cursus ametsit elementum',
                    'placeholder' => 'Add a heading...',
                    'selector'    => 'h2',
                ),
            ),
            array(
                'core/paragraph',
                array(
                    'content'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et eu.',
                    'placeholder' => 'Add a paragraph...',
                ),
            ),
            array(
                'core/buttons',
                array(
                    'content'     => 'Learn More',
                    'placeholder' => 'Add a button...',
                ),
            ),
        );
        ?>
        <InnerBlocks allowedBlocks="<?php echo esc_attr( wp_json_encode( $scaffolding_allowed_blocks ) ); ?>" template="<?php echo esc_attr( wp_json_encode( $scaffolding_block_template ) ); ?>" />
        </div>
    </div>

</div>