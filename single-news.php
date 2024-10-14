<?php
  get_template_part('template-parts/header'); // header.php をインクルード
?>

    <!-- 【共通パーツ】template-parts/parts_mainvisual -->
    <?php get_template_part('template-parts/parts_mainvisual'); ?>

    <div class="single">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?> <!-- 投稿があるとき -->
        <!-- タイトル -->
        <!-- <h1 class="entry-title"><?php the_title(); ?></h1> -->


      <!-- 投稿ページで入力した内容 -->
      <div class="single-news">
        <?php the_content(); ?>

        <section id ="news">
          <div class="news__inner">
            <div class="news__inner--flex">
              <h2 class="section-title ">LATEST NEWS</h2>
              </div>

            <div class="news-postlist">            
              <?php
              // WP_Query を使ってカスタム投稿タイプ 'news' の最新６件の投稿を取得
              $news_query = new WP_Query(array(
                  'post_type' => 'news',      // 取得する投稿タイプを 'news' に指定
                  'posts_per_page' => 3,      // 取得する投稿の数を 6 に指定
                  'order' => 'DESC' //降順で並び替える
              ));
            
              // 投稿が存在するか確認
              if ($news_query->have_posts()) :
                  // 投稿が存在する場合、ループを開始
                  while ($news_query->have_posts()) : $news_query->the_post(); //投稿が存在するか確認 : まだ投稿が残っているかチェック
                      ?>
                  <a href="<?php the_permalink(); ?>">  
                    <div class="news-post">
                      <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail('medium'); ?> <!-- サムネイル画像を 'medium' サイズで表示 -->
                        </div>
                        <div class="post-textarea">
                          <h1 class="news-title"><?php the_title(); ?></h1>
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
            <a class="back-btn" href="<?php echo home_url('/'); ?>">BACK TO TOP</a> <!-- 戻る -->
          </div>  
        </section>
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
  </body>  