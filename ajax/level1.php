<?php
require_once('../system/data.php');
$genre_list = get_genre();

 ?>


  <div id="level_1">
    <div id="genretable">
        <?php while ($genre = mysqli_fetch_assoc($genre_list)) { ?>
          <button type="button" class="btn btn-secondary btn-circle btn-xl genre" id="<?php echo strtolower($genre['genre']); ?>"><?php echo $genre['genre']; ?></button>
      <?php  } ?>
    </div>
  </div>



<script>
  $('#genretable').click(function(e){
    console.log(e.target.id);
      $.ajax({
        url: 'ajax/level2.php',
        dataType: 'html',
        method: 'GET',
        data: {genre: e.target.id},
        success: function(retdata){
          $("#ajax-tracks").html(retdata);
        }
      })
    });
</script>
