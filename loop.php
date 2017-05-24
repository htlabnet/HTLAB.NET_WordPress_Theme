<div class="col-xs-12 col-sm-8 col-md-9" id="article">
<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<article class="post">
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<?php the_content(); ?>
</article>

<?php
endwhile;
endif;
?>
</div>
