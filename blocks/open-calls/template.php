<?php
	$block = $args['block'];
	$data = $args['data'];
	$block_id = $args['block_id'];
	$class_name = $args['class_name'];

  $heading = $data['heading'];
  $intro = $data['intro'];

  $args = [
    'post_type' => 'open_call',
    'posts_per_page' => 12,
    'orderby' => 'open_call_dates_opens',
    'order' => 'ASC',
    'fields' => 'ids'
  ];
  $open_calls = get_posts($args);
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
      <div class="w-full px-8 mx-auto lg:w-10/12">
        <?php if ( $intro ) : ?>
          <div class="mb-10 text-center wysiwyg">
            <?php echo $intro; ?>
          </div>
        <?php endif; ?>

        <?php if ( $open_calls ) : ?>
          <div class="space-y-10">
            <?php foreach( $open_calls as $open_call ) : ?>
              <?php 
                $fields = get_fields( $open_call ); 
                $title = get_the_title( $open_call);
                $description = $fields['open_call_description'];
                $dates = $fields['open_call_dates'];
                $link = $fields['open_call_link'] ?: ('mailto:racopresssubmissions@gmail.com?subject=Submission%3A%20' . urlencode($title));
              ?>
              <article>
                <div class="grid grid-cols-1 md:grid-cols-10 gap-x-8 gap-y-5">
                  <div class="md:col-span-7">
                    <h2 class="font-serif text-2xl leading-tight"><?php echo $title ?></h2>
                  </div>
                  <div class="md:col-span-7">
                    <?php if ( $description ) : ?>
                      <div class="wysiwyg">
                        <?php echo $description; ?>
                      </div>
                    <?php endif; ?>
                  </div>
    
                  <div class="md:col-span-3">
                    <?php foreach ( $dates as $type => $date ) : ?>
                      <p class=""><span class="font-semibold capitalize"><?php echo $type ?>:</span> <?php echo $date ?: 'TBD'; ?></p>
                    <?php endforeach; ?>

                    <?php if ( $link ) : ?>
                      <a class="px-3 pt-3 pb-2 mt-8 text-base leading-none rounded btn-text bg-brand-orange" href="<?php echo $link ?>">
                        Apply Now
                      </a>
                    <?php endif; ?>
                  </div>
                </div>
              </article>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>