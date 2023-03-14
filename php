<?php

// Populate the data that will be sent

	$carePlan = $submission->params['first_name'];
	$coverPlan  = $submission->params['last_name'];
	$agePlan 	 = $submission->params['email'];
    $amount	    = $submission->params['email'];


// Set the URL that will retrieve the data
$url = "https://leadrelayplatform.com/FPC/api/index.php/plan/option/instalment/$carePlan/$coverPlan/$amount/$agePlan";



$response = JHttpFactory::getHttp()->get($url);

echo "I have been sent";

// Do something if the data were sent successfully
if ($response->code == 200)
{
	echo "I have been sent";
}
?>