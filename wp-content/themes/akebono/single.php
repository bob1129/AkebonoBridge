<?php get_header(); ?>

<main>
  <div class="inner">
    <?php if(have_posts()):while(have_posts()):the_post(); ?>
    
    <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
      <?php echo get_the_date(); ?>
    </time>
    <h2 class="title">
      <?php the_title(); ?>
    </h2>
    <?php the_content(); ?>
    
    <?php endwhile; endif; ?>
  </div>
</main>

<?php get_footer(); ?>