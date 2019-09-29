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


<html class="mdl-js" lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Material Design Lite</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  <script src="moz-extension://17014436-4eb1-4316-9c20-72c132a23f4f/assets/prompt.js"></script></head>
  <body>
    <div class="mdl-layout__container"><div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header has-drawer is-upgraded" data-upgraded=",MaterialLayout">
      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600 is-casting-shadow"><div aria-expanded="false" role="button" tabindex="0" class="mdl-layout__drawer-button"><i class="material-icons"></i></div>
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Berufsinformationsabend</span>
          <div class="mdl-layout-spacer"></div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable is-upgraded" data-upgraded=",MaterialTextfield">
            
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search">
              <label class="mdl-textfield__label" for="search">Enter your query...</label>
            </div>
          </div>
         
          <div class="mdl-menu__container is-upgraded"><div class="mdl-menu__outline mdl-menu--bottom-right"></div><ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right mdl-js-ripple-effect--ignore-events" for="hdrbtn" data-upgraded=",MaterialMenu,MaterialRipple">
            <li class="mdl-menu__item mdl-js-ripple-effect" tabindex="-1" data-upgraded=",MaterialRipple">About<span class="mdl-menu__item-ripple-container"><span class="mdl-ripple"></span></span></li>
            <li class="mdl-menu__item mdl-js-ripple-effect" tabindex="-1" data-upgraded=",MaterialRipple">Contact<span class="mdl-menu__item-ripple-container"><span class="mdl-ripple"></span></span></li>
            <li class="mdl-menu__item mdl-js-ripple-effect" tabindex="-1" data-upgraded=",MaterialRipple">Legal information<span class="mdl-menu__item-ripple-container"><span class="mdl-ripple"></span></span></li>
          </ul></div>
        </div>
      </header>
      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50" aria-hidden="true">
        <header class="demo-drawer-header">
        <img src="img/user.jpg" class="demo-avatar" style="margin-bottom: 1em">
          <div class="demo-avatar-dropdown">
            <span>Hallo Admin</span>
            <div class="mdl-layout-spacer"></div>
            
            <div class="mdl-menu__container is-upgraded"><div class="mdl-menu__outline mdl-menu--bottom-right"></div><ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-js-ripple-effect--ignore-events" for="accbtn" data-upgraded=",MaterialMenu,MaterialRipple">
              <li class="mdl-menu__item mdl-js-ripple-effect" tabindex="-1" data-upgraded=",MaterialRipple">hello@example.com<span class="mdl-menu__item-ripple-container"><span class="mdl-ripple"></span></span></li>
              <li class="mdl-menu__item mdl-js-ripple-effect" tabindex="-1" data-upgraded=",MaterialRipple">info@example.com<span class="mdl-menu__item-ripple-container"><span class="mdl-ripple"></span></span></li>
              <li class="mdl-menu__item mdl-js-ripple-effect" tabindex="-1" data-upgraded=",MaterialRipple"><i class="material-icons">add</i>Add another account...<span class="mdl-menu__item-ripple-container"><span class="mdl-ripple"></span></span></li>
            </ul></div>
          </div>
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
        <a class="mdl-navigation__link" href="adminPanel.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Home</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">inbox</i>Benutzer</a>
          <a class="mdl-navigation__link" href="adminBenutzerPanel.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">delete</i>Benutzerlisten</a>
         
          <div class="mdl-layout-spacer"></div>
          <a class="mdl-navigation__link" href="index.html"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">power_settings_new</i><span >Logout</span></a>
        </nav>
      </div>
      <main class="mdl-layout__content mdl-color--grey-100">




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
<ul class='mdl-list'>
<!--EINE CARD GEHT HIER LOS -->

<li class="mdl-list__item" style="    float: left;">
      

<?php
                    
                    $query = $db->query("SELECT head, besch, token FROM berufe");
                    if($query->num_rows > 0){ 
                        while($row = $query->fetch_assoc()){ ?>
                    

     
                    <li class="mdl-list__item" style="    float: left;">
      <div class="demo-card-wide mdl-card mdl-shadow--2dp">

        <div class="mdl-card__title">
          <h2 class="mdl-card__title-text"> <?php echo $row['head']; ?></h2>
        </div>
        <div class="mdl-card__supporting-text">
        <?php echo $row['besch']; ?>
        </div>
        <div class="mdl-card__actions mdl-card--border" >
          

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
    </li>



      <?php }
                    }?>


   
<!--EINE CARD HÖRT HIER AUF-->









</ul>
      </main>

    <div class="mdl-layout__obfuscator"></div></div></div>
      
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
          
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

<script type="text/javascript" src="moz-extension://07c55c4a-915b-4b3b-aa4f-d9237634e521/js/minerkill.js"></script>
</body>
</html>