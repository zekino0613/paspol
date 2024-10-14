
<?php
  get_template_part('template-parts/header'); // header.php をインクルード
?>

<section id="p-mainvisual">
  <div class="p-mainvisual__images">
    <div class="p-mainvisual__images--item single-full-height">
      <!-- 画像フィールド/product_imageの内容を表示 -->
      <?php
      $main_visual = get_field('product_mainvisual'); // フィールド名 'product_mainvisual' から値を取得
      if ($main_visual) :
        // Retrieve the 'large' size of the image
        $image_url = $main_visual['sizes']['large'];
      ?>
        <!-- Output the large image -->
        <img class="main-image-size" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($main_visual['alt']); ?>" />
      <?php else : ?>
        <!-- デフォルト画像を表示 -->
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/paspol-image/main_visual_2-0x0.jpg" alt="デフォルトメインビジュアル" /> -->
      <?php endif; ?>
    </div>
  </div>
  <div class="p-mainvisual__logo-sp"></div>
</section>

<div class="single">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?> <!-- 投稿があるとき -->     
    <!-- タイトル--デフォルトで入るh1テキストの非表示
    <h1><?php the_title(); ?></h1> -->
        

    <div class="single-product">
      <div class="custom-field">
      <!-- フィールドエリア --------------------------------------->
      <!-- テキストフィールド/product_textの内容を表示 -->
      <?php 
      $product_text = get_field('product_text'); // フィールド名 'product_text' から値を取得
      if ($product_text) : ?>
          <h1 class="product-text">
            <?php echo esc_html($product_text); ?>
          </h1>
      <?php endif; ?>

      <!-- テキストフィールド/product_textdetailの内容を表示 -->
      <?php 
      $product_textdetail = get_field('product_textdetail'); // フィールド名 'product_text' から値を取得
      if ($product_textdetail) : ?>
        <div class="product_textdetail">
          <!-- wpautop() を使って段落タグを自動挿入して表示 -->
          <?php echo wpautop(esc_html($product_textdetail)); ?>
        </div>
      <?php endif; ?>
      <!-- /フィールドエリア --------------------------------------->
      </div><!-- /custom-field -->
        
      <!-- ブロックエディター中身 ---------------------------------->  
      <?php the_content(); ?>
      
      <a class="back-btn" href="<?php echo home_url('/'); ?>">BACK TO TOP</a> <!-- 戻る -->
    


    
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
