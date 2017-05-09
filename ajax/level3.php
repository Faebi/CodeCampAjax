<?php
require_once('../system/data.php');
$track_id = get_single_track($_GET["track"]);
$track = mysqli_fetch_assoc($track_id);
echo $track["source"];
 ?>

<div id="level3">
 <iframe width="560" height="315" src="<?php $_GET("source") ?>" frameborder="0" allowfullscreen></iframe>
</div>
