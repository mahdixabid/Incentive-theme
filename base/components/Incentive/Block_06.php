<?php
function Incentive_block_06()
{
    require get_template_directory() . '/base/components/path.php';
    ?>
    <div id="Incentive_block_06" class=" container_boxed fl_col gp40">
        <div class="wrapper fl_col gp40">
            <div class="block_header fl_col gp30">
                <p class="white p60 w-900">Ou <span class="bleu uper"><u>nous<br> trouver</u></span> ?</p>
                <p class="p18 white">
                Incentive Solutions, une agence digitale locale et proche de vous. <br>
                Nous sommes fiers de notre présence solide ainsi que de notre portée nationale. Nos bureaux sont stratégiquement situés dans des endroits clés, offrant ainsi une accessibilité maximale à nos clients. 
                </p>
            </div>
            <div class="map_hotspot">
                <img class="map_world" class="close_btn" src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/map_world.svg"; ?>">
                <div class="targets">
                    <div class="country tunisia">
                        <img src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/tunisia_map.svg"; ?>">
                        <div class="country_box white fl_row gp20">
                            <div class="line_info"></div>
                            <div class="country_info">
                                <p class="p18 w-700">Incentive Solutions Tunisia</p>
                                <p class="p18 w-300">Lac 2 avenue de la bourse, immeuble saphir</p>
                                <p class="p18 w-700">+216 25 890 242</p>
                            </div>
                        </div>
                    </div>
                    <div class="country canada hide">
                        <img src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/canada_map.svg"; ?>">
                        <div class="country_box white fl_row gp20">
                            <div class="line_info"></div>
                            <div class="country_info">
                                <p class="p18 w-700">Incentive Solutions Canada</p>
                                <p class="p18 w-300">Toronto Ontario, M5V 2C4</p>
                                <p class="p18 w-700">+1 (416) 555-1234</p>
                            </div>
                        </div>
                    </div>

                    <div class="country belgium hide">
                        <img src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/belgium_map.svg"; ?>">
                        <div class="country_box white fl_row gp20">
                            <div class="line_info"></div>
                            <div class="country_info">
                                <p class="p18 w-700">Incentive Solutions Belgium</p>
                                <p class="p18 w-300">45 Rue de Bruxelles ,1000 </p>
                                <p class="p18 w-700">+32 2 555 12 34</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}

add_shortcode("Incentive_block_06", "Incentive_block_06");