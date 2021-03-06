<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Listify
 */

get_header(); ?>

	<div 
	<?php
	echo apply_filters(
		'listify_cover',
		'page-cover page-cover--large',
		array( // WPCS: XSS ok.
			'size' => 'full',
		)
	);
	?>
	>
		<h1 class="page-title cover-wrapper">
		<?php
		the_post();
		the_title();
		rewind_posts();
		?>
		</h1>
	</div>

	<div id="primary" class="container">
		<div class="row content-area">

			<?php if ( 'left' === esc_attr( listify_theme_mod( 'content-sidebar-position', 'right' ) ) ) : ?>
				<?php get_sidebar(); ?>
			<?php endif; ?>

			<main id="main" class="site-main col-12 <?php echo esc_attr( 'none' !== listify_theme_mod( 'content-sidebar-position', 'right' ) && is_active_sidebar( 'widget-area-sidebar-1' ) ? 'col-sm-7 col-md-8' : null ); ?>" role="main">

				<?php
				while ( have_posts() ) :
					the_post();
					?>

					<?php get_template_part( 'content' ); ?>

					<?php comments_template(); ?>

				<?php endwhile; ?>

			</main>

			<?php if ( 'right' === esc_attr( get_theme_mod( 'content-sidebar-position', 'right' ) ) ) : ?>
				<?php get_sidebar(); ?>
			<?php endif; ?>

		</div>
	</div>

<?php get_footer(); ?>
