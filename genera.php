<?php
$ip=$_GET['ip'];
if (preg_match( '/^(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)(?:[.](?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)){3}$/', $ip)) {
	system("/root/ninuxstats/genera.sh ".$ip." > /dev/null");
	print "<img src='graphs/".$ip.".png'/>";
}else{
print "fanculo!";
}




?>
