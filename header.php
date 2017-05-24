<?php

$separator = "&nbsp;>>&nbsp;";
$blog_name = "Blog";
$blog_link = "<a href=\"/blog/\">".$blog_name."</a>";

if (is_page()) {
	foreach ( array_reverse($post->ancestors) as $ancestor) {
		$breadcrumbs .= "<a href =\"".get_permalink($ancestor)."\">".get_the_title($ancestor)."</a>".$separator;
	}
	if (!is_front_page()){
		$breadcrumbs .= $post -> post_title;
	}
}

if (is_home()) {
	$breadcrumbs = $blog_name;
}

if (is_single()) {
	$breadcrumbs .= $blog_link.$separator;
	$cat = get_the_category();
	$breadcrumbs .= get_category_parents($cat[0], true, $separator);
	$breadcrumbs .= get_the_title();
}

if (is_date()) {
	$breadcrumbs .= $blog_link.$separator;
	if (is_day()) {
		$breadcrumbs .= "<a href=\"".get_year_link(get_query_var('year'))."\">".get_query_var('year')."年</a>".$separator;
		$breadcrumbs .= "<a href=\"".get_month_link(get_query_var('year'), get_query_var('monthnum'))."\">".get_query_var('monthnum')."月</a>".$separator;
		$breadcrumbs .= get_query_var('day')."日";
	}
	if (is_month()) {
		$breadcrumbs .= "<a href=\"".get_year_link(get_query_var('year'))."\">".get_query_var('year')."年</a>".$separator;
		$breadcrumbs .= get_query_var('monthnum')."月";
	}
	if (is_year()){
		$breadcrumbs .= get_query_var('year')."年";
	}

}

if (is_category()) {
	$breadcrumbs .= $blog_link.$separator;
	$cat = get_queried_object();
	if ($cat -> parent != 0) {
		$ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
		foreach($ancestors as $ancestor) {
			$breadcrumbs .= "<a href=\"".get_category_link($ancestor)."\">".get_cat_name($ancestor)."</a>".$separator;
		}
	}
	$breadcrumbs .= $cat -> cat_name;
}

if (is_author()) {
	$breadcrumbs .= $blog_link.$separator;
	$breadcrumbs .= "投稿者 : ".the_author_meta('display_name', get_query_var('author'));
}

if (is_attachment()) {
	if($post -> post_parent != 0 ){
		$breadcrumbs .= "<a href=".get_permalink($post -> post_parent)."\">".get_the_title($post -> post_parent)."</a>".$separator;
		$breadcrumbs .= $post -> post_title;
	}
}

if (is_search()) {
	$breadcrumbs = "「".the_search_query()."」で検索した結果";
}

if (is_tag()) {
	$breadcrumbs = "Tag : ".single_tag_title();
}

if (is_404()) {
	$breadcrumbs = "404 Not found";
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
<?php wp_head(); ?>
</head>
<body>
<div class="container-fluid" id="container" style="background-color:#F5F5F5;">

	<div id="header">

	<header>

	<div class="row" style="padding-top:10px; padding-bottom:10px; background-color:#6699CC; color:#EDEDEF;">

	<div class="col-xs-12 col-sm-12 col-md-10" id="header_left">

	<div id="logo" style="display:inline-block; vertical-align:top; width:300px; height:60px;">
		<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" width="300" height="60" alt="High Energy Technology Laboratory" /></a>
	</div>

	<div class="hidden-xs" style="display:inline-block; vertical-align:top; height:60px;">
	<div style="position:absolute; bottom:0; margin-left:10px;">
	<span id="main-title"><?php bloginfo('name'); ?>へようこそ</span><br />
	<span id="sub-title"><?php bloginfo( 'description' ); ?></span>
	</div>
	</div>

	</div>

	<div class="hidden-xs hidden-sm col-md-2" id="header_right">
		
	</div>

	</div>

	<div class="row" id="navhead">
		<div class="col-xs-12 col-sm-12 col-md-8" id="navhead_left">
		<nav id="main_navigation">
			<?php wp_nav_menu( array('menu' => 'TopMenu', 'menu_class' => 'list-inline' )); ?>
		</nav>
		</div>

		<div class="hidden-xs hidden-sm col-md-4" id="navhead_right" style="text-align:right;">
			<ul class="list-inline"> 
			<li><a href="#" onclick="window.print();return false;">このページを印刷する</a></li> 
			</ul>
		</div>
	</div>

	<div class="row" id="navlist">
		<div class="col-xs-12 col-sm-12 col-md-8" id="navlist_left">
		<nav>
			<a href="/">Top</a><?php echo $separator.$breadcrumbs; ?>
		</nav>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-4" id="navlist_right" style="text-align:right;">
			<span>最終更新日: <?php the_modified_date(); ?> <?php the_modified_time('G:i'); ?></span>
		</div>
	</div>

	</header>

	</div>

