<?php

/**
 * lesson actions.
 *
 * @package    webschool
 * @subpackage lesson
 * @author     Your name here
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
		}
	}
}
