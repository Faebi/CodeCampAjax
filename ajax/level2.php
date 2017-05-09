<?php
require_once('../system/data.php');
$track_list = get_tracks($_GET["genre"]);
 ?>

<div id="level_2">
  <div id="songtable">
    <?php while ($tracks = mysqli_fetch_assoc($track_list)) {?>
      <div>
        <button type="button" class="btn btn-secondary btn-circle btn-xl songs" id="<?php echo $tracks['id']; ?>">
          <?php echo $tracks['name']; ?></br><?php echo $tracks['artist']; ?>
        </button>
      </div>
    <?php } ?>
    </div>
</div>

<script>
  $('#songtable').click(function(e){
    console.log(e.target.id);
      $.ajax({
        url: 'ajax/level3.php',
        dataType: 'html',
        method: 'GET',
        data: {track: e.target.id},
        success: function(retdata){
          $("#ajax-song").html(retdata);
        }
      })
    });
</script>
