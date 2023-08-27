<?php
function Header_page()
{
    require get_template_directory() . '/base/components/path.php';
    ?>
    <div class="header_page">
        <div class="bk_container">
            <img class="toggle_btn" src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/" . $GLOBALS['header_img']; ?>">
        </div>
        <div class="block_content fl_col">
            <div><p class="p18"> <?php echo $GLOBALS['header_tag'] ?> </p></div>
            <div class=" fl_col gp20">
                <p class="p60 w-900 mx2"> <?php echo $GLOBALS['header_title'] ?> </p>
                <p class="p18"> <?php echo $GLOBALS['header_description'] ?> </p>
            </div>
        </div>
    </div>
<?php
}

add_shortcode("Header_page", "Header_page");