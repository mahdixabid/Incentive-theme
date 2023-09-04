<?php
function Portfolio_block_01() {
    require get_template_directory() . '/base/components/path.php';
?>
<div id="Portfolio_block_01" class="container_boxed fl_col">
    <div class="filter_container">
        <div class="filter_elements pd40-r-l">
            <?php echo do_shortcode( '[fe_widget]' ); ?>
        </div>
    </div>

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
                      <div class="scroll_bar_item fl_col gp20">
                          <p class="p14 white w-700 uper">scroll</p>
                          <div class="scroll_item fl_col">
                            <div class="base"></div>
                            <div class="line"></div>
                          </div>
                        </div>
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
      mousewheel: true,
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

<?php echo do_shortcode('[Contact_footer]'); ?>
<?php
}

add_shortcode("Portfolio_block_01", "Portfolio_block_01");
?>




