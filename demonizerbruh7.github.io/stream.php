<?php 
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $video = "{https://n11.stv.livebox.sk/stv-tv/6fbc7cc2907532eb1ea150e537d36504/stv4.smil/chunklist_b1667072.m3u8 $id}";
    echo "<video controls><source src='{$video}' type='application/xmpeg-url'></video>";


}
?>
