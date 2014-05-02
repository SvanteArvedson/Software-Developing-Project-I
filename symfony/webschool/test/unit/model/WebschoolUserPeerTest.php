<?php

require_once(dirname(__FILE__) . '/../../bootstrap/Propel.php');

$test = new lime_test(6, new lime_output_color());

$user = WebschoolUserPeer::retrieveByUsernameAndPass('GulligaHannes', '12345678');
$test->ok(!empty($user), '::retrieveByUsernameAndPass - retrieve existing user');
	
$user = WebschoolUserPeer::retrieveByUsernameAndPass('GulligaHannes', '12345679');	
$test->ok(empty($user), '::retrieveByUsernameAndPass - retrieve non existing user');

$user = WebschoolUserPeer::retrieveByUsernameAndPass('gULLIGhANNES', '12345678');	
$test->ok(empty($user), '::retrieveByUsernameAndPass - retrieve non existing user (test if method is case-sensitive)');
	
$test->is(WebschoolUserPeer::checkIfUsernameExists('GulligaHannes'), 
	true, '::checkIfUsernameExists - check existing username');
$test->is(WebschoolUserPeer::checkIfUsernameExists('GulligaKlara'), 
	false, '::checkIfUsernameExists - check non existing username');
$test->is(WebschoolUserPeer::checkIfUsernameExists('gULLIGhANNES'), 
	false, '::checkIfUsernameExists - check non existing username (test if method is case-sensitive)');