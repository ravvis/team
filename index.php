<?php
  include_once 'fet_db.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title></title>
  </head>
  <body>
      <h2 id = "heading_team"><b>Meet the Team</b></h2>
      <hr width="250px">
      <center>We have a team working 24x7 of Developers & Managers to cater to the needs of website.</center>
      <br><br>
    <div class="row">
      <div class="container">
        <div class="card col-lg-offset-1 col-lg-4">
          <?php

            $sql = "SELECT * FROM members WHERE id='1';";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if($resultCheck > 0){
              while($row = mysqli_fetch_assoc($result)){

                echo "<img src='Images/".$row['image']."' id='img'>";

                echo "<b>".$row['Name']."</b><br><br>";
                echo "<span id = 'email'>".$row['e-mail']."</span><br>";
                echo $row['Work']."<br>";
              }
            }


          ?>
          <button class="btn">click me</button>
            <br><br>
        </div>
        <div class="card col-lg-offset-2 col-lg-4">
          <?php
          // int $var = 0;
          // while($var < 4){
            $sql = "SELECT * FROM members WHERE id='2';";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0){
              while($row = mysqli_fetch_assoc($result)){
                // echo <img src="">;
                echo "<img src='Images/".$row['image']."' id='img'>";

                echo "<b>".$row['Name']."</b><br><br>";
                echo "<span id = 'email'>".$row['e-mail']."</span><br>";
                echo $row['Work']."<br>";  }
            }
            // $var = $var + 1;

          ?>
          <button class="btn">click me</button>
            <br><br>
        </div>

      </div>

    </div>
    <br>
    <br>
    <div class="row">
      <div class="container">
        <div class="card col-lg-offset-1 col-lg-4">
          <?php

            $sql = "SELECT * FROM members WHERE id='3';";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0){
              while($row = mysqli_fetch_assoc($result)){

                echo "<img src='Images/".$row['image']."' id='img'>";

                echo "<b>".$row['Name']."</b><br><br>";
                echo "<span id = 'email'>".$row['e-mail']."</span><br>";
                echo $row['Work']."<br>";
              }
            }


          ?>
          <button class="btn">click me</button>
            <br><br>
        </div>
        <div class="card col-lg-offset-2 col-lg-4">
          <?php
          // int $var = 0;
          // while($var < 4){
            $sql = "SELECT * FROM members WHERE id='4';";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0){
              while($row = mysqli_fetch_assoc($result)){
                // echo <img src="">;
                echo "<img src='Images/".$row['image']."' id='img'>";

                echo "<b>".$row['Name']."</b><br><br>";
                echo "<span id = 'email'>".$row['e-mail']."</span><br>";
                echo $row['Work']."<br>";  }
            }
            // $var = $var + 1;

          ?>
          <button class="btn">click me</button>
            <br><br>
        </div>

      </div>

    </div>
  </body>
</html>
