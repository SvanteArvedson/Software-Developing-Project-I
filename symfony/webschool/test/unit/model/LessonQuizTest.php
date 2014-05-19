<?php

require_once(dirname(__FILE__) . '/../../bootstrap/Propel.php');

$test = new lime_test(3, new lime_output_color());

$criteria = new Criteria();
$criteria->add(LessonPeer::TITLE, 'Renässansen', Criteria::EQUAL);
$lesson = LessonPeer::doSelectOne($criteria);

$lessonID = $lesson->getLessonid();

// Test 1
$lessonQuiz = new LessonQuiz($lessonID);
$test->ok(!empty($lessonQuiz), '__construct() - Create an instance of LessonQuiz');

// Test 2
$lessonQuizQuestions = $lessonQuiz->getQuestions();
$test->ok(is_array($lessonQuizQuestions), 'getQuestions() - Gets array with QuizQuestion objects');

// Test 3
try
{
	$lessonQuiz = new LessonQuiz($lessonID += 200);
	$test->fail('__construct() - Constructor didn\'t throw an exception');
}
catch(Exception $e)
{
	$test->pass('__construct() - Constructor did throw an exception');
}