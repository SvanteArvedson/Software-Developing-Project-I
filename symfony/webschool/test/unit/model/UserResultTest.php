<?php

require_once(dirname(__FILE__) . '/../../bootstrap/Propel.php');

$test = new lime_test(3, new lime_output_color());

$users = UserPeer::doSelect(new Criteria());
$userID = $users[0]->getUserid();

// Test 1 & 2
$userResult = new UserResult($userID);
$test->ok(!empty($userResult), '__construct() - Create an instance of UserResult');
$test->ok(is_a($userResult, 'UserResult'), '__construct() - Create an instance of UserResult');

// Test 3
$lessonResults = $userResult->getLessonResults();
$test->ok(is_array($lessonResults), 'getLessonResults() - Gets an array of LessonResults');