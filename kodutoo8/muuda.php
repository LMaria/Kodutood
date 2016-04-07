<?php
$font_color = "#0000ff";
if (isset($_POST['font_color']) && $_POST['font_color'] != "") {
    $font_color = htmlspecialchars($_POST['font_color']);
}
$font_style = "normal";
if (isset($_POST['font_style']) && $_POST['font_style'] != "") {
    $font_style = htmlspecialchars($_POST['font_style']);
}
$font_size = "12px";
if (isset($_POST['font_size']) && $_POST['font_size'] != "") {
    $font_size = htmlspecialchars($_POST['font_size']);
}
$background_color = "#fff";
if (isset($_POST['background_color']) && $_POST['background_color'] != "") {
    $background_color = htmlspecialchars($_POST['background_color']);
}
$border_width = "1px";
if (isset($_POST['border_width']) && $_POST['border_width'] != "") {
    $border_width = htmlspecialchars($_POST['border_width']);
}

$border_color = "blue";
if (isset($_POST['border_color']) && $_POST['border_color'] != "") {
    $border_color = htmlspecialchars($_POST['border_color']);
}
?> 