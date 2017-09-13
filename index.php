<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="post">
      <label>First Name</label><br>
      <input type="text" name="fname"><br>
      <label>Surname</label><br/>
      <input type="text" name="sname"><br>
      <label>Username</label><br/>
      <input type="text" name="uname"><br>
      <label>Password</label><br/>
      <input type="text" name="password"><br>
      <input name="submit" type="submit" value="Skicka">
    </form>

<?php
    mb_internal_encoding("UTF-8");

    if(isset($_POST['uname'])){

      $uname  = $_POST['uname'];

        if(!mb_check_encoding($uname)){
          header('Location: index.php');
           }

            $cleandata = htmlspecialchars($uname);

            echo "You have now been registered";
          }
?>

<?php
        if(isset($_SESSION['inloggad'])){
            include 'private.php';
        }
?>

  <br><br><br>
    <a href="loggIn.php">Log in</a>



  </body>
</html>
