<?php
function Block_06() {
    require get_template_directory() . '/base/components/path.php';
?>
<div id="Block_06" class="container_boxed fl_col">
    <p class="p60 white center w-900">
        Notre <u class="bleu uper">portfolio</u>
    </p>
    <div class="swiper mySwiper_portfolio">
        <div class="swiper-wrapper">
            <?php
            // Custom query to fetch "portfolio" post type
            $args = array(
                'post_type' => 'portfolio',
                'posts_per_page' => -1, // Retrieve all posts of the "portfolio" post type
            );

            $portfolio_query = new WP_Query($args);

            if ($portfolio_query->have_posts()) :

                while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
                  ?>
                    <div class="swiper-slide gp10 fl_col">
                        <img class="bk_item" src="<?php echo the_field('image_portfolio') ?>">
                        <p class="p18 bleu"><?php the_field('technology_portfolio'); ?></p>
                        <p class="p32 white w-900"><?php the_field('project_title_portfolio'); ?></p>
                        <p class="p16 w-200 white mx2"><?php the_field('description_portfolio'); ?></p>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo 'No portfolio found.';
            endif;
            ?>

</div>
<div class="swiper-pagination"></div>
    </div>
    <script>
    var swiper = new Swiper(".mySwiper_portfolio", {
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + "0" + (index + 1) + "</span>";
        },
      },
    });
  </script>
</div>
<?php
}

add_shortcode("Block_06", "Block_06");
?>




