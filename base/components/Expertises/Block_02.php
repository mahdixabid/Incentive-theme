<?php
function Expertises_block_02()
{
    require get_template_directory() . '/base/components/path.php';
    ?>
    <div id="Expertises_block_02" class=" container_boxed">
        <div class="wrapper fl_row">
            <p class="p60 white w-900">NOS <span class="bleu"><u>EXPERTISES</u></span></p>
            <p class="p18 white">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec felis gravida, efficitur felis id, feugiat velit. Fusce bibendum, ex et tincidunt volutpat, magna enim vestibulum. 
            </p>
        </div>
    </div>
<?php
}

add_shortcode("Expertises_block_02", "Expertises_block_02");