<?php
function Expertises_page()
{
    require get_template_directory() . '/base/components/path.php';
    $GLOBALS['header_img'] = "experise_img.jpg";
    $GLOBALS['header_tag'] = "Lorem Ipsum Dolor";
    $GLOBALS['header_title'] =  "Nos Expertises";
    $GLOBALS['header_description'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales bibendum nisl, quis auctor nisl euismod vulputate. Suspendisse tempus ultricies orci, eget maximus eros congue sit amet. Fusce id scelerisque ipsum. Nulla quis lacinia tortor. Phasellus vestibulum porttitor dolor.";
    echo '<div class="fl_col gp70">';
        echo do_shortcode('[Header_page]');
        echo do_shortcode('[Expertises_block_01]');
        echo do_shortcode('[Expertises_block_02]');
        echo do_shortcode('[Expertises_block_03]');
        echo do_shortcode('[Contact_footer]');
    echo '</div>';
}

add_shortcode("Expertises_page", "Expertises_page");
