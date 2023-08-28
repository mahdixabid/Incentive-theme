<?php
function Incentive_block_01()
{
    require get_template_directory() . '/base/components/path.php';
    ?>
    <div id="Incentive_block_01" class=" container_boxed fl_col gp40">
        <div class="wrapper fl_row">
            <div class="left_block fl_col gp30">
                <p class="p60 white uper w-900"> UN PARTENAIRE <u class="bleu">technologique</u> !</p>
                <p class="p18 white">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit massa, commodo non turpis eget, tincidunt porta odio. Nam a eros et nisl fringilla accumsan quis vitae enim. Curabitur sed condimentum lacus. Praesent metus nunc, varius ut porta et, laoreet et tortor. Fusce interdum dapibus vestibulum. In quis efficitur ligula. Duis vitae neque pellentesque mauris aliquam ultrices.
                </p>
            </div>
            <div class="right_block">
                <img class="close_btn" src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/UN PARTENAIRE_technologique !.png"; ?>">
            </div>
        </div>
    </div>
<?php
}

add_shortcode("Incentive_block_01", "Incentive_block_01");