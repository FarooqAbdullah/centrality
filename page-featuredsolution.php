<?php
/**
 * Featured Solution Page Template
 *
 * @package Objects
 * @subpackage Centrality
 */

/* Template Name: Featured Solution */
get_header();the_post();
?>

<div class="content-wrapper">
    <?php $img_url = get_post_meta(get_the_ID(), 'centrality-featured-heading-img'); ?>
    <?php echo do_shortcode('[_employment_header class="employment-header" heading="Manage Cloud Services For Your Business." is_slogan="'.false.'" head_img="'.$img_url[0].'" button_text="SIGN UP TODAY" button_url="#"]'); ?>
</div>

<?php get_footer(); ?>