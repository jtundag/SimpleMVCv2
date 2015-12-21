<?php

session_start();
require_once 'vendor/autoload.php';
require_once 'app/classes/utils/helpers.php';
use App\Classes\Utils\Globals;
use App\Classes\Utils\Input;

require_once 'dependecies.php';

// Set default url if not found in url.
$url = Globals::DEFAULT_URL;

// Get url from url.
if(Input::has('url')){
	$url = stripslashes(Input::get('url'));
}

require_once 'app/routes.php';
Route::check($url, $_SERVER['REQUEST_METHOD']);
