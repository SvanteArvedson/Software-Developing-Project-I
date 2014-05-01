<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

$browser = new UserTestFunctional(new sfBrowser());
$browser->loadData();

$browser->info('Functional test successful registration')->
	
	info(' 01 - Registration form is visible')->
	get('/registrera-ny-anvandare')->
	
	with('request')->begin()->
		isParameter('module', 'user')->
		isParameter('action', 'new')->
	end()->
	
	with('response')->begin()->
		checkElement('#pagecontent h2', '/Registrera ny/')->
		checkElement('#sendButton', true)->
	end()->
	
	info(' 02 - User clicks "Skicka" with parameters')->
	setField('webschool_user[name]', 'Gustav Hansson')->
	setField('webschool_user[email]', 'gurkan_cool@hotmail.com')->
	setField('webschool_user[user]', 'Gurkan')->
	setField('webschool_user[pass]', '4ttBr4L4')->
	setField('webschool_user[passAgain]', '4ttBr4L4')->
	click('Skicka')->
	
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
