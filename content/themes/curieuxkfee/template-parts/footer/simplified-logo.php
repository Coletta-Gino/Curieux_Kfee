    <!-- Logo (Simplified) -->
    <div class="simplified-logo">
      <div>
        <?php 
          // TODO => be careful to change the value of $attachment_id = the id of the simplified logo's picture !!!
          $image_attributes = wp_get_attachment_image_src($attachment_id = 72);
          $alt_text = get_post_meta(72, '_wp_attachment_image_alt', true);
        ?>
  
        <img src="<?php echo $image_attributes[0]; ?>" alt="<?php echo $alt_text; ?>" />
      </div>
    </div>