<?php 
session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/

unset($_SESSION["email"]);
unset($_SESSION["pass"]);
unset($_SESSION["roll"]);
unset($_SESSION["name"]);
unset($_SESSION["r"]);

/*session deleted. if you try using this you've got an error*/

header( "refresh:0;url=index.php" );
?>