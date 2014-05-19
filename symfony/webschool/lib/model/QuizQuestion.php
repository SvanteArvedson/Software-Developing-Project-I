<?php

class QuizQuestion
{
	/**
	 * @var Question 
	 */
	private $question;
	
	/**
	 * @var array() array containing answer objects 
	 */
	private $answers = array();
	
	/**
	 * @var Question question object with the correct answer
	 */
	private $correctAnswer;

	/**
	 * Constructor method for QuizQuestion
	 * 
	 * @param int $questionID Pk for the questin belonging to the QuizQuestion
	 * @throws Exception 
	 */
	public function __construct($questionID)
	{
		$this->question = QuestionPeer::retrieveByPK($questionID);

		// If questionID don't exist an exception is thrown
		if (empty($this->question))
		{
			throw new Exception("Invalid questionID");
		}
		
		$correctAnswer = AnswerPeer::retrieveByPK($this->question->getAnswerid());
		$this->correctAnswer = $correctAnswer;
		
		$this->answers[] = $correctAnswer;
		
		// Gets incorrect answers
		$criteria = new Criteria();
		$criteria->add(IncorrectanswerPeer::QUESTIONID, $this->question->getQuestionid(), Criteria::EQUAL);
		$incorrectAnswers = IncorrectanswerPeer::doSelect($criteria);
		
		foreach ($incorrectAnswers as $incorrectAnswer)
		{
			$this->answers[] = AnswerPeer::retrieveByPK($incorrectAnswer->getAnswerid());
		}
		
		// randomize the order of the answers
		shuffle($this->answers);
	}
	
	/**
	 * @return Question $this->question
	 */
	public function getQuestion()
	{
		return $this->question;
	}
	
	/**
	 * @return array $this->answers
	 */
	public function getAnswers()
	{
		return $this->answers;
	}
	
	/**
	 * @return Question $this->correctAnswer
	 */
	public function getCorrectAnswer()
	{
		return $this->correctAnswer;
	}
}
