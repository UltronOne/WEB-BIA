<?php  
//Starten der Session
session_start();
 require('dbConfig.php');


if (isset($_POST['username']) and isset($_POST['password'])){

//Werte werden gesetzt
$username = $_POST['username'];
$password = $_POST['password'];

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


<html lang="en">
<head>
<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
  <style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }

    body {
      background: rgb(91, 164, 179);
    }

    .input-field input[type=date]:focus + label,
    .input-field input[type=text]:focus + label,
    .input-field input[type=email]:focus + label,
    .input-field input[type=password]:focus + label {
      color: #e91e63;
    }

    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 2px solid #e91e63;
      box-shadow: none;
    }
  </style>
</head>

<body>
  <div class="section"></div>
  <main>
    <center>
    
            
      <div class="section"></div>

      <h5 class="indigo-text">ITG Loginseite</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 96px 0px 96px; border: 1px solid #EEE;">

          <form class="col s12" method="post">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='text' name='username' id='email' />
                <label for='email'>Username</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='password' />
                <label for='password'>Passwort</label>
              </div>
            </div>

            <br />
            <center>
              <div class='row'>
              <?php if(!empty($fmsg)){
      
      echo ' <div class="card-panel red lighten-2">'.$fmsg.'</div>';
  } ?>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Login</button>
              </div>
            </center>
          </form>
        </div>
      </div>
     
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>

</html>
<?php } ?>