<?php
function home_page()
{
  echo '<div id="container" class="home_page ">';
    echo do_shortcode( '[Primary_block]' );
    echo do_shortcode( '[Block_02]' );
    echo do_shortcode( '[Block_03]' );
    echo do_shortcode( '[Block_04]' );
    echo do_shortcode( '[Block_05]' );
    echo do_shortcode( '[Block_06]' );
    echo do_shortcode( '[Block_07]' );
    echo do_shortcode( '[Block_08]' );
  echo '</div>';
}

add_shortcode("home_page", "home_page");

?>