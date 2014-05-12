<?php

require_once(dirname(__FILE__) . '/../../bootstrap/Propel.php');

$test = new lime_test(5, new lime_output_color());

$criteria = new Criteria();
$criteria->add(QuestionPeer::TEXT, 'Vad arbetade Giovanni Pierluigi da Palestrina som?');
$question = QuestionPeer::doSelectOne($criteria);

$questionID = $question->getQuestionid();

// Test 1
$QuizQuestion = new QuizQuestion($questionID);
$test->ok(!empty($QuizQuestion), '__construct() - Create an instance of QuizQuestion');

// Test 2
$QuizQuestionQuestion = $QuizQuestion->getQuestion();
$test->ok(is_a($QuizQuestionQuestion, 'Question'), 'getQuestion() - Gets an instance of Question');

// Test 3
$QuizQuestionAnswers = $QuizQuestion->getAnswers();
$test->ok(is_array($QuizQuestionAnswers), 'getAnswers() - Gets an array of Answer objects');

// Test 4
$QuizQuestionCorrectAnswer = $QuizQuestion->getCorrectAnswer();
$test->ok(is_a($QuizQuestionCorrectAnswer, 'Answer'), 'getCorrectAnswer() - Gets the correct answer in form of Answer-object');

// Test 5
try
{
	$QuizQuestion = new QuizQuestion($lessonID += 2000);
	$test->fail('__construct() - Constructor didn\'t throw an exception');
}
catch(Exception $e)
{
	$test->pass('__construct() - Constructor did throw an exception');
}