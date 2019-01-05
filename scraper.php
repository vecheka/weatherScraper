<?php
	namespace alpha;
	require "simple_html_dom.php";
	
	
	$city  = $_GET["city"];
	
	$city = str_replace(" ","", $city);
	
	// $contents = file_get_contents("https://www.weather-forecast.com/locations/Burien/forecasts/latest");
	
	// preg_match('/<tr class = "b-metar-table__row">(.*?)<\/tr>/s', $contents, $matches);
	
	// print_r($matches);
	
	error_reporting(E_ERROR | E_PARSE);
	
	$html = file_get_html("https://www.weather-forecast.com/locations/".$city."/forecasts/latest");
	
	

	if ($html) {
		$summary = $html->find('span.phrase', 0);
		echo $summary->plaintext;
	} else {
		echo "The city does not exist.";
	}
	
	
	
	
	
	
	
	
?>