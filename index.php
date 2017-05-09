<?php
  session_start();
  if(isset($_SESSION['id'])) unset($_SESSION['id']);
  session_destroy();

  require_once('system/data.php');

?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
  </head>



  <body>
    <h1>Gimme musical inspiration</h1>

    <div id="ajax">
      <div id="level_0">
          <button type="button" class="btn btn-secondary btn-circle btn-xl" id="level_0-button">Let's Go</button>
      </div>
    </div>
    <div id="ajax-tracks">
    </div>
    <div class="modal" id="ajax-song">
    </div>

  <footer class="text-center">
    <div class="copyrights container" style="margin-top:25px;">
      <p><span>HTW Chur © 2017, All Rights Reserved</span>
        <br>
        <span>Code by: Fabian Rütsche, Kyle Smith and Kim Schläpfer</span>
        <br>
        <span>GitHub: <a href="https://github.com/Faebi/CodeCampAjax" target="_blank"><span class="fa fa-github-square" aria-hidden="true"></span> </a></span></p>
    </div>
  </footer>

    <!-- jQuery first, then Tether, then Bootstrap JS, then custom JS... -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
  </body>
</html>
