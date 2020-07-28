
<?php
session_start();
if(isset($_SESSION["username"])){
  header("location: message.php?msg=NO to that weenis");
    exit();
}
?><?php
if(isset($_POST["usernamecheck"])){
  include_once("php_include/connection1.php");
  $isset = $_POST["usernamecheck"];
  $username = preg_replace('#[^a-z0-9]#i', '', $_POST['usernamecheck']);
  $sql = "SELECT member_id FROM members WHERE username='$username' LIMIT 1";
    $query = mysqli_query($db_conx, $sql);
    $uname_check = mysqli_num_rows($query);
    if (strlen($username) < 3 || strlen($username) > 16) {
      echo '<strong style="color:#F00;">3 - 16 characters please</strong>';
      exit();
    }
  if (is_numeric($username[0])) {
      echo '<strong style="color:#F00;">Usernames must begin with a letter</strong>';
      exit();
    }
    if ($uname_check < 1) {
      echo '<strong style="color:#009900;">The username ' . $username . ' is OK</strong>';
      exit();
    } else {
      echo '<strong style="color:#F00;">The username ' . $username . ' is taken</strong>';
      exit();
    }
}
?><?php