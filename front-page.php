<!DOCTYPE html>
<html lang="ja">
<?php get_header(); ?>

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
      <!-- <div class="mainvisual__arrow"></div> -->
      <!-- <div class="mainvisual__overlay"></div> -->
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
  <!-- slick/JS -->

  <?php get_footer(); ?>
</body>