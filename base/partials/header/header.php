<?php
function header_primary()
{
    require get_template_directory() . '/base/components/path.php';
    $language_segment = get_locale();
    $language_segment = substr($language_segment, 0, 2);
    if ($language_segment == 'fr') {
        $menu_item = "primary_menu_fr";
    } else {

        $menu_item = "primary_menu_en";
    }
?>
<?php
    ob_start();
    ?>
    <div id="header">
        <div class="header container_full">
            <div class="primary_header desktop_menu  fl_row">
                <div class="logo_menu fl_row gp40">
                    <div class="toggle_menu">
                        <img src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/toggle_btn.svg"; ?>">
                        <div class="menu_canvas">
                            <img class="close_btn" src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/close_btn.svg"; ?>">
                            <div class="nav_canvas">
                                <?php
                                wp_nav_menu([
                                    "menu" => $menu_item,
                                    "container" => "",
                                    "menu_class" => ""
                                ]);
                                $menu = ob_get_clean();
                                echo $menu;
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="logo">
                        <a href="<?php echo $home ?>">
                            <img src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/logo.svg"; ?>">
                        </a>
                    </div>
                </div>
                <div class="nav_header">
                    <?php
                    wp_nav_menu([
                        "menu" => $menu_item,
                        "container" => "",
                        "menu_class" => ""
                    ]);
                    $menu = ob_get_clean();
                    echo $menu;
                    ?>
                </div>
                <div class="action_btn btn_light">
                    <a href="<?php echo $home . "/contact"; ?>"><p class="p14 uper">contact</p></a>
                </div>
            </div>
            <div class="mobile_menu fl_row">
                
                <div class="logo">
                    <a href="<?php echo $home ?>">
                        <img src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/logo.svg"; ?>">
                    </a>
                </div>
                <img class="toggle_btn" src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/toggle_btn_menu_white.svg"; ?>">
                </div>

                <div class="nav_canvas_mobile">
                        <img class="close_btn_mobile" src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/close_btn_white.svg"; ?>">
                        <?php
                        wp_nav_menu([
                            "menu" => $menu_item,
                            "container" => "",
                            "menu_class" => ""
                        ]);
                        $menu = ob_get_clean();
                        echo $menu;
                        ?>
                </div>
            </div>
        </div>
    </div>
    <?php
}

add_shortcode("header_primary", "header_primary");
?>