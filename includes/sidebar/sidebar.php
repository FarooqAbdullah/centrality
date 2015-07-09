<?php

/********************************
    Register Employment Page Sidebar
 ********************************/
 $sidebarargs = array(
	'name'          => __( 'Employment Page Sidebar', 'centrality' ),
	'id'            => 'employment-sidebar',
	'description'   => '',
        'class'         => '',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle employment-widget-title">',
	'after_title'   => '</h2>' );
	register_sidebar($sidebarargs);