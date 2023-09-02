<?php
function Home_block_07() {
  require get_template_directory() . '/base/components/path.php';
  ?>
  <div id="Home_block_07" class="container_boxed fl_row">
      <div class="block_title">
          <p class="p60 white  w-900 ">
              Ils Nous Font  <u class="bleu uper">confiance</u>
          </p>
      </div>
      <div class="swiper-container logos-slider"> <!-- Wrap the logos in a swiper-container -->
          <div class="swiper-wrapper">
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
                      $image_alt = get_the_title(); 
                      ?>
                      <div class="swiper-slide">
                          <img class="bk_item" src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
                      </div>
                      <?php
                  endwhile;
                  wp_reset_postdata();
              else :
                  echo 'No clients found.';
              endif;
              ?>
          </div>
      </div>
  </div>
  <script>
    // Initialize Swiper
    var swiper = new Swiper('.logos-slider', {
        slidesPerView: 3,
        spaceBetween: 20,
        autoplay: {
            delay: 1500,
            disableOnInteraction: false,
        },
        grabCursor: true,
    });
</script>
  <?php
}

add_shortcode("Home_block_07", "Home_block_07");
?>
