<?php
  session_start();
  if (!isset($_SESSION["nim"])) {
    header("Location: index.php");
    exit;
  }
  else {
    $now = time();
    if ($now > $_SESSION['expire']) {
      session_destroy();
    }
  }

  // echo '<pre>';
  // echo session_id()."\n";
  // var_dump($_SESSION);
  // echo '</pre>';

  include "koneksi.php";
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <script src="https://kit.fontawesome.com/15181efa86.js" crossorigin="anonymous"></script>
    <script src="js/lazysizes.min.js" async></script>
    <title>Voting Kakak Ter | HIMSI FASILKOM UNSRI</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/vote.css" rel="stylesheet">
  </head>
  <body>
  <header>
  
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-center justify-content-md-between" style="color:white">
      <a class="navbar-brand d-flex align-items-center" >
        <i class="fas fa-vote-yea"></i>
        <strong style="padding-bottom:2px">&nbspVoting Kakak Ter&nbsp</strong>
      </a>
      <a class="navbar-brand" href="http://himsiunsri.org">
        <img data-src="img/himsi-unsri.png" class="lazyload" alt="" style="width:85px;">
      </a>
    </div>
  </div>
  </header>

  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Vote para nominasi kakak Ter</h1>
      <p class="judul" style="color:#2793DA">Terdapat 8 kategori pada voting ini:<br>Teramah, Tercantik, Terganteng, Terjail, Terjutek, Terlucu, Termanis, dan Terseram.</p>
      <p></p>
      
    </div>
  </section>
  <p style="background: #FFAEBC; margin: 0px; font-size:3px">&nbsp</p>
  <p style="background: #A0E7E5; margin: 0px; font-size:3px">&nbsp</p>
  <p style="background: #B4F8C8; margin: 0px; font-size:3px">&nbsp</p>
<main role="main">
<form action="voteproses.php" method="POST">   

  <!-- Teramah -->
  <div class="album py-5" style="background-color: rgb(247, 247, 247)">
    <div class="container">
      <h1 class="jumbotron-heading-nominasi"><a style="box-shadow: .1rem .1rem .5rem #FFAEBC;">Nominasi Kakak Teramah</a></h1>
      <div class="row">
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm ">
          <img class="card-img-top lazyload" data-src="img\nominasi\teramah\A.Salman Alfarizi.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_teramah" value="1" required>
                  <label class="form-check-label" for="1">A. Salman Alfarizi</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\teramah\Dytha Ananda Widhiarso.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_teramah" value="2">
                  <label class="form-check-label" for="2">Dytha Ananda Widhiarso</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\teramah\Juwinda Septia.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_teramah" value="3">
                  <label class="form-check-label" for="3">Juwinda Septia</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\teramah\Muhammad Fernando.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_teramah" value="4">
                  <label class="form-check-label" for="4">Muhammad Fernando</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\teramah\Novita Sari.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_teramah" value="5">
                  <label class="form-check-label" for="5">Novita Sari</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\teramah\Sakinah.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_teramah" value="6">
                  <label class="form-check-label" for="6">Sakinah</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\teramah\Suciati Nurrohmah.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_teramah" value="7">
                  <label class="form-check-label" for="7">Suciati Nurrohmah</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr style="height:1.5px;border-width:0;color:#e3e3e3;background-color:#e3e3e3;margin:0px">
  </div>

  <!-- Tercantik -->
  <div class="album py-5" style="background-color: #f2f2f2">
    <div class="container">
      <h1 class="jumbotron-heading-nominasi"><a style="box-shadow: .1rem .1rem .5rem #A0E7E5;">Nominasi Kakak Tercantik</a></h1>
      <div class="row">
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm ">
          <img class="card-img-top lazyload" data-src="img\nominasi\tercantik\Gladys Dwi Mawarni.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_tercantik" value="1" required>
                  <label class="form-check-label" for="1">Gladys Dwi Mawarni</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\tercantik\Indri Dwi Damayanti.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_tercantik" value="2">
                  <label class="form-check-label" for="2">Indri Dwi Damayanti</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\tercantik\Kania Putri Khalilah.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_tercantik" value="3">
                  <label class="form-check-label" for="3">Kania Putri Khalilah</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\tercantik\Nurullah Marina Kelana.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_tercantik" value="4">
                  <label class="form-check-label" for="4">Nurullah Marina Kelana</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\tercantik\Putri Ayu Maysuroh.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_tercantik" value="5">
                  <label class="form-check-label" for="5">Putri Ayu Maysuroh</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\tercantik\Ratu Amalia.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_tercantik" value="6">
                  <label class="form-check-label" for="6">Ratu Amalia</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\tercantik\Sicillia Rizki Ananda.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_tercantik" value="7">
                  <label class="form-check-label" for="7">Sicillia Rizki Ananda</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="wrapper">
        <button type="submit" class="btn btn-primary btn-lg my-btn-submit" >Vote</button>
      </div>
    </div>
    
    <p style="background: #FFAEBC; margin: 0px; font-size:3px">&nbsp</p>
    <p style="background: #A0E7E5; margin: 0px; font-size:3px">&nbsp</p>
    <p style="background: #B4F8C8; margin: 0px; font-size:3px">&nbsp</p>
  </div>


  
</form>
</main>

<footer class="text-muted">
  <div class="container">
    <p><a href="#" class="backtop">Back to top</a></p>
    <p>
      <a> Dinas Ristek PTI - HIMSI UNSRI 2020 | Hosted by&nbsp<a href="https://www.hostingan.id/">Hostingan ID </a></a>
    </p>
  </div>
</footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="js/vendor/jquery-slim.min.js"><\/script>')</script>
      <script src="js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

      <script>
      setInterval(function(){
          logout();
      },(15 * 60) * (1000));

      function logout(){
          document.location = "logout.php"
      }
      </script>

</body>
</html>
