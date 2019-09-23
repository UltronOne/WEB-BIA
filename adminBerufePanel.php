<?php

session_start();




include 'dbConfig.php';



if(!isset($_SESSION['username'])) {
  
  header('Location: login.php');  
}
if($_SESSION['username']!="admin"){
  header('Location: logout.php');  
}

$token = 'XXXXXXXXXXXX';

//Anzeigen des Tokens mit der Get Methode
if(!empty($_GET['token'])){
  
          $token = $_GET['token'];
        
  
}




?>


<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
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

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
    <link rel="stylesheet" href="main_adminpanel.css">
    <style>
 .demo-card-wide.mdl-card {
  width: 350px;
  color: #444444
}
.mdl-dialog {
  border: none;
  box-shadow: 0 9px 46px 8px rgba(0, 0, 0, 0.14), 0 11px 15px -7px rgba(0, 0, 0, 0.12), 0 24px 38px 3px rgba(0, 0, 0, 0.2);
  width: 380px; }
  .mdl-dialog__title {
    padding: 24px 24px 0;
    margin: 0;
    font-size: 2.5rem; }
  .mdl-dialog__actions {
    padding: 8px 8px 8px 24px;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: row-reverse;
        -ms-flex-direction: row-reverse;
            flex-direction: row-reverse;
    -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
            flex-wrap: wrap; }
    .mdl-dialog__actions > * {
      margin-right: 8px;
      height: 36px; }
      .mdl-dialog__actions > *:first-child {
        margin-right: 0; }
    .mdl-dialog__actions--full-width {
      padding: 0 0 8px 0; }
      .mdl-dialog__actions--full-width > * {
        height: 48px;
        -webkit-flex: 0 0 100%;
            -ms-flex: 0 0 100%;
                flex: 0 0 100%;
        padding-right: 16px;
        margin-right: 0;
        text-align: right; }
  .mdl-dialog__content {
    padding: 20px 24px 24px 24px;
    color: rgba(0,0,0, 0.54); }
.demo-card-wide > .mdl-card__title {
  color: #fff;
  height: 100px;
  background: transparent;
  color: #444444
}
.demo-card-wide > .mdl-card__menu {
  color: #fff;
  color: #444444
}
    </style>
  </head>
  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Administratorkonsole-Benutzer</span>
          <div class="mdl-layout-spacer"></div>
         
         
        </div>
      </header>
      
      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
          <img src="img/user.jpg" class="demo-avatar" style="margin-bottom: 1em">
          <div class="demo-avatar-dropdown">
            <span>Hallo Admin</span>
            
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a class="mdl-navigation__link" href="adminPanel.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Home</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">inbox</i>Benutzer</a>
          <a class="mdl-navigation__link" href="adminBenutzerPanel.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">delete</i>Benutzerlisten</a>
         
          <div class="mdl-layout-spacer"></div>
          <a class="mdl-navigation__link" href="index.html"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">power_settings_new</i><span >Logout</span></a>
        </nav>
      </div>
        
    <!--Tabbellen-->
    <div class="mdl-grid">
        <div class="mdl-layout-spacer"></div>
        <div class="mdl-cell mdl-cell--12-col">
            <div class="demo-card-wide mdl-card mdl-shadow--2dp" style="background-color: #CDCDCD">
                <div class="mdl-card__title">
                  <h2 class="mdl-card__title-text" style="color: #444444">Neuen Token/Beruf erstellen</h2>
                </div>
                <div class="mdl-card__supporting-text">

              
                <?php  
                   echo '<h5>'  .$token. '</h5>'; 
                 ?>
                                </div>
                <div class="mdl-card__actions mdl-card--border">
                <form action="importData.php" method="post" enctype="multipart/form-data" id="generateToken">
             
              <input type="submit" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" name="generateToken" value="Erstellen">
                </div>
              
              </div>
        </div>
        <div class="mdl-layout-spacer"></div>
    </div>

<!--WICHTIG: WENN DU EIN BILD HINZUFÜGEN WILLST ÄNDERST DU DEN BACKGROUND ZU DEM BILD bei class="demo-card-wide mdl-card mdl-shadow--2dp" -->

    <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--7-col">

   
      <?php
                    
                    $query = $db->query("SELECT head, besch, token FROM berufe");
                    if($query->num_rows > 0){ 
                        while($row = $query->fetch_assoc()){ ?>
                    


     <div class="mdl-cell mdl-cell--4-col">
      <div class="demo-card-wide mdl-card mdl-shadow--2dp">

        <div class="mdl-card__title">
          <h2 class="mdl-card__title-text"><?php echo $row['head']; ?></h2>
        </div>
        <div class="mdl-card__supporting-text">
               <?php echo $row['besch']; ?>
        </div>
        <div class="mdl-card__actions mdl-card--border" >
                <div class="mdl-grid" >
                        <div class="mdl-cell mdl-cell--6-col">
          

                        <button id="show-dialog" type="button" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Token anzeigen</button>
  <dialog class="mdl-dialog">
    <h4 class="mdl-dialog__title">Token des Berufs</h4>
    <div class="mdl-dialog__content">
      <h4>
      <?php echo $row['token']; ?>
      </h4>
    </div>
    <div class="mdl-dialog__actions">
      <button type="button" class="mdl-button close">Schließen</button>
    </div>
  </dialog>
  <script>
    var dialog = document.querySelector('dialog');
    var showDialogButton = document.querySelector('#show-dialog');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    showDialogButton.addEventListener('click', function() {
      dialog.showModal();
    });
    dialog.querySelector('.close').addEventListener('click', function() {
      dialog.close();
    });
  </script>
          


          </div>
          <div class="mdl-cell mdl-cell--3-col">
          <a href="tokenlogin.php?token=<?php echo $row['token']; ?>" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                Bearbeiten
              </a>
              </div>
              <div class="mdl-cell mdl-cell--3-col">
              <form action="importData.php" method="post" enctype="multipart/form-data" id="importFrm">
              <input type="hidden" name="token" value="<?php echo $row['token']; ?>">
              <input type="submit" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" name="deleteBeruf" value="Löschen">
            
            </form>
                  </div>
                </div>
        </div>
        <div class="mdl-card__menu">
          
        </div>
      </div>
      </div>

    </div>
      <?php }
                    }?>





    </div>




   
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>
