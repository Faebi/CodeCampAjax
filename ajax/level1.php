<?php
require_once('../system/data.php');
$genre_list = get_genre();
 ?>


  <div id="level_1" class="container">
    <div class="genretable">
        <?php while ($genre = mysqli_fetch_assoc($genre_list)) { ?>
          <div class="col-6 col-md-2">
          <button type="button" class="btn btn-secondary btn-circle btn-xl" id="genre-<?php echo strtolower($genre['genre']); ?>"><?php echo $genre['genre']; ?></button>
        </div>
      <?php  } ?>
    </div>
  </div>

<script>

$('#genre-hip-hop').click(function(){
  console.log("YES .click works")
    $.ajax({
      url: 'ajax/level2.php',
      dataType: 'html',
      method: 'GET',
      data: '',
      success: function(retdata){
        $("#ajax").html(retdata);
      }
    })
  });


</script>
