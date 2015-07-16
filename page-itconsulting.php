<?php
/**
 * The IT Consulting Page Template
 *
 * @package Objects
 * @subpackage Centrality
 */

/* Template Name: IT Consulting Page */
get_header();the_post();
?>
<?php $pfx="it_con_"; ?>
    <div class="content-wrapper">
        <div class="it-consulting-page-heading">
            <div class="container">
                <div class="row-minus">
                    <div class="breadcrumbs">  Solutions / <?php echo get_post_meta(get_the_ID(),$pfx . 'breadcrumbtitle',true); ?></div>
                    <h2><?php the_title();  ?> </h2>
                </div>
            </div>
        </div>
        <div class="centralityServices">
            <div class="container">
                <div class="row-minus">
                    <div class="row-minus">
                        <div class="col-lg-3 col-md-3 sidebar-menu-it-consulting">
                            <h2>IT Management</h2>
                            <ul class="sidemenu">
                                <li> IT Consulting </li>
                                <li> Managed Services  </li>
                                <li> Helpdesk </li>
                                <li> Office 365 </li>
                                <li> Share Point </li>
                            </ul>

                        </div>
                        <div class="col-lg-9 col-md-9 srv-page-intro-box">
                            <div class="top-block-well">
                                <h2><?php echo get_post_meta(get_the_ID(),$pfx . 'grey_box_heading',true); ?> </h2>
                                <h3><?php echo get_post_meta(get_the_ID(),$pfx . 'grey_box_slogan',true); ?>  </h3>

                            </div>
                            <div class="blue-well">
                                <div class="col-lg-4 col-sm-4 col-md-4 firstCol"> <div><?php echo get_post_meta(get_the_ID(),$pfx . 'service1',true); ?> </div> </div>
                                <div class="col-lg-4 col-sm-4 col-md-4 secondCol"> <div> <?php echo get_post_meta(get_the_ID(),$pfx . 'service2',true); ?>  </div> </div>
                                <div class="col-lg-4 col-sm-4 col-md-4 thirdCol"> <div> <?php echo get_post_meta(get_the_ID(),$pfx . 'service3',true); ?> </div> </div>
                            </div>
                            <div class="lineVertical"></div>
                            <div class="blue-border-box">
                                <h2><?php echo get_post_meta(get_the_ID(),$pfx . 'whitebox_heading',true); ?> </h2>
                                <?php echo get_post_meta(get_the_ID(),$pfx . 'whitebox_text',true); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="leadGen">
            <div class="container">
                <div class="col-md-7 col-sm-7">
                    <h2><?php echo get_post_meta(get_the_ID(),$pfx . 'leadgen_heading',true); ?> </h2>
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="newsLetter">Sign up for our FREE onsite technology analysis </label>
                            <input type="email" name="newsLetter" class="form-control" id="newsLetter" placeholder="Enter Your email address to find out how to save">
                            <button type="submit" class="btn btn-default"><img src="<?php echo get_template_directory_uri(); ?>/images/right-arrow.png" alt=""></button>
                        </div>
                    </form>
                </div>
                <div class="col-md-5 col-sm-5 leadImage">
                    <div>
                        <img src="<?php echo get_post_meta(get_the_ID(),$pfx . 'leadgen_image',true); ?> " />
                    </div>
                </div>
            </div>
        </div>
        <?php
            $bus_heading  = get_post_meta(get_the_ID(),$pfx.'business-tecnolgy-right-heading', true);
            $bus_content1  = get_post_meta(get_the_ID(),$pfx.'business-tecnolgy-right-first-content', true);
            $bus_content2  = get_post_meta(get_the_ID(),$pfx.'business-tecnolgy-right-second-content', true);
            $bus_content1_num  = get_post_meta(get_the_ID(),$pfx.'business-tecnolgy-right-first-content-num', true);
            $bus_content2_num  = get_post_meta(get_the_ID(),$pfx.'business-tecnolgy-right-second-content-num', true);
            $bus_img  = get_post_meta(get_the_ID(),$pfx.'business-tecnolgy-image', true);
            $bus_button_text  = get_post_meta(get_the_ID(),$pfx.'business-tecnolgy-button-text', true);
            $bus_button_url  = get_post_meta(get_the_ID(),$pfx.'business-tecnolgy-button-url', true);
        ?>
        <?php echo do_shortcode('[_business_technology left_img="'.$bus_img.'" heading="'.$bus_heading.'" content1="'.$bus_content1.'" content2="'.$bus_content2.'" content1_num="'.$bus_content1_num.'" content2_num="'.$bus_content2_num.'" button_text="'.$bus_button_text.'" button_url="'.$bus_button_url.'" ]'); ?>
        <div class="whiteBg it-testimonials">
            <div class="container">
                <h2><?php echo get_post_meta(get_the_ID(),$pfx.'customer-saying-heading',true) ?></h2>
                <p class="testi-content"> "<?php echo get_post_meta(get_the_ID(),$pfx.'customer-saying-content',true) ?>"</p>
                <p class="testi-meta">
                    <b>-- <?php echo get_post_meta(get_the_ID(),$pfx.'customer-saying-customer-name',true) ?>,</b>
                    <?php echo get_post_meta(get_the_ID(),$pfx.'customer-saying-customer-designation',true) ?>,
                    <?php echo get_post_meta(get_the_ID(),$pfx.'customer-saying-company-name',true) ?>  </p>
<!--                <a href="#" class="btn-square btn-testi">SEE OUR CUSTOMER STORIES</a>-->
                <br /><br />
            </div>
        </div>
        <div class="blueribbon supportPhone">
            <div class="container">
                <p>Get Centrality support today. <b>CALL <?php $field_value_footer = get_option('myprefix_options');  echo $field_value_footer['centrality-phone-number']; ?></b> or <a href="#" class="btn-contactus">Contact Us Online</a> </p>
            </div>
        </div>
        <div class="greycircuitDesign">
            <div class="container">
                <div class="blueBg">
                    <h2><?php echo get_post_meta(get_the_ID(),$pfx.'unsure-need-help-heading',true) ?></h2>
                    <p><?php echo get_post_meta(get_the_ID(),$pfx.'unsure-need-help-content',true) ?></p>
                    <h3><?php echo get_post_meta(get_the_ID(),$pfx.'unsure-need-help-get-started-heading',true) ?></h3>
                    <p class="second"> (SELECT ONE) </p>
                    <a href="" class="btn-square btn-im"> <?php echo get_post_meta(get_the_ID(),$pfx.'unsure-need-help-get-started-in-it-button-text',true) ?></a>
                    <a href="" class="btn-square btn-im"> <?php echo get_post_meta(get_the_ID(),$pfx.'unsure-need-help-get-started-not-in-it-button-text',true) ?></a>
                </div>
            </div>
        </div>
        <?php echo do_shortcode('[_industry_insights_promotions heading="Industry Insights & Promotions"]'); ?>
        <?php echo do_shortcode('[_trusted_companies]'); ?>
    </div>
<?php get_footer(); ?>
