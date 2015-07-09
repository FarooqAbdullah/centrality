<?php

//short code function for Centrality Service Content.
function _centrality_service($atts, $content = null) {

    extract(shortcode_atts(array(
        'action'=> ''
    ), $atts));
    if(!isset($action)) {
        $action = '';
    }

    $result = '<div class="centrality-service-wrapper row">';
    $result .= '<div class="centrality-service">';
    $result .= get_field('centrality_service_heading');
    $result .= '</div>';
    $result .= '<div class="centrality-service-left padding-left-0 col-md-6 col-lg-6 col-xs-12 col-sm-6">';
        $centrality_service_voice_solution_fetch = fetch_posts('voice-solution','menu_order', 'ASC', 1);
        while ( $centrality_service_voice_solution_fetch->have_posts() ) {
        $centrality_service_voice_solution_fetch->the_post();
            $result .= '<img src="'.get_field('centrality_services_left_back_image').'"  alt=""/>';
            $result .= '<div class="voice-solution">';
            $result .= get_the_post_thumbnail();
            $result .= '<h3>'.get_the_title().'</h3>';
            $result .= '<p>'.get_the_content().'</p>';
            $result .= '<a href="'.get_the_permalink().'" class="btn btn-default">'.get_field('centrality_service_button_text').'</a>';
        }
        wp_reset_postdata();
    $result .= '</div>';
    $result .= '</div>';
    $result .= '<div class="centrality-service-right padding-right-0 col-md-6 col-lg-6 col-xs-12 col-sm-6">';
        $centrality_service_it_management_fetch = fetch_posts('it-management','menu_order', 'ASC', 1);
        while ( $centrality_service_it_management_fetch->have_posts() ) {
            $centrality_service_it_management_fetch->the_post();
            $result .= '<img src="'.get_field('centrality_service_right_back_image').'"  alt=""/>';
            $result .= '<div class="it-management">';
            $result .= get_the_post_thumbnail();
            $result .= '<h3>'.get_the_title().'</h3>';
            $result .= '<p>'.get_the_content().'</p>';
            $result .= '<a href="'.get_the_permalink().'" class="btn btn-default">'.get_field('centrality_service_right_button_text').'</a>';
        }
    wp_reset_postdata();
    $result .= '</div>';
    $result .= '</div>';
    $result .= '</div>';

    return $result;
}

add_shortcode('_centrality_service', '_centrality_service');

//short code function for Trusted Companies Content.
function _trusted_companies($atts, $content = null) {

    extract(shortcode_atts(array(
        'action'=> ''
    ), $atts));
    if(!isset($action)) {
        $action = '';
    }

    $result = '<div class="row trusted-companies-wrapper">';
    $result .= '<div class="container">';
    $result .= '<h3>'.get_field('trusted_comapnies_heading').'</h3>';
    if( have_rows('trusted_companys_images') ):

        // loop through the rows of data
        while ( have_rows('trusted_companys_images') ) : the_row();
           $result .= '<div class="col-md-4 col-lg-2 col-sm-4 col-xs-6">';
           $result .= '<img src="'.get_sub_field('trusted_repeator_company_image').'" alt=""/>';
           $result .= '</div>';
        endwhile;
    endif;
    $result .= '</div>';
    $result .= '</div>';

    return $result;
}

add_shortcode('_trusted_companies', '_trusted_companies');

//short code function for Trusted Companies Content.
function _industry_insights_promotions($atts, $content = null) {

    extract(shortcode_atts(array(
        'action'=> ''
    ), $atts));
    if(!isset($action)) {
        $action = '';
    }

    $result = '<div class="row industry-insights-promotion-wrapper">';
    $result .= '<div class="container">';
    $result .= '<h2>'.get_field('promotion_heading').'</h2>';
    $result .= '<div class="insights-promotion row">';
    $promotion_fetch = fetch_posts('promotion','menu_order', 'ASC', 1);
    while ( $promotion_fetch->have_posts() ) {
        $promotion_fetch->the_post();
    $result .= '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 '.get_field('promotion_blog_wrapper_css_class').'">';
    $result .= '<p class="head">'.get_field('promotion_post_type').'</p>';
    $result .= '<h2>'.get_the_title().'</h2>';
    $result .= '<p class="desc">';
    $result .= str_replace('<p>','',get_the_content());
    $result .= '</p>';
    $result .= '<div class="btn-wrapper">';
    $result .= '<a href="'.get_the_permalink().'" class="btn btn-default">'.get_field('promotion_button_text').'</a>';
    $result .= '</div>';
    $result .= '<div class="com-img">';
    $result .= get_the_post_thumbnail();
    $result .= '</div>';
    $result .= '</div>';
    }
    // Restore original Post Data
    wp_reset_postdata();

    $blog_fetch = fetch_posts('blog','menu_order', 'ASC', 2);
    while ( $blog_fetch->have_posts() ) {
        $blog_fetch->the_post();
    $result .= '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 '.get_field('blog_wrapper_css_class').'">';
    $result .= '<p class="head">'.get_field('blog_post_type').'</p>';
    $result .= '<h2>'.get_the_title().'</h2>';
    $result .= '<p class="desc">';
    $result .= str_replace('<p>','',get_the_content());
    $result .= '</p>';
    $result .= '<div class="btn-wrapper">';
    $result .= '<a href="'.get_the_permalink().'" class="btn btn-default">'.get_field('blog_button_text').'</a>';
    $result .= '</div>';
    $result .= '<div class="com-img">';
    $result .= get_the_post_thumbnail();
    $result .= '</div>';
    $result .= '</div>';
    }
    // Restore original Post Data
    wp_reset_postdata();
    $result .= '</div>';
    $result .= '</div>';
    $result .= '</div>';

    return $result;
}

add_shortcode('_industry_insights_promotions', '_industry_insights_promotions');

