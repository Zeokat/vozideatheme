<?php get_header(); ?>

<div id="content">
	<div id="colCenter">
		<div class="archive-header">
			<h2 class="archive">Resultados de busqueda de &#8216;<?php the_search_query() ?>&#8217;</h2>
		</div>
		<div class="clearfix"></div>
		<div class="postbox-wrap">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="postBox" id="post-<?php the_ID(); ?>">
			<div class="postBoxInner">
				<div class="postBox-header">
					<h2 class="postBoxTitle"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				</div>
				
				<?php if ( has_post_thumbnail()) { ?>
						<a href="<?php the_permalink() ?>"><img width="150" height="190" src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>&amp;h=190&amp;w=150" alt="<?php the_title(); ?>"/></a>
					<?php } else {?>
						<img src="<?php bloginfo('template_directory'); ?>/images/nothumb.png" alt="No Thumbnail"  />
				<?php } ?>
			</div>
		</div>
		<?php endwhile; endif; ?>
		<div class="clearfix"></div>
		</div>
		<?php if (function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
	</div>
	<div id="colRight"><?php get_sidebar(); ?></div>
</div>
<div class="film-line"></div>

<?php get_footer(); ?>
