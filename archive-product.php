<!DOCTYPE html>
<html lang="ja">
<?php get_header(); ?>

  <body>
    <main>
    <section id="p-mainvisual">
      <div class="p-mainvisual__images">
        <div class="p-mainvisual__images--item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/paspol-image/fdbc5ff355eecda21f063b701c8b6b72.jpg" alt="メインビジュアル画像１" /></div>
      </div>
    
      <div class="p-mainvisual__logo-sp"></div><!-- /mainvisual__logo-sp -->
    </section>

    <section id ="p-product">
      <div class="p-product__inner">
        <h2 class="section-title">PRODUCT</h2>
        
        <div class="p-product-postlist">            
          <?php
          // 現在のページ番号を取得。ページが指定されていない場合は1ページ目とする。
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

          // WP_Query を使ってカスタム投稿タイプ 'product' の最新12件の投稿を取得
          $product_query = new WP_Query(array(
              'post_type' => 'product',      // 取得する投稿タイプを 'product' に指定
              'posts_per_page' => 12,      // 取得する投稿の数を 12 に指定
              'paged' => $paged,             // 現在のページ番号を指定
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

        <!-- ページネーションを表示 -->
        <div class="pagination">
          <?php
          echo paginate_links(array(
              'total' => $product_query->max_num_pages,  // 総ページ数
              'current' => $paged,                    // 現在のページ番号
              'prev_text' => __('<', 'textdomain'),   // 前のページリンク
              'next_text' => __('>', 'textdomain'),       // 次のページリンク
          ));
          ?>
        </div>    

        <a class="back-btn" href="<?php echo home_url('/'); ?>">BACK TO TOP</a> <!-- 戻る -->
      </div>  
    </section>
    

      <section id="sns">
        <div class="sns__top">
          <a href="<?php echo home_url('/'); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/paspol-image/backTop@2x.png" alt="sns-top画像">
          </a>
        </div><!-- /.sns__top -->


        <ul class="sns__flex">
          <a class="box facebook" href="<?php echo home_url('/'); ?>">
            <li>Share on Facebook</li>
          </a>
          <a class="box twitter" href="<?php echo home_url('/'); ?>">
            <li>Share on Twitter</li>
          </a>
          <a class="box bookmark" href="<?php echo home_url('/'); ?>">
            <li>Hatena Bookmark</li>
          </a>
          <a class="box line" href="<?php echo home_url('/'); ?>">
            <li>Send to LINE</li>
          </a>
        </ul>
      </section><!-- /.sns -->
    </main>
    <?php get_footer(); ?>
  </body>
</html>