<?php
	$block = $args['block'];
	$data = $args['data'];
	$block_id = $args['block_id'];
	$class_name = $args['class_name'];

  $image = $data['image'];
  $heading = $data['heading'];
  $content = $data['content'];
?>

<section id="<?php echo $block_id; ?>" class="<?php echo $class_name; ?> py-10">
  <div class="container">
    <div class="-mx-8">
      <div class="w-10/12 px-8 mx-auto">
        <div class="grid items-center grid-cols-10 gap-8">
          <div class="col-span-4">
            <?php echo wp_get_attachment_image( $image, 'full', false, ['class' => ''] ); ?>
          </div>

          <div class="col-span-6">
            <?php if ( $heading['text'] || $content ) : ?>
            <div class="text-center wysiwyg">
              <?php if ( $heading['text'] ) : ?>
                <<?php echo $heading['tag'] ?> class="font-serif text-4xl leading-tight">
                  <?php echo $heading['text']; ?>
                </<?php echo $heading['tag'] ?>>
              <?php endif; ?>
              
              <?php if ( $content ) : ?>
                <?php echo $content; ?>
              <?php endif; ?>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>