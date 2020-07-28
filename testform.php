<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/registration.css">
<script src="js/main.js"></script>
<script src="js/ajax.js"></script>
<script>
function restrict(elem){
          var tf = _(elem);
          var rx = new RegExp;
          if(elem == "email"){
            rx = /[' "]/gi;
          } else if(elem == "username"){
            rx = /[^a-z0-9]/gi;
          }
          tf.value = tf.value.replace(rx, "");
        }