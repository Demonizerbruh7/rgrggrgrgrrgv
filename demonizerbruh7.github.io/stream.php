<?php 
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $video = "{https://14-str12-3201-prod.tv.cetin.cz/bpk-token/2AE@khz1eqimfptac1heynrpwsxjab0j4gbekd2lufaa/bpk-tv/2109/output0/manifest.mpd $id}";
    echo "<video controls><source src='{$video}' type='application/dash+xml'></video>";


}
?>
