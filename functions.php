<?php

function theme_enqueue_assets()
{
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

  // JavaScriptファイルを読み込む
  wp_enqueue_script(
    'common-js', // ハンドル名
    get_template_directory_uri() . '/assets/js/common.js', // common.jsのパス
    array('slick-js'), // slickに依存
    '1.0.0', // バージョン
    true // フッターで読み込む
  );



  // リセットCSSを読み込む
  wp_enqueue_style(
    'destyle',
    get_template_directory_uri() . '/assets/css/destyle.min.css'
  );
  // メインのスタイルシートを読み込む（識別子、URL、依存関係、バージョン）
  wp_enqueue_style(
    'style',
    get_template_directory_uri() . '/assets/css/style.css',
    array('destyle'),
    '1.0.0'
  );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_assets');

// カスタム投稿タイプ product を登録
function create_product_post_type() {
    register_post_type('product',
        array(
            'labels' => array(
                'name' => __('Products'),
                'singular_name' => __('Product')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'products'),
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments')
        )
    );
}
add_action('init', 'create_product_post_type');

// カスタム投稿タイプ news を登録
function create_news_post_type() {
  register_post_type('news',
      array(
          'labels' => array(
              'name' => __('News'),  // 管理画面のメニューなどで表示される投稿タイプの名前（複数形）
              'singular_name' => __('News')  // 管理画面で表示される投稿タイプの名前（単数形）
          ),
          'public' => true, // 投稿タイプを公開するかどうか。trueにすると、管理画面に表示され、公開されます
          'has_archive' => true, // 投稿タイプにアーカイブページを持たせるかどうか。trueにすると、アーカイブページが生成されます
          'rewrite' => array('slug' => 'news'), // 投稿タイプのURLスラッグを指定します。例: yoursite.com/news/
          'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments') // この投稿タイプがサポートする機能を指定します
      )
  );
}
add_action('init', 'create_news_post_type');



// アイキャッチ画像のサポートを有効にする
function theme_setup() {
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');
