
<?php
  get_template_part('template-parts/header'); // header.php をインクルード
?>

<body>
  <main>
    <section id="mainvisual">
      <div class="mainvisual__images">
        <div class="mainvisual__images--item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/paspol-image/main_visual_2-0x0.jpg" alt="メインビジュアル画像１" /></div>
        <div class="mainvisual__images--item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/paspol-image/main_visual_6-0x0.jpg" alt="メインビジュアル画像２" /></div>
        <div class="mainvisual__images--item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/paspol-image/main_visual_7-0x0.jpg" alt="メインビジュアル画像３" /></div>
        <div class="mainvisual__images--item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/paspol-image/main_visual_13-0x0.jpg" alt="メインビジュアル画像４" /></div>
        <div class="mainvisual__images--item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/paspol-image/main_visual_111-0x0.jpg" alt="メインビジュアル画像５" /></div>
      </div>
    
      <div class="mainvisual__logo-sp"></div><!-- /mainvisual__logo-sp -->
    </section>

    <section id="concept">
      <div class="concept-wrapper">
        <div class="concept__inner">
          <h2 class="concept__inner--title">
            旅に出よう。
          </h2>

          <p class="concept__inner--text">
            僕たちが作りたいのは<br>
            持っているだけで旅に出たくなるモノ。<br>
            持っているだけでわくわくするモノ。
          </p>

          <p class="concept__inner--text">
            それは新しい時代の “パスポート”<br>
            僕たちが作るものは、<br>
            そんな、存在でありたい。
          </p>
            
          <p class="concept__inner--text">
            そして、人と人が繋がる<br>
            こんな時代だからこそ、<br>
          </p>

          <img class="paspol" src="<?php echo get_template_directory_uri(); ?>/assets/images/paspol-image/concept-siteLogo@2x.png" alt="「PAS-POL」画像">

          <p class="concept__inner--text">
            それは、自分と世界を繋げる<br>
            旅のモノづくりブランド
          </p>
        </div><!-- /.concept__inner -->
      </div>
    </section>

    
    <section id ="product">
      <div class="product__inner">
        <div class="product__inner--flex">
          <h2 class="section-title">PRODUCT</h2>
          <a class="more-btn bb" href="<?php echo get_post_type_archive_link('product'); ?>">MORE</a> 
        </div>

        <div class="product-postlist">            
          <?php
          // WP_Query を使ってカスタム投稿タイプ 'product' の最新６件の投稿を取得
          $product_query = new WP_Query(array(
              'post_type' => 'product',      // 取得する投稿タイプを 'product' に指定
              'posts_per_page' => 6,      // 取得する投稿の数を 6 に指定
              'order' => 'ASC' //昇順で並び替える
          ));

        
          // 投稿が存在するか確認
          if ($product_query->have_posts()) :
              // 投稿が存在する場合、ループを開始
              while ($product_query->have_posts()) : $product_query->the_post(); //投稿が存在するか確認 : まだ投稿が残っているかチェック
                  ?>
              <a href="<?php echo home_url('/'); ?>">    
                <div class="product-post">
                  <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('medium'); // サムネイル画像を 'medium' サイズで表示 ?>
                    </div>
                    <h3 class="product-title"><?php the_title(); ?></h3> <!-- 投稿のタイトルを表示 -->
                    <p><?php the_excerpt(); ?></p>  <!--投稿の抜粋を表示 -->
                  <?php endif; ?>
                </div>
              </a>      
          <?php
            endwhile;
            // クエリ後のグローバルな投稿データをリセット
              wp_reset_postdata();
            else :
            // 投稿が見つからない場合のメッセージを表示
            echo '<p>No news found.</p>';
            endif;
          ?>
        </div><!-- /.product-postlist -->  
        <a class="more-btn aa" href="<?php echo get_post_type_archive_link('product'); ?>">MORE</a> <!-- 投稿の詳細ページへのリンクを表示 -->
      </div>  
    </section>



    <section id ="news">
      <div class="news__inner">
        <div class="news__inner--flex">
          <h2 class="section-title ">NEWS</h2>
          <a class="more-btn bb" href="<?php echo get_post_type_archive_link('news'); ?>">MORE</a> 
        </div>

        <div class="news-postlist">            
          <?php
          // WP_Query を使ってカスタム投稿タイプ 'news' の最新６件の投稿を取得
          $news_query = new WP_Query(array(
              'post_type' => 'news',      // 取得する投稿タイプを 'news' に指定
              'posts_per_page' => 6,      // 取得する投稿の数を 6 に指定
              'order' => 'DESC' //降順で並び替える
          ));

        
          // 投稿が存在するか確認
          if ($news_query->have_posts()) :
              // 投稿が存在する場合、ループを開始
              while ($news_query->have_posts()) : $news_query->the_post(); //投稿が存在するか確認 : まだ投稿が残っているかチェック
                  ?>
              <a href="<?php echo home_url('/'); ?>">   
                <div class="news-post">
                  <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('medium'); ?> <!-- サムネイル画像を 'medium' サイズで表示 -->
                    </div>
                    <div class="post-textarea">
                      <h3 class="news-title"><?php the_title(); ?></h3> <!-- 投稿のタイトルを表示 -->
                      <time class="post-date"><?php echo get_the_date(); ?></time>
                      <p><?php the_excerpt(); ?></p>  <!--投稿の抜粋を表示 -->
                    </div><!-- /.post-textarea -->
                  <?php endif; ?>
                </div> 
              </a>     
          <?php
            endwhile;
            // クエリ後のグローバルな投稿データをリセット
              wp_reset_postdata();
            else :
            // 投稿が見つからない場合のメッセージを表示
            echo '<p>No news found.</p>';
            endif;
          ?>
        </div><!-- /.product-postlist -->  
        <a class="more-btn aa" href="<?php echo get_post_type_archive_link('news'); ?>">MORE</a> <!-- 投稿の詳細ページへのリンクを表示 -->
      </div>  
    </section>
    
    <!-- 【共通パーツ】template-parts/sns -->
    <?php get_template_part('template-parts/sns'); ?>        
          
  </main>
  <!-- slick/JS -->

  <?php
    get_template_part('template-parts/footer'); // footer.php をインクルード
  ?>
</body>