<?php get_header(); ?> 

<main>
  <div id="site_about">
    <div class="inner">
      <h2 class="title">SITE MAP</h2>

      <div id="site_list">
        <ul>
          <li>
            <a href="<?php echo home_url(); ?>">トップページ</a>
            <ul>
              <li><a href="<?php page_link('menu'); ?>">MENU</a></li>
              <li><a href="<?php page_link('access'); ?>">ACCESS</a></li>
              <li><a href="<?php page_link('contact'); ?>">CONTACT</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>

</main>

<?php get_footer(); ?>