<?php
/**
 * @package shadowtime
 * @version 1.3
 */
/*
Plugin Name: Shadowtime
Plugin URI: 
Description: This plugin adds a shadow ( curently on refresh ) to your header text in relation to the local time.
Author: Garrett Brown, Shelburne Vermont
Version: 1.3
AuthorURI: http://www.gbcreativevt.com
*/

// function wrap
function shadowtime () {

// this hooks css - currently not used
		function shadowtime_script_enqueue() {

			wp_enqueue_style( 'shadowtimecustomstyle', get_template_directory_uri() . '/css/shadowtime.css', array(), '.1', 'all');
			}

		add_action('wp_enqueue_scripts', 'shadowtime_script_enqueue');
		}		


	$timer = date('G'); // date key for 24 hour format
if( $timer < "10") {   // 10 = noon
					  // text-shadow: left-to-right, distance of shadow, shadow softness

}	elseif ($timer < "10") { // 5:00am
		echo "<style>
					h1 {
				    color: #6699FF;
				    text-shadow: -60px 05px 4px #DDDDDD;
					}
					</style>";
}	elseif ($timer < "11") { // 6:00am
		echo "<style>
					h1 {
				    color: #6699FF;
				    text-shadow: -50px 10px 4px #DDDDDD;
					}
					</style>";
}	elseif ($timer < "12") { // 7:00am
		echo "<style>
					h1 {
				    color: #6699FF;
				    text-shadow: -50px 10px 4px #DDDDDD;
					}
					</style>";
}	elseif ($timer < "13") { // 8:00am
		echo "<style>
					h1 {
				    color: #6699FF;
				    text-shadow: -40px 15px 4px #DDDDDD;
					}
					</style>";
}	elseif ($timer < "14") { // 9:00am
			echo "<style>
					h1 {
				    color: #6699FF;
				    text-shadow: -30px 15px 4px #DDDDDD;
					}
					</style>";

}	elseif ($timer < "15") { // 10:00am
			echo "	<style>
					h1 {
				    color: #6699FF;
				    text-shadow: -20px 20px 4px #DDDDDD;
					}
					</style>";
		
}	elseif ($timer < "16") { // 11:00am
			echo "	<style>
					h1 {
				    color: #6699FF;
				    text-shadow: -10px 20px 4px #DDDDDD;
					}
					</style>";	
}	elseif ($timer < "17") { // noon
		echo "	<style>
					h1 {
				    color: #6699FF;
				    text-shadow: 00px 20px 4px #DDDDDD;
					}
					</style>";
}	elseif ($timer < "18") { // 1:00pm
		echo "	<style>
					h1 {
				    color: #6699FF;
				    text-shadow: 10px 20px 4px #DDDDDD;
					}
					</style>";
}	elseif ($timer < "19") { // 2:00pm
		echo "	<style>
					h1 {
				    color: #6699FF;
				    text-shadow: 20px 20px 4px #DDDDDD;
					}
					</style>";
}	elseif ($timer < "20") { // 3:00pm
		echo "	<style>
					h1 {
				    color: #6699FF;
				    text-shadow: 30px 20px 4px #DDDDDD;
					}
					</style>";
}	elseif ($timer < "21") { // 4:00pm
		echo "	<style>
					h1 {
				    color: #6699FF;
				    text-shadow: 60px 20px 4px #DDDDDD;
					}
					</style>";
}	elseif ($timer < "22") { // 5:00pm
		echo "	<style>
					h1 {
				    color: #6699FF;
				    text-shadow: 70px 20px 4px #DDDDDD;
					}
					</style>";
}	elseif ($timer < "23") { // 6:00pm
		echo "	<style>
					h1 {
				    color: #6699FF;
				    text-shadow: 80px 20px 4px #DDDDDD;
					}
					</style>";
} 	else {
		echo "	<style>
					h1 {
				    color: #6699FF;
				    text-shadow: 90px 05px 4px #DDDDDD;
					}
					</style>";
	}
	
