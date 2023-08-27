<?php
function Portfolio_block_02()
{
    require get_template_directory() . '/base/components/path.php';
    ?>
    <div id="Portfolio_block_02" class=" container_boxed">
        <div class="wrapper fl_row">
            <p class="p60 white w-900">NOS <span class="bleu"><u>Portfolio</u></span></p>
            <p class="p18 white">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec felis gravida, efficitur felis id, feugiat velit. Fusce bibendum, ex et tincidunt volutpat, magna enim vestibulum. 
            </p>
        </div>
    </div>
<?php
}

add_shortcode("Portfolio_block_02", "Portfolio_block_02");