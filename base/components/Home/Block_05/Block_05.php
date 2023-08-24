<?php
function Block_05()
{
    require get_template_directory() . '/base/components/path.php';
    ?>
<div id="Block_05" class="container_boxed">
    <div class="swiper mySwiper_expertises">
        <div class="swiper-wrapper">
            <?php
// Custom query to fetch "expertises" post type
    $args = array(
        'post_type' => 'expertises',
        'posts_per_page' => -1, // Retrieve all posts of the "expertises" post type
    );

    $expertises_query = new WP_Query($args);

    if ($expertises_query->have_posts()):
        $counter = 1;

        while ($expertises_query->have_posts()): $expertises_query->the_post();
            $counter_formatted = sprintf("%02d", $counter);
            ?>
		                    <div class="swiper-slide pd40 gp10 fl_col">
		                        <div>
		                          <p class="p60 w-900"><?php echo $counter_formatted; ?></p>
		                          <img class="icon" src="<?php echo the_field('icon_expertises') ?>">
		                      </div>
		                        <div><p class="p32 mx2 w-900"><?php the_field('title_expertises');?></p></div>
		                        <div><p class="p16"><?php the_field('description_expertises');?></p></div>
		                    </div>
		                    <?php
        $counter++;
        endwhile;
        wp_reset_postdata();
    else:
        echo 'No expertises found.';
    endif;
    ?>

</div>
<div class="swiper-scrollbar"></div>
    </div>
    <script>
    // Define configuration options based on screen width
    var swiperConfig = {
        loop: true,
        spaceBetween: 30,
        scrollbar: {
            el: ".swiper-scrollbar",
            // hide: true,
        },
    };

    if (screen.width > 992) {
        swiperConfig.slidesPerView = 3;
    }

    var swiper = new Swiper(".mySwiper_expertises", swiperConfig);
</script>

</div>
<?php
}

add_shortcode("Block_05", "Block_05");
?>