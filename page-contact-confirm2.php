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

        <?php echo apply_shortcodes('[contact-form-7 id="6efde98" title="contact-confirm2"]'); ?>



      </div><!-- /.contact__inner -->
    </section>
    <!-- 【共通パーツ】template-parts/sns -->
    <?php get_template_part('template-parts/sns'); ?>
  </main>
  <?php
  get_template_part('template-parts/footer'); // footer.php をインクルード
  ?>
</body>