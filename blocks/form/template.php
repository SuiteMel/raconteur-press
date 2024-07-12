<?php
	$block = $args['block'];
	$data = $args['data'];
	$block_id = $args['block_id'];
	$class_name = $args['class_name'];

  $form = $data['form'];
?>

<section id="<?php echo $block_id; ?>" class="<?php echo $class_name; ?> my-8">
  <div class="container">
    <?php if ( $form ) : ?>
      <?php gravity_form( $form, false, false, false, null, true ); ?>
    <?php endif; ?>
  </div>
</section>