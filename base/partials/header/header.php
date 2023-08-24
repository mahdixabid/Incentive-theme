<?php
function header_primary()
{
    require get_template_directory() . '/base/components/path.php';
?>
<?php
    ob_start();
    ?>
    <div id="header">
        <div class="primary_header desktop_menu pd20-t-b container_full fl_row">
            <div class="logo_menu fl_row gp40">
                <div class="toggle_menu">
                    <img src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/toggle_btn.svg"; ?>">
                    <div class="menu_canvas">
                        <img class="close_btn" src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/close_btn.svg"; ?>">
                        <div class="nav_canvas">
                            <?php
                            wp_nav_menu([
                                "menu" => "primary_menu_primary",
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
                    "menu" => "primary_menu_primary",
                    "container" => "",
                    "menu_class" => ""
                ]);
                $menu = ob_get_clean();
                echo $menu;
                ?>
            </div>
            <div class="action_btn btn_light">
                <a href="<?php echo $home . "/contact_us"; ?>"><p class="p14 uper">contact</p></a>
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
                    "menu" => "primary_menu_primary",
                    "container" => "",
                    "menu_class" => ""
                ]);
                $menu = ob_get_clean();
                echo $menu;
                ?>
            </div>
    </div>
    <?php
}

add_shortcode("header_primary", "header_primary");
?>