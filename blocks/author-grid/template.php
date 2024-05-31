<?php
	$block = $args['block'];
	$data = $args['data'];
	$block_id = $args['block_id'];
	$class_name = $args['class_name'];

  $heading = $data['heading'];
  $content = $data['content'];
  $authors = $data['authors'];

  if ( !$authors ) {
    $args = [
      'post_type' => 'author',
      'posts_per_page' => 12,
      'orderby' => 'menu_order',
      'order' => 'ASC',
      'fields' => 'ids'
    ];
    $authors = get_posts($args);
  }

?>

<section id="<?php echo $block_id; ?>" class="<?php echo $class_name; ?> my-16">
  <div class="container">
    <div class="-mx-8">
      <div class="px-8 mx-auto lg:w-10/12">
        <?php if ( $heading['text'] || $content ) : ?>
          <div class="mb-8 text-center wysiwyg">
            <?php if ( $heading['text'] ) : ?>
              <<?php echo $heading['tag'] ?> class="font-serif text-2xl">
                <?php echo $heading['text']; ?>
              </<?php echo $heading['tag'] ?>>
            <?php endif; ?>
            
            <?php if ( $content ) : ?>
              <?php echo $content; ?>
            <?php endif; ?>
          </div>
        <?php endif; ?>
      
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3">
          <?php foreach( $authors as $author ) : ?>
            <?php 
              $photo = get_field( 'author_photo', $author );
              $title = get_the_title( $author );
              $bio = get_field( 'author_short_bio', $author);
              $link = get_permalink( $author );
            ?>
            <article>
              <a href="<?php echo $link; ?>" class="block h-full px-4 py-3 duration-300 shadow group shadow-black/10 rounded-xl bg-brand-light-gray hover:bg-brand-orange">
                <div class="flex items-center gap-3 mb-3">
                  <?php if ( $photo ) : ?>
                    <div class="relative overflow-hidden rounded-full max-h-16 aspect-square">
                      <?php echo wp_get_attachment_image( $photo, 'medium', false, ['class' => 'w-full h-full object-cover object-top'] ); ?>
                    </div>
                  <?php endif; ?>
                  <h3 class="font-serif text-lg leading-tight">
                    <?php echo $title; ?>
                  </h3>
                </div>
                <?php if ( $bio ) : ?>
                <p class="text-sm">
                  <?php echo $bio; ?>
                </p>
                <?php endif; ?>
  
                <div class="mt-3 text-right">
                  <span class="duration-300 btn-text text-brand-orange group-hover:text-brand-light-gray">
                    Learn More
                </span>
                </div>
              </a>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>