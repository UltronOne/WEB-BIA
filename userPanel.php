
<?php

session_start();




include 'dbConfig.php';


if(!isset($_SESSION['username'])) {
  header('Location: login.php');  
}



if(isset($_POST['auswahlSpeichern'])){
    
  $txtW1 = $_POST["wunsch1"];
  $txtW2 = $_POST["wunsch2"];
  $db->query("INSERT INTO benutzer (w1, w2) VALUES ('$txtW1','$txtW2')");
  


}


if(!empty($_GET['status'])){
    switch($_GET['status']){
        case 'succ':
            $statusMsgClass = 'alert-success';
            $statusMsg = 'Alle Benutzer wurden erfolgreich hinzugefügt.';
            break;
        case 'err':
            $statusMsgClass = 'alert-danger';
            $statusMsg = 'Ein Problem ist aufgetreten bitte erneut versuchen!';
            break;
        case 'invalid_file':
            $statusMsgClass = 'alert-danger';
            $statusMsg = 'Bitte eine CSV Datei hochladen!';
            break;
        default:
            $statusMsgClass = '';
            $statusMsg = '';
    }
}?>



<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- font awesome -->

  <link rel="stylesheet" href="https://fonts.google.com/specimen/Slabo+27px"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!--Import Google Icon Font-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <title>Berufsinformationsabend</title>
  <link rel="stylesheet" href="main_infos.css" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>

<body>

  <!-- Navigationsbar -->

  <header>
    <nav class="nav-wrapper transparent">
      <div class="container">
        <a href="index.html" class="brand-logo" style="color: #444444">Berufsinformationsabend</a>
        <a href="#" class="sidenav-trigger" data-target="mobile-menu">
          <i class="material-icons" style="color: #444444">menu</i>
        </a>
        <ul class="right hide-on-med-and-down">
          <li><a href="userBerufePanel.php" style="color: #444444">Berufe</a></li>
          <li><a href="logout.php" style="color: #444444">Logout</a></li>
        </ul>
        <ul class="sidenav grey lighten-2" style="color: #444444" id="mobile-menu">
          <li><a href="userBerufePanel.php">Berufe</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </nav>

    <?php 
      
      echo '<h2 style="text-align: center;font-size:230%;margin-bottom: 50px">Wilkommen '.$_SESSION['username'].'</h2>';
   ?>




    <p style="color: #444444;font-size: 150%;text-align:center">Schiene 1 : 19:00-20:00</p>
    <div class="row">



      <div class="center-align">
        <div class="input-field col s7 push-s3">




          <form action="importData.php" method="post">

            <select name="wunsch1">
              <?php
                    
                    $query = $db->query("SELECT head FROM berufe");
                    if($query->num_rows > 0){ ?>
              

              <?php
                        while($row = $query->fetch_assoc()){ ?>

              <option value=<?php echo $row['head']; ?>><?php echo $row['head']; ?></option>

              <?php } }else{ ?>
              
              <?php } ?>
            </select>
           



            <label>Veranstaltung 1</label>
      
    <div class="row">

      <p style="color: #444444;font-size: 150%;text-align:center">Schiene 2 : 20:00-21:00</p>

      <div class="">
        <div class="input-field col s7 push-s3">

        <select name="wunsch2">
              <?php
                    
                    $query = $db->query("SELECT head FROM berufe");
                    if($query->num_rows > 0){ ?>
             

              <?php
                        while($row = $query->fetch_assoc()){ ?>

              <option value=<?php echo $row['head']; ?>><?php echo $row['head']; ?></option>

              <?php } }else{ ?>
              
              <?php } ?>
            </select>
         
          <label>Veranstaltung 2</label>

          

        </div>
      </div>
    </div>


    

    <div class="center-align">
      <ul class="actions" class="center-align">
        <input type="submit" class="btn btn-primary" name="saveBeruf" value="Änderungen übernehmen"> </ul>
    </div>


    </form>




   


    <!-- Compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script>

      $(document).ready(function () {
        $('.sidenav').sidenav();
        $('.materialboxed').materialbox();
        $('.parallax').parallax();
        $('.tabs').tabs();
        $('.datepicker').datepicker({
          disableWeekends: true,
          yearRange: 1
        });
        $('.tooltipped').tooltip();
        $('.scrollspy').scrollSpy();
      });
      $(document).ready(function () {
        $('select').formSelect();
      });
    </script>
</body>

</html>
