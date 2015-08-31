<?php
	if($_GET) {
		$email = $_GET['email'];
		require_once('config.php');
		$conn = mysql_connect($dbhost,$dbuser,$dbpass)
			or die ('Error connecting to mysql');
		mysql_select_db($dbname);
		$query = sprintf("SELECT COUNT(id) FROM users WHERE email = '%s' AND confirmed=0",
			mysql_real_escape_string($email));
		$result = mysql_query($query);
		list($count) = mysql_fetch_row($result);
		if($count >= 1) {
			$query = sprintf("UPDATE users SET confirmed=1 WHERE email = '%s'",
				mysql_real_escape_string($email));
			mysql_query($query);
?>
<span style='color:green'>Congratulations, you've confirmed your e-mail address!</span>
<?php
		} else {
?>
<span style='color:red'>Oops! Either that user doesn't exist, or that e-mail address has already been confirmed.</span>
<?php
		}
	}
?>