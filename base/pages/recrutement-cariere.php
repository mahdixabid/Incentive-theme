<?php
function recrutement_cariere()
{
    require get_template_directory() . '/base/components/path.php';
    $GLOBALS['header_img'] = "recrutement-cariere_header.jpg"; 
    // $GLOBALS['header_tag'] = "Lorem Ipsum Dolor";
    $GLOBALS['header_title'] =  "Recrutement & Cariere";
    // $GLOBALS['header_description'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales bibendum nisl, quis auctor nisl euismod vulputate. Suspendisse tempus ultricies orci, eget maximus eros congue sit amet.";
    echo do_shortcode('[Header_page]');
    echo do_shortcode('[Recrutement_listing]');
    echo do_shortcode('[Prefooter]');
}

add_shortcode("recrutement_cariere", "recrutement_cariere");

?>