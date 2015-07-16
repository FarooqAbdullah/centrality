<?php
/**
 * The Blog-Page Template
 *
 * @package Objects
 * @subpackage Centrality
 */

/* Template Name: Blog Main Pages */
get_header();the_post();
?>
<div class="content-wrapper">
    <div class="row centrality-source">
        <?php
//        $id = get_the_ID();
        $post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');
        ?>
        <div class="centrality-source-center" style="background-image: url(<?php echo $post_thumbnail[0]; ?>);">
            <h2><?php echo get_post_meta(get_the_ID(),'blog-main-heading',true); ?></h2>
            <h6><?php echo get_post_meta(get_the_ID(),'blog-main-heading-slogan',true); ?></h6>
            <img src="<?php echo get_template_directory_uri(); ?>/images/centrality-source-bottom.png" alt=""/>
        </div>
    </div>
    <div class="row centrality-blog-main">
        <div class="row container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wrapper">
                <?php
                $blog_fetch = fetch_posts('blog','menu_order', 'ASC', -1);
                while ( $blog_fetch->have_posts() ) {
                $blog_fetch->the_post();
                    ?>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <a href="<?php the_permalink(); ?>">
                                <div class="row img">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="row">
                                    <div class="date">
                                        <?php the_time('D , M d, Y');  ?>
                                    </div>
                                    <div class="title">
                                        <?php the_title(); ?>
                                    </div>
                                    <div class="description">
                                        <?php echo get_field('category-blog-short-description'); ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                }
                // Restore original Post Data
                wp_reset_postdata();
                ?>

            </div>
            <div class="row load-more">
                <button class="btn btn-default">Load More</button>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>