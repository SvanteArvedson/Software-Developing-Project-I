<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

$browser = new UserTestFunctional(new sfBrowser());
$browser->loadData();

$browser->info('Functional test fail delete account - Wrong password')->
	
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
	
	info(' 02 - User clicks "Ok" with username "GulligaHannes" and password "12345678"')->
	setField('login[user]', 'GulligaHannes')->
	setField('login[pass]', '12345678')->
	click('Ok')->
	
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
	
	info(' 3 - User goes to delete account')->
	get('/radera-konto')->
	
	with('request')->begin()->
		isParameter('module', 'user')->
		isParameter('action', 'delete')->
	end()->
	
	with('response')->begin()->
		checkElement('#pagecontent h2', '/Radera konto/')->
		checkElement('#deleteButton', true)->
	end()->
	
	info(' 02 - User clicks "Ok" with parameters')->
	setField('webschool_user_delete[pass]', '98765432')->
	click('Ok')->
	
	with('form')->begin()->
		hasErrors(false)->
	end()->
	
	with('request')->begin()->
		isParameter('module', 'user')->
		isParameter('action', 'delete')->
	end()->

	with('response')->begin()->
		checkElement('#pagecontent h2', '/Radera konto/')->
		checkElement('#deleteButton', true)->
		checkElement('p.error', '/senord/')->
	end()->
	
	info(' 03 - If all tests is ok, user have failed to delete account')
;
