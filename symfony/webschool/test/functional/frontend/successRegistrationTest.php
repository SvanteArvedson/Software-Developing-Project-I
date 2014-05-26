<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

$browser = new UserTestFunctional(new sfBrowser());
$browser->loadData();

$browser->info('Functional test successful registration')->
	
	info(' 01 - Registration form is visible')->
	get('/registrera-konto')->
	
	with('request')->begin()->
		isParameter('module', 'user')->
		isParameter('action', 'new')->
	end()->
	
	with('response')->begin()->
		checkElement('#pagecontent h1', '/Registrera dig/')->
		checkElement('#sendButton', true)->
	end()->
	
	info(' 02 - User clicks "Ok" with parameters')->
	setField('user[name]', 'Gustav Hansson')->
	setField('user[email]', 'gurkan_cool@hotmail.com')->
	setField('user[username]', 'Gurkan')->
	setField('user[password]', '4ttBr4L4')->
	setField('user[passwordAgain]', '4ttBr4L4')->
	click('Ok')->

	with('form')->begin()->
		hasErrors(false)->
	end()->
	
	with('request')->begin()->
		isParameter('module', 'user')->
		isParameter('action', 'new')->
	end()->
	
	isRedirected()->
	followRedirect()->
	
	with('request')->begin()->
		isParameter('module', 'user')->
		isParameter('action', 'index')->
	end()->
	
	with('response')->begin()->
		checkElement('#logOutButton', false)->
		checkElement('#logInButton', true)->
		checkElement('.alert-box p', '/konto har skapats/')->
	end()->
	
	info(' 03 - If all tests is ok, user is successfully registrated')
;
