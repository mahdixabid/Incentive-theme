<?php
function recrutement_post_details()
{
    require get_template_directory() . '/base/components/path.php';
    $GLOBALS['header_img'] = "recrutement-post_details_header.jpg";
    $GLOBALS['header_tag'] = "Lorem Ipsum Dolor";
    $GLOBALS['header_title'] =  "Recrutement & Cariere";
    $GLOBALS['header_description'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales bibendum nisl, quis auctor nisl euismod vulputate. Suspendisse tempus ultricies orci, eget maximus eros congue sit amet. Fusce id scelerisque ipsum. Nulla quis lacinia tortor. Phasellus vestibulum porttitor dolor.";

    echo do_shortcode('[Header_page]');
    echo do_shortcode('[Current_Recrutement_Post]');
}

add_shortcode("recrutement_post_details", "recrutement_post_details");

?>