<?php
function Recrutement_listing($atts) {
    $atts = shortcode_atts(array(
        'posts_per_page' => 6, 
    ), $atts);

    $paged = get_query_var('paged') ? get_query_var('paged') : 1;

    $args = array(
        'post_type' => 'recrutement', 
        'posts_per_page' => $atts['posts_per_page'],
        'paged' => $paged,
    );

    $recrutement_query = new WP_Query($args);

    if ($recrutement_query->have_posts()) :
        echo '<div id="Recrutement_listing" class="container_boxed">';
        while ($recrutement_query->have_posts()) : $recrutement_query->the_post();
            $post_date = get_the_date('d/m/Y');
            $title = get_the_title();
            $description = get_field("description_recrutement");
            $post_link = get_permalink();
            ?>

            <div class="recrutement-post fl_row">
                <div class="left_block fl_col gp5">
                    <p class="p18 bleu"><?php echo esc_html($post_date); ?></p>
                    <p class="p32 white w-900 "><?php echo esc_html($title); ?></p>
                </div>
                <div class="right_block fl_col gp40">
                    <p class="p18 white"><?php echo esc_html($description); ?></p>
                    <div class="btn_light large_btn">
                        <a href="<?php echo esc_url($post_link); ?>"><p class="p14 uper">Voir Plus</p></a>
                    </div>
                </div>
            </div>
            <div class="line_diver pd40-t-b">
                <hr>
            </div>
            <?php
        endwhile;

        wp_reset_postdata();

        echo '<div class="pagination white p16 fl_row gp10">';
        echo paginate_links(array(
            'total' => $recrutement_query->max_num_pages,
        ));
        echo '</div>';
        echo '</div>';
    else :
        echo 'No recrutement posts found.';
    endif;
}

add_shortcode('Recrutement_listing', 'Recrutement_listing');
?>
