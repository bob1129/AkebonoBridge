<?php get_header(); ?> 
<main>
  <div>
    <p>曙橋の気軽に楽器が弾けるカフェ。<br>
      ごゆっくりお過ごしください。</p>
  </div>

  <div class="wrapper">

    <!-- swiper -->
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="<?php echo get_theme_file_uri('img/cafe1.jpeg'); ?>" alt=""></div>
        <div class="swiper-slide"><img src="<?php echo get_theme_file_uri('img/cafe2.jpeg'); ?>" alt=""></div>
        <div class="swiper-slide"><img src="<?php echo get_theme_file_uri('img/cafe3.jpeg'); ?>" alt=""></div>
        <div class="swiper-slide"><img src="<?php echo get_theme_file_uri('img/cafe4.jpeg'); ?>" alt=""></div>
        <div class="swiper-slide"><img src="<?php echo get_theme_file_uri('img/cafe5.jpeg'); ?>" alt=""></div>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>

    <!-- News&Topics -->
    <div class="news">
      <section id="top_info">
        <h3 class="topic">News&Topics</h3>
        <hr>
        <?php
            $news_query = new WP_Query([
                'post_type' => 'post',
                'posts_per_page' => 5
            ]);
        ?>
        <?php if($news_query->have_posts()):while($news_query->have_posts()):$news_query->the_post(); ?>
        <dl>
            <dt><?php echo get_the_date(); ?></dt>
            <dd>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </dd>
        </dl>
        <?php endwhile; endif; ?>
        <p class="btn"><a href="<?php page_link('news'); ?>">お知らせ一覧</a></p>
      </section>
    </div>
  </div>

</main>
<?php get_footer(); ?>