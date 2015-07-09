<?php
/**
 * The template for displaying footer area
 *
 * @package Objects
 * @subpackage Centrality
 */
?>
<?php $field_value_footer = get_option('myprefix_options'); ?>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 logo-wrapper">
                    <div class="logo">
                        <img src="<?php echo $field_value_footer['centrality-footer-logo']; ?>" class="img-responsive" alt=""/>
                    </div>
                    <div class="news-letter">
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="newsLetter">Get Our newsletter: </label>
                                <input type="email" name="newsLetter" class="form-control" id="newsLetter" placeholder="Your Email">
                                <button type="submit" class="btn btn-default"><img src="<?php echo get_template_directory_uri(); ?>/images/right-arrow.png"  alt=""/></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 contact-detail">
                    <p><?php echo $field_value_footer['centrality-address']; ?></p>
                    <p>PH: <?php echo $field_value_footer['centrality-phone-number']; ?></p>
                    <p>TF: <?php echo $field_value_footer['centrality-telephone-number']; ?></p>
                    <p><?php echo $field_value_footer['centrality-contact-email']; ?></p>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                    <div class="social-wrapper">
                        <div class="social">
                            <div class="fb soc-icon">
                                <i class="fa fa-facebook"></i>
                            </div>
                            <div class="soc-seprator"></div>
                            <div class="twitter soc-icon">
                                <i class="fa fa-tumblr"></i>
                            </div>
                            <div class="soc-seprator"></div>
                            <div class="yt soc-icon">
                                <i class="fa fa-youtube-play"></i>
                            </div>
                            <div class="soc-seprator"></div>
                            <div class="gplus soc-icon">
                                <i class="fa fa-google-plus"></i>
                            </div>
                        </div>
                        <div class="copy-right">
                            <?php echo $field_value_footer['centrality-copyright-text']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<?php wp_footer(); ?>
</body>
</html>