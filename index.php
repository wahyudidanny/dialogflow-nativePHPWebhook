<?php 

$method = $_SERVER['REQUEST_METHOD'];

if($method == 'POST'){
	$requestBody = file_get_contents('php://input');
	$json = json_decode($requestBody);

	$text = $json->result->parameters->text;

	switch ($text) {
		case 'hi':
			$speech = "Good Bye, see you later then";
			break;

		case 'bye':
			$speech = "Good Bye, see you later then";
			break;

		case 'anything':
			$speech = "Yes, you can type anything here";
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
