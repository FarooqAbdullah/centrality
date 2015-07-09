<?php
/**
 * The template for displaying header area
 *
 * @package Objects
 * @subpackage Centrality
 */

?>
<?php $field_value = get_option('myprefix_options'); ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php the_title(); ?></title>

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?> >
<div class="wrapper">
    <div class="brand-change">
        <div class="row close-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <span class="pull-right"><img src="images/close.png" alt=""/></span>
        </div>
        <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="brand-change-content">
                <p class="head">Absolute, Networkikng System, Inc.</p>
                <div class="is-now">
                    <div class="line left"></div>
                    <div class="is-now-text">Is Now</div>
                    <div class="line right"></div>
                </div>
                <div class="logo-img">
                    <a href="<?php site_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png"  alt=""/>
                    </a>
                </div>
                <p class="desc-head">
                    A New Name, An Improved Commitment to You.
                </p>
                <p class="desc">
                    Centrality is more than a new name, it's a new promise to our clients. Loren Ipsum dolod sit amet, consecteture adipisicing elit,
                    sed do elusmod tempod incididunt ut labore et dolore magna eliqua. Ut enim ad minim venium, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.
                </p>
                <div class="learn-more-wrapper">
                    <a href="#" class="btn btn-default">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <header>
        <div class="row">
            <div class="main-nav-wrapper">
                <nav class="hidden-xs">
                    <div class="col-md-6 col-xs-12 col-lg-6 col-sm-6 logo-wrapper">
                        <a href="<?php echo site_url(); ?>">
                            <img src="<?php echo $field_value['centrality-header-logo']; ?>"  alt="Logo"/>
                        </a>
                    </div>
                    <div class="col-md-6 col-xs-12 col-lg-6 col-sm-6 logo-right-wrapper">
                        <?php
                        main_navigation('main-menu',false, $field_value);
                        ?>
                    </div>
                </nav>
                <nav class="navbar navbar-default hidden-lg visible-xs">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?php home_url(); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"  alt="Logo"/>
                            </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <?php
                            main_navigation('main-menu',true, $field_value);
                            ?>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 tophat-wrapper">
                <p class="center-block"><?php echo $field_value['centrality-header-slogan']; ?>, <span>Learn More</span> <img src="<?php echo $field_value['centrality-header-slogan-image']; ?>" alt=""/></p>
            </div>
        </div>
    </header>