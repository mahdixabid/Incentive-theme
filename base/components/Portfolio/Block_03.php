<?php
function Portfolio_block_03()
{
    require get_template_directory() . '/base/components/path.php';
    ?>
    <div id="Portfolio_block_03" class="container_boxed">
        <div class="List_experises">
            <?php
    $args = array(
        'post_type' => 'Portfolio',
        'posts_per_page' => -1,
    );

    $Portfolio_query = new WP_Query($args);

    if ($Portfolio_query->have_posts()):
        $counter = 1;

        while ($Portfolio_query->have_posts()): $Portfolio_query->the_post();
            $counter_formatted = sprintf("%02d", $counter);
            ?>
		                    <div class="Single_card pd40 gp10 fl_col">
		                        <div class="card_header">
		                            <img class="icon" src="<?php echo the_field('icon_Portfolio') ?>">
		                        </div>
                                <div class="card_body fl_col gp10">
                                    <p class="p32 mx2 w-900"><?php the_field('title_Portfolio');?></p>
                                    <p class="p16 mx10"><?php the_field('description_Portfolio');?></p>
                                </div>
		                    </div>
		                    <?php
        $counter++;
        endwhile;
        wp_reset_postdata();
    else:
        echo '<p style="width:100%; margin:80px 0" class="p18 white center"> No Portfolio Item Found. </p>';
    endif;
    ?>

        </div>
    </div>
    <?php
}

add_shortcode("Portfolio_block_03", "Portfolio_block_03");
