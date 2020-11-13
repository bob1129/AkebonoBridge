<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cafe & Music Akebono Bridge</title>
  <?php wp_head(); ?>
</head>

<body id="<?php the_get_id(); ?>">
  <header>
    <div class="inner">
      <!-- <p>Cafe & Music</p> -->
      <h1><a href="<?php echo home_url(); ?>"><span>Cafe & Music</span>Akebono Bridge</a></h1>
      <!-- ハンバーガーメニュー -->
      <nav>
        <div class="menu_btn">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="menu_body">
          <ul>
            <li><a href="<?php echo home_url(); ?>">HOME</a></li>
            <li><a href="<?php page_link('menu'); ?>">MENU</a></li>
            <li><a href="<?php page_link('access'); ?>">ACCESS</a></li>
            <li><a href="<?php page_link('contact'); ?>">CONTACT</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <?php if(is_front_page()): ?>
  <div id="key">
    <div class="inner">
    </div>
  </div>
  <?php endif; ?>