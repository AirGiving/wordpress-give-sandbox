<?php
/**
 * The template for displaying a list of gallery items for a job listing.
 *
 * Must pass an array of attachment IDs and a limit to show [$gallery, $limit]
 *
 * @package Listify
 * @version 2.3.0
 */

global $listify_job_manager, $job_preview;

if ( empty( $gallery ) ) {
	$gallery = array( -1 );
}

$attachments = Listify_WP_Job_Manager_Gallery::get( get_post()->ID );
?>

<ul class="listify-gallery-images">
	<?php if ( empty ( $attachments ) ) : ?>
		<?php if ( ! is_admin() ) : ?>
		<li class="gallery-no-images">
			<?php _e( 'No images found.', 'listify' ); ?>

			<?php if ( $listify_job_manager->gallery->can_upload_to_listing() ) : ?>
				<a href="#add-photo" class="popup-trigger"><?php _e( 'Why not add your own?', 'listify' ); ?></a>
			<?php endif; ?>
		</li>
		<?php endif; ?>
	<?php else : ?>
		<?php foreach ( $attachments as $id ) : ?>
			<?php $thumb = wp_get_attachment_image_src( $id, 'thumbnail' ); ?>
			<?php $full = wp_get_attachment_image_src( $id, 'fullsize' ); ?>
			<?php $attachment_caption = wp_get_attachment_caption($id); ?>
			<li class="gallery-preview-image" style="background-image:url(<?php echo esc_url( $thumb[0] ); ?>);">
				<?php if ( ! listify_theme_mod( 'gallery-comments', true ) ) : ?>
					<a href="<?php echo esc_url( $full[0] ); ?>" class="listing-gallery__item-trigger"></a>
				<?php elseif ( ! $job_preview ) : ?>
					<a href="<?php echo get_attachment_link( $id ); ?>"></a>
				<?php endif; ?>
				<?php if(!empty($attachment_caption)){ ?>
					<span class="gallery-image-caption"><?php echo $attachment_caption; ?></span>
				<?php }
				?>
			</li>
		<?php endforeach; ?>
	<?php endif; ?>
</ul>

<style>
.gallery-preview-image {
	border-radius: 50%;
	width: 60px;
	height: 60px;
	margin: 0 6px 12px;
	display: inline-block;
	background-size: cover;
	text-align: center;
}

.gallery-preview-image a {
	display: block;
	width: 100%;
	height: 100%;
}

.gallery-preview-image:nth-child(4n) {
	margin-right: 0;
}

#listifyGalleryFrame .gallery-settings {
	display: none;
}

</style>