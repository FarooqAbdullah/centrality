<?php
/**
 * The Employment-Page Template
 *
 * @package Objects
 * @subpackage Centrality
 */

/* Template Name: Solutions-main-page */
get_header();the_post();
?>
    <div class="content-wrapper solutions-page-heading">
	<?php $pfx="solutions_"; ?>

<h2><?php echo get_post_meta( get_the_ID(), $pfx.'Heading', true );  ?> <small><?php echo get_post_meta( get_the_ID(), $pfx.'slogan', true );  ?> </small></h2>

</div>
<div class="content-wrapper centralityServices">
  <?php echo do_shortcode('[_centrality_service]'); ?>
  
</div>
<div class="content-wrapper cabling-solutions">
<?php $hd_img=get_post_meta( get_the_ID(), $pfx.'cab_heading', true );
$hd_slogan=get_post_meta( get_the_ID(), $pfx.'cab_text', true );
$btntxt=get_post_meta( get_the_ID(), $pfx.'btn', true );
$btnurl=get_post_meta( get_the_ID(), $pfx.'btnUrl', true );
$cab_icon=get_post_meta( get_the_ID(), $pfx.'cab_icon', true );

 echo do_shortcode('[_employment_header class="employment-header" head_img="'.$cab_icon.'" heading="'.$hd_img.'" slogan="'.$hd_slogan.'" button_text="'.$btntxt.'" button_url="'.btnurl.'"]'); ?>
 </div>

 <div class="content-wrapper featured-sol greybgwrap">
    <div class="blueBgwrap">
	 <h2>Featured Solutions</h2>
	 <div class="container">
	 <div class="row-minus">

         <?php
         $featured_solution_request = get_post_meta(get_the_ID(),'choose-featured-posts',true);
         $post1_id = get_post_id_from_title($featured_solution_request[0]);
         $post2_id = get_post_id_from_title($featured_solution_request[1]);
         $post3_id = get_post_id_from_title($featured_solution_request[2]);
         $post4_id = get_post_id_from_title($featured_solution_request[3]);
