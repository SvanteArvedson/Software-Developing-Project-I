<?php

require_once(dirname(__FILE__) . '/../../bootstrap/Propel.php');

$test = new lime_test(6, new lime_output_color());

$user = UserPeer::retrieveByUsernameAndPass('GulligaHannes', '12345678');
$test->ok(!empty($user), '::retrieveByUsernameAndPass - retrieve existing user');
	
$user = UserPeer::retrieveByUsernameAndPass('GulligaHannes', '12345679');	
$test->ok(empty($user), '::retrieveByUsernameAndPass - retrieve non existing user');

$user = UserPeer::retrieveByUsernameAndPass('gULLIGhANNES', '12345678');	
$test->ok(empty($user), '::retrieveByUsernameAndPass - retrieve non existing user (test if method is case-sensitive)');
	
$test->is(UserPeer::checkIfUsernameExists('GulligaHannes'), 
	true, '::checkIfUsernameExists - check existing username');
$test->is(UserPeer::checkIfUsernameExists('GulligaKlara'), 
	false, '::checkIfUsernameExists - check non existing username');
$test->is(UserPeer::checkIfUsernameExists('gULLIGhANNES'), 
	false, '::checkIfUsernameExists - check non existing username (test if method is case-sensitive)');