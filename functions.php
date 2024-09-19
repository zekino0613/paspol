<?php

function theme_enqueue_assets() {
  // jQueryを読み込む
  wp_enqueue_script('jquery');

  // slickのスタイルシートを読み込む
  wp_enqueue_style(
    'slick-css', // ハンドル名
    get_template_directory_uri() . '/assets/css/slick/slick.css', // slick.cssのパス
    array(), // 依存関係なし
    '1.8.0' // バージョン
  );

  wp_enqueue_style(
      'slick-theme-css', // ハンドル名
      get_template_directory_uri() . '/assets/css/slick/slick-theme.css', // slick-theme.cssのパス
      array('slick-css'), // slick.cssに依存
      '1.8.0' // バージョン
  );

  // slickのJavaScriptファイルを読み込む
  wp_enqueue_script(
      'slick-js', // ハンドル名
      get_template_directory_uri() . '/assets/js/slick.js', // slick.min.jsのパス
      array('jquery'), // jQueryに依存
      '1.8.0', // バージョン
      true // フッターで読み込む
  );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_assets');
