<?php
	$block = $args['block'];
	$data = $args['data'];
	$block_id = $args['block_id'];
	$class_name = $args['class_name'];

  $content = $data['content'];
?>

<section id="<?php echo $block_id; ?>" class="<?php echo $class_name; ?> my-8">
  <div class="container">
    <div class="-mx-8">
      <div class="px-8 mx-auto sm:w-10/12">
        <div class="wysiwyg">
          <?php echo $content; ?>
        </div>
      </div>
    </div>
  </div>
</section>