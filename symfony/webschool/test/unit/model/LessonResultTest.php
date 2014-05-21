<?php

require_once(dirname(__FILE__) . '/../../bootstrap/Propel.php');

$test = new lime_test(4, new lime_output_color());

$users = UserPeer::doSelect(new Criteria());
$userID = $users[0]->getUserid();

$lessons = LessonPeer::doSelect(new Criteria());
$lessonID = $lessons[0]->getLessonid();

// Test 1 & 2
$LessonResult = new LessonResult($userID, $lessonID);
$test->ok(!empty($LessonResult), '__construct() - Create an instance of LessonResult');
$test->ok(is_a($LessonResult, 'LessonResult'), '__construct() - Create an instance of LessonResult');

// Test 3
$lessonTitle = $LessonResult->getLessonTitle();
$test->ok(!empty($lessonTitle), 'getLessonTitle() - Gets the $lessonTitle in LessonResult');

// Test 4
$results = $LessonResult->getResults();
$test->ok(is_array($results), 'getResults() - Gets an array of Result objects');