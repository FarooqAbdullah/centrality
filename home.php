<?php
/**
 * The template for displaying Home Page Content
 *
 * @package Objects
 * @subpackage Centrality
 */

/* Template Name: Home Page */
    get_header();the_post();
?>

<div class="slider-wrapper">
<!--    <img src="--><?php //echo get_template_directory_uri(); ?><!--/images/slider-image-2.png"  alt="Slider Image"/>-->
    <?php putRevSlider('main-slider',"homepage") ?>
</div>
<div class="content-wrapper">
    <div class="row">
        <div class="in-it">
            <h3><?php the_field('in_it_heading'); ?></h3>
            <p><?php the_field('in_it_heading_slogan'); ?></p>
            <div class="selection">
                <div class="select-wrapper clearfix">
                    <div class="s-left"></div>
                    <div class="select">Select One</div>
                    <div class="s-right"></div>
                </div>
                <div class="button-wrapper">
                    <a class="btn btn-lg i-m" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><?php the_field('in_it'); ?></a>
                    <a class="btn btn-lg i-m" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><?php the_field('not_in_it'); ?></a>
                </div>
            </div>
        </div>
        <div class="in-it-body collapse row" id="collapseExample">
            <div class="in-it-body-top"></div>
            <div class="in-it-body-content">
                <div class="in-it-body-left-content">
                    <img src="<?php the_field('in_it_body_left_image'); ?>" alt=""/>
                </div>
                <div class="in-it-body-center-content">
                    <div class="in-it-body-center-content-wrapper">
                        <p class="head"><?php the_field('in_it_body_upper'); ?></p>
                        <h3><?php the_field('get_started_text'); ?></h3>
                        <p class="company-size"><?php the_field('get_started_slogan'); ?></p>
                        <div class="radio-buttons-wrapper">
                            <div class="radio-wrapper">
                                <input type="radio" id="radio-1-1" name="radio-1-set" class="regular-radio" checked /><label for="radio-1-1"></label>
                                <span class="radio-label-text">10 - 25 People</span>
                            </div>
                            <div class="vertical-line-separator"></div>
                            <div class="radio-wrapper">
                                <input type="radio" id="radio-1-2" name="radio-1-set" class="regular-radio" /><label for="radio-1-2"></label>
                                <span class="radio-label-text">26 - 75 People</span>
                            </div>
                            <div class="vertical-line-separator"></div>
                            <div class="radio-wrapper">
                                <input type="radio" id="radio-1-3" name="radio-1-set" class="regular-radio" /><label for="radio-1-3"></label>
                                <span class="radio-label-text">76 - 250 People</span>
                            </div>
                            <div class="vertical-line-separator"></div>
                            <div class="radio-wrapper">
                                <input type="radio" id="radio-1-4" name="radio-1-set" class="regular-radio" /><label for="radio-1-4"></label>
                                <span class="radio-label-text">250+ People</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="in-it-body-right-content">
                    <img src="<?php the_field('in_it_body_right_image'); ?>" alt=""/>
                </div>
            </div>
        </div>
    </div>
    <?php echo do_shortcode('[_centrality_service]'); ?>
    <?php echo do_shortcode('[_trusted_companies]'); ?>
    <div class="row working-with-centrality-wrapper">
        <div class="container">
            <h3><?php the_field('working_with_centrality_heading'); ?></h3>
            <div class="steps-wrapper row">
                <div class="working-steps-choices col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-left-0 padding-right-0">
                    <div class="steps-choices">
                        <div class="choice-img-wrapper">
                            <img src="<?php the_field('working_with_centrality_simple_image'); ?>" alt=""/>
                            <span class="steps-line line-right"></span>
                        </div>
                        <h2><?php the_field('working_with_centrality_simple_title'); ?></h2>
                        <div class="choices-smart-object">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/smart-object.png" alt=""/>
                        </div>
                        <p><?php the_field('working_with_centrality_simple_description'); ?></p>
                    </div>
                </div>
                <div class="working-steps-choices col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-left-0 padding-right-0">
                    <div class="steps-choices">
                        <div class="choice-img-wrapper">
                            <span class="steps-line line-left"></span>
                            <img src="<?php the_field('working_with_centrality_flexible_image'); ?>" alt=""/>
                            <span class="steps-line line-right"></span>
                        </div>
                        <h2><?php the_field('working_with_centrality_flexible_title'); ?></h2>
                        <div class="choices-smart-object">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/smart-object.png" alt=""/>
                        </div>
                        <p><?php the_field('working_with_centrality_flexible_description'); ?></p>
                    </div>
                </div>
                <div class="working-steps-choices col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-left-0 padding-right-0">
                    <div class="steps-choices">
                        <div class="choice-img-wrapper">
                            <span class="steps-line line-left"></span>
                            <img src="<?php the_field('working_with_centrality_smart_image'); ?>" alt=""/>
                        </div>
                        <h2><?php the_field('working_with_centrality_smart_title'); ?></h2>
                        <div class="choices-smart-object">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/smart-object.png" alt=""/>
                        </div>
                        <p><?php the_field('working_with_centrality_smart_description'); ?></p>
                    </div>
                </div>
            </div>
            <div class="steps-discover-more-wrapper">
                <a href="<?php the_field('working_with_centrality_button_url'); ?>" class="btn btn-default">
                    <?php the_field('working_with_centrality_button_text'); ?>
                    <img src="<?php the_field('working_with_centrality_button_image'); ?>"  alt=""/>
                </a>
            </div>
        </div>
    </div>
    <div class="row mastery-trust-experience-wrapper">
        <div class="container">
            <h3><?php the_field('mastery_knowledge_experience_heading'); ?></h3>
            <div class="years-wrapper row">
                <?php
                // check if the repeater field has rows of data
                if( have_rows('mastery_knowledge_experience_years_mastery') ):

                    // loop through the rows of data
                    while ( have_rows('mastery_knowledge_experience_years_mastery') ) : the_row();
                        ?>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-ms-12">
                            <img src="<?php the_field('mastery_knowledge_experience_years_image'); ?>"  alt=""/>
                            <h2><?php the_sub_field('sub_year'); ?></h2>
                            <p><?php the_sub_field('sub_year_description'); ?></p>
                        </div>
                    <?php

                    endwhile;
                endif;

                ?>
            </div>
            <div class="mastery-trust-experience-more-wrapper">
                <a href="<?php the_field('mastery_knowledge_experience_button_url'); ?>" class="btn btn-default"><?php the_field('mastery_knowledge_experience_button_text'); ?></a>
            </div>
        </div>
    </div>
    <?php echo do_shortcode('[_industry_insights_promotions]'); ?>
</div>

<?php get_footer(); ?>