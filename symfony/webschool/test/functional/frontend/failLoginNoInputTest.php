<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

$browser = new UserTestFunctional(new sfBrowser());
$browser->loadData();

$browser->info('Functional test fail login with no input')->
	
	info(' 01 - Login form is visible')->
	get('/')->
	
	with('request')->begin()->
		isParameter('module', 'user')->
		isParameter('action', 'index')->
	end()->
	
	with('response')->begin()->
		checkElement('#logInButton', true)->
		checkElement('#logOutButton', false)->
	end()->
	
	info(' 02 - User clicks "Ok" with empty fields')->
	click('Ok')->
	
	with('form')->begin()->
		hasErrors(true)->
	end()->
	
	with('request')->begin()->
		isParameter('module', 'user')->
		isParameter('action', 'index')->
	end()->
	
	with('response')->begin()->
		checkElement('#logInButton', true)->
		checkElement('#logOutButton', false)->
		checkElement('small.error', true)->
	end()->
	
	info(' 03 - If all tests is ok, user is not logged in and an error message is shown')
;
