<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

$browser = new UserTestFunctional(new sfBrowser());
$browser->loadData();

$browser->info('Functional test fail edit profile - Username already exists')->
	
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
	
	info(' 3 - User goes to edit account')->
	get('/redigera-konto')->
	
	with('request')->begin()->
		isParameter('module', 'user')->
		isParameter('action', 'edit')->
	end()->
	
	with('response')->begin()->
		checkElement('#pagecontent h2', '/Redigera konto/')->
		checkElement('#saveButton', true)->
	end()->
	
	info(' 02 - User clicks "Ok" with parameters')->
	setField('webschool_user[name]', 'Hannes Karlsson')->
	setField('webschool_user[email]', 'gulliga_hannes@hotmail.com')->
	setField('webschool_user[user]', 'StarkaKatten')->
	setField('webschool_user[passOld]', '12345678')->
	click('Ok')->
	
	with('form')->begin()->
		hasErrors(false)->
	end()->
	
	with('request')->begin()->
		isParameter('module', 'user')->
		isParameter('action', 'edit')->
	end()->
	
	with('response')->begin()->
		checkElement('#pagecontent h2', '/Redigera konto/')->
		checkElement('#saveButton', true)->
		checkElement('p.error', true)->
		checkElement('p.error', '/ett annat/')->
	end()->
	
	info(' 03 - If all tests is ok, user failed to edit profile and error message is shown')
;
