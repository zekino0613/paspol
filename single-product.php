
<?php
  get_template_part('template-parts/header'); // header.php をインクルード
?>

<section id="p-mainvisual">
  <div class="p-mainvisual__images">
    <div class="p-mainvisual__images--item">
      <?php
      $main_visual = get_field('product_mainvisual'); // フィールド名 'product_mainvisual' から値を取得
      if ($main_visual) :
        // Retrieve the 'large' size of the image
        $image_url = $main_visual['sizes']['large'];
      ?>

        <!-- Output the large image -->
        <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($main_visual['alt']); ?>" />
      <?php else : ?>
        <!-- デフォルト画像を表示 -->
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/paspol-image/main_visual_2-0x0.jpg" alt="デフォルトメインビジュアル" /> -->
      <?php endif; ?>
    </div>
  </div>
  <div class="p-mainvisual__logo-sp"></div>
</section>

<div class="single-product">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?> <!-- 投稿があるとき -->     
    <!-- タイトル -->
    <h1><?php the_title(); ?></h1>
    

    <!-- テキストフィールドの内容を表示 -->
    <?php
    $product_text = get_field('product_text'); // フィールド名 'product_text' から値を取得
    if ($product_text) : ?>
        <div class="product-text">
            <p><?php echo esc_html($product_text); ?></p>
        </div>
    <?php endif; ?>

    <!-- 投稿ページで入力した内容 -->
    <div class="product-content">
        <?php the_content(); ?>
    </div>

  <!-- 投稿がないとき -->
  <?php endwhile; else : ?>
      <p>No product found.</p>
  <?php endif; ?>
</div>
    <!-- 【共通パーツ】template-parts/sns -->
    <?php get_template_part('template-parts/sns'); ?>   
  </main>
  <?php
    get_template_part('template-parts/footer'); // footer.php をインクルード
  ?>
