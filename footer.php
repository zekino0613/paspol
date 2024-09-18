<footer id="footer">
  <ul class="footer__nav">
    <a href="<?php echo home_url('/'); ?>#top">
      <li class="nav_li">TOP</li>
    </a>
    <a href="<?php echo home_url('/'); ?>#product">
      <li>PRODUCT</li>
    </a>
    <a href="<?php echo home_url('/'); ?>#about">
      <li>ABOUT</li>
    </a>
    <a href="<?php echo home_url('/'); ?>#news">
      <li>NEWS</li>
    </a>
    <a href="<?php echo home_url('/'); ?>#contact">
      <li>CONTACT</li>
    </a>
  </ul><!-- /.footer__nav -->

  <div class="footer__end">
    <div class="footer__end--inner">
      <a href="<?php echo home_url('/'); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/paspol-image/siteLogo-small@2x.png" alt="ヘッダーロゴ">
      </a>

      <p>
        Copyright © 2024 PAS-POL -旅のモノづくりブランド-｜TABIPPO All rights reserved.
      </p>
    </div><!-- /.footer__end--inner -->
  </div><!-- /.footer__end -->

</footer>
<script src="assets/js/jquery-3.7.1.min.js"></script>
<?php wp_footer(); ?>
</body>