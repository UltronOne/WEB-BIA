<?php

session_start();




include 'dbConfig.php';



if(!isset($_SESSION['username'])) {
  
  header('Location: login.php');  
}
if($_SESSION['username']!="admin"){
  header('Location: logout.php');  
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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"crossorigin="anonymous">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <title>Berufsinformationsabend</title>
  <style>
    header{
      background: #b8c23523;
      background-size: cover;
      background-position: center;
      min-height: 1000px;
    }
    body{
      background: #b8c23523;
      background-size: cover;
      background-position: center;
      min-height: 1000px;
    }
    @media screen and (max-width: 670px){
      header{
        min-height: 500px;
      }
    }
    .section{
      padding-top: 4vw;
      padding-bottom: 4vw;
    }
    .tabs .indicator{
      background-color: #1a237e;
    }
    .tabs .tab a:focus, .tabs .tab a:focus.active{
      background: transparent;
    }
    
  </style>
</head>


<body>
  <nav>
    <div class="nav-wrapper">

    <?php 
      
      echo '<a href="#" class="brand-logo" >'.$_SESSION['username'].'</a>';
   ?>

     <a href="#" class="brand-logo"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </nav>

<?php if(!empty($statusMsg)){
        
       
       
      } ?>

  

  <div class="container">

<form action="importData.php" method="post" enctype="multipart/form-data" id="importFrm">
    <div class="col s12">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Beruf hinzufügen</span>
          <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s6">
                  <input id="input_text" type="text" name="textHead" data-length="25">
                  <label for="input_text">Überschrift</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                <textarea id="textarea2" class="materialize-textarea" data-length="500"></textarea>
            <label for="textarea2">Beschreibung</label>
                </div>
              </div>
              <input type="submit" class="btn btn-primary" name="importBeruf" value="Hinzufügen">
            </form>
          </div>
        </div>
        
  </form>
    </div>

    

    
<?php if(!empty($statusMsg)){
      
        echo ' <div class="card-panel teal lighten-2">'.$statusMsg.'</div>';
    } ?>

    <div class="col s12">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">

       
        
        <span class="card-title">Teilnehmer</span>

 <ul class="collapsible popout">
            <li>
              <div class="collapsible-header">
                <p class="blue-text text-darken-2">Teilnehmerliste hinzufügen</p>
              </div>
              <div class="collapsible-body">
            


    <form action="importData.php" method="post" enctype="multipart/form-data" id="importFrm">
    <div class="file-field input-field">
      <div class="btn">
        <span>Datei</span>
        <input type="file" name="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
    <input type="submit" class="btn btn-primary" name="importSubmit" value="Hinzufügen">
  </form>



              </div>
            </li>
          </ul>


          
          <table>
              <thead>
                <tr>
                    <th>Name</th>
                    <th>Wunsch1</th>
                    <th>Wunsch2</th>
                </tr>
              </thead>
                <tbody>
                <?php
                    
                    $query = $db->query("SELECT user, w1, w2 FROM benutzer");
                    if($query->num_rows > 0){ 
                        while($row = $query->fetch_assoc()){ ?>
                    <tr>
                      <td><?php echo $row['user']; ?></td>
                      <td><?php echo $row['w1']; ?></td>
                      <td><?php echo $row['w2']; ?></td>
                    </tr>
                    <?php } }else{ ?>
                    <tr><td colspan="5">No member(s) found.....</td></tr>
                    <?php } ?>
              </tbody>
            </table>

        </div>
      </div>
    </div>
  </div>





 
      
  






	

 <!-- Compiled and minified JavaScript -->
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
     	        <script src="http://demos.codexworld.com/includes/js/bootstrap.js"></script>
        <!-- Place this tag in your head or just before your close body tag. -->
        <script src="https://apis.google.com/js/platform.js" async defer></script>
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script>
  
   

    $(document).ready(function () {
      $('.collapsible').collapsible();
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
      $(document).ready(function() {
    $('input#input_text, textarea#textarea2').characterCounter();
  });
    });
  </script>

</body>
</html>