<?php 
  $logo  = get_field( 'site_logo', 'option' );
  $primary_menu = new WP_Menu( 'primary_navigation' );
?>

<header class="relative z-50 flex items-center px-8 py-3 bg-brand-dark-orange header text-brand-white">
  <!-- Logo -->
  <div class="h-full mr-auto header__logo">
    <?php if ( $logo ) : ?>
      <a class="block h-full" href="<?php echo esc_url(home_url('/')); ?>">
        <img class="w-full h-full logo logo--header" src="<?php echo $logo['url']; ?>" alt="<?php bloginfo('name'); ?>">
      </a>
    <?php endif; ?>
  </div>

  <button type="button" class="md:hidden navbar-toggle" data-toggle-class="is-open" data-toggle-target="#primary-nav">
    <span class="navbar-toggle-icon"></span>
    <span class="sr-only">Main Menu</span>
  </button>

  <nav class="absolute inset-x-0 hidden py-6 bg-brand-black md:block md:static primary-nav top-full md:bg-transparent md:py-0" id="primary-nav" role="navigation">
    <ul class="container flex flex-col gap-6 md:flex-row md:mx-0 md:px-0">
      <?php if ( $primary_menu->items ) : ?>
        <?php foreach( $primary_menu->items as $menu_item ) : ?>
          <li class="primary-menu-item">
            <<?php echo $menu_item->has_children ? 'button' : 'a'; ?> class="inline-block underline duration-200 decoration-4 underline-offset-8 decoration-transparent hover:decoration-white"
              <?php if( $menu_item->has_children ) : ?>
                data-toggle-class="is-open"
                data-toggle-target="#menu-<?php echo $menu_item->ID; ?>" aria-expanded="false"
                data-toggle-group="menu-accordions"
                id="item-<?php echo $menu_item->ID; ?>"
                <?php else : ?>
                href="<?php echo $menu_item->url ?>"
                target="<?php echo $menu_item->target; ?>"
              <?php endif; ?>
            >
              <?php echo $menu_item->title; ?>

              <?php if ( $menu_item->has_children ) : ?>
                <span class="inline-block">
                  <svg class="icon icon-chevron-down" aria-hidden="true"><use xlink:href="#icon-chevron-down"></use></svg>
                </span>
              <?php endif; ?>
            </<?php echo $menu_item->has_children ? 'button' : 'a'; ?>>

            <?php if ( $menu_item->has_children ) : ?>
              <div class="hidden" id="menu-<?php echo $menu_item->ID; ?>" aria-hidden="true" aria-labelledby="item-<?php echo $menu_item->ID; ?>">
                <ul>
                  <?php foreach ( $menu_item->children as $child_item ) : ?>
                    <li class="">
                      <a href="<?php echo $child_item->url; ?>" target="<?php echo $child_item->target; ?>"><?php echo $child_item->title; ?></a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      <?php endif; ?>
    </ul>
  </nav>
</header>