
<?php  
//Starten der Session
session_start();
 require('dbConfig.php');


if (isset($_POST['username']) and isset($_POST['password'])){

//Werte werden gesetzt
$username = $_POST['username'];
$password = $_POST['password'];

//user wird überprüft
if($username=="admin"){
  $query = "SELECT * FROM `admin` WHERE user='$username' and pass='$password'";
  $result = mysqli_query($db, $query) or die(mysqli_error($db));
  $count = mysqli_num_rows($result);
 
  if ($count == 1){
  $_SESSION['username'] = $username;
  }else{

  $fmsg = "Passwort Falsch";
  
  }

}else{
  $query = "SELECT * FROM `benutzer` WHERE user='$username' and pass='$password'";
  $result = mysqli_query($db, $query) or die(mysqli_error($db));
$count = mysqli_num_rows($result);

if ($count == 1){
$_SESSION['username'] = $username;
}else{

$fmsg = "Passwort Falsch";


}
}
}

if (isset($_SESSION['username'])){
  $username = $_SESSION['username'];

if($_SESSION['username']=="admin"){
  header('Location: adminPanel.php');
}else{
  header('Location: userPanel.php');

}

  
  exit();
   
  }else{
  
  

?>



<html>

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
 
  <style>
	  
    body {
      display: flex;     /*Ausrichten aller ELemente*/
      min-height: 100vh; 
      flex-direction: column; /*Horizontales Ausrichten*/
    }

    main {
      flex: 1 0 auto; /*Anpassen der Verteilung*/
    }
/*Set background color*/
    body {
      background: #fff;
    }
	  
/*Wenn input field angesteuert/ angeclickt wird, schalte Farbe --> Gekoppelt mit Label */
    .input-field input[type=date]:focus + label,
    .input-field input[type=text]:focus + label,
    .input-field input[type=email]:focus + label,
    .input-field input[type=password]:focus + label {
      color: #e91e63;
    }
/*Wenn input field angesteuert/ angeclickt wird, schalte Farbe*/
    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 2px solid #e91e63;
      box-shadow: none;
    }
      
      /*Stylized Button */
	.button {
		
		border-radius: 4px;
		border: 0;
		cursor: pointer;
		display: inline-block;
		font-weight: 400;
		height: 4.5em;
		line-height: 3.5em;
		padding: 0 2em 0 2.375em;
		text-align: center;
		text-decoration: none;
		white-space: nowrap;
		text-transform: uppercase;
		letter-spacing: 0.325em;
		font-size: 0.725em;
        width: 30em;
	}
      /*Stylized Button */

	
	.button {
		background-color: transparent;
		box-shadow: inset 0 0 0 2px #666666;
		color: #444444 !important;
	}

		
		      /*Wenn drübergehalten wird schalte um auf weiches Rot  */

		.button:hover {
			color: #EF6480 !important;
			box-shadow: inset 0 0 0 2px #EF6480;
		}
		      /*Sonst Schalte auf Grau  */

		.button.icon:before {
			color: #999999;
		}

      
      
  </style>
</head>

<body>
	
<!-- Navigationsbar beschrieben in index.html-->
  <header>
    <nav class="nav-wrapper transparent" >
      <div class="container" >
        <a href="index.html" class="brand-logo" style="color: #444444">Berufsinformationsabend</a>
        <a href="#" class="sidenav-trigger" data-target="mobile-menu">
          <i class="material-icons" style="color: #444444">menu</i>    
        </a>
        <ul class="right hide-on-med-and-down">
          <li><a href="userBerufePanel.php" style="color: #444444">Berufe</a></li>
        </ul>
        <ul class="sidenav grey lighten-2" style="color: #444444" id="mobile-menu">
          <li><a href="berufe.php" >Berufe</a></li>
        </ul>
      </div>
    </nav>
    
    
    
  <div class="section"></div>
  <main> <!--  Main Content -->
    <center> <!-- Zentrieren  -->
      <img class="responsive-img" style="width: 250px;align-content: center" src="img/rabe.png" /><!--  bild -->
      <div class="section"></div>

      <h5 class="text" style="color: #444444">Bitte loggen sie sich ein</h5><!-- Überschrift  -->
      <div class="section"></div>

      <div class="container"> <!-- Farbe geben um abzuheben  -->
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

        <form class="col s12" method="post"><!-- Wrappen des Ganzen in eine Form -->
            <div class='row'><!--  Sortierungtabelle -->
              <div class='col s12'><!--Ganze Seite   -->
              </div>
            </div>
		
<!--  Sortierungstabelle -->
            <div class='row'>
              <div class='input-field col s12'><!-- Ganze Siete  -->
              <input class='validate' type='text' name='username' id='text' />
                <label for='text'>Username</label>
              </div>
            </div>
		
<!--  Sortierungsabelle -->
            <div class='row'>
              <div class='input-field col s12'> <!-- Inputfield  -->
                <input class='validate' type='password' name='password' id='password' />
                <label for='password'>Passwort</label>
              </div>
            
            </div>
            <br />
            <center><!--Zentrieren   -->
              <div class='row'>
                  <div class="col s12">
                <button type='submit' name='btn_login' class='button' ">Login</button>
                  </div>
              </div>
            </center>
          </form>

        </div>
      </div>
    </center>
    
  </main>
    </header>

<!-- Compiled and minified JavaScript Materialize CSS für dei Navigationsleiste -->
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
      
  </script>
      
    
      
  
</body>

</html>
<?php } ?>
