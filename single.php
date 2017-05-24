<?php get_header(); ?>

<div class="row" id="contents">
<div class="row-eq-height">
<?php get_sidebar('blog'); ?>

<div class="col-xs-12 col-sm-8 col-md-9" id="article">
<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
 
	<div id="content">
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
	<?php comments_template(); ?>
	</div>
 
<?php
endwhile;
endif;
?>
</div>
</div>
</div>

<?php get_footer(); ?>
