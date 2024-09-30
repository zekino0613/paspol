<section id="p-mainvisual">
  <div class="p-mainvisual__images">
    <div class="p-mainvisual__images--item">
    <?php
        // Check if the current page is the archive page for 'product'
        if (is_post_type_archive('product')) {
        // Show the product archive image
          echo '<img src="' . get_template_directory_uri() . '/assets/images/paspol-image/fdbc5ff355eecda21f063b701c8b6b72.jpg" alt="Product Archive Image" />';
        // Check if it's the archive page for 'news'
        } 
        
        elseif (is_post_type_archive('news')) {            
        // Show the news archive image                
          echo '<img src="' . get_template_directory_uri() . '/assets/images/paspol-image/5aafae338835b1fd1119f273565bd3de1.jpg" alt="News Archive Image" />';
        }
        elseif (is_page('contact')) {            
        // Show the news archive image                
          echo '<img src="' . get_template_directory_uri() . '/assets/images/paspol-image/7e5b7de0a02f15808796fe8cd4fc3ab3.jpg" alt="contact Image" />';  
        }  
        elseif (is_page('thanks')) {            
        // Show the news archive image                
          echo '<img src="' . get_template_directory_uri() . '/assets/images/paspol-image/7e5b7de0a02f15808796fe8cd4fc3ab3.jpg" alt="contact Image" />';  
          
        // Default image for other archives or pages
        } else {
        // Show the default archive image
        echo '<img src="' . get_template_directory_uri() . '/assets/images/paspol-image/default-archive-image.jpg" alt="Default Archive Image" />';
        }  
    ?>
    <!--       
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/paspol-image/fdbc5ff355eecda21f063b701c8b6b72.jpg" alt="メインビジュアル画像１" /></div> -->
  </div>
  <div class="p-mainvisual__logo-sp"></div><!-- /mainvisual__logo-sp -->
</section>