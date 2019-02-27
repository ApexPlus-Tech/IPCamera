<?php
if ( $_SERVER['REQUEST_METHOD'] == 'POST' )     //this is to prevent directly accessing the page.......
	{
	exec("sudo /sbin/shutdown -h now");
	echo "System Shutdown";
	}
else{
	echo "Forbidden page";
}
?>
