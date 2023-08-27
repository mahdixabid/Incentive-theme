<?php
function home_page()
{
  echo '<div id="container" class="home_page ">';
    echo do_shortcode( '[Primary_block]' );
    echo do_shortcode( '[Home_block_02]' );
    echo do_shortcode( '[Home_block_03]' );
    echo do_shortcode( '[Home_block_04]' );
    echo do_shortcode( '[Home_block_05]' );
    echo do_shortcode( '[Home_block_06]' );
    echo do_shortcode( '[Home_block_07]' );
    echo do_shortcode( '[Home_block_08]' );
  echo '</div>';
}

add_shortcode("home_page", "home_page");

?>