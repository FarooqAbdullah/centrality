<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package Objects
 * @subpackage Centrality
 */

get_header(); ?>
<div class="content-wrapper">
    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');
    ?>
    <div class="header-wrapper" style="background-image: url(<?php echo $image[0]; ?>);">
        <div class="container">
            <div class="head-date">
                <?php the_time('D , M d, Y'); ?>
            </div>
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
</div>
<?php get_footer(); ?>
