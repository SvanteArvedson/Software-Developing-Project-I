<?php

/**
 * lesson actions.
 *
 * @package    webschool
 * @subpackage lesson
 * @author     Svante Arvedson
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class lessonActions extends sfActions
{
	/**
	 * Controller for "/lektion/id/title"
	 *
	 * @param sfRequest $request A request object
	 */
	public function executeLesson(sfWebRequest $request)
	{
		if ($request -> isMethod('get'))
		{
			$this->lessons = LessonPeer::doSelect(new Criteria());
			$this->lesson = $this->getRoute()->getObject();
		}
	}

	/**
	 * Controller for "/lektion/id/title/test"
	 *
	 * @param sfRequest $request A request object
	 */
	public function executeQuiz(sfWebRequest $request)
	{
		$this->lessons = LessonPeer::doSelect(new Criteria());
		$this->lesson = $this->getRoute()->getObject();
		
		if ($request->isMethod('get'))
		{
			$quiz = new LessonQuiz($this->lesson->getLessonid());
			$this->form = new LessonQuizFrom($quiz);
			$this->getUser()->setAttribute('quiz', $this->form);
		}
	}
	
		/**
	 * Controller for "/lektion/ratta/test"
	 *
	 * @param sfRequest $request A request object
	 */
	public function executeQuizResult(sfWebRequest $request)
	{
		$this->redirectUnless($this->getUser()->getAttribute('quiz') != null, $this->generateUrl('homepage'));
		
		$this->lessons = LessonPeer::doSelect(new Criteria());
		$this->form = $this->getUser()->getAttribute('quiz');
		$lessonID = $this->form->getQuiz()->getlessonID();
		$this->lesson = LessonPeer::retrieveByPK($lessonID);

		
		if ($request->isMethod('get'))
		{
			$score =$this->getUser()->getAttribute('result')->getScore();
			
			if ($score <= 5)
			{
				$this->resultPresentation = 'Uselt resultat!';	
			}
			else if ($score <=9 )
			{
				$this->resultPresentation = 'Helt okej resultat!';
			}
			else
			{
				$this->resultPresentation = 'Fantastiskt resultat!';	
			}
			$maxScore = $this->getUser()->getAttribute('maxScore');
			$this->resultPresentation .= ' Du fick ' . $score . ' rätt av ' . $maxScore . ' möjliga.';
			
			$this->getUser()->getAttributeHolder()->remove('quiz');
			$this->getUser()->getAttributeHolder()->remove('result');
			$this->getUser()->getAttributeHolder()->remove('maxScore');
		}
		else
		{
			$this->form->bind($request->getParameter('quiz'));
			
			$givenAnswers = $this->getGivenAnswers($request, $this->form);
			$correctAnswerIDs = $this->getCorrectAnswerIDs($this->form);
			
			$score = $this->calculateScore($correctAnswerIDs, $givenAnswers);
			$result = $this->saveQuizResult($score, $lessonID);
			
			$this->configureFormToViewResult($this->form, $correctAnswerIDs, $givenAnswers);
			
			// Show result with a "get"
			$this->getUser()->setAttribute('result', $result);
			$this->getUser()->setAttribute('maxScore', $this->form->count());
			$this->redirect($this->generateUrl('process_quiz'));
		}
	}

	/**
	 * Calculates the score of the quiz
	 * 
	 * @return integer
	 */
	private function calculateScore($correctAnswerIDs, $givenAnswers)
	{
		$score = 0;
		
		foreach ($givenAnswers as $key => $givenAnswer) {
			if ($givenAnswer == $correctAnswerIDs[$key])
			{
				$score += 1;
			}
		}
		
		return $score;
	}
	
	/**
	 * Configure settings in the forms widgets to make it render the result
	 */
	private function configureFormToViewResult($form, $correctAnswerIDs, $givenAnswers)
	{
		foreach ($form as $key => $field)
		{
			$field->getWidget()->setIsResult(true);
			$field->getWidget()->setCorrectAnswer($correctAnswerIDs[$key]);
			$field->getWidget()->setGivenAnswer($givenAnswers[$key]);
		}
	}
	
	/**
	 * Create an array with the correct answers
	 * 
	 * @return array
	 */
	private function getCorrectAnswerIDs($form)
	{
		$correctAnswerIDs = array();
		$questions = $this->form->getQuiz()->getQuestions();
		
		$count = 0;
		foreach ($form as $key => $field)
		{
			$correctAnswerIDs[$key] = $questions[$count]->getCorrectAnswer()->getAnswerid();
			$count += 1;
		}
		
		return $correctAnswerIDs;
	}
	
	/**
	 * Create an array with the given answers
	 * 
	 * @return array
	 */
	private function getGivenAnswers(sfWebRequest $request, $form)
	{
		$givenAnswers = array();
		
		foreach ($form as $key => $field)
		{
			$answer = $request->getParameter('quiz[' . $key . ']');
			if (!empty($answer))
			{
				$givenAnswers[$key] = $answer;
			}
			else
			{
				$givenAnswers[$key] = -1;
			}
		}
		
		return $givenAnswers;
	}
	
	/**
	 * Create and save a Result-object
	 * 
	 * @return Result
	 */
	private function saveQuizResult($score, $lessonID)
	{
		$result = new Result();
		$result->setLessonid($lessonID);
		$result->setUserid($this->getUser()->getAttribute('user')->getUserid());
		$result->setScore($score);
		
		if ($result->validate())
		{
			$result->save();
		}
		else
		{
			$this->getUser()->setFlash('error', 'Ditt resultat kunde inte sparas. 
					Kontakta administratören på info@webschool.se');
		}
		
		return $result;
	}
}
