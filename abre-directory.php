<?php

/**
	* Plugin Name: Abre Directory
	* Plugin URI: https://github.com/abreio/Abre-Wordpress-Plugin
	* Description: Integrates Abre's Directory App with WordPress
	* Version: 1.0
	* Author: Abre.io
	* Author URI: https://abre.io
*/

function directorylookup($atts, $content=null)
{
	extract(shortcode_atts( array('building' => '','heading' => ''), $atts));
	$building = str_replace(" ", "%20", $building);
	$json=file_get_contents("https://subdomain.abre.io/modules/Abre-Directory/feed.php?building=$building");
	$data = json_decode($json);
	echo "<h2>$heading</h2>";
	echo "<div class='fusion-table table-1'><table width='100%' class='tablesorter {sortlist: [[1,0]]}'><thead><tr><th>Last Name</th><th>First Name</th><th>Email</th><th>Title</th></tr></thead><tbody>";

	foreach ($data as $item)
	{
		echo "<tr><td>".$item->lastname."</td><td>".$item->firstname."</td><td>".$item->email."</td><td>".$item->title."</td></tr>";
	}

	echo "</tbody></table></div>";

}
add_shortcode( 'directory_lookup', 'directorylookup' );


?>
