
<?php
  get_template_part('template-parts/header'); // header.php をインクルード
?>


<body>
  <main>
    <!-- 【共通パーツ】template-parts/parts_mainvisual -->
    <?php get_template_part('template-parts/parts_mainvisual'); ?>

    <section id="thanks">
      <div class="thanks__inner">
        <div class="thanks-content">
          <h2 class="section-title">Thanks!</h2>

          <p>送信完了いたしました。
          <br>
          <br>
          お問い合わせ<br class="brsp">ありがとうございました。</p>

          <a class="back-btn" href="<?php echo home_url(); ?>">BACK TO TOP</a>
        </div><!-- /.thanks-content -->
      </div><!-- /.thanks__inner -->      
    </section>

    <!-- 【共通パーツ】template-parts/sns -->
    <?php get_template_part('template-parts/sns'); ?>   
  </main>
<?php
  get_template_part('template-parts/footer'); // footer.php をインクルード
?>
</body>

