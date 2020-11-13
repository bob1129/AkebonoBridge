  <!-- ボトムナビゲーション -->
  <nav class="global-nav">
    <ul class="nav-list">
      <li class="nav-item">
        <a href="<?php echo home_url(); ?>">
          <span class="material-icons">
            home
          </span>
          <span>HOME</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php page_link('menu'); ?>">
          <span class="material-icons">
            restaurant
          </span>
          <span>MENU</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php page_link('access'); ?>">
          <span class="material-icons">
            commute
          </span>
          <span>ACCESS</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php page_link('contact'); ?>">
          <span class="material-icons">
            email
          </span>
          <span>CONTACT</span>
        </a>
      </li>
    </ul>
  </nav>

  <footer>
    <div class="inner">
      <div class="footer_wrap">
        <div class="footer_left">
          <ul>
            <li><a href="<?php echo home_url(); ?>">HOME</a></li>
            <li><a href="<?php page_link('menu'); ?>">MENU</a></li>
            <li><a href="<?php page_link('access'); ?>">ACCESS</a></li>
            <li><a href="<?php page_link('contact'); ?>">CONTACT</a></li>
            <li><a href="<?php page_link('sitemap'); ?>">SITEMAP</a></li>
          </ul>
        </div>
        <div class="footer_right">
          <ul>
            <li><a href="https://ja-jp.facebook.com/"><img src="<?php echo get_theme_file_uri('img/icon_fb.png'); ?>" alt="facebook"></a></li>
            <li><a href="https://twitter.com/"><img src="<?php echo get_theme_file_uri('img/icon_tw.png'); ?>" alt="twitter"></a></li>
            <li><a href="https://www.instagram.com/"><img src="<?php echo get_theme_file_uri('img/icon_insta.png'); ?>" alt="instagram"></a></li>
          </ul>
        </div>
      </div>
      <p><small>&copy;Cafe & Music Akebono Bridge</small></p>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>

</html>