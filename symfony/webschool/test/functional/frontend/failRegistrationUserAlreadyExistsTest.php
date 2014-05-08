<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

$browser = new UserTestFunctional(new sfBrowser());
$browser->loadData();

$browser->info('Functional test fail registration - Username already exists')->
	
	info(' 01 - Registration form is visible')->
	get('/registrera-konto')->
	
	with('request')->begin()->
		isParameter('module', 'user')->
		isParameter('action', 'new')->
	end()->
	
	with('response')->begin()->
		checkElement('#pagecontent h2', '/Registrera ny/')->
		checkElement('#sendButton', true)->
	end()->
	
	info(' 02 - User clicks "Ok" with parameters')->
	setField('user[name]', 'Gustav Hansson')->
	setField('user[email]', 'gurkan_cool@hotmail.com')->
	setField('user[username]', 'GulligaHannes')->
	setField('user[password]', '4ttBr4L4')->
	setField('user[passwordAgain]', '3ttBr3L3')->
	click('Ok')->
	
	with('form')->begin()->
		hasErrors(true)->
	end()->
	
	with('request')->begin()->
		isParameter('module', 'user')->
		isParameter('action', 'new')->
	end()->
	
	with('response')->begin()->
		checkElement('#pagecontent h2', '/Registrera ny/')->
		checkElement('#sendButton', true)->
		checkElement('ul.error-list', true)->
	end()->
	
	info(' 03 - If all tests is ok, user not registrated and error messages is shown')
;
