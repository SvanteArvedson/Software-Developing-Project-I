<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

$browser = new UserTestFunctional(new sfBrowser());
$browser->loadData();

$browser->info('Functional test fail delete account - Too long password')->
	
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
	setField('login[username]', 'GulligaHannes')->
	setField('login[password]', '12345678')->
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
		checkElement('#pagecontent h1', '/Hannes Karlsson/')->
	end()->
	
	info(' 3 - User goes to delete account')->
	get('/radera-konto')->
	
	with('request')->begin()->
		isParameter('module', 'user')->
		isParameter('action', 'delete')->
	end()->
	
	with('response')->begin()->
		checkElement('#pagecontent h1', '/Radera konto/')->
		checkElement('#deleteButton', true)->
	end()->
	
	info(' 02 - User clicks "Ok" with parameters')->
	setField('user_delete[password]', '1234567890123456789')->
	click('Ok')->
	
	with('form')->begin()->
		hasErrors(true)->
	end()->
	
	with('request')->begin()->
		isParameter('module', 'user')->
		isParameter('action', 'delete')->
	end()->

	with('response')->begin()->
		checkElement('#pagecontent h1', '/Radera konto/')->
		checkElement('#deleteButton', true)->
		checkElement('ul.error-list', true)->
	end()->
	
	info(' 03 - If all tests is ok, user have failed to delete account')
;
