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
      <div class="px-8 mx-auto md:w-10/12">
        <div class="grid items-center grid-cols-1 gap-8 md:grid-cols-10">
          <div class="md:col-span-4">
            <?php if ( $image ) : ?>
              <?php echo wp_get_attachment_image( $image, 'full', false, ['class' => ''] ); ?>
            <?php endif; ?>
          </div>

          <div class="md:col-span-6">
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