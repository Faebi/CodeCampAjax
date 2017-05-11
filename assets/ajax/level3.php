<?php
  require_once('../system/data.php');
  $track_id = get_single_track($_GET["track"]); // get track from db with id
  $track = mysqli_fetch_assoc($track_id);
  $url = $track["source"];
 ?>

<script>
  // Strip-Down YT-URL Script from here: https://gist.github.com/takien/4077195
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
  // console.log(id);


  // Build iFrame
  function Createiframe(id) {
    var element = document.getElementById('videoWrapper');
    var iframe = document.createElement('iframe');
    // var node = document.createTextNode('asdf');
    // iframe.appendChild(node);
    element.appendChild(iframe);
    iframe.setAttribute("width","auto");
    iframe.setAttribute("height","auto");
    iframe.setAttribute("src","https://www.youtube.com/embed/" + id);
    iframe.setAttribute("frameborder","0");
    iframe.setAttribute("allowfullscreen","");
  }
  Createiframe(id);



// YouTube iframe API:
//
// // Load the IFrame Player API code asynchronously.
//   var tag = document.createElement('script');
//   tag.src = "https://www.youtube.com/player_api";
//   var firstScriptTag = document.getElementsByTagName('script')[0];
//   firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
//
//     // Replace the 'ytplayer' element with an <iframe> and
//     // YouTube player after the API code downloads.
//     var player;
//     function onYouTubePlayerAPIReady(id) {
//       player = new YT.Player('ytplayer', {
//         height: '360',
//         width: '640',
//         videoId: id,
//       });
//     };
//
// onYouTubePlayerAPIReady(id);

</script>

<div id="videoWrapper" class="animated">
  <div id="ytplayer"></div>
</div>
