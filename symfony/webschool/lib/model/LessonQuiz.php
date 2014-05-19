<?php

class LessonQuiz
{
	/**
	 * @var array()
	 */
	private $questions = array();
	
	/**
	 * @var integer
	 */
	private $lessonID;
	
	/**
	 * Constructor method for LessonQuiz
	 * 
	 * @param int $lessonID Pk for the lesson belonging to the LessonQuiz
	 * @throws Exception 
	 */
	public function __construct($lessonID)
	{
		$lesson = LessonPeer::retrieveByPK($lessonID);
		$this->lessonID = $lessonID;
		
		// If lessonID don't exist an exception is thrown
		if (empty($lesson))
		{
			throw new Exception("Invalid lessonID");
		}
		
		$criteria = new Criteria();
		$criteria->add(QuizPeer::LESSONID, $lessonID, Criteria::EQUAL);
		$quizRows = QuizPeer::doSelect($criteria);
		
		// Gets all questions belonging to the lesson in random order
		shuffle($quizRows);
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

	/**
	 * @return integer lessonID
	 */
	public function getlessonID()
	{
		return $this->lessonID;
	}
}
