<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>); background-position: center center; background-size: cover;">
	<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
	<header class="entry-header">
		<span class="sticky-post"><?php _e( 'Featured', 'twentysixteen' ); ?></span>
	</header><!-- .entry-header -->
	<?php endif; ?>

	<div class="post-banner">
		<?php the_title( sprintf( '<h3 class="entry-title white-text uppercase"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
		<span class="post-excerpt"><?php the_excerpt(); ?></span>
		<span class="post-banner-meta">
			By <?php the_author(); ?>
			<span class="pipe"> | </span>
			<?php the_time('F j'); ?>
			<?php if (is_user_logged_in()) : ?>
			<span class="pipe"> | </span>
			<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			endif;
		?>
		</span>
	</div><!-- .post-title-bar -->

	<?php //twentysixteen_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			// the_content( sprintf(
			// 	__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
			// 	get_the_title()
			// ) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
