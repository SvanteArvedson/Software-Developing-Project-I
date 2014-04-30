<?php

require_once(dirname(__FILE__) . '/../../bootstrap/Propel.php');

$test = new lime_test(6, new lime_output_color());

$test->is(WebschoolUserPeer::checkIfUserAndPass('GulligaHannes', '12345678'), 
	true, '::checkIfUserExists - check existing user');
$test->is(WebschoolUserPeer::checkIfUserAndPass('GulligaHannes', '12345679'), 
	false, '::checkIfUserExists - check non existing user');
$test->is(WebschoolUserPeer::checkIfUserAndPass('gULLIGhANNES', '12345678'), 
	false, '::checkIfUserExists - check non existing user (test if method is case-sensitive)');
	
$test->is(WebschoolUserPeer::checkIfUsernameExists('GulligaHannes'), 
	true, '::checkIfUsernameExists - check existing username');
$test->is(WebschoolUserPeer::checkIfUsernameExists('GulligaKlara'), 
	false, '::checkIfUsernameExists - check non existing username');
$test->is(WebschoolUserPeer::checkIfUsernameExists('gULLIGhANNES'), 
	false, '::checkIfUsernameExists - check non existing username (test if method is case-sensitive)');