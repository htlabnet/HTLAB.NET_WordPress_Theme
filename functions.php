<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
		'name' => 'SideMenu',
		'id' => 'side_menu',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2 class="widget_title">',
        'after_title' => '</h2>',
	));
    register_sidebar(array(
		'name' => 'BlogMenu',
		'id' => 'blog_menu',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2 class="widget_title">',
        'after_title' => '</h2>',
    ));
?>

<?php add_theme_support( 'menus' ); ?>
