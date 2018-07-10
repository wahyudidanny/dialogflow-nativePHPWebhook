<?php 

$method = $_SERVER['REQUEST_METHOD'];

if($method == 'POST'){
	$requestBody = file_get_contents('php://input');
	$json = json_decode($requestBody);

	//$text = $json->result->parameters->text; //  For Version 1.0 DialogFlow, Json attribute is result
	$text = $json->queryResult->parameters->text; // For Version 2.0 DialogFlow, Json attribute is queryResult
	switch ($text) {
		case 'hi':
			$speech = "Hi, How Can i help You??";
			break;

		case 'bye':
			$speech = "Good Bye, see you later then";
			break;

		case 'anything':
			$speech = "Yes, you can type anything here";
			break;
		case 'hello':
			$speech = "Well hello to you too";
			break;
		case 'are you a bot?':
			$speech = "Yes, i am a bot";
			break;
		default:
			$speech = "Sorry i dont catch your meaning. Please ask something else";
			break;
	}

	$response = new \stdClass();
	$response->speech = $speech;
	$response->displayText = $speech;
	$response->source = "webhook";
	echo json_encode($response);
}
else
{
	echo "Method not allowed";
}

?>
