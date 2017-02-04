<?php 
  session_start(); 
?>

</!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <title>Development Challenge</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
  <nav>
    <ul>
      <li><a href="index.php">INICIO</a></li>
      <?php
        if ( isset( $_SESSION['id'] ) ) {
        echo "<form action='includes/logout.inc.php'>
          <button>Salir</button>
          </form>";
        } else {
        echo "<form action='includes/login.inc.php' method='POST'>
          <input type='text' name='username' placeholder='username'>
          <input type='password' name='password' placeholder='password'>
          <button type='submit' name='loginSubmit'>Ingresar </button>
          </form>";
        }       
      ?>
      <li><a href="signup.php">REGISTRAR</a></li>
    </ul>
  </nav>
</header>