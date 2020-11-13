<?php get_header(); ?>

<main>
  <div class="inner">

    <?php if(have_posts()):while(have_posts()):the_post(); ?>
    <article>
      <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
        <?php echo get_the_date(); ?>
      </time>
      <h2 class="title">
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </h2>

      <div class="content">
      <?php if(has_post_thumbnail()): ?>
      <?php the_post_thumbnail(); ?>
      <?php else: ?>
        <img src="https://placehold.jp/3d4070/ffffff/500x500.png?text=no%20image" alt="">
      <?php endif; ?>
      <?php the_content(); ?>
      </div>
    </article>
    <?php endwhile; endif; ?>
  </div>
  <?php
      if(function_exists('wp_pagenavi')){
        wp_pagenavi();
      }
    ?>
</main>

<?php get_footer(); ?>