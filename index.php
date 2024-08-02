<!doctype html>
<html>
  <head>
    <?php wp_head(); ?>
  </head>
  
  <body>
      <?php
        do_action('get_header');
        get_template_part('parts/header');
      ?>
      
      <?php wp_body_open(); ?>
      
      <main class="">
        <?php the_content(); ?>
      </main>
      
      <?php 
        get_template_part('parts/footer');
      ?>
      
      <?php wp_footer(); ?>
  </body>
</html>