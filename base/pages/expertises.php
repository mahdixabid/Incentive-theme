<?php
function Expertises_page()
{
require get_template_directory() . '/base/components/path.php';
// require get_template_directory() . '/base/components/header_page.php';
$img = "GettyImages-1366241371.png";
$tag = "Lorem Ipsum Dolor";
$title =  "Nos Expertises";
$description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales bibendum nisl, quis auctor nisl euismod vulputate. Suspendisse tempus ultricies orci, eget maximus eros congue sit amet. Fusce id scelerisque ipsum. Nulla quis lacinia tortor. Phasellus vestibulum porttitor dolor.";

echo do_shortcode( '[Header_page]' );
}

add_shortcode("Expertises_page", "Expertises_page");

?>