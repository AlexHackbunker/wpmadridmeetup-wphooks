<?php get_header(); ?>

<div class="row">
  <div class="columns">
    <div class="posts">
    
    <?php 
      while( have_posts() ) {
        the_post();
        the_title('<h1>', '</h1>');
        the_content();
      } ?>

    </div>

    <div class="form">

      <h3>Suscribete a WP Madrid Meetup</h3>
      <!-- data-sendemail -->
      <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
        <input type="text" name="email">
        <input type="hidden" name="action" value="newsletter_form">
        <input type="submit" class="button button-primary" value="Enviar">

      </form>

    </div>

  </div>
</div>



<?php get_footer(); ?>