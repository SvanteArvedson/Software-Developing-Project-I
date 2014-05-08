<?php

require_once(dirname(__FILE__) . '/../../bootstrap/Propel.php');

$test = new lime_test(3, new lime_output_color());

$criteria = new Criteria();
$criteria->add(UserPeer::USERNAME, 'GulligaHannes', Criteria::EQUAL);
$user = UserPeer::doSelectOne($criteria);
$userID = $user->getUserid();

$results = ResultPeer::retrieveByUserID($userID);
$test->ok(!empty($results), '::retrieveByUsernameAndPass - retrieve existing resluts from existeing user');

$criteria = new Criteria();
$criteria->add(UserPeer::USERNAME, 'LillaBjörn', Criteria::EQUAL);
$user = UserPeer::doSelectOne($criteria);
$userID = $user->getUserid();
	
$results = ResultPeer::retrieveByUserID($userID);	
$test->ok(empty($results), '::retrieveByUsernameAndPass - retrieve non existing resluts from existeing user');

$results = ResultPeer::retrieveByUserID(2000000);	
$test->ok(empty($results), '::retrieveByUsernameAndPass - retrieve non existing resluts from non existeing user');