<?php

session_start();




include 'dbConfig.php';



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
  width: 512px;
  color: #444444
}
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
          <a class="mdl-navigation__link" href="adminBerufePanel.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">inbox</i>Benutzer</a>
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
                  <h2 class="mdl-card__title-text" style="color: #444444">Neuen Token erstellen</h2>
                </div>
                <div class="mdl-card__supporting-text">
                  Hier steht dein Token
                </div>
                <div class="mdl-card__actions mdl-card--border">
                  <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                    Erstellen
                  </a>
                </div>
              
              </div>
        </div>
        <div class="mdl-layout-spacer"></div>
    </div>

<!--WICHTIG: WENN DU EIN BILD HINZUFÜGEN WILLST ÄNDERST DU DEN BACKGROUND ZU DEM BILD bei class="demo-card-wide mdl-card mdl-shadow--2dp" -->

    <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--7-col">

    <div class="demo-card-wide mdl-card mdl-shadow--2dp" style="background: url('')">
        <div class="mdl-card__title">
          <h2 class="mdl-card__title-text">*Beruf*</h2>
        </div>
        <div class="mdl-card__supporting-text">
                *Beschreibung* Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Mauris sagittis pellentesque lacus eleifend lacinia...
        </div>
        <div class="mdl-card__actions mdl-card--border" >
                <div class="mdl-grid" >
                        <div class="mdl-cell mdl-cell--6-col">
          <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
            Token Anzeigen
          </a>
          </div>
          <div class="mdl-cell mdl-cell--3-col">
          <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                bearbeiten
              </a>
              </div>
              <div class="mdl-cell mdl-cell--3-col">
              <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                    löschen
                  </a>
                  </div>
                </div>
        </div>
        <div class="mdl-card__menu">
          </div>
        </div>
      </div>

      <div class="mdl-cell mdl-cell--4-col">
      <div class="demo-card-wide mdl-card mdl-shadow--2dp">

        <div class="mdl-card__title">
          <h2 class="mdl-card__title-text">*Beruf*</h2>
        </div>
        <div class="mdl-card__supporting-text">
                *Beschreibung*Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Mauris sagittis pellentesque lacus eleifend lacinia...
        </div>
        <div class="mdl-card__actions mdl-card--border" >
                <div class="mdl-grid" >
                        <div class="mdl-cell mdl-cell--6-col">
          <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
            Token Anzeigen
          </a>
          </div>
          <div class="mdl-cell mdl-cell--3-col">
          <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                bearbeiten
              </a>
              </div>
              <div class="mdl-cell mdl-cell--3-col">
              <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                    löschen
                  </a>
                  </div>
                </div>
        </div>
        <div class="mdl-card__menu">
          
        </div>
      </div>
      </div>

    </div>




   
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>
