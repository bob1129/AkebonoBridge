<?php

function en(){
  
  // Google Icon
  wp_enqueue_style(
    'google-icon',
    "https://fonts.googleapis.com/icon?family=Material+Icons",
    [],
    1
  );

  wp_enqueue_style(
    'reset',
    get_theme_file_uri('css/reset.css'),
    [],
    1
  );

  // swiper
  wp_enqueue_style(
    'swiper',
    get_theme_file_uri('css/swiper.min.css'),
    [],
    1
  );

  wp_enqueue_style(
    'style',
    get_theme_file_uri('css/style.css'),
    [],
    filemtime(get_theme_file_path('css/style.css'))
  );

}
add_action('wp_enqueue_scripts','en');

function fen(){
  
  // Jquery
  wp_enqueue_script(
    'jq',
    get_theme_file_uri('js/jquery-3.5.1.min.js')
  );

  // swiper
  wp_enqueue_script(
    'swiper-js',
    get_theme_file_uri('js/swiper.min.js')
  );

  wp_enqueue_script(
    'main-js',
    get_theme_file_uri('js/main.js')
  );

}
add_action('wp_footer','fen');

function page_link($page) {

  $path = '/'.$page;
  $page_obj = get_page_by_path($path);

  echo get_page_link($page_obj);
  
}

// bodyのidを設定する
function the_get_id(){

  if (is_front_page()){
    echo 'top';
  }

  if (is_page('menu')){
    echo 'menu';
  }

  if (is_home()){
    echo 'news';
  }

  if (is_page('contact') || is_page('thanks')|| is_page('check')){
    echo 'contact';
  }

  if (is_page('access')){
    echo 'access';
  }

  if (is_page('sitemap')){
    echo 'sitemap';
  }

}

//ウィジット機能をonにする
register_sidebar([
  'name' => 'infomation'
]);

//アイキャッチ機能をonにする
add_theme_support('post-thumbnails');