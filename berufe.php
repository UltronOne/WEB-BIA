
<?php

session_start();




include 'dbConfig.php';




?>

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<link rel="stylesheet" href="main_berufe.css" />
        
<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
        
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        
        <!-- Navigationsbar -->
    
  <header>
    <nav class="nav-wrapper transparent" >
      <div class="container" >
        <a href="#" class="brand-logo" style="color: #444444">Berufsinformationsabend</a>
        <a href="#" class="sidenav-trigger" data-target="mobile-menu">
          <i class="material-icons" style="color: #444444">Berufe eintragen</i>    
        </a>
        <ul class="right hide-on-med-and-down">
        
          <li><a href="userpanel.php" style="color: #444444">Berufe eintragen</a></li>
        </ul>
        <ul class="sidenav grey lighten-2" style="color: #444444" id="mobile-menu">
          <li><a href="#" >Berufe</a></li>
          <li><a href="#">Login</a></li>
        </ul>
      </div>
    </nav>
        
<!-- Wrapper -->
			<div id="wrapper">
                

            <?php
                    
                    $query = $db->query("SELECT head, besch FROM berufe");
                    if($query->num_rows > 0){ 
                        while($row = $query->fetch_assoc()){ ?>
                    


                    <div class="row">
                    <div class="col s12 m6">
                    <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                    <h4>
                    <span class="card-title  grey-text text-darken-4"><?php echo $row['head']; ?></span></h4>
                    <p grey-text text-darken-4><?php echo $row['besch']; ?></p>
                    </div>
                    </div>
                    </div>

                    <?php }
                    }?>


      


    </div>          
				<!-- CTA -->
					<section id="cta" class="main special">
						<h2>Hier gehts zur Anmeldung</h2>
						<p>Jeder Schüler hat einen benutzernamen und passwort bekommen<br />
						Falls ihr kein Passwort habt<br />
						Meldet euch <a href="https://itg.bayern/kontakt0.html">HIER</a></p>
						<ul class="actions">
							<li><a href="login.php" class="button big">LOGIN</a></li>
						</ul>
					</section>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
                
                <!-- Compiled and minified JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script 
          src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
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
      
  </script>
                
    </body>
  </html>