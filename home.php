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
            <h3><?php echo get_post_meta(get_the_ID(),'centrality-in-it-heading',true); ?></h3>
            <p><?php echo get_post_meta(get_the_ID(),'centrality-in-it-heading-slogan',true); ?></p>
            <div class="selection">
                <div class="select-wrapper clearfix">
                    <div class="s-left"></div>
                    <div class="select">Select One</div>
                    <div class="s-right"></div>
                </div>
                <div class="button-wrapper">
                    <a class="btn btn-lg i-m" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><?php echo  get_post_meta(get_the_ID(),'centrality-in-it-button-text',true); ?></a>
                    <a class="btn btn-lg i-m" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><?php echo get_post_meta(get_the_ID(),'centrality-not-in-it-button-text',true); ?></a>
                </div>
            </div>
        </div>
        <div class="in-it-body collapse row" id="collapseExample">
            <div class="in-it-body-top"></div>
            <div class="in-it-body-content">
                <div class="in-it-body-left-content">
                    <img src="<?php echo get_post_meta(get_the_ID(),'centrality-in-it-body-left-image',true); ?>" alt=""/>
                </div>
                <div class="in-it-body-center-content">
                    <div class="in-it-body-center-content-wrapper">
                        <p class="head"><?php get_post_meta(get_the_ID(),'centrality-in-it-body-upper-text',true); ?></p>
                        <h3><?php echo get_post_meta(get_the_ID(),'centrality-get-started-text',true); ?></h3>
                        <p class="company-size"><?php echo get_post_meta(get_the_ID(),'centrality-slogan-get-started-text',true); ?></p>
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
                    <img src="<?php echo get_post_meta(get_the_ID(),'centrality-in-it-body-right-image',true); ?>" alt=""/>
                </div>
            </div>
        </div>
    </div>
    <?php echo do_shortcode('[_centrality_service]'); ?>
    <?php echo do_shortcode('[_trusted_companies]'); ?>
    <?php echo do_shortcode('[_working_with_centrality]'); ?>
    <div class="row mastery-trust-experience-wrapper">
        <div class="container">
            <h3><?php echo get_post_meta(get_the_ID(),'mastery-knowledge-experience-heading',true); ?></h3>
            <div class="years-wrapper row">
                <?php
                $year_experiences = get_post_meta(get_the_ID(),'mke-years-mastery',true);
                foreach($year_experiences as $year_experience) { ?>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-ms-12">
                        <img src="<?php echo get_post_meta(get_the_ID(),'mastery-knowledge-experience-year-image',true); ?>"  alt=""/>
                        <h2><?php echo $year_experience['sub-year']; ?></h2>
                        <p><?php echo $year_experience['sub-year-description']; ?></p>
                    </div>

                <?php
                }
                ?>
            </div>
            <div class="mastery-trust-experience-more-wrapper">
                <a href="<?php echo get_post_meta(get_the_ID(),'mastery-knowledge-experience-button-url',true); ?>" class="btn btn-default">
                    <?php echo get_post_meta(get_the_ID(),'mastery-knowledge-experience-button-text',true); ?>
                </a>
            </div>
        </div>
    </div>
    <?php echo do_shortcode('[_industry_insights_promotions]'); ?>
</div>

<?php get_footer(); ?>