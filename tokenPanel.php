<?php

session_start();




include 'dbConfig.php';



if(!isset($_SESSION['token'])) {
  
  header('Location: tokenlogin.php');  
}

$token = $_SESSION['token'];
     


$query =  $db->query("SELECT head, besch FROM berufe WHERE token='$token'");


$row = mysqli_fetch_assoc($query);
  $head =  $row['head']; 
  $besch =  $row['besch']; 

 

?>
<html>
  
  <!-- Import aller Libraries -->
<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
     <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- font awesome -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <link rel="stylesheet" href="https://fonts.google.com/specimen/Slabo+27px" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
      <!--Import Google Icon Font-->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

    
    <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 
    <!-- Kleine Verschiebung -->
  <style>
   #id1 {
  margin-left : 30px;
  margin-right: 30px;
}
  </style>
</head>

<body>

  <header>
      <!-- Navbar -->
    <nav class="nav-wrapper transparent" >
        <div class="container" >
          <a href="#" class="brand-logo" style="color: #444444">Token Login</a>
          <a href="#" class="sidenav-trigger" data-target="mobile-menu">
            <i class="material-icons" style="color: #444444">menu</i>    
          </a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#berufe" style="color: #444444"><i class="material-icons left">person</i>Berufe</a></li>
            <li><a href="logout.php" style="color: #444444"><i class="material-icons left">power_settings_new</i>Logout</a></li>
            <?php  

if($_SESSION['username']=="admin"){
  
  ?>

         
            <li><a href="adminpanel.php" style="color: #444444"><i class="material-icons left">person</i>Adminpanel</a></li>
         
          </ul>
       
        <?php  }   ?>

          </ul>


          <ul class="sidenav grey lighten-2" style="color: #444444" id="mobile-menu">
            <li><a href="#berufe" ><i class="material-icons left">person</i>Berufe</a></li>

          
            <?php  

if($_SESSION['username']=="admin"){
  
  ?>

         
            <li><a href="adminpanel.php" style="color: #444444"><i class="material-icons left">person</i>Adminpanel</a></li>
         
          </ul>
       
        <?php  }   ?>



            <li><a href="logout.php"><i class="material-icons left">power_settings_new</i>Logout</a></li>
          </ul>
        </div>
      </nav>
    
    
    
 
    </header>

<!-- Notiz an Christoph: Gib bei data-length="" die maximale Länge an-->
<div id="id1">
    <!-- Formular -->
<form action="importData.php" method="post" enctype="multipart/form-data" id="importFrm">
    <div class="col s12">
      <div class="card blue-grey darken-1">  <!-- Import from materialize -->
        <div class="card-content white-text">
          <span class="card-title">Beruf hinzufügen</span>
          <div class="row">  <!-- Ausrichtungstabelle -->
            <form class="col s12">  <!-- Gesamte Weite -->
              <div class="row">  <!-- Ausrichtungstabelle -->
                <div class="input-field col s12"> <!-- Gesamte Weite -->
                  <input id="input_text" type="text" name="textHead" value="<?php echo $head;?>" data-length="25">
                  <label for="input_text">Überschrift</label>
                </div>
              </div>
              <div class="row"> <!-- Ausrichtungstabelle -->
                <div class="input-field col s12"><!-- Gesamte Weite -->
                <textarea id="textarea2" class="materialize-textarea" name="textBeschreibung"   data-length="500"><?php echo $besch;?></textarea>
            <label for="textarea2">Beschreibung</label><!-- Beshreibung -->
                </div>
              </div>
              <input type="submit" class="btn btn-primary" name="updateBeruf" value="Hinzufügen"><!-- Button aus materializecss -->
            </form>
          </div>
        </div>
        
  </form>
  </div>

<!-- Compiled and minified JavaScript for materialize css -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script>
      
    $(document).ready(function(){
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
    $(document).ready(function() {
    $('input#input_text, textarea#textarea2').characterCounter();
  });
  </script>
      
    
      
  
</body>

</html>
