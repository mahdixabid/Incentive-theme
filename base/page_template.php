<?php
function Our_founder_legacy()
{
    require get_template_directory() . '/base/components/path.php';
    $url = 'http://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
    if (str_contains($url, "ar")) {
        $_page = get_field("celebrating_our_legacy_ar");
    } else {
        $_page = get_field("celebrating_our_legacy_en");
    }
    if ($_page) {
        ob_start();
        ?>
        <div id="Celebrating_our_legacy">
            <?php
            $title = $_page["title_celebrating_our_legacy"];
            $description = $_page["description_celebrating_our_legacy"];
            $media = $_page["media_celebrating_our_legacy"];
            ?>
            <div class="media_text light_bloc wrapper container_full fl_row Hspace">

            </div>
        </div>
        <?php
        $output = ob_get_clean();
        return $output;
    }
}

add_shortcode("Our_founder_legacy", "Our_founder_legacy");

?>