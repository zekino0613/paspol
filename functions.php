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
            'show_in_rest' => true,
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
          'show_in_rest' => true,
          'rewrite' => array('slug' => 'news'), // 投稿タイプのURLスラッグを指定します。例: yoursite.com/news/
          'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments') ,// この投稿タイプがサポートする機能を指定します
          'taxonomies'  => array('category'),  // カテゴリを有効にする
      )
  );
}
add_action('init', 'create_news_post_type');



// アイキャッチ画像のサポートを有効にする
function theme_setup() {
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');

  // ブロックエディターのサポートを有効にする
function my_theme_setup() {
  add_theme_support( 'editor-styles' );

  // 追加のブロックエディター機能（オプション）
  add_theme_support( 'wp-block-styles' ); // コアのブロックスタイルを有効にする
  add_theme_support( 'align-wide' ); // 幅広ブロックオプションを有効にする
  add_theme_support( 'responsive-embeds' ); // レスポンシブ対応の埋め込みを有効にする
  add_theme_support( 'custom-spacing' );// マージンやパディングのスペーシングコントロールを有効にする
  add_theme_support( 'custom-line-height' ); // 行間の調整を有効にする
  add_theme_support( 'custom-units' ); // %、rem、vwなどのカスタム単位を有効にする
  add_theme_support( 'align-wide' ); // 幅広（Wide）とフル幅（Full-width）のブロックオプションを有効にする
  add_theme_support( 'wp-block-styles' );// コアブロックスタイルのサポート
  // カラーパレットをカスタマイズする
  add_theme_support( 'editor-color-palette', array(
    array(
        'name'  => __( 'Strong Magenta', 'textdomain' ),
        'slug'  => 'strong-magenta',
        'color' => '#a156b4',
    ),
  ));

}
add_action( 'after_setup_theme', 'my_theme_setup' );

// ブロックエディターでボタン
function custom_post_navigation() {
  ob_start();
  ?>
  <div class="post-navigation">
      <div class="nav-previous">
          <?php previous_post_link('%link', 'PREV'); ?>
      </div>
      <div class="nav-next">
          <?php next_post_link('%link', 'NEXT'); ?>
      </div>
  </div>
  <?php
  return ob_get_clean();
}
add_shortcode('post_navigation', 'custom_post_navigation');




// contact-form バリデーションチェック

function my_wpcf7_validation_error_message_name($result, $tag) {
  if ('your-name' == $tag->name) {
      if (empty($_POST[$tag->name])) {
          $result->invalidate($tag, 'お名前は必須項目です。');
      }
  }
  return $result;
}
add_filter('wpcf7_validate_text', 'my_wpcf7_validation_error_message_name', 10, 2);


function my_wpcf7_validation_error_message_email($result, $tag) {
  if ('your-email' == $tag->name) {
      if (empty($_POST[$tag->name])) {
          $result->invalidate($tag, 'メールアドレスは必須項目です。');
      }
  }
  return $result;
}
add_filter('wpcf7_validate_email', 'my_wpcf7_validation_error_message_email', 10, 2);


function my_wpcf7_validation_error_message_tel($result, $tag) {
  if ('your-tel' == $tag->name) {
      if (empty($_POST[$tag->name])) {
          $result->invalidate($tag, '電話番号は必須項目です。');
      }
  }
  return $result;
}
add_filter('wpcf7_validate_tel', 'my_wpcf7_validation_error_message_tel', 10, 2);




function add_class_to_post_title($title, $id) {
  // 投稿ページのタイトルにのみクラスを追加
  if (is_single() && get_the_ID() == $id) {
      $title = '<h1 class="entry-title">' . $title . '</h1>';
  }
  return $title;
}
add_filter('the_title', 'add_class_to_post_title', 10, 2);



// サイドバーウィジェットエリアを登録
function my_theme_widgets_init() {
  register_sidebar( array(
      'name'          => 'サイドバー',
      'id'            => 'sidebar-1',
      'before_widget' => '<div class="widget-area">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'my_theme_widgets_init' );


function my_custom_block_patterns() {
  // カテゴリを登録する（オプション）
  register_block_pattern_category( 'my-patterns', array( 'label' => __( 'My Custom Patterns', 'textdomain' ) ) );

  // ブロックパターンを登録
  register_block_pattern(
      'mytheme/my-custom-pattern',
      array(
          'title'       => __( 'My Custom Pattern', 'textdomain' ),
          'description' => _x( 'A custom block pattern.', 'Block pattern description', 'textdomain' ),
          'content'     => '
              <!-- wp:paragraph -->
              <p>' . __( 'This is a custom pattern!', 'textdomain' ) . '</p>
              <!-- /wp:paragraph -->
              <!-- wp:image -->
              <figure class="wp-block-image"><img src="https://example.com/image.jpg" alt=""/></figure>
              <!-- /wp:image -->
              <!-- wp:image -->
              <figure class="wp-block-image"><img src="https://example.com/image.jpg" alt=""/></figure>
              <!-- /wp:image -->
              <!-- wp:list -->
              <ul><li>' . __( 'First item', 'textdomain' ) . '</li><li>' . __( 'Second item', 'textdomain' ) . '</li></ul>
              <!-- /wp:list -->
              <!-- wp:button -->
              <div class="wp-block-button"><a class="wp-block-button__link">' . __( 'Click me', 'textdomain' ) . '</a></div>
              <!-- /wp:button -->
          ',
          'categories'  => array( 'my-patterns' ),
          'inserter'    => true,  // 挿入可能にする
      )
  );
}
add_action( 'init', 'my_custom_block_patterns' );


