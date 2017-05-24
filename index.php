<?php get_header(); ?>

<div class="row" id="contents">
<div class="row-eq-height">
<?php get_sidebar('blog'); ?>

<?php get_template_part( 'loop-blog' ); ?>
</div>
</div>

<?php get_footer(); ?>
