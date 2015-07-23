<?php
/**
 * This Page is use to display contact Template
 *
 * @package Objects
 * @subpackage Centrality
 */

/* Template Name: Contact */
get_header();the_post();
?>
    <div class="content-wrapper">
        <div class="container contact">
            <form method="post" name="contact-form" action="<?php the_permalink(); ?>">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" required="required" id="firstname" name="firstname" placeholder="First Name">
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" required="required" placeholder="Last Name">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" required="required" name="email" placeholder="Email">
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label for="phone">Phone Number</label>
                        <input type="tel" class="form-control" required="required" id="phone" name="phone" placeholder="Phone Number">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" required="required" name="message" placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="hidden" name="action" value="contact"/>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php get_footer(); ?>