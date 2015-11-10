<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">

  <script>
  $(function() {
    $( "#dialog" ).dialog();
  });
  </script>

  <style>
  #enviar {float:right;}
  </style>
</head>
<body>
<?php if (!isset($_POST["user"])) : ?>


<div id="dialog" title="LOGIN">
  <form action="" method="post" class="login">
  <table border="0">
    <tr>
      <td>Usuario:  </td>
      <td><input type="text" name="user" maxlength="10" size="10" required></td>
    </tr>
    <tr>
      <td>Contraseña:  </td>
      <td><input type="password" name="pass"  maxlength="10" size="10" required></td>
    </tr>
    <tr>
      <td colspan="2"><input type=submit value="Acceder" id="enviar"></td>
    </tr>
  </table>
  </form>
</div>

<?php else: ?>

  <?php
    $user=$_POST["user"];
    $pass=$_POST["pass"];

      if ($user =="Pepe" && $pass =="1234"){
      header("refresh:0; url=matricula.php");
      }
      else {
      echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>';
      header("refresh:3; url=login.php");
     }


   ?>


<?php endif ?>

</body>
</html>
