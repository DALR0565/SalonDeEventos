<?php
  if(isset($_GET['error'])){
    $error = $_GET['error'];
    if($error == "CREDENCIALESINCORRECTAS"){
      echo "<p class='centrado''error-message'>Datos erroneos, intentelo de nuevo</p>";
    } 
    else if($error == "CAMPOSVACIOS"){
       echo "<p class='centrado''error-message'>Existen campos vacios, intentelo de nuevo</p>";
    }
  }
  ?>
