<?php get_header(); ?>

<div id="content">
	<div id="colCenter">
		<?php if (have_posts()) : ?>
		<div class="archive-header">
 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h2 class="archive">Archivo para categoria &#8216;<?php single_cat_title(); ?>&#8217;</h2>
			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h2 class="archive">Articulos etiquetados con &#8216;<?php single_tag_title(); ?>&#8217;</h2>
			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2 class="archive">Archivo para <?php the_time('F jS, Y'); ?></h2>
			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2 class="archive">Archivo para <?php the_time('F, Y'); ?></h2>
			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2 class="pagetitle">Archivo para <?php the_time('Y'); ?></h2>
			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2 class="pagetitle">Archive de autor</h2>
			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2 class="pagetitle">Archivos del blog</h2>
			<?php } endif; ?>
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
