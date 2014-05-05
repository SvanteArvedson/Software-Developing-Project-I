<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

$browser = new UserTestFunctional(new sfBrowser());
$browser->loadData();

$browser->info('Functional test successful edit password')->
	
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
	
	info(' 02 - User clicks "Logga in" with username "GulligaHannes" and password "12345678"')->
	setField('login[user]', 'GulligaHannes')->
	setField('login[pass]', '12345678')->
	click('Logga in')->
	
	with('form')->begin()->
		hasErrors(false)->
	end()->
	
	with('request')->begin()->
		isParameter('module', 'user')->
		isParameter('action', 'index')->
	end()->

	isRedirected()->
	followRedirect()->
	
	with('request')->begin()->
		isParameter('module', 'user')->
		isParameter('action', 'index')->
	end()->
	
	with('response')->begin()->
		checkElement('#logOutButton', true)->
		checkElement('#logInButton', false)->
		checkElement('#pagecontent h2', '/Hannes Karlsson/')->
	end()->
	
	info(' 3 - User goes to edit password')->
	get('/redigera-losenord')->
	
	with('request')->begin()->
		isParameter('module', 'user')->
		isParameter('action', 'editpassword')->
	end()->
	
	with('response')->begin()->
		checkElement('#pagecontent h2', '/senord/')->
		checkElement('#saveButton', true)->
	end()->
	
	info(' 02 - User clicks "Ok" with parameters')->
	setField('webschool_user_edit_password[pass]', '98765432')->
	setField('webschool_user_edit_password[passAgain]', '98765432')->
	setField('webschool_user_edit_password[passOld]', '12345678')->
	click('Ok')->
	
	with('form')->begin()->
		hasErrors(false)->
	end()->
	
	with('request')->begin()->
		isParameter('module', 'user')->
		isParameter('action', 'editpassword')->
	end()->
	
	isRedirected()->
	followRedirect()->
	
	with('request')->begin()->
		isParameter('module', 'user')->
		isParameter('action', 'index')->
	end()->
	
	with('response')->begin()->
		checkElement('#logOutButton', true)->
		checkElement('#logInButton', false)->
		checkElement('#pagecontent h2', '/Hannes Karlsson/')->
		checkElement('.alert-box p', '/senordet har/')->
	end()->
	
	info(' 03 - If all tests is ok, user have successfully edit password')
;
