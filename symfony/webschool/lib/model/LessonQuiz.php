<?php

class LessonQuiz
{
	/**
	 * @var array()
	 */
	private $questions = array();
	
	/**
	 * Constructor method for LessonQuiz
	 * 
	 * @param int $lessonID Pk for the lesson belonging to the LessonQuiz
	 */
	public function __construct($lessonID)
	{
		$lesson = LessonPeer::retrieveByPK($lessonID);
		
		if (empty($lesson))
		{
			throw new Exception("Invalid lessonID");
		}
		
		$criteria = new Criteria();
		$criteria->add(QuizPeer::LESSONID, $lessonID, Criteria::EQUAL);
		$quizRows = QuizPeer::doSelect($criteria);
		
		// Gets all questions belonging to the lesson
		foreach ($quizRows as $quizRow)
		{
			$questionID = $quizRow->getQuestionid();
			$this->questions[] = new QuizQuestion($questionID);
		}
	}
	
	/**
	 * @return array $this->questions
	 */
	public function getQuestions()
	{
		return $this->questions;
	}
}
