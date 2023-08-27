<?php
function Expertises_block_01()
{
    require get_template_directory() . '/base/components/path.php';
    ?>
    <div id="Expertises_block_01" class=" container_boxed fl_col gp40">
        <div class="fl_col gp30 wrapper">
            <p class="p60 white w-900">VOUS AVEZ  <span class="bleu"><u>UNE IDéE</u> </span>A <span class="bleu"><u>DéVELOPPER</u></span> ?</p>
            <p class="p18 white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec felis gravida, efficitur felis id, feugiat velit. Fusce bibendum, ex et tincidunt volutpat, magna enim vestibulum massa, at semper velit dui sed nulla. Aliquam a mauris velit. Ut in risus dolor. Donec sollicitudin ullamcorper neque, vitae ornare nisl ornare vel. Curabitur sed est leo.</p>
        </div>
        <div class="btn_light large_btn">
            <a href="#">
                <p class="p14 uper">DECOUVRIR INCENTIVE SOLUTIONS</p>
            </a>
        </div>
    </div>
<?php
}

add_shortcode("Expertises_block_01", "Expertises_block_01");