<?php

session_start();




include 'dbConfig.php';

$query = $db->query("SELECT * FROM benutzer ORDER BY id ASC");

$numberGes =0;
$number =0;

if($query->num_rows > 0){
   
    while($row = $query->fetch_assoc()){
      
      if(isset($row['id'])){
        ++$numberGes;
        
      }
     

      if(isset($row['w2'])){
        if(isset($row['w1'])){
        ++$number;
          
      }
    }
      
    }
    
}
  
$percentage = $number/$numberGes;



if(!isset($_SESSION['username'])) {
  
  header('Location: login.php');  
}
if($_SESSION['username']!="admin"){
  header('Location: logout.php');  
}


?>


<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Admin Panel</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="img/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="img/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">
    <link rel="shortcut icon" href="img/favicon.png">


    <!-- Alle relevante ressourcen Schrift Symbole etc  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
    <link rel="stylesheet" href="main_adminpanel.css">
    <style>
    </style>
  </head>
  
  
  <body>
    <!-- Wir benutzen hierfür Material Design Lite  -->
    <!--  Material Design Lite Header für Benutzerlisten -->
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Administratorkonsole-Benutzerlisten</span>
          <div class="mdl-layout-spacer"></div> 
        </div>
      </header>
      
      
      <!-- Material Design Lite Layout Drawer- Avatar Admin Section  -->
      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
          <img src="img/user.jpg" class="demo-avatar" style="margin-bottom: 1em">
          <div class="demo-avatar-dropdown">
            <span>Hallo Admin</span>
        </header>
          
          
          <!-- Navigationsleiste  -->
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
        <a class="mdl-navigation__link" href="adminPanel.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Home</a>
          <a class="mdl-navigation__link" href="adminBerufePanel.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">inbox</i>Benutzer</a>
          <a class="mdl-navigation__link" href="adminBenutzerPanel.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">delete</i>Benutzerlisten</a>
          <div class="mdl-layout-spacer"></div>
          <a class="mdl-navigation__link" href="logout.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">power_settings_new</i><span >Logout</span></a>
        </nav>
      </div>

        
    <!--Einreihen durch Material Design Tabbellen-->
    <div class="mdl-grid ">
            <div class="mdl-cell mdl-cell--6-col"><!--Einteilung in Hälfte  -->
                <div class="card-wide mdl-card mdl-shadow--2dp"> <!-- Informationskarte MaterialdesignLite   -->
                    <div class="mdl-card__title">
                      <h2 class="mdl-card__title-text" style="color: #444444">Benutzer hinzufügen</h2>
                    </div>
                    <div class="mdl-card__supporting-text">File auswählen</div>
                    
                    <div class="mdl-card__actions mdl-card--border">
                      <form action="importData.php" method="post" enctype="multipart/form-data"> <!-- Einrappen in Form class für POST method  -->
            <input type="file" name="file" /><!-- Input class HTML  -->
            <input type="submit" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" name="importSubmit" value="IMPORT">
        </form>            
                    </div>
                  </div>
            </div>
           

            

<!--  Fortschritt und Download der tabelle -->
            <div class="mdl-cell mdl-cell--6-col"><!--  Einteilung in Hälfte -->
                <div class="demo-card-wide mdl-card mdl-shadow--2dp">  <!-- Informationskarte MaterialdesignLite   -->
                    <div class="mdl-card__title">
                      <h2 class="mdl-card__title-text" style="color: #444444">Benutzerliste herunterladen</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                            Es haben <?php echo $number ?> von <?php echo $numberGes ?>  Nutzern die Wahl abgeschlossen
                    </div>
                    <div class="mdl-grid">

                  

                    <div id="demo" class="mdl-progress mdl-js-progress" style="width: 200%"></div>
  
<script>
  document.querySelector('#demo').addEventListener('mdl-componentupgraded', function() {
    this.MaterialProgress.setProgress(<?php echo $percentage*100-60 ?>);
  });
</script>

                


                    <div class="mdl-card__actions mdl-card--border">
                      <a href="exportData.php"class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                        Download
                      </a></div></div></div>
              
            <div class="mdl-layout-spacer"></div>
        </div>
        <div class="mdl-grid">
                <div class="mdl-layout-spacer"></div>
          
          
          <!--  Tabelle von MaterialDesign Lite -->
                <div class="mdl-cell mdl-cell--12-col">
        <table class="mdl-data-table mdl-js-data-table mdl-data-table mdl-shadow--2dp" style="max-width: initial; text-align: left">
                <thead>
                  <tr>
                    <th class="mdl-data-table__cell--non-numeric">Name</th><!-- Einteilung in einzelne Spalten  -->
                    <th>Passwort</th>
                    <th>Wahl 1</th>
                    <th>Wahl 2</th>
             
                 </tr>
                </thead>
                <tbody>
                  

                <?php
                    
                    $query = $db->query("SELECT user, w1, w2, pass FROM benutzer");
                    if($query->num_rows > 0){ 
                        while($row = $query->fetch_assoc()){ ?>


                   
                  <tr>
                    <td class="mdl-data-table__cell--non-numeric"><?php echo $row['user']; ?></td>
                    <td><?php echo $row['pass']; ?></td>
                    <td><?php echo $row['w1']; ?></td>
                    <td><?php echo $row['w2']; ?></td>
                  </tr>


                  <?php }
                    }?>

                </tbody>
              </table>
              </div>
              </div>
              </div>

    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script>
            document.querySelector('#p1').addEventListener('mdl-componentupgraded', function() {
              this.MaterialProgress.setProgress(44);
            });
          </script>
  </body>
</html>

