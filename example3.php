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
$idCompetition = "<Id of the competition>";

echo "********************************************************\n";
echo "This example gets all the data of a Organization and stores in the " . $outputFolder  .".
The meaning of the fields, and possible values are explained at https://www.developers.football-tracker.com/en/documentation\n\n";

echo "********************************************************\n";
echo "Retrieving Competition...\n";
$response = request($baseUrl, "GET", "competition/" . $idCompetition, $token);
$data = json_encode($response, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
file_put_contents($outputFolder . "/competition.json", $data);
echo "Competition with id " . $idCompetition . " retrieved\n\n";

echo "********************************************************\n";
echo "Retrieving Teams...\n";
$response = request($baseUrl, "GET", "competition/" . $idCompetition . "/teams", $token);
$data = json_encode($response, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
file_put_contents($outputFolder . "/teams.json", $data);
echo "Teams in competition " . $idCompetition . " retrieved\n\n";

echo "********************************************************\n";
echo "Retrieving Pitches...\n";
$response = request($baseUrl, "GET", "competition/" . $idCompetition . "/pitches", $token);
$data = json_encode($response, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
file_put_contents($outputFolder . "/pitches.json", $data);
echo "Pitches in competition " . $idCompetition . " retrieved\n\n";

echo "********************************************************\n";
echo "Retrieving Match Days...\n";
$response = request($baseUrl, "GET", "competition/" . $idCompetition . "/matchdays", $token);
$data = json_encode($response, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
file_put_contents($outputFolder . "/matchdays.json", $data);
echo "Match days in competition " . $idCompetition . " retrieved\n\n";

echo "********************************************************\n";
echo "Retrieving Matches...\n";
$response = request($baseUrl, "GET", "competition/" . $idCompetition . "/matches", $token);
$data = json_encode($response, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
file_put_contents($outputFolder . "/matches.json", $data);
echo "Matches in competition " . $idCompetition . " retrieved\n\n";

echo "********************************************************\n";
echo "Retrieving Results...\n";
$response = request($baseUrl, "GET", "competition/" . $idCompetition . "/results", $token);
$data = json_encode($response, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
file_put_contents($outputFolder . "/results.json", $data);
echo "Results in competition " . $idCompetition . " retrieved\n\n";

echo "********************************************************\n";
echo "Retrieving Fixtures...\n";
$response = request($baseUrl, "GET", "competition/" . $idCompetition . "/fixtures", $token);
$data = json_encode($response, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
file_put_contents($outputFolder . "/fixtures.json", $data);
echo "Fixtures in competition " . $idCompetition . " retrieved\n\n";

echo "********************************************************\n";
echo "Retrieving Table...\n";
$response = request($baseUrl, "GET", "competition/" . $idCompetition . "/table", $token);
$data = json_encode($response, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
file_put_contents($outputFolder . "/table.json", $data);
echo "Table in competition " . $idCompetition . " retrieved\n\n";

echo "********************************************************\n";
echo "Retrieving Rankings...\n";
$response = request($baseUrl, "GET", "competition/" . $idCompetition . "/rankings", $token);
$data = json_encode($response, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
file_put_contents($outputFolder . "/rankings.json", $data);
echo "Rankings in competition " . $idCompetition . " retrieved\n\n";

?>
