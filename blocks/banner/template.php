<?php
	$block = $args['block'];
	$data = $args['data'];
	$block_id = $args['block_id'];
	$class_name = $args['class_name'];

	$content = $data['content'];
	$images = $data['images'];
	$background = $data['background'];
?>

<section id="<?php echo $block_id; ?>" class="<?php echo $class_name; ?> text-center px-8 py-4 text-brand-white relative" <?php echo $background['type'] === 'color' ? 'style="background-color: '.$background['color'].';"' : ''; ?>>
	<?php if ( $background['type'] === 'image' && $background['image'] ) : ?>
		<?php echo wp_get_attachment_image( $background['image'], 'full', false, ['class' => 'object-cover w-full h-full absolute inset-0 -z-10'] ); ?>
	<?php endif; ?>

	<div class="container">
		<div class="grid flex-wrap items-center justify-center gap-8 banner__grid">
			<div class="col-span-2 md:col-auto">
				<?php if ( $content ) : ?>
					<div class="wysiwyg">
						<?php echo $content; ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="md:order-first">
				<div class="aspect-[3/4]">
					<?php if ( $images && $images[1] ) : ?>
						<?php echo wp_get_attachment_image( $images[0], 'full', false, ['class' => 'object-cover w-full h-full'] ); ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="">
				<div class="aspect-[3/4]">
					<?php if ( $images && $images[1] ) : ?>
						<?php echo wp_get_attachment_image( $images[1], 'full', false, ['class' => 'object-cover w-full h-full'] ); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>