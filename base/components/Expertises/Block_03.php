<?php
function Expertises_block_03()
{
    require get_template_directory() . '/base/components/path.php';
    $language_segment = get_locale();
    $language_segment = substr($language_segment, 0, 2);
    if ($language_segment == 'fr') {
        $title = "title_expertises";
        $description = "description_expertises";
    }
    else {
        $title = "title_expertises_en";
        $description = "description_expertises_en";
    }
    ?>
    <div id="Expertises_block_03" class="container_boxed">
        <div class="List_experises">
            <?php
    $args = array(
        'post_type' => 'expertises',
        'posts_per_page' => -1,
    );

    $expertises_query = new WP_Query($args);

    if ($expertises_query->have_posts()):
        $counter = 1;

        while ($expertises_query->have_posts()): $expertises_query->the_post();
            $counter_formatted = sprintf("%02d", $counter);
            ?>
		                    <div class="Single_card  gp10 fl_col">
		                        <div class="card_header pd20-t-b pd40-r-l">
		                            <img class="icon" src="<?php echo the_field('icon_expertises') ?>">
		                        </div>
                                <div class="card_body pd20 fl_col gp10">
                                    <p class="p32 mx2 w-900"><?php the_field($title);?></p>
                                    <p class="p16 mx10"><?php the_field($description);?></p>
                                </div>
		                    </div>
		                    <?php
        $counter++;
        endwhile;
        wp_reset_postdata();
    else:
        echo '<p style="width:100%; margin:80px 0" class="p18 white center"> No Expertises Item Found. </p>';
    endif;
    ?>

        </div>
    </div>
    <?php
}

add_shortcode("Expertises_block_03", "Expertises_block_03");
