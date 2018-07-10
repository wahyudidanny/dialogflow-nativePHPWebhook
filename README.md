# dialogflow-nativePHPWebhook
A Webhook for fullfillment in DialogFlow

This document just a testing document in purpose for connection fullfillment in DialogFlow to webhook and index.php
Upload the file with Heroku and deploy index.php. After successfull deploy, you can test the API in POSTMAN to see if it's working
In order to use fullfillment in Dialogflow, place the API url which you uploaded earlier in the fullfillment. Also enable the fullfillment in the intent section.

Update 101:
For the version 1.0 in Dialog flow(Api.ai), json attribute need 'speech' and 'displaytext' in order to response to the request,
newer version(Version 2.0) you dont need to use the 'speech' attribute in the API, in order to do that just remove it from index.php 
or simply just remark it, because in the newer version the attribute are not mandatory. The next is change 'displaytext' to 'fullfillmentText', the developer already change the name of attribute. I hope you take a note for the other attribute as well.

but if you still prefer the old version, remove the remark on the source code for version 2 and vice versa

VERSION 1.0
  $response = new \stdClass();
  $response->speech = "";
  $response->displayText = "";
  $response->source ="webhook";
  echo json_encode($response);

VERSION 2.0
  $response = new \stdClass();
  $response->fulfillmentText = "";
  $response->source ="webhook";
  echo json_encode($response);
  
Thank You