?>
		 <div class="col-lg-3 col-md-3 col-sm-6">
			<div class="featuredServiceBox">
                <?php
                $fetch_result = fetch_posts('featured-solutions', 'menu_order', 'ASC',1, $post1_id);
                while ( $fetch_result->have_posts() ) {
                $fetch_result->the_post();
                   $f_title_imge =  get_field('featured_solution_post_title_image',$post1_id,true);
                    if(empty($f_title_imge)) {
                        $f_title_imge = get_template_directory_uri()."/images/on-prmise-it-support.png";
                    }
                    $f_button_text = get_field('featured_solution_button_text_button_text',$post1_id,true);
                    if(empty($f_button_text)) {
                        $f_button_text = "Learn More";
                    }
                    $f_bottom_image = get_field('featured_solution_footer_image',$post1_id,true);
                    if(empty($f_bottom_image)) {
                        $f_bottom_image = get_template_directory_uri()."/images/texture1.jpg";
                    }
                ?>
                    <img src="<?php echo $f_title_imge; ?>" />
                    <h2><?php the_title(); ?></h2>
                    <p><?php echo str_replace('<p>','',get_the_content()); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn-square blue-border"><?php echo $f_button_text; ?></a>
                    <div class="clear-fix texture1 texture"><img src="<?php echo $f_bottom_image;  ?>" /> </div>
                <?php
                }

                // Restore original Post Data
                wp_reset_postdata();
                ?>

			</div>
		 </div>
		 <!--Col-->
		 
		 <div class="col-lg-3 col-md-3 col-sm-6">
			<div class="featuredServiceBox">

                <?php
                $fetch_result = fetch_posts('featured-solutions', 'menu_order', 'ASC',1, $post2_id);
                while ( $fetch_result->have_posts() ) {
                    $fetch_result->the_post();
                    $f_title_imge =  get_field('featured_solution_post_title_image',$post2_id,true);
                    if(empty($f_title_imge)) {
                        $f_title_imge = get_template_directory_uri()."/images/on-prmise-it-support.png";
                    }
                    $f_button_text = get_field('featured_solution_button_text_button_text',$post2_id,true);
                    if(empty($f_button_text)) {
                        $f_button_text = "Learn More";
                    }
                    $f_bottom_image = get_field('featured_solution_footer_image',$post2_id,true);
                    if(empty($f_bottom_image)) {
                        $f_bottom_image = get_template_directory_uri()."/images/texture2.jpg";
                    }
                    ?>
                    <img src="<?php echo $f_title_imge; ?>" />
                    <h2><?php the_title(); ?></h2>
                    <p><?php echo str_replace('<p>','',get_the_content()); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn-square blue-border"><?php echo $f_button_text; ?></a>
                    <div class="clear-fix texture1 texture"><img src="<?php echo $f_bottom_image;  ?>" /> </div>
                <?php
                }
                // Restore original Post Data
                wp_reset_postdata();
                ?>
			</div>
		 </div>
		 <!--Col-->
		 
		 <div class="col-lg-3 col-md-3 col-sm-6">
			<div class="featuredServiceBox">

                <?php
                $fetch_result = fetch_posts('featured-solutions', 'menu_order', 'ASC',1, $post3_id);
                while ( $fetch_result->have_posts() ) {
                    $fetch_result->the_post();
                    $f_title_imge =  get_field('featured_solution_post_title_image',$post3_id,true);
                    if(empty($f_title_imge)) {
                        $f_title_imge = get_template_directory_uri()."/images/on-prmise-it-support.png";
                    }
                    $f_button_text = get_field('featured_solution_button_text_button_text',$post3_id,true);
                    if(empty($f_button_text)) {
                        $f_button_text = "Learn More";
                    }
                    $f_bottom_image = get_field('featured_solution_footer_image',$post3_id,true);
                    if(empty($f_bottom_image)) {
                        $f_bottom_image = get_template_directory_uri()."/images/texture1.jpg";
                    }
                    ?>
                    <img src="<?php echo $f_title_imge; ?>" />
                    <h2><?php the_title(); ?></h2>
                    <p><?php echo str_replace('<p>','',get_the_content()); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn-square blue-border"><?php echo $f_button_text; ?></a>
                    <div class="clear-fix texture1 texture"><img src="<?php echo $f_bottom_image;  ?>" /> </div>
                <?php
                }

                // Restore original Post Data
                wp_reset_postdata();
                ?>
			</div>
		 </div>
		 <!--Col-->
		 
		 <div class="col-lg-3 col-md-3 col-sm-6">
			<div class="featuredServiceBox last">

                <?php
                $fetch_result = fetch_posts('featured-solutions', 'menu_order', 'ASC',1, $post4_id);
                while ( $fetch_result->have_posts() ) {
                    $fetch_result->the_post();
                    $f_title_imge =  get_field('featured_solution_post_title_image',$post4_id,true);
                    if(empty($f_title_imge)) {
                        $f_title_imge = get_template_directory_uri()."/images/on-prmise-it-support.png";
                    }
                    $f_button_text = get_field('featured_solution_button_text_button_text',$post4_id,true);
                    if(empty($f_button_text)) {
                        $f_button_text = "Learn More";
                    }
                    $f_bottom_image = get_field('featured_solution_footer_image',$post4_id,true);
                    if(empty($f_bottom_image)) {
                        $f_bottom_image = get_template_directory_uri()."/images/texture1.jpg";
                    }
                    ?>
                    <img src="<?php echo $f_title_imge; ?>" />
                    <h2><?php the_title(); ?></h2>
                    <p><?php echo str_replace('<p>','',get_the_content()); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn-square blue-border"><?php echo $f_button_text; ?></a>
                    <div class="clear-fix texture1 texture"><img src="<?php echo $f_bottom_image;  ?>" /> </div>
                <?php
                }

                // Restore original Post Data
                wp_reset_postdata();
                ?>
			</div>
		 </div>
	</div>
		 
		 <div class="clear-fix"></div>
	</div>
	</div>
 </div>


    


<div class="content-wrapper"><?php echo do_shortcode('[_trusted_companies]'); ?></div>

<?php get_footer(); ?>