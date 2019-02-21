<?php
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
exec("ping -c 4 8.8.8.8",$output,$result);
if($result==0){//ping is successful
	exec("git clone https://github.com/ApexPlus-Tech/IPCamera.git /var/www/updated",$output,$result);
	//echo($result);
	if($result==0){//git cloning is successful
		exec("cp -TRv /var/www/updated /var/www");
		exec("rm -r --interactive=never /var/www/updated");
		echo("<script>alert('Firmware update completed')</script>");
		echo("<script>window.location='ipGui.php'</script>");
	}
	else{
		echo("Server is down");
		//showInstall();
	}
}
else{
	echo("Internet is down");
	//showInstall();
}
}     
else{
	echo "Forbidden access";
}
?>
