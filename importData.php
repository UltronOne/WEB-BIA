<?php
session_start();

include 'dbConfig.php';

if(isset($_POST['importSubmit'])){
    
  
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'],$csvMimes)){
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
           
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
           
            fgetcsv($csvFile);
            
           
            while (($row = fgetcsv($csvFile,0, ";")) !== FALSE) {
               
                $user = mysqli_real_escape_string($db,$row[0]);
                $pass = mysqli_real_escape_string($db,$row[1]);
                echo $user;
                echo $pass;
                $db->query("INSERT INTO benutzer (user, pass) VALUES ('$user','$pass')");
                
            }

            

            
            
            fclose($csvFile);

            $qstring = '?status=succ';
        }else{
            $qstring = '?status=err';
        }
    }else{
        $qstring = '?status=invalid_file';
    }
    header("Location: adminPanel.php".$qstring);
}



if(isset($_POST['importBeruf'])){
    
                $txtHead = $_POST["textHead"];
                $txtBeschreibung = $_POST["textBeschreibung"];
                $db->query("INSERT INTO berufe (head, besch) VALUES ('$txtHead','$txtBeschreibung')");
                
                header("Location: adminPanel.php".$qstring);
    
}
if(isset($_POST['berufeLöschen'])){
    
    
    $db->query("TRUNCATE table berufe");
    
    header("Location: adminPanel.php".$qstring);

}
if(isset($_POST['nutzerLöschen'])){
    
    
    $db->query("TRUNCATE table benutzer");
    
    header("Location: adminPanel.php".$qstring);

}



if(isset($_POST['saveBeruf'])){
   
        $name = $_SESSION['username'];
        $wunsch1 = $_POST['wunsch1'];
        $wunsch2 = $_POST['wunsch2'];
        
       
   
    
        $db->query(" UPDATE benutzer SET w1 = '$wunsch1' , w2 = '$wunsch2' WHERE user = '$name'");
                
        header("Location: userPanel.php");

}


