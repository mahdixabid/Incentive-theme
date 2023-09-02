<?php
function Incentive_block_05($atts) {
    $atts = shortcode_atts(array(
        'posts_per_page' => -1, 
    ), $atts);

    $args = array(
        'post_type' => 'team', 
        'posts_per_page' => $atts['posts_per_page'],
    );

    $team_query = new WP_Query($args);

    if ($team_query->have_posts()) :
        echo '<div id="Incentive_block_05" class="container_boxed fl_col">';
        ?> <div class="block_header fl_col gp20">
            <p class="p60 white w-900">Notre <span class="bleu uper"><u>équipe</u></span></p>
            <p class="p18 white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec felis gravida, efficitur felis id, feugiat velit. Fusce bibendum, ex et tincidunt volutpat, magna enim vestibulum. </p>
        </div>
        <?php
            echo '<div class="Team_listing white">';

            $card_count = 1; // Initialize the card count

            while ($team_query->have_posts()) : $team_query->the_post();
                $name_team = get_field("name_team");
                $last_name_team = get_field("last_name_team");
                $role_team = get_field("role_team");
                $avatar_image_team = get_field("avatar_image_team");
                ?>
                <div class="card_user card_<?php echo $card_count; ?>">
                    <div class="card_img"><img src="<?php echo $avatar_image_team ?>" alt=""></div>
                    <div class="card_info pd20-r-l fl_col gp10">
                        <div class="fl_col gp5">
                            <p class="mx1 p32 w-900"><?php echo $name_team ?></p>
                            <p class="mx1 p32 w-900"><?php echo $last_name_team ?></p>
                        </div>
                        <p class="mx1 w-300"><?php echo $role_team ?></p>
                    </div>
                </div>
                <?php
                $card_count++; // Increment the card count for the next user

                // Check if the current card is a multiple of 3 to add a new container
                if ($card_count % 3 === 1) {
                    echo '</div>'; // Close the current container
                    echo '<div class="Team_listing white">'; // Open a new container
                }
            endwhile;

            wp_reset_postdata();

            echo '</div>';
        echo '</div>';
    else :
        echo 'Members List Empty';
    endif;
}

add_shortcode('Incentive_block_05', 'Incentive_block_05');
?>
