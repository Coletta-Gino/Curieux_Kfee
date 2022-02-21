    <!-- Logo (Simplified) -->
    <div class="simplified-logo">
      <?php 
        $image_attributes = wp_get_attachment_image_src($attachment_id = 125);
        $alt_text = get_post_meta(125, '_wp_attachment_image_alt', true);
      ?>
  
      <img src="<?php echo $image_attributes[0]; ?>" alt="<?php echo $alt_text; ?>" />
    </div>