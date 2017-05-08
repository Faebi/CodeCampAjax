<?php
require_once('../system/data.php');
$track_list = get_tracks("Hip-Hop");
 ?>

<div id="level_2">
  <div  id="songtable">
    <?php while ($tracks = mysqli_fetch_assoc($track_list)) {?>
      <div>
        <button type="button" class="btn btn-secondary btn-circle btn-xl" id="genre-<?php echo strtolower($genre['genre']); ?>">
          <p><?php echo $tracks['name']; ?></br><?php echo $tracks['artist']; ?></p></button>
      </div>
    <?php } ?>

    </div>
</div>
