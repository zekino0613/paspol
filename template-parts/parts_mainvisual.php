<section id="p-mainvisual">
  <div class="p-mainvisual__images">
    <div class="p-mainvisual__images--item">
    <?php
          //変数宣言で画像の出し分け 
          $default_image = get_template_directory_uri() . '/assets/images/paspol-image/default-archive-image.jpg';
          $product_image = get_template_directory_uri() . '/assets/images/paspol-image/fdbc5ff355eecda21f063b701c8b6b72.jpg';
          $news_image = get_template_directory_uri() . '/assets/images/paspol-image/5aafae338835b1fd1119f273565bd3de1.jpg';
          $contact_image = get_template_directory_uri() . '/assets/images/paspol-image/7e5b7de0a02f15808796fe8cd4fc3ab3.jpg';
        // Check if the current page is the archive page for 'product'
        if (is_post_type_archive('product')) {
          // Product archive page
          echo '<img loading="lazy" src="' . $product_image . '" alt="Product Archive Image" />';
      } elseif (is_post_type_archive('news')) {
          // News archive page
          echo '<img loading="lazy" src="' . $news_image . '" alt="News Archive Image" />';
          //一つの画像を複数個所で使用
      } elseif (is_page(array('contact', 'thanks','contact2', 'contact-confirm2','thanks2'))) {
          // Contact or Thanks page (using the same image)
          echo '<img loading="lazy" src="' . $contact_image . '" alt="Contact or Thanks Image" />';
      
        } elseif (is_singular('news')) {
          // single-news.phpのメインビジュアル
          echo '<img loading="lazy" src="' . esc_url($news_image) . '" alt="News Image" />'; 

      } else {
          // Default for other pages or archives
          echo '<img loading="lazy" src="' . $default_image . '" alt="Default Archive Image" />';
      }
      ?> 
    ?>
    <!--       
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/paspol-image/fdbc5ff355eecda21f063b701c8b6b72.jpg" alt="メインビジュアル画像１" /></div> -->
  </div>
  <div class="p-mainvisual__logo-sp"></div><!-- /mainvisual__logo-sp -->
</section>