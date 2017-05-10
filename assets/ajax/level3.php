<?php
  require_once('../system/data.php');
  $track_id = get_single_track($_GET["track"]); // get track from db with id
  $track = mysqli_fetch_assoc($track_id);
  $url = $track["source"];
 ?>

<script>
  // Script from here: https://gist.github.com/takien/4077195
  function YouTubeGetID(url){
  var ID = '';
  url = url.replace(/(>|<)/gi,'').split(/(vi\/|v=|\/v\/|youtu\.be\/|\/embed\/)/);
  if(url[2] !== undefined) {
    ID = url[2].split(/[^0-9a-z_\-]/i);
    ID = ID[0];
  }
  else {
    ID = url;
  }
    return ID;
  }

  var url = "<?php echo $url ?>";
  var id = YouTubeGetID(url);

// Build iFrame
  function Createiframe(id) {
    var element = document.getElementById('videoWrapper');
    var iframe = document.createElement('iframe');
    // var node = document.createTextNode('öalskfdj');
    // iframe.appendChild(node);
    element.appendChild(iframe);
    iframe.setAttribute("width","auto");
    iframe.setAttribute("height","auto");
    iframe.setAttribute("src","https://www.youtube.com/embed/" + id);
    iframe.setAttribute("frameborder","0");
    iframe.setAttribute("allowfullscreen","");
  }
  Createiframe(id);
</script>



<div id="videoWrapper">
</div>
