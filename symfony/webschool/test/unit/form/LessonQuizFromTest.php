<?php

require_once(dirname(__FILE__) . '/../../bootstrap/Propel.php');

$test = new lime_test(2, new lime_output_color());

$criteria = new Criteria();
$criteria->add(LessonPeer::TITLE, 'Renässansen', Criteria::EQUAL);
$lesson = LessonPeer::doSelectOne($criteria);
$lessonID = $lesson->getLessonid();

$lessonQuiz = new LessonQuiz($lessonID);

// Test 1
$lessonQuizForm = new LessonQuizFrom($lessonQuiz);
$test->ok(!empty($lessonQuizForm), '__construct() - Create an instance of LessonQuizFrom');

// Test 2
$lessonQuizFormQuiz = $lessonQuizForm->getQuiz();
$test->ok(is_a($lessonQuizFormQuiz, 'LessonQuiz'), 'getQuiz() - Gets a LessonQuiz object');