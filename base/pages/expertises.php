<?php
function Expertises_page()
{
    require get_template_directory() . '/base/components/path.php';
    $GLOBALS['header_img'] = "experise_img.jpg";
    $GLOBALS['header_tag'] = "Incentive Solution un large panel de prestation";
    $GLOBALS['header_title'] =  "Nos Expertises";
    $GLOBALS['header_description'] = "Voulez-vous développer votre entreprise en ligne ? Vous avez envie d’innover et de dépasser vos concurrents en investissant dans des solutions innovantes qui allient fonctionnalités, expérience client et technologie ? Faites appel à une agence qui dispose de plusieurs expertises, capable de vous  offrir un large choix de services.";
    echo '<div class="fl_col gp70">';
        echo do_shortcode('[Header_page]');
        echo do_shortcode('[Expertises_block_01]');
        echo do_shortcode('[Expertises_block_02]');
        echo do_shortcode('[Expertises_block_03]');
        echo do_shortcode('[Contact_footer]');
    echo '</div>';
}

add_shortcode("Expertises_page", "Expertises_page");
