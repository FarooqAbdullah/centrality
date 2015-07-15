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
    <?php
        $img_url = get_post_meta(get_the_ID(), 'centrality-featured-heading-img');
        $header_text = get_post_meta(get_the_ID(), 'centrality-featured-heading-text',true);
        $button_text = get_post_meta(get_the_ID(), 'centrality-featured-heading-button-text',true);
        $button_url = get_post_meta(get_the_ID(), 'centrality-featured-heading-button-url',true);
    ?>
    <?php echo do_shortcode('[_employment_header heading="'.$header_text.'" is_slogan="'.false.'" head_img="'.$img_url[0].'" button_text="'.$button_text.'" button_url="'.$button_url.'"]'); ?>
    <?php
        $statistics_head = get_post_meta(get_the_ID(),'_statistics_heading',true);
        $statistics_1 = get_post_meta(get_the_ID(),'_statistics1',true);
        $statistics_2 = get_post_meta(get_the_ID(),'_statistics2',true);
        $statistics_3 = get_post_meta(get_the_ID(),'_statistics3',true);
    ?>
    <?php echo do_shortcode('[_statistics heading="'.str_replace('"','&#34;',$statistics_head).'" is_year="'.false.'" statistics1="'.$statistics_1.'" statistics2="'.$statistics_2.'" statistics3="'.$statistics_3.'"]'); ?>
    <?php
        $cloud_service_head = get_post_meta(get_the_ID(),'centrality-cloud-service-heading',true);
        $cloud_service_content = get_post_meta(get_the_ID(),'centrality-cloud-service-content',true);
        $cloud_service_button_text = get_post_meta(get_the_ID(),'centrality-cloud-service-button-text',true);
        $cloud_service_button_url = get_post_meta(get_the_ID(),'centrality-cloud-service-button-url',true);
        $cloud_service_right_image = get_post_meta(get_the_ID(),'centrality-cloud-service-right-image',true);
        if(empty($cloud_service_right_image)) {
           $cloud_service_right_image = get_template_directory_uri()."/images/featured-solution-cloud.png";
        }
    ?>
    <div class="row cloud-service-solution">
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 padding-right-0 left_wrapper">
            <div class="left">
                <h2><?php echo $cloud_service_head; ?></h2>
                <p>
                    <?php echo str_replace("'","&#39;",$cloud_service_content); ?>
                </p>
                <a href="<?php echo $cloud_service_button_url; ?>" class="btn btn-default"><?php echo $cloud_service_button_text; ?></a>
            </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 right_wrapper padding-left-0 padding-right-0 video">
            <img src="<?php echo $cloud_service_right_image; ?>"  alt=""/>
        </div>
    </div>
    <?php $f_head = get_post_meta(get_the_ID(),'_feature_heading',true);?>
    <?php echo do_shortcode('[_feature_template heading="'.$f_head.'"]'); ?>
    <?php
        $left_img = get_post_meta(get_the_ID(),'centrality-business-technology-left-image',true);
        $business_tech_heading = get_post_meta(get_the_ID(),'centrality-business-technology-heading',true);
        $content1_num = get_post_meta(get_the_ID(),'centrality-business-technology-first-content-num',true);
        $content1 = get_post_meta(get_the_ID(),'centrality-business-technology-first-content',true);
        $content2_num = get_post_meta(get_the_ID(),'centrality-business-technology-second-content-num',true);
        $content2 = get_post_meta(get_the_ID(),'centrality-business-technology-second-content',true);
        $button_text = get_post_meta(get_the_ID(),'centrality-business-technology-button-text',true);
        $button_url = get_post_meta(get_the_ID(),'centrality-business-technology-button-url',true);
    ?>
    <?php echo do_shortcode('[_business_technology heading="'.$business_tech_heading.'" content1="'.$content1.'" content2="'.$content2.'" content1_num="'.$content1_num.'" content2_num="'.$content2_num.'" button_text="'.$button_text.'" button_url="'.$button_url.'" left_img="'.$left_img.'"]'); ?>
    <?php echo do_shortcode('[_working_with_centrality]'); ?>
    <?php echo do_shortcode('[_trusted_companies]'); ?>
</div>

<?php get_footer(); ?>