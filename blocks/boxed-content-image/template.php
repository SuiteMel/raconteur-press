<?php
	$block = $args['block'];
	$data = $args['data'];
	$block_id = $args['block_id'];
	$class_name = $args['class_name'];

  $heading = $data['heading'];
  $intro = $data['intro'];
  $content = $data['content'];
  $image = $data['image'];
?>

<section id="<?php echo $block_id; ?>" class="<?php echo $class_name; ?> my-20">
  <div class="container">
    <div class="p-8 border-2 bg-brand-tan/80 border-black/20">
      <?php if ( $heading['text'] || $intro ) : ?>
      <div class="mb-8 text-center">
        <?php if ( $heading['text'] ) : ?>
          <<?php echo $heading['tag'] ?> class="font-serif text-2xl leading-tight">
            <?php echo $heading['text']; ?>
          </<?php echo $heading['tag'] ?>>
        <?php endif; ?>
  
        <?php if ( $intro ) : ?>
          <div class="wysiwyg">
            <?php echo $intro; ?>
          </div>
        <?php endif; ?>
      </div>
      <?php endif; ?>
      <div class="relative grid items-center grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
        <div>
          <?php if ( $content ) : ?>
          <div class="wysiwyg">
            <?php echo $content; ?>
          </div>
          <?php endif; ?>
        </div>

        <div class="lg:absolute top-0 bottom-0 my-4 bg-gray-400 left-1/2 h-0.5 lg:h-auto lg:w-0.5"></div>

        <div>
          <?php if ( $image ) : ?>
            <?php echo wp_get_attachment_image( $image, 'full', false, ['class' => 'mx-auto'] ); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>