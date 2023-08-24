<?php
function fields_code()
{
    $Group_Parent = get_field("Group_Parent");
    if ($Group_Parent) {
        $Repeater_Parent = $Group_Parent["Repeater_Parent"];
        if ($Repeater_Parent) {
            foreach ($Repeater_Parent as $element) {

                // Get Elements Fields By name
                $testfield = $element["testfield"];
                $title = $element["title"];
                $description = $element["description"];

                // Display Fields
                echo $testfield;
                echo $title;
                echo $description;

                // Adding New Group
                $btn = $element["button"];
                if ($btn) {
                    // Importing Group Data
                    $btnTxt = $btn["button_text"];
                    $button_url = $btn["button_url"];
                    ?>
                  <a href="<?php echo $button_url; ?>"><?php echo $btnTxt; ?></a>
                    <?php
                }
            }
        }
    }
}

add_shortcode("fields_code", "fields_code");

?>
