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
    <div id="ajax">
      <div id="level_0" class="container">
        <div class="col-12">
          <h1 class="elegantshd">Gimme musical inspiration</h1>
          <button type="button" class="btn btn-secondary btn-circle btn-xl">Let's Go</button>
        </div>
      </div>

      <div id="level_1" class="container">
        <div class="row">
          <div class="col-6 col-md-2">
            <button type="button" class="btn btn-secondary btn-circle btn-xl">Indie</button>
          </div>
          <div class="col-6 col-md-2">
            <button type="button" class="btn btn-secondary btn-circle btn-xl">Pop</button>
          </div>
          <div class="col-6 col-md-2">
            <button type="button" class="btn btn-secondary btn-circle btn-xl">Hip-Hop</button>
          </div>
          <div class="col-6 col-md-2">
            <button type="button" class="btn btn-secondary btn-circle btn-xl">Metal</button>
          </div>
          <div class="col-6 col-md-2">
            <button type="button" class="btn btn-secondary btn-circle btn-xl">Future</button>
          </div>
          <div class="col-6 col-md-2">
            <button type="button" class="btn btn-secondary btn-circle btn-xl">Techno</button>
          </div>
          <div class="col-6 col-md-2">
            <button type="button" class="btn btn-secondary btn-circle btn-xl">Hard-Rock</button>
          </div>
        </div>
      </div>


      <div id="level_2" class="container">
        <div  id="songtable" class="row">
          <div class= "col-12">
            <table>
              <tr>
                <td>
                  <div>
                    <img src="https://www.topknobs.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/M/6/M613.jpg" alt="Mountain View" style="width:304px;height:228px;">
                  </div>
                </td>
                <td>
                  <div>
                    <img src="https://www.topknobs.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/M/6/M613.jpg" alt="Mountain View" style="width:304px;height:228px;">
                  </div>
                </td>
                <td>
                  <div>
                    <img src="https://www.topknobs.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/M/6/M613.jpg" alt="Mountain View" style="width:304px;height:228px;">
                  </div>
                </td>
                <td>
                  <div>
                    <img src="https://www.topknobs.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/M/6/M613.jpg" alt="Mountain View" style="width:304px;height:228px;">
                  </div>
                </td>
                <td>
                  <div>
                    <img src="https://www.topknobs.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/M/6/M613.jpg" alt="Mountain View" style="width:304px;height:228px;">
                  </div>
                </td>
                <td>
                  <div>
                    <img src="https://www.topknobs.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/M/6/M613.jpg" alt="Mountain View" style="width:304px;height:228px;">
                  </div>
                </td>
                <td>
                  <div>
                    <img src="https://www.topknobs.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/M/6/M613.jpg" alt="Mountain View" style="width:304px;height:228px;">
                  </div>
                </td>
                <td>
                  <div>
                    <img src="https://www.topknobs.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/M/6/M613.jpg" alt="Mountain View" style="width:304px;height:228px;">
                  </div>
                </td>
              </tr>

              <tr>
                <td>
                  <div>
                    <img src="https://www.topknobs.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/M/6/M613.jpg" alt="Mountain View" style="width:304px;height:228px;">
                  </div>
                </td>
                <td>
                  <div>
                    <img src="https://www.topknobs.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/M/6/M613.jpg" alt="Mountain View" style="width:304px;height:228px;">
                  </div>
                </td>
                <td>
                  <div>
                    <img src="https://www.topknobs.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/M/6/M613.jpg" alt="Mountain View" style="width:304px;height:228px;">
                  </div>
                </td>
                <td>
                  <div>
                    <img src="https://www.topknobs.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/M/6/M613.jpg" alt="Mountain View" style="width:304px;height:228px;">
                  </div>
                </td>
                <td>
                  <div>
                    <img src="https://www.topknobs.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/M/6/M613.jpg" alt="Mountain View" style="width:304px;height:228px;">
                  </div>
                </td>
                <td>
                  <div>
                    <img src="https://www.topknobs.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/M/6/M613.jpg" alt="Mountain View" style="width:304px;height:228px;">
                  </div>
                </td>
                <td>
                  <div>
                    <img src="https://www.topknobs.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/M/6/M613.jpg" alt="Mountain View" style="width:304px;height:228px;">
                  </div>
                </td>
                <td>
                  <div>
                    <img src="https://www.topknobs.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/M/6/M613.jpg" alt="Mountain View" style="width:304px;height:228px;">
                  </div>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>


    </div>

  <footer class="text-center">
    <div class="copyrights container" style="margin-top:25px;">
      <p><span>HTW Chur © 2017, All Rights Reserved</span>
        <br>
        <span>Designed by: Fabian Rütsche, Kyle Smith and Kim Schläpfer</span>
        <br>
        <span>GitHub: <a href="https://github.com/Faebi/CodeCampAjax" target="_blank"><span class="fa fa-github-square" aria-hidden="true"></span> </a></span></p>
    </div>
  </footer>

    <!-- jQuery first, then Tether, then Bootstrap JS, then custom JS... -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
  </body>
</html>
