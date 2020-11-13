<?php get_header(); ?> 
<main>
  <div id="contact_about">
    <div class="inner">
      <h2 class="title">CONTACT</h2>
    </div>
  </div>

  <?php if(have_posts()):while(have_posts()):the_post(); ?>
  <?php the_content(); ?>
  <?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>