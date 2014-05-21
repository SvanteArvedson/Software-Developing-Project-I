<?php

class UserResult
{
	/**
	 * @var array $lessonResults
	 */
	private $lessonResults = array();
	
	/**
	 * Constructor for UserResults
	 * 
	 * @param integer $userID
	 */
	public function __construct($userID)
	{
		$lessons = LessonPeer::doSelect(new Criteria());
		
		foreach ($lessons as $lesson)
		{
			$this->lessonResults[] = new LessonResult($userID, $lesson->getLessonid());	
		}
	}
	
	/**
	 * Returns $this->lessonResults 
	 *
	 * @return array
	 */
	public function getLessonResults()
	{
		return $this->lessonResults;
	}
}
