<?php

class QuizQuestion
{
	private $question;
	
	private $answers = array();

	public function __construct($questionID)
	{
		$this->question = QuestionPeer::retrieveByPK($questionID);

		if (empty($this->question))
		{
			throw new Exception("Invalid questionID");
		}
		
		$this->answers[] = AnswerPeer::retrieveByPK($this->question->getAnswerid());
		
		// Gets incorrect answers
		$criteria = new Criteria();
		$criteria->add(IncorrectanswerPeer::QUESTIONID, $this->question->getQuestionid(), Criteria::EQUAL);
		$incorrectAnswers = IncorrectanswerPeer::doSelect($criteria);
		
		foreach ($incorrectAnswers as $incorrectAnswer)
		{
			$this->answers[] = AnswerPeer::retrieveByPK($incorrectAnswer->getAnswerid());
		}
	}
	
	public function getQuestion()
	{
		return $this->question;
	}
	
	public function getAnswers()
	{
		return $this->answers;
	}
	
	public function getCorrectAnswer()
	{
		return $this->answers[0];
	}
}
