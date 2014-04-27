<?php

require_once(dirname(__FILE__) . '/../../bootstrap/Propel.php');

$test = new lime_test(3, new lime_output_color());

$test->is(WebschoolUserPeer::checkIfUserAndPass('test1', 'test1'), 
	true, '::checkIfUserExists - check existing user');
$test->is(WebschoolUserPeer::checkIfUserAndPass('test1', 'tes'), 
	false, '::checkIfUserExists - check non existing user');
$test->is(WebschoolUserPeer::checkIfUserAndPass('TEST1', 'test1'), 
	false, '::checkIfUserExists - check non existing user (test if method is case-sensitive)');