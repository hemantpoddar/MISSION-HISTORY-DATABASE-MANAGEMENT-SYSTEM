<?php
session_start(); ?>
<?php
if(session_destroy()) // Destroying All Sessions
{
	header("Location: adminindex.php"); // Redirecting To Home Page
}
?>