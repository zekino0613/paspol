<!DOCTYPE html>
<html lang="ja">
<?php get_header(); ?>

  <body>
    <main>
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