<?php

function request($baseUrl, $method, $endpoint, $token) {
	$authorization = "Authorization: Bearer " . $token;
	$ch = curl_init($baseUrl . $endpoint);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($content), $authorization));
	    				
	$result = curl_exec($ch);
	return json_decode($result);
}

$outputFolder = "./output/";
$baseUrl = "https://www.developers.football-tracker.com/v2/";
$token = "<Enter your Token>";
$idOrganization = "<Id of the organization>";

echo "********************************************************\n";
echo "This example gets all the data of a Organization and stores in the " . $outputFolder  .".
The meaning of the fields, and possible values are explained at https://www.developers.football-tracker.com/en/documentation\n\n";

echo "********************************************************\n";
echo "Retrieving Organization...\n";
$response = request($baseUrl, "GET", "organization/" . $idOrganization, $token);
$data = json_encode($response, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
file_put_contents($outputFolder . "/organization.json", $data);
echo "Organization with id " . $idOrganization . " retrieved\n\n";

echo "********************************************************\n";
echo "Retrieving Competitions...\n";
$response = request($baseUrl, "GET", "organization/" . $idOrganization . "/competitions", $token);
$data = json_encode($response, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
file_put_contents($outputFolder . "/competitions.json", $data);
echo "Competitions in organization " . $idOrganization . " retrieved\n\n";

?>
