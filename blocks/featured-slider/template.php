<?php
	$block = $args['block'];
	$data = $args['data'];
	$block_id = $args['block_id'];
	$class_name = $args['class_name'];

  $heading = $data['heading'];
  $slides = $data['slides'];
?>

<section id="<?php echo $block_id; ?>" class="<?php echo $class_name; ?>">
  <div class="container">
    <?php if ( $heading['text'] ) : ?>
      <<?php echo $heading['tag'] ?> class="mb-4 font-serif text-2xl leading-tight text-center">
        <?php echo $heading['text']; ?>
      </<?php echo $heading['tag'] ?>>
    <?php endif; ?>
  </div>

  <div class="py-8 splide bg-brand-dark-orange text-brand-white" role="group" aria-label="Featured Slider">
    <div class="container">
      <div class="splide__track">
        <ul class="splide__list">
          <?php foreach( $slides as $slide ) : ?>
            <?php 
              $image = $slide['image'];
              $content = $slide['content'];
            ?>
            <li class="splide__slide">
              <div class="flex -mx-4">
                <div class="w-1/3 px-4">
                  <?php if ( $image ) : ?>
                    <?php echo wp_get_attachment_image( $image, 'full', false, ['class' => ''] ); ?>
                  <?php endif; ?>
                </div>

                <div class="w-2/3 px-4">
                  <?php if ( $content ) : ?>
                    <?php echo $content; ?>
                  <?php endif; ?>
                </div>
              </div>
            </li>
          <?php endforeach; ?>
          <li class="splide__slide">Extra Slide 02</li>
          <li class="splide__slide">Extra Slide 03</li>
        </ul>
      </div>
    </div>
  </div>
</section>