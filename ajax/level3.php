<?php
require_once('../system/data.php');
$track_list = get_tracks($_GET["track"]);
echo $_GET["source"];
 ?>


<iframe width="560" height="315" src="<?php $_GET("source") ?>" frameborder="0" allowfullscreen></iframe>
