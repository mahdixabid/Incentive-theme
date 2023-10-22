<?php
function Incentive_block_05($atts) {
    $atts = shortcode_atts(array(
        'posts_per_page' => 6, // Display 6 profiles initially
        'orderby' => 'date',
        'order'   => 'DESC',
    ), $atts);

    $args = array(
        'post_type' => 'team',
        'posts_per_page' => $atts['posts_per_page'],
        'orderby' => 'date',
        'order' => 'DESC',
    );

    $team_query = new WP_Query($args);

    if ($team_query->have_posts()) :
        echo '<div id="Incentive_block_05" class="container_boxed fl_col">';
        ?> <div class="block_header fl_col gp20">
            <p class="p60 white w-900">Notre <span class="bleu uper"><u>équipe</u></span></p>
            <p class="p18 white">Une équipe d'experts disponibles pour vous accompagner de manière personnalisée et durable. </p>
        </div>
        <?php
            echo '<div class="Team_listing white" id="team-listing">';

            $card_count = 1;

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
                $card_count++;
            endwhile;

            wp_reset_postdata();

            echo '</div>';
            ?>
            <div class="load-more-button btn_light">
                <button id="load-more"><p>Load More</p></button>
                <div class="loading-animation">
                    <div class="loading-circle"></div>
                </div>
            </div>
            <script>
                var initialPostsPerPage = <?php echo $atts['posts_per_page']; ?>;
                var loadPostsPerPage = 3; // Number of posts to load when clicking "Load More"
                var offset = initialPostsPerPage;
                var totalPosts = <?php echo $team_query->found_posts; ?>;
                var $loadMoreButton = document.getElementById('load-more');
                var $teamListing = document.getElementById('team-listing');
                var $loadingAnimation = document.querySelector('.loading-animation');

                $loadMoreButton.addEventListener('click', function () {
                    if (offset < totalPosts) {
                        $loadingAnimation.style.display = 'block';
                        var data = {
                            action: 'load_more_profiles',
                            offset: offset,
                            postsPerPage: loadPostsPerPage
                        };

                        jQuery.ajax({
                            url: '<?php echo admin_url('admin-ajax.php'); ?>',
                            type: 'post',
                            data: data,
                            success: function (response) {
                                $loadingAnimation.style.display = 'none';
                                $teamListing.innerHTML += response;
                            }
                        });

                        offset += loadPostsPerPage;
                    } else {
                        $loadMoreButton.style.display = 'none';
                    }
                });
            </script>
            <?php
        echo '</div>';
    else :
        echo 'Members List Empty';
    endif;
}

add_shortcode('Incentive_block_05', 'Incentive_block_05');

function load_more_profiles() {
    $offset = sanitize_text_field($_POST['offset']);
    $postsPerPage = sanitize_text_field($_POST['postsPerPage']);

    $args = array(
        'post_type' => 'team',
        'posts_per_page' => $postsPerPage,
        'orderby' => 'date',
        'order' => 'DESC',
        'offset' => $offset
    );

    $team_query = new WP_Query($args);

    if ($team_query->have_posts()) {
        while ($team_query->have_posts()) : $team_query->the_post();
            $name_team = get_field("name_team");
            $last_name_team = get_field("last_name_team");
            $role_team = get_field("role_team");
            $avatar_image_team = get_field("avatar_image_team");
            ?>
            <div class="card_user card_<?php echo $offset; ?>">
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
            $offset++;
        endwhile;
    }

    wp_die();
}

add_action('wp_ajax_load_more_profiles', 'load_more_profiles');
add_action('wp_ajax_nopriv_load_more_profiles', 'load_more_profiles');
?>
