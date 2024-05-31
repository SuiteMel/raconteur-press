<?php
	$block = $args['block'];
	$data = $args['data'];
	$block_id = $args['block_id'];
	$class_name = $args['class_name'];
?>

<article id="<?php echo $block_id; ?>" class="<?php echo $class_name; ?> mx-auto mt-12 shadow-lg not-prose">

	<?php if ( $data['avatar'] ) : ?>
	<!-- Avatar Image -->
	<img class="object-cover w-full mx-auto rounded-t-md" src="<?= esc_url($data['avatar']['url']); ?>" alt="<?= esc_attr($data['avatar']['alt']); ?>">
	<?php endif; ?>

	<div class="p-4 rounded-b-md">
		<!-- Name and Position -->
		<div class="space-y-1 text-lg font-medium leading-6 ">
			<h3 class="text-lg font-semibold"><?= $data['name']; ?></h3>
			<p class="text-indigo-600"><?= $data['position']; ?></p>
		</div>

		<!-- Bio -->
		<div class="mt-4 text-lg">
			<p class="text-gray-400"><?= $data['bio']; ?></p>
		</div>
	</div>
</article>