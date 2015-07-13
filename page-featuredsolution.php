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

    <?php echo do_shortcode('[_employment_header class="employment-header" heading="Why trust Centrality?" slogan="We make IT simple for businesses." button_text="Request Services" button_url="#"]'); ?>
</div>

<?php get_footer(); ?>