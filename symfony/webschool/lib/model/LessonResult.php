<?php

class LessonResult
{
	/**
	 * @var String $lessonTitle
	 */
	private $lessonTitle;
	
	/**
	 * @var array $results
	 */
	private $results;
	
	/**
	 * Constructor for LessonResult
	 * 
	 * @param integer $userID
	 * @param integer $lessonID
	 */
	public function __construct($userID, $lessonID)
	{	
		$criteria = new Criteria();
		$criteria->add(LessonPeer::LESSONID, $lessonID);
		$lesson = LessonPeer::doSelectOne($criteria);
		
		$this->lessonTitle = $lesson->getTitle();
		
		$criteria = new Criteria();
		$criteria->add(ResultPeer::USERID, $userID);
		$criteria->add(ResultPeer::LESSONID, $lessonID);
		
		$this->results = ResultPeer::doSelect($criteria);
	}
	
	/**
	 * Returns $this->lessonTitle
	 * 
	 * @return String
	 */
	public function getLessonTitle()
	{
		return $this->lessonTitle;
	}
	
	/**
	 * Returns $this->results
	 * 
	 * @return array
	 */
	public function getResults()
	{
		return $this->results;
	}
}
