<?php
/**
 * The Employment-Page Template
 *
 * @package Objects
 * @subpackage Centrality
 */

/* Template Name: Employment-Page */
get_header();the_post();
?>
<div class="content-wrapper">
    <?php echo do_shortcode('[_employment_header button_url="#jobs"]'); ?>
    <div class="content-wrapper inner-page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-sm-7 col-md-7"><?php the_content(); ?></div>
                <div class="col-lg-5 col-sm-5 sol-md-5 sidebar employment-page-sidebar" id="employment-page-sidebar">
                    <div class="sidebarInside">
                        <?php dynamic_sidebar( 'employment-sidebar' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>