<?php
require './vendor/autoload.php';
//START OF APP
$app = new Slim\App();

//All APP data wuthin these lines of code...

//This says route the index page start @ root = / then use function to get you going
//$request - what your asking for get post cookies
//$response - what you are getting back
//read from request get from response
//$args - 
//function is anonymous
$app->get('/', function($request, $response, $args){
    $response->write("Welcome to SLIM!");
    return $response;
    
});
//{$args['name']} will come from the URL
$app->get('/hello/{name}', function($request, $response, $args){
    $msg = "Hello {$args['name']} - in SLIM Style!!!";
    $response->write($msg);
    return $response;
});
//API for restful web service
//routers map urls to 
//templates prep for data ref 28.22min
//get = http verb that is used
//post
//
//when asking for url u r generating a get request
//programming interface to http protocol
//
$app->get('/apples.html', 'get_apples');
function get_apples($request, $response, $args) {
    $response->write("in Apples.html");
    return $response;
}

$app->run();
//END OF APP