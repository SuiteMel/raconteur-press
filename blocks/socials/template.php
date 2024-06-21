<?php
	$block = $args['block'];
	$data = $args['data'];
	$block_id = $args['block_id'];
	$class_name = $args['class_name'];
?>

<section id="<?php echo $block_id; ?>" class="<?php echo $class_name; ?>">
  <div class="container">
    <div class="-mx-8">
      <div class="w-6/12 px-8 mx-auto">
        <iframe src="https://raconteurpress.substack.com/embed" class="w-full my-4 border rounded border-brand-orange" frameborder="0" scrolling="no"></iframe>
      </div>
    </div>
  </div>
</section>