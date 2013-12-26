
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
					<span class="post-cats">Categorias: <?php the_category(', ') ?></span>
				</div>
			</div>
		<?php endwhile; endif; ?>
		<?php if(function_exists(dsq_is_installed) && !is_preview()) {
				if (get_option('disqus_active') === '1') {
					echo '<div class="comentarios">';
					comments_template();
					echo '</div>';	}  } ?>
		</div>
	</div>
	<div id="colRight"><?php get_sidebar(); ?></div>
</div>
<div class="film-line"></div>

<?php get_footer(); ?>
