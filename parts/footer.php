<?php
  $logo  = get_field( 'site_logo', 'option' );
  $footer_menu = new WP_Menu( 'footer_menu' );
?>

<div class="pt-1 border-t-[1rem] border-brand-dark-orange footer">
  <div class="py-10 border-t-4 border-brand-dark-orange footer-main">
    <div class="container">
      <div class="grid items-center grid-cols-1 gap-8 md:grid-cols-12">
        <div class="md:col-span-3 footer__logo">
          <!-- Logo -->
          <?php if ($logo) : ?>
            <a class="block" href="<?php echo esc_url(home_url('/')); ?>">
            <img class="w-full h-full logo logo--footer" src="<?php echo $logo['url']; ?>" alt="<?php bloginfo('name'); ?>">
          </a>
          <?php endif; ?>
        </div>

        <div class="text-center md:col-span-5">
          <h3 class="font-serif text-3xl">Oh Hey!</h3>
          <p class="text-sm">Subscribe to our Newsletter for the latest updates!</p>
          <!-- Newsletter -->
          <iframe src="https://raconteurpress.substack.com/embed" class="w-full my-4 border rounded border-brand-orange"></iframe>

          <!-- Socials -->
          <?php echo get_socials(); ?>
        </div>

        <div class="flex items-center h-full mx-auto text-center md:pl-8 md:border-l-2 md:col-span-4 border-brand-black md:text-left">
          <!-- Navigation -->
          <?php if ( isset($footer_menu->hasItems) ) : ?>
            <nav class="">
              <ul class="space-y-4">
                <?php foreach( $footer_menu->items as $menu_item ): ?>
                  <li class="">
                    <a class="font-serif leading-tight hover:underline hover:text-brand-dark-orange" href="<?php echo $menu_item->url ?>" target="<?php echo $menu_item->target; ?>"><?php echo $menu_item->title; ?></a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </nav>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>