<html>

  <head>
    <title>Sign up - Fomrad</title>
    <link rel="stylesheet" href="signup.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300,800' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, user-scalable=no">
  </head>

  <body>
  <?php 
    if($_POST){
  $password = $_POST['password'];
  $confirm = $_POST['confirm'];   
  if($password != $confirm) { ?>
<span style="color:red"> Error:Passwords don't match! </span> <br>
<?php
}
else { 
  require_once('config.php');
  $conn=mysql_connect($dbhost,$dbuser,$dbpass)
    or die ('Error conecting to mysql :'.mysql_error());
  mysql_select_db($dbname);
  //query
  $query=sprintf("SELECT COUNT(id) FROM users WHERE UPPER(username) = UPPER('%s')",
    mysql_real_escape_string($_POST['username']));
  //results
  $result=mysql_query($query);
  list($count)=mysql_fetch_row($result);
  if($count >= 1) { ?>
<span style="color:red"> Error: Username is taken! </span>  <br>
<?php
} else {
  $query=sprintf("INSERT INTO users(username,password) VALUES ('%s','%s')",
    mysql_real_escape_string($_POST['username']),
    mysql_real_escape_string(md5($password)));
  mysql_query($query);
    $email = $_POST['email'];
        $query = sprintf("INSERT INTO users(username,password,email) VALUES ('%s','%s','%s');",
          mysql_real_escape_string($_POST['username']),
          mysql_real_escape_string(md5($password)),
          mysql_real_escape_string($email));
        mysql_query($query);
        $to = $email;
        $subject = 'browsergame e-mail address confirmation';
        $message = "
<p>Hey! Thanks for signing up for the browsergame. Click below to confirm your e-mail address.</p>       
<p><a href='http://fomrad.com/confirm.php?email=$email'>below</a></p>";
        $headers = 'From: webmaster@example.com' . "\r\n" .
              'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
        mail($to,$subject,$message,$headers);
      ?>
<span style='color:green'>Congratulations, you've registered successfully! A confirmation e-mail has been sent to the address you entered.</span>
<?php
} 
  }
    }
?>
<script>
window.onload = function() {
  document.getElementById('username').focus();  
}
</script>
    <div id="everything">
      <div id="container">
        <div id="logo"></div>
        <!--<div id="text"><h1>WELCOME BACK!</h1></div>-->
        <form method="post" action="signup.php">
          <input type="text" id="username" placeholder="username" required name="username"><br>
          <input type="email" id="password" placeholder="email" required name="email"><br>
          <input type="password" id="username" placeholder="password" required name="password"><br>
          <input type="password" id="password" placeholder="confirm password" required name="confirm"><br>
          <input type="submit" id="submit" value="Register">
        </form>

        <div id="new">
          <h2>Have an account? <a href="login.php"><b>Log in!<b></a></h2>
        </div>
      </div>
      <div id="footer">&copy;2015 FOMRAD</div>
    </div>
  </body>

</html>
