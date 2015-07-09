<?php
/********************************
Theme Navigation
********************************/
function main_navigation($menu, $option, $field_value){

$menu_items = wp_get_nav_menu_items($menu);
if($option) {
$ulClass = "navbar-nav";
}
else {
$ulClass = "";
}
?>
<ul class="nav <?php echo $ulClass; ?>">
    <?php

    foreach ( (array) $menu_items as $key => $val ) {
        if($val->post_title == "Solutions") {
            ?>
            <li class="dropdown solution">
                <a href="<?php echo $val->url; ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <?php echo $val->post_title; ?>
                </a>
                <div class="dropdown-menu solutions">
                    <div class="arrow-up"></div>
                    <div class="solution-dropdown-wrapper row">
                        <div class="search-head">
                            <span class="glyphicon glyphicon-search"></span>
                            <a href="#">
                                Find a custom it solution crafted for your business - <span class="centralitity-solution">Try Centrality's Solution Finder</span>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/right-arrow.png" alt=""/>
                            </a>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row menu-links">
                            <?php
                            $inner_menu = wp_get_nav_menu_items("inner-menu");
                            $inner_menu_loop_num = 1;
                            foreach ( (array) $inner_menu as $inner_key => $inner_val ) {
                                $title = $inner_val->title;
                                $menu_wrapper_class = strtolower(str_replace(' ','-',$title));
                                $menu_wrapper_class_f = $menu_wrapper_class."-wrapper";
                                if($inner_val->menu_item_parent == 0) {
                                    if($inner_menu_loop_num < 3){
                                        ?>
                                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 <?php echo $menu_wrapper_class_f; ?>">
                                            <h2><?php echo $inner_val->title; ?></h2>
                                            <?php
                                            $subMenuItem = get_nav_menu_item_children($inner_menu[$inner_key]->ID, $inner_menu);
                                            $sizeOfArray = ceil(sizeof($subMenuItem)/2);
                                            ?>
                                            <?php
                                            $loop_num = 1;
                                            foreach($subMenuItem as $skey => $sval){
                                                if($inner_val->title != "Industries" ) {
                                                    if(!empty($subMenuItem)){
                                                        if($loop_num == 1) {
                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding-right-0 padding-left-0">';
                                                            echo '<ul>';
                                                        }
                                                        echo '<li>';
                                                        echo '<a href="'.$subMenuItem[$skey]->url.'">';
                                                        echo $subMenuItem[$skey]->title;
                                                        echo '</a>';
                                                        echo '</li>';
                                                        if($loop_num == $sizeOfArray) {
                                                            echo '</ul>';
                                                            echo '</div>';
                                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding-right-0 padding-left-0">';
                                                            echo '<ul>';
                                                        }
                                                        if($loop_num == sizeof($subMenuItem)) {
                                                            echo '</ul>';
                                                            echo '</div>';
                                                        }
                                                    }
                                                }
                                                $loop_num++;
                                            }
                                            ?>
                                        </div>
                                        <?php
                                        $inner_menu_loop_num++;
                                    }
                                    elseif($inner_menu_loop_num == 3) {
                                        ?>
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 industries-wrapper">
                                            <h2><?php echo $inner_val->title; ?></h2>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-right-0 padding-left-0">
                                                <ul>
                                                    <?php
                                                    $thirdCol = get_nav_menu_item_children($inner_menu[$inner_key]->ID, $inner_menu);
                                                    foreach($thirdCol as $skey => $sval){
                                                        echo  '<li><a href="'.$thirdCol[$skey]->url.'" >'.$thirdCol[$skey]->title.'</a></li>';
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="row featured-solution">
                        <div class="container">
                            <h2>Featured Solutions</h2>
                            <?php
                            $fetch_result = fetch_posts('featured-solutions', 'menu_order', 'ASC',4);
                            while ( $fetch_result->have_posts() ) {
                                $fetch_result->the_post();
                                ?>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail(); ?>
                                        <span> <?php the_title(); ?></span>
                                    </a>
                                </div>
                                <?php
                            }

                            // Restore original Post Data
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
            </li>
        <?php
        }
        elseif($val->post_title == "REQUEST SERVICE") {
            ?>
            <li class="dropdown">
                <a href="<?php echo $val->url; ?>" class="dropdown-toggle btn btn-default pull-right" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $val->post_title ?>: <span><?php echo $field_value['centrality-service-request']; ?></span></a>
                <div class="dropdown-menu">
                    <div class="arrow-up"></div>
                    <div class="row head">
                        <div class="text-center">
                            Request Service Now
                        </div>
                        <span>To Request Service or a pricing quote:</span>
                    </div>
                    <div class="row request-service-form">
                        <p>Call <?php echo $field_value['centrality-service-request']; ?> or fill out the form below.</p>

                        <form action="#" method="post" class="form-inine">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 padding-right-0 padding-left-0" >
                                    <input type="text" class="form-control" name="first-name" placeholder="First Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 padding-right-0 padding-left-0" >
                                    <input type="text" class="form-control" name="last-name" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 padding-right-0 padding-left-0" >
                                    <input type="email" class="form-control" name="email" placeholder="Your Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 padding-right-0 padding-left-0" >
                                    <input type="text" class="form-control" name="company" placeholder="Last Company">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 padding-right-0 padding-left-0" >
                                    <input type="tel" class="form-control" name="phone" placeholder="Phone Number">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 padding-right-0 padding-left-0" >
                                    <select name="system-type" class="form-control">
                                        <option value="1"> One</option>
                                        <option value="2"> Two</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-right-0 padding-left-0">
                                    <textarea name="comments" cols="30" placeholder="comments" rows="10" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row note">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-left-0 padding-right-0">
                                    All information Submitted to Centrality is kept completely private.
                                </div>
                            </div>
                            <div class="row submit">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-left-0 padding-right-0">
                                    <button type="submit" class="btn btn-default">Submit Service Request</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </li>
        <?php
        }
        else {
            ?>
            <li>
                <a href="<?php echo $val->url; ?>" >
                    <?php echo $val->title; ?>
                </a>
            </li>
        <?php
        }
    }
    ?>
</ul>
<?php
}
function get_nav_menu_item_children( $parent_id, $nav_menu_items ) {
    $nav_menu_item_list = array();
    foreach ( (array) $nav_menu_items as $nav_menu_item ) {
        if ( $nav_menu_item->menu_item_parent == $parent_id ) {
            $nav_menu_item_list[] = $nav_menu_item;
            if ( $children = get_nav_menu_item_children( $nav_menu_item->ID, $nav_menu_items ) )
                $nav_menu_item_list = array_merge( $nav_menu_item_list, $children );
        }
    }
    return $nav_menu_item_list;
}
