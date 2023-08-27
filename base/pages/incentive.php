<?php
function incentive()
{
    require get_template_directory() . '/base/components/path.php';
    $GLOBALS['header_img'] = "experise_img.jpg";
    $GLOBALS['header_tag'] = "L’agence Incentive Solutions";
    $GLOBALS['header_title'] =  "Passion Technologique, Expertise Digitale";
    $GLOBALS['header_description'] = "Nous sommes une équipe de passionnés, des geeks du marketing digital dédiés à la croissance de nos clients. Notre objectif principal est de vous positionner en tant que leader incontesté de votre industrie. Avec une approche axée sur les résultats, nous travaillons avec dévouement pour atteindre vos objectifs.";

    echo do_shortcode('[Header_page]');
}

add_shortcode("incentive", "incentive");

?>