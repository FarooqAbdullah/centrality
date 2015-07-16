<?php

//short code function for Centrality Service Content.
function _centrality_service($atts, $content = null) {

    extract(shortcode_atts(array(
        'heading'=> get_post_meta(get_the_ID(),'centrality-service-heading',true)
    ), $atts));
    if(!isset($heading)) {
        $heading = '';
    }

    $result = '<div class="centrality-service-wrapper row">';
    $result .= '<div class="centrality-service">';
    $result .= $heading;
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

    $theme_options = get_option('myprefix_options');

    extract(shortcode_atts(array(
        'trusted_heading' => $theme_options['trusted-companies-heading-text'],
    ), $atts));
    if(!isset($trusted_heading)) {
        $trusted_heading = '';
    }

    $result = '<div class="row trusted-companies-wrapper">';
    $result .= '<div class="container">';
    $result .= '<h3>'.$trusted_heading.'</h3>';
    if( !empty($theme_options['trusted-companies-img']) ):
        $array_size = sizeof($theme_options['trusted-companies-img']);
        $loop_num = 0;
        // loop through the rows of data
        while ( $loop_num < $array_size ) :
           $result .= '<div class="col-md-4 col-lg-2 col-sm-4 col-xs-6">';
           $result .= '<img src="'.$theme_options['trusted-companies-img'][$loop_num]['trusted-comapnies-single-image'].'" alt=""/>';
           $result .= '</div>';
        $loop_num++;
        endwhile;
    endif;
    $result .= '</div>';
    $result .= '</div>';

    return $result;
}

add_shortcode('_trusted_companies', '_trusted_companies');

//short code function for Industry Insights & Promotions Content.
function _industry_insights_promotions($atts, $content = null) {

    extract(shortcode_atts(array(
        'heading'=> get_post_meta(get_the_ID(),'industry_insight_promotion_heading',true)
    ), $atts));
    if(!isset($heading)) {
        $heading = '';
    }

    $result = '<div class="row industry-insights-promotion-wrapper">';
    $result .= '<div class="container">';
    $result .= '<h2>'.$heading.'</h2>';
    $result .= '<div class="insights-promotion row">';
    $promotion_fetch = fetch_posts('promotion','menu_order', 'ASC', 1);
    while ( $promotion_fetch->have_posts() ) {
        $promotion_fetch->the_post();
    $result .= '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 '.get_field('category-promotion-wrapper-class').'">';
    $result .= '<p class="head">'.get_field('category-promotion-post-type').'</p>';
    $result .= '<h2>'.get_the_title().'</h2>';
    $result .= '<p class="desc">';
    $result .= str_replace('<p>','',get_the_content());
    $result .= '</p>';
    $result .= '<div class="btn-wrapper">';
    $result .= '<a href="'.get_the_permalink().'" class="btn btn-default">'.get_field('category-promotion-button-text').'</a>';
    $result .= '</div>';
    $result .= '<div class="com-img">';
    $result .= get_the_post_thumbnail();
    $result .= '</div>';
    $result .= '</div>';
    }
    // Restore original Post Data
    wp_reset_postdata();

    $blog_fetch = fetch_posts('blog-promotion','menu_order', 'ASC', 2);
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

//short code function for Trusted Companies Content.
function _employment_header($atts, $content = null) {

    $image_url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large' );
    $page = get_page_by_path('employment');
    $pageID = '';
    if($page) {
        $pageID = $page->ID;
    }
    extract(shortcode_atts(array(
        'heading'=> get_field('centrality_employment_heading',$pageID),
        'slogan'=> get_field('centrality_employment_heading_slogan',$pageID),
        'button_text'=> get_field('centrality_employment_header_button_text',$pageID),
        'button_url'=> get_field('centrality_employment_heading_button_url',$pageID),
        'head_img'=> '',
        'is_slogan'=> true
    ), $atts));
    if(!isset($heading)) {
        $heading = '';
    }
    if(!isset($slogan)) {
        $slogan = '';
    }
    if(!isset($button_text)) {
        $button_text = '';
    }
    if(!isset($button_url)) {
        $button_url = '';
    }
    if(!isset($head_img)) {
        $head_img = '';
    }
    if(!isset($is_slogan)) {
        $is_slogan = '';
    }

    $result = '<div class="header-wrapper" style="background-image:url('.(!empty($image_url[0]) ? $image_url[0] : get_template_directory_uri()."/images/employment-header.jpg" ).');background-size:100% 100%;">';
    $result .= '<div class="container">';
    if($head_img) {
        $result .= '<img src="'.$head_img.'" alt="" />';
    }
    $result .= '<h1>'.$heading.'</h1>';
    if($is_slogan) {
        $result .= '<h2>'.$slogan.'</h2>';
    }
    $result .= '<a href="'.$button_url.'" class="btn-square">'.$button_text.'</a>';
    $result .= '</div>';
    $result .= '</div>';

    return $result;
}

add_shortcode('_employment_header', '_employment_header');

//short code function for Social Icons.
function _social_icon($atts, $content = null) {

    extract(shortcode_atts(array(
        'url'=> '#',
        'name'=> '',
        'class'=> ''
    ), $atts));
    if(!isset($url)) {
        $url = '';
    }
    if(!isset($name)) {
        $name = '';
    }
    if(!isset($class)) {
        $class = '';
    }

    $result = '<div class="'.$class.' soc-icon">';
    $result .= '<a href="'.$url.'">';
    $result .= '<i class="fa fa-'.$name.'"></i>';
    $result .= '</a>';
    $result .= '</div>';


    return $result;
}
add_shortcode('_social_icon', '_social_icon');

//short code function for Trusted Companies Content.
function _statistics($atts, $content = null) {

    $image_url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large' );
    $page = get_page_by_path('employment');
    $pageID = '';
    if($page) {
        $pageID = $page->ID;
    }
    extract(shortcode_atts(array(
        'heading'=> '',
        'statistics1'=> '',
        'statistics1_year'=> '',
        'statistics2'=> '',
        'statistics2_year'=> '',
        'statistics3'=> '',
        'statistics3_year'=> '',
        'is_year'=> true
    ), $atts));
    if(!isset($heading)) {
        $heading = '';
    }
    if(!isset($statistics1)) {
        $statistics1 = '';
    }
    if(!isset($statistics1_year)) {
        $statistics1_year = '';
    }
    if(!isset($statistics2)) {
        $statistics2 = '';
    }
    if(!isset($statistics2_year)) {
        $statistics2_year = '';
    }
    if(!isset($statistics3)) {
        $statistics3 = '';
    }
    if(!isset($statistics3_year)) {
        $statistics3_year = '';
    }
    if(!isset($is_year)) {
        $is_year = '';
    }

    $result = '<div class="row">';
    $result .= '<div class="container text-center we-strive">';
    $result .= '<div class="col-lg-7 col-sm-7 col-md-7 centerText">';
    $result .= '<h2>'.$heading.'</h2>';
    $result .= '<div class="row-minus">';
    $result .= '<div class="col-lg-4 col-md-4 col-sm-4 number-box">';
    if($is_year) {
        $result .= '<h3>'.$statistics1_year.'</h3>';
    }
    $result .= '<h4> '.$statistics1.'</h4>';
    $result .= '</div>';
    $result .= '<div class="col-lg-4 col-md-4 col-sm-4 number-box">';
    if($is_year) {
        $result .= '<h3>'.$statistics2_year.'</h3>';
    }
    $result .= '<h4>'.$statistics2.'</h4>';
    $result .= '</div>';
    $result .= '<div class="col-lg-4 col-md-4 col-sm-4 number-box">';
    if($is_year) {
        $result .= '<h3>'.$statistics3_year.'</h3>';
    }
    $result .= '<h4> '.$statistics3.'</h4>';
    $result .= '</div>';
    $result .= '</div>';
    $result .= '</div>';
    $result .= '</div>';
    $result .= '</div>';

    return $result;
}

add_shortcode('_statistics', '_statistics');

//short code function for Features Content.
function _feature_template($atts, $content = null) {

    extract(shortcode_atts(array(
        'heading'=> ''
    ), $atts));
    if(!isset($heading)) {
        $heading = '';
    }

    $result = '<div class="row uniquely-qualified">';
    $result .= '<div class="container">';
    $result .= '<h2>'.$heading.'</h2>';
    $result .= '<div class="col-lg-6 col-md-6 block1"><div class="ribbon"></div>';
    $result .= '<ul>';
    $featured_values = get_post_meta(get_the_ID(),'featured-template', true);
    $size = ceil(sizeof($featured_values)/2);
    $loo_num = 0;
    if(!empty($featured_values)) {
        foreach($featured_values as $featured_value) {
            if($loo_num == $size) {
                $result .= '</ul>';
                $result .= '</div>';
                $result .= '<div class="col-lg-6 col-md-6 block2"><div class="ribbon"></div>';
                $result .= '<ul>';
            }
            $result .= '<li>'.$featured_value['_feature'].'</li>';
            $loo_num++;
        }
    }
    $result .= '</ul>';
    $result .= '</div>';
    $result .= '</div>';
    $result .= '</div>';

    return $result;
}

add_shortcode('_feature_template', '_feature_template');

//short code function for Business Technology Content.
function _business_technology ($atts, $content = null) {

    extract(shortcode_atts(array(
        'heading'=> '',
        'left_img'=> get_template_directory_uri().'/images/business-technology.png',
        'button_text'=> '',
        'button_url'=> '',
        'content1_num'=> '',
        'content2_num'=> '',
        'content1'=> '',
        'content2'=> ''
    ), $atts));
    if(!isset($heading)) {
        $heading = '';
    }
    if(!isset($left_img)) {
        $left_img = '';
    }
    if(!isset($content1_num)) {
        $content1_num = '';
    }
    if(!isset($content1)) {
        $content1 = '';
    }
    if(!isset($content2_num)) {
        $content2_num = '';
    }
    if(!isset($content2)) {
        $content2 = '';
    }
    if(!isset($button_text)) {
        $button_text = '';
    }
    if(!isset($button_url)) {
        $button_url = '';
    }

    $pieces = explode(" ", $heading);
    $first_part = implode(" ", array_splice($pieces, 0, 2));

    $result = '<div class="row business-technology">
        <div class="col-lg-7 col-m-7 col-sm-7 col-xs-12 padding-left-0 padding-right-0 left-wrapper">
            <img src="'.$left_img.'" alt=""/>
        </div>
        <div class="col-lg-5 col-m-5 col-sm-5 col-xs-12 right-wrapper padding-left-0 padding-right-0">
            <div class="right">
                <h2>'.str_replace($first_part,"<span>$first_part</span>", $heading).'</h2>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-left-0">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding-left-0">
                        <img src="'.get_template_directory_uri().'/images/white-cap.png"  alt=""/>
                        <div class="num">'.$content1_num.'</div>
                        <div class="content">
                            '.$content1.'
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding-left-0">
                        <img src="'.get_template_directory_uri().'/images/white-cap.png"  alt=""/>
                        <div class="num">'.$content2_num.'</div>
                        <div class="content">
                            '.$content2.'
                        </div>
                    </div>
                </div>
                <a href="'.$button_url.'" class="btn btn-default">'.$button_text.'</a>
            </div>
        </div>
    </div>';


    return $result;
}

add_shortcode('_business_technology', '_business_technology');

//short code function for Working with Centrality Content.
function _working_with_centrality($atts, $content = null) {

    $theme_options = get_option('myprefix_options');
    extract(shortcode_atts(array(
        'heading'=> $theme_options['working-with-centrality-heading'],
        'simple_img'=> $theme_options['working-with-centrality-simple-image'],
        'smart_img'=> $theme_options['working-with-centrality-smart-image'],
        'flexible_img'=> $theme_options['working-with-centrality-flexible-image'],
        'simple_title'=> $theme_options['working-with-centrality-simple-title'],
        'simple_description'=> $theme_options['working-with-centrality-simple-description'],
        'smart_title'=> $theme_options['working-with-centrality-smart-title'],
        'flexible_title'=> $theme_options['working-with-centrality-flexible-title'],
        'smart_description'=> $theme_options['working-with-centrality-smart-description'],
        'flexible_description'=> $theme_options['working-with-centrality-flexible-description'],
        'button_text'=> $theme_options['working-with-centrality-button-text'],
        'button_url'=> $theme_options['working-with-centrality-button-url'],
        'button_img'=> $theme_options['working-with-centrality-button-image'],
    ), $atts));
    if(!isset($heading)) {
        $heading = '';
    }
    if(!isset($simple_img)) {
        $simple_img = '';
    }
    if(!isset($smart_img)) {
        $smart_img = '';
    }
    if(!isset($flexible_img)) {
        $flexible_img = '';
    }
    if(!isset($simple_title)) {
        $simple_title = '';
    }
    if(!isset($simple_description)) {
        $simple_description = '';
    }
    if(!isset($smart_title)) {
        $smart_title = '';
    }
    if(!isset($flexible_title)) {
        $flexible_title = '';
    }
    if(!isset($smart_description)) {
        $smart_description = '';
    }
    if(!isset($flexible_description)) {
        $flexible_description = '';
    }
    if(!isset($button_text)) {
        $button_text = '';
    }
    if(!isset($button_url)) {
        $button_url = '';
    }
    if(!isset($button_img)) {
        $button_img = '';
    }

    $result = '<div class="row working-with-centrality-wrapper">';
    $result .= '<div class="container">';
    $result .= '<h3>'.$heading.'</h3>';
    $result .= '<div class="steps-wrapper row">';
    $result .= '<div class="working-steps-choices col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-left-0 padding-right-0">';
    $result .= '<div class="steps-choices">';
    $result .= '<div class="choice-img-wrapper">';
    $result .= '<img src="'.$simple_img.'" alt=""/>';
    $result .= '<span class="steps-line line-right"></span>';
    $result .= '</div>';
    $result .= '<h2>'.$simple_title.'</h2>';
    $result .= '<div class="choices-smart-object">';
    $result .= '<img src="'.get_template_directory_uri().'/images/smart-object.png" alt=""/>';
    $result .= '</div>';
    $result .= '<p>'.$simple_description.'</p>';
    $result .= '</div>';
    $result .= '</div>';
    $result .= '<div class="working-steps-choices col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-left-0 padding-right-0">';
    $result .= '<div class="steps-choices">';
    $result .= '<div class="choice-img-wrapper">';
    $result .= '<span class="steps-line line-left"></span>';
    $result .= '<img src="'.$flexible_img.'" alt=""/>';
    $result .= '<span class="steps-line line-right"></span>';
    $result .= '</div>';
    $result .= '<h2>'.$flexible_title.'</h2>';
    $result .= '<div class="choices-smart-object">';
    $result .= '<img src="'.get_template_directory_uri().'/images/smart-object.png" alt=""/>';
    $result .= '</div>';
    $result .= '<p>'.$flexible_description.'</p>';
    $result .= '</div>';
    $result .= '</div>';
    $result .= '<div class="working-steps-choices col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-left-0 padding-right-0">';
    $result .= '<div class="steps-choices">';
    $result .= '<div class="choice-img-wrapper">';
    $result .= '<span class="steps-line line-left"></span>';
    $result .= '<img src="'.$smart_img.'" alt=""/>';
    $result .= '</div>';
    $result .= '<h2>'.$smart_title.'</h2>';
    $result .= '<div class="choices-smart-object">';
    $result .= '<img src="'.get_template_directory_uri().'/images/smart-object.png" alt=""/>';
    $result .= '</div>';
    $result .= '<p>'.$smart_description.'</p>';
    $result .= '</div>';
    $result .= '</div>';
    $result .= '</div>';
    $result .= '<div class="steps-discover-more-wrapper">';
    $result .= '<a href="'.$button_url.'" class="btn btn-default">';
    $result .= $button_text;
    $result .= '<img src="'.$button_img.'"  alt=""/>';
    $result .= '</a>';
    $result .= '</div>';
    $result .= '</div>';
    $result .= '</div>';


    return $result;
}

add_shortcode('_working_with_centrality', '_working_with_centrality');

?>