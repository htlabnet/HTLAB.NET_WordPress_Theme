<?php
/* Template Name: Page */
get_header(); ?>


<div class="row" id="contents">
<div class="row-eq-height">
<?php get_sidebar(); ?>


<div class="col-xs-12 col-sm-8 col-md-9" id="article">
<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<article class="post">
	<?php the_content(); ?>
</article>
 
<?php
endwhile;
endif;
?>
</div>
</div>
</div>

<?php get_footer(); ?>
