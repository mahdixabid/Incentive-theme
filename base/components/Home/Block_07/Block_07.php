<?php
function Block_07() {
  require get_template_directory() . '/base/components/path.php';
?>
<div id="Block_07" class="container_boxed fl_row">
  <div class="block_title">
    <p class="p60 white  w-900 ">
    Ils Nous Font  <u class="bleu uper">confiance</u>
    </p>
  </div>
  <div class="logos fl_row gp40">
  <?php
  // Custom query to fetch "clients" post type
  $args = array(
      'post_type' => 'clients',
      'posts_per_page' => -1, // Retrieve all posts of the "clients" post type
  );

  $clients_query = new WP_Query($args);

  if ($clients_query->have_posts()) :

      while ($clients_query->have_posts()) : $clients_query->the_post();
          $image_url = get_field('logo_clients');
          $image_alt = get_the_title(); // Use the post title as the alt attribute

          // Output the image with alt attribute
  ?>    
          <img class="bk_item" src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
  <?php
      endwhile;
      wp_reset_postdata();
  else :
      echo 'No clients found.';
  endif;
  ?>
  </div>
</div>
<?php
}

add_shortcode("Block_07", "Block_07");
?>
