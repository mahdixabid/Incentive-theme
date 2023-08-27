<?php
function Contact_us()
{
    require get_template_directory() . '/base/components/path.php';
    $GLOBALS['header_img'] = "contact_img_header.jpg";
    $GLOBALS['header_tag'] = "Lorem Ipsum Dolor";
    $GLOBALS['header_title'] =  "Contact";
    $GLOBALS['header_description'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales bibendum nisl, quis auctor nisl euismod vulputate. Suspendisse tempus ultricies orci, eget maximus eros congue sit amet. Fusce id scelerisque ipsum. Nulla quis lacinia tortor. Phasellus vestibulum porttitor dolor.";

    echo do_shortcode('[Header_page]');
}

add_shortcode("Contact_us", "Contact_us");

?>