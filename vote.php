<?php
  session_start();
  if ( !isset($_SESSION["nim"]) ) {
    header("Location: index.php");
    exit;
  }
  else {
    $now = time();
    if ($now > $_SESSION['expire']) {
      session_destroy();
    }
  }
  echo '<pre>';
  echo session_id()."\n";
  var_dump($_SESSION);
  echo '</pre>';
  include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voting Kakak Ter | HIMSI</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <form action="voteProses.php">

    <div>
      <p>Kakak Ter1:</p>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="id_ter1" id="A_Ter1" value="1">
        <label class="form-check-label" for="id_ter1">A_Ter1</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="id_ter1" id="B_Ter1" value="2">
        <label class="form-check-label" for="B_Ter1">B_Ter1</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="id_ter1" id="C_Ter1" value="3">
        <label class="form-check-label" for="C_Ter1">C_Ter1</label>
      </div>
    </div>

    <br>

    <div>
      <p>Kakak Ter2:</p>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="id_ter2" id="A_ter2" value="1">
        <label class="form-check-label" for="id_ter2">A_Ter2</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="id_ter2" id="B_ter2" value="2">
        <label class="form-check-label" for="B_ter2">B_Ter2</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="id_ter2" id="C_ter2" value="3">
        <label class="form-check-label" for="C_ter2">C_Ter2</label>
      </div>
    </div>
    
    <br>

    <div>
      <p>Kakak Ter3:</p>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="id_ter3" id="A_ter3" value="1">
        <label class="form-check-label" for="id_ter3">A_Ter3</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="id_ter3" id="B_ter3" value="3">
        <label class="form-check-label" for="B_ter3">B_Ter3</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="id_ter3" id="C_ter3" value="3">
        <label class="form-check-label" for="C_ter3">C_Ter3</label>
      </div>
    </div>
    
    <br>
    
    <input type="submit" value="Submit">
    <a href="logout.php">Logout</a>
  </form>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>