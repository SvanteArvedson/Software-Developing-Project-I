<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

$browser = new UserTestFunctional(new sfBrowser());
$browser->loadData();

$browser->info('Functional test successful show results with no results')->
	
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
	
	info(' 02 - User clicks "Logga in" with username "RikaIdioten" and password "12345678"')->
	setField('login[username]', 'RikaIdioten')->
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
	end()->
	
	info(' 03 - User click on link to "Mina resultat"')->
	
	click('Mina resultat')->
	
	with('request')->begin()->
		isParameter('module', 'lesson')->
		isParameter('action', 'viewResult')->
	end()->
	
	with('response')->begin()->
		checkElement('h2', '/Mina resultat/')->
		checkElement('ul#board li table tbody tr td', '/Inga resultat/')->
		
	end()->
	
	info(' 04 - If all test passes User got the results with no results')
;
