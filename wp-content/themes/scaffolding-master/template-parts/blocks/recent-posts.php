<?php

/**
 * Block Name: Recent Posts
 *
 * This is the template that displays the recent posts block.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param (int|string) $post_id The post ID this block is saved to.
 *
 * @package Scaffolding
 */

// create id attribute for specific styling.
$scaffolding_block_id = 'scaffolding-recent-posts-' . $block['id'];

// build block classes.
$scaffolding_block_classes = array(
    'scaffolding-recent-posts',
    'clearfix',
);
if ($is_preview && is_admin()) {
    $scaffolding_block_classes[] = 'is-admin';
}
$scaffolding_block_classes = array_map('esc_attr', $scaffolding_block_classes);


?>

<div id="<?php echo esc_attr($scaffolding_block_id); ?>" class="<?php echo join(' ', $scaffolding_block_classes); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>">
    <div class='row'>
        <?php 
        $recent_posts = wp_get_recent_posts(array(
            'numberposts' => 3,
            'post_status' => 'publish',
            'orderby'     => 'post_date',
            'order'       => 'DESC',
        ));

        foreach( $recent_posts as $recent_post ) :
            $recent_post_title = $recent_post['post_title'];
            $recent_post_content = $recent_post['post_content'];
            $recent_post_id = $recent_post['ID'];
        ?>
            <div class='recent-posts__cards-wrapper col-lg-4'>
                <a href='<?php echo esc_url( get_permalink( $recent_post_id ) ); ?>' class='recent-posts__cards'>
                    <?php echo wp_get_attachment_image( get_post_thumbnail_id( $recent_post_id ), 'medium-large' ); ?>
                    <h3 class='recent-posts__title'><?php echo esc_html( $recent_post_title ); ?></h3>
                    <?php echo $recent_post_content; ?>
                    <span class='recent-posts__read-more'><strong>Read More</strong></span>
                </a>
            </div>
        <?php endforeach  ?>
    </div>
</div>