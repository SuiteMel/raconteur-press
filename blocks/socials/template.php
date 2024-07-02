<?php
	$block = $args['block'];
	$data = $args['data'];
	$block_id = $args['block_id'];
	$class_name = $args['class_name'];

  $heading = $data['heading'];
  $content = $data['content'];
?>

<section id="<?php echo $block_id; ?>" class="<?php echo $class_name; ?> mb-20">
  <?php if ( $heading['text'] ) : ?>
    <div class="text-center bg-brand-dark-orange text-brand-white">
      <div class="container">
        <<?php echo $heading['tag'] ?> class="pt-6 pb-5 font-serif text-2xl leading-tight">
          <?php echo $heading['text']; ?>
        </<?php echo $heading['tag'] ?>>
      </div>
    </div>
  <?php endif; ?>

  <div class="container mt-10">
    <div class="-mx-8">
      <div class="w-full px-8 mx-auto sm:w-10/12 md:w-8/12 lg:w-6/12">
        <?php if ( $content ) : ?>
          <div class="mb-8 text-center wysiwyg">
            <?php echo $content; ?>
          </div>
        <?php endif; ?>

        <iframe src="https://raconteurpress.substack.com/embed" class="w-full mt-4 mb-8 border rounded border-brand-orange" frameborder="0" scrolling="no"></iframe>

        <?php echo get_socials(); ?>
      </div>
    </div>
  </div>
</section>