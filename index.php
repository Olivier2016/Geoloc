<?php
$ip = $_SERVER['REMOTE_ADDR']; // Recuperation de l'IP du visiteur
$query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip)); //connection au serveur de ip-api.com et recuperation des données
if($query && $query['status'] == 'success') 
{
    echo "Site de Production 2<br />\n";
	//code avec les variables
	echo "Adresse IP = " . $ip ."<br />\n";
	echo "Pays = " . $query['country'] . "<br />\n";
	echo "Region = " . $query['regionName'] . "<br />\n";
	echo "Ville = " . $query['city'] . "<br />\n";
	echo "Longitude = " . $query['lon'] . "<br />\n";
	echo "Latitude = " . $query['lat'] . "<br />\n";
	echo "ISP = " . $query['isp'] . "<br />\n";
}
?>
