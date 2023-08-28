<?php
function incentive()
{
    require get_template_directory() . '/base/components/path.php';
    $GLOBALS['header_img'] = "recrutement-post_details_header.jpg";
    $GLOBALS['header_tag'] = "L’agence Incentive Solutions";
    $GLOBALS['header_title'] =  "Passion Technologique, Expertise Digitale";
    $GLOBALS['header_description'] = "Nous sommes une équipe de passionnés, des geeks du marketing digital dédiés à la croissance de nos clients. Notre objectif principal est de vous positionner en tant que leader incontesté de votre industrie. Avec une approche axée sur les résultats, nous travaillons avec dévouement pour atteindre vos objectifs.";
    echo '<div class="incentive_page fl_col gp70">';
        echo do_shortcode('[Header_page]');
        echo do_shortcode('[Incentive_block_01]');
        echo do_shortcode('[Incentive_block_02]');
        echo do_shortcode('[Incentive_block_03]');
        // echo do_shortcode('[Incentive_block_04]');
        // echo do_shortcode('[Incentive_block_05]');
        // echo do_shortcode('[Incentive_block_06]');
    echo "</div>";
}

add_shortcode("incentive", "incentive");

?>