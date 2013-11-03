
<?php get_header(); ?>

<div id="content">
	<div id="colCenter">
		<div class="entry-wrap">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="entry-header">
				<h1 class="post-title"><?php the_title(); ?></h1>
			</div>
			<div class="entry"><?php the_content(); ?></div>
			<div class="clearfix"></div>
			<div class="entry-footer">
				<div class="post-meta">
					<span class="post-info-date"><?php the_time('F jS, Y') ?></span>
					<span class="post-info-autor"><?php the_author() ?></span>
				</div>
			</div>
		<?php endwhile; endif; ?>
		</div>
	</div>
	<div id="colRight"><?php get_sidebar(); ?></div>
</div>
<div class="film-line"></div>

<?php get_footer(); ?>
