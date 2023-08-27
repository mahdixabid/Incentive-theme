<?php
function Incentive_block_01()
{
    require get_template_directory() . '/base/components/path.php';
    ?>
    <div id="Incentive_block_01" class=" container_boxed fl_col gp40">
        <div class="wrapper">
            <div class="left_block">
                <p class="p60 white uper w-900"><span class="bleu">UN PARTENAIRE</span> <u>technologique</u> !</p>
                <p class="p18">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit massa, commodo non turpis eget, tincidunt porta odio. Nam a eros et nisl fringilla accumsan quis vitae enim. Curabitur sed condimentum lacus. Praesent metus nunc, varius ut porta et, laoreet et tortor. Fusce interdum dapibus vestibulum. In quis efficitur ligula. Duis vitae neque pellentesque mauris aliquam ultrices.
                </p>
            </div>
            <div class="right_block"></div>
        </div>
    </div>
<?php
}

add_shortcode("Incentive_block_01", "Incentive_block_01");