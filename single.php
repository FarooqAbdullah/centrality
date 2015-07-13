<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package Objects
 * @subpackage Centrality
 */

get_header(); ?>
<div class="content-wrapper">
    <?php
    $image = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');
    ?>
    <div class="header-wrapper" style="background-image: url(<?php echo $image[0]; ?>);">
        <div class="container">
            <div class="head-date">
                <?php the_time('D , M d, Y'); ?>
            </div>
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
    <div class="container content">
        <?php the_content(); ?>
    </div>
    <div class="share-wrapper">
        <div class="container">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                Share This Post From Centarlity
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <?php echo do_shortcode('[_social_icon url="#" name="envelope-o" class="en"]'); ?>
                <?php echo do_shortcode('[_social_icon url="#" name="facebook" class="fb"]'); ?>
                <?php echo do_shortcode('[_social_icon url="#" name="twitter" class="twitter"]'); ?>
                <?php echo do_shortcode('[_social_icon url="#" name="youtube-play" class="yt"]'); ?>
                <?php echo do_shortcode('[_social_icon url="#" name="google-plus" class="gplus"]'); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
















