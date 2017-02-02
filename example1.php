<?php

function request($baseUrl, $method, $endpoint, $content, $token) {
	$authorization = "Authorization: Bearer " . $token;
	$ch = curl_init($baseUrl . $endpoint);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($content), $authorization));
	    				
	$result = curl_exec($ch);
	return json_decode($result);
}

$inputFolder = "./input/";
$baseUrl = "https://www.developers.football-tracker.com/v2/";
$token = "<Enter your Token>";

echo "********************************************************\n";
echo "This example creates a new Organization with one competition. The competition is a single leg league with 8 teams.
Two pitches are registered on the competition, available on Saturday at 18:30 and 19:30, so there are four matches each Saturday.
Tweak the jsons on the " . $inputFolder . "to customize the data of the example.
The meaning of the fields, and possible values are explained at https://www.developers.football-tracker.com/en/documentation\n\n";

echo "********************************************************\n";
echo "Creating Organization...\n";
$organizationJson = file_get_contents($inputFolder . "organization.json");
$response = request($baseUrl, "POST", "organization", $organizationJson, $token);
$idOrganization = $response->_id;
echo "Organization created with id " . $idOrganization . "\n\n";

echo "********************************************************\n";
echo "Creating Competition...\n";
$competitionJson = file_get_contents($inputFolder . "competition.json");
$response = request($baseUrl, "POST", "organization/" . $idOrganization . "/competition", $competitionJson, $token);
$idCompetition = $response->_id;
echo "Competition created with id " . $idCompetition . "\n\n";

echo "********************************************************\n";
echo "Adding Pitches...\n";
$pitchesJson = file_get_contents($inputFolder . "pitches.json");
$response = request($baseUrl, "POST", "competition/" . $idCompetition . "/pitches", $pitchesJson, $token);
echo "Pitches added to the competition " . $idCompetition . "\n\n";

echo "********************************************************\n";
echo "Adding Match Days...\n";
$matchDaysJson = file_get_contents($inputFolder . "matchdays.json");
$response = request($baseUrl, "POST", "competition/" . $idCompetition . "/matchdays", $matchDaysJson, $token);
echo "Pitches added to the competition " . $idCompetition . "\n\n";

echo "********************************************************\n";
echo "Adding Teams...\n";
$teamsJson = file_get_contents($inputFolder . "teams.json");
$response = request($baseUrl, "POST", "competition/" . $idCompetition . "/teams", $teamsJson, $token);
echo "Teams added to the competition " . $idCompetition . "\n\n";

echo "********************************************************\n";
echo "Setting Competition to ready...\n";
$response = request($baseUrl, "POST", "competition/" . $idCompetition . "/ready", "", $token);
echo "Competition " . $idCompetition . " ready \n\n";

echo "********************************************************\n";
echo "Generating Schedule...\n";
$response = request($baseUrl, "POST", "competition/" . $idCompetition . "/schedule", "", $token);
echo "Schedule for " . $idCompetition . " generated \n\n";

?>
