<?php

class ResultPeer extends BaseResultPeer
{
	/**
	 * @param String $userID
	 *
	 * @return array of Results or null
	 */
	static public function retrieveByUserID($userID)
	{
		$criteria = new Criteria();
		
		$criteria->add(self::USERID, $userID, Criteria::EQUAL);
	  	$results = self::doSelect($criteria);
		
		return !empty($results) ? $results : null;
	}
}
