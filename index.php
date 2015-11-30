<?php
session_start();
require_once 'vendor/autoload.php';
require_once 'app/classes/utils/helpers.php';
use App\Classes\Utils\Globals;
use App\Classes\Utils\Input;

$controller = Globals::DEFAULT_CONTROLLER;
$action = Globals::DEFAULT_ACTION;

if(Input::has('controller') && Input::has('action')){
	$controller = Input::get('controller');
	$action = Input::get('action');
}

require_once 'app/routes.php';