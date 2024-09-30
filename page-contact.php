<?php
get_template_part('template-parts/header'); // header.php をインクルード
?>


<body>
  <main>
    <!-- 【共通パーツ】template-parts/parts_mainvisual -->
    <?php get_template_part('template-parts/parts_mainvisual'); ?>

    <section id="contact">
      <div class="contact__inner">
        <h2 class="section-title">CONTACT</h2>

        <?php echo apply_shortcodes('[contact-form-7 id="a67a102" title="Contact form 1"]'); ?>

        <!-- モーダルのHTML -->
        <div id="confirmation-modal" class="modal">
          <div class="modal-content">
            <h2 class="section-title">確認画面</h2>
            <p>以下の内容で送信してよろしいですか？</p>
            <div id="modal-form-data">
              <p><strong>氏名 :</strong> <span id="modal-name"></span></p>
              <p><strong>メールアドレス :</strong> <span id="modal-email"></span></p>
              <p><strong>電話番号 :</strong> <span id="modal-tel"></span></p>
              <p><strong>メッセージ :</strong> <span id="modal-message"></span></p>
            </div>

            <div class="btn-flex">
              <button id="cancel-modal" class="back-btn">BACK TO TOP</button>
              <button id="submit-form" class="more-btn">送信する</button>
            </div>
          </div>
        </div>
      </div><!-- /.contact__inner -->
    </section>
    <!-- 【共通パーツ】template-parts/sns -->
    <?php get_template_part('template-parts/sns'); ?>
  </main>
  <?php
  get_template_part('template-parts/footer'); // footer.php をインクルード
  ?>
</body>