<?php
error_log("just here");
include ('./config/db.php');
//add the db call here
if ((strtoupper($_SERVER['REQUEST_METHOD']) != 'POST' ) || !array_key_exists('HTTP_X_PAYSTACK_SIGNATURE', $_SERVER) ) {
    // only a post with paystack signature header gets our attention
    exit();
}
// Retrieve the request's body
$input = @file_get_contents("php://input");
define('PAYSTACK_SECRET_KEY','sk_test_0e30a39f85963904df8dc24ce2110a6e2061bd6b');
if(!$_SERVER['HTTP_X_PAYSTACK_SIGNATURE'] || ($_SERVER['HTTP_X_PAYSTACK_SIGNATURE'] !== hash_hmac('sha512', $input, PAYSTACK_SECRET_KEY))){
  // silently forget this ever happened
  exit();
}
http_response_code(200);
// parse event (which is json string) as object
// Do something - that will not take long - with $event



//loop and check which event is recieved and act accordingly
echo $input;
$event = json_decode($input);
switch($event->event){

    // subscription.create
    case 'subscription.create':

//this event is fired ONLY when a new subscription is initiated manually, NOT on autorenewal
//pick some parameters first to know the plan the person is subscribing for
 //$event = json_decode($input);
//$subscriptioncode=$event->data->subscription_code;
//$email=$event->data->customer->email;
//get the email token using curl



 
        break;
    // charge.success
    case 'charge.success':
echo "Charge Successful";


$event = json_decode($input);
$email=$event->data->customer->email;


mysqli_query($conn," UPDATE users SET status='true' WHERE email='$email' ");


     
        break;
    // subscription.disable
    case 'subscription.disable':
         error_log("subscription disabled"); 
//do sth when subscription is disabled
        break;
    // invoice.create and invoice.update
    case 'invoice.create':
         error_log("invoice was created"); 
    case 'invoice.update':
        break;
}

//http_response_code(200);
exit();
?>