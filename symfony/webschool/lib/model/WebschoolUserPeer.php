<?php

class WebschoolUserPeer extends BaseWebschoolUserPeer
{
	/**
	 * @param String $username input Username
	 * @param String $password input Password
	 *
	 * @return Boolean
	 */
	static public function checkIfUserAndPass($username, $password)
	{
		$criteria = new Criteria();
		
		$criteria->add(self::USERNAME, $username, Criteria::EQUAL);
		$criteria->add(self::PASSWORD, $password, Criteria::EQUAL);
	  	$user = WebschoolUserPeer::doSelectOne($criteria);
		
		return ($user != null);
	}
	
	/**
	 * @param String $username input Username
	 *
	 * @return Boolean
	 */
	static public function checkIfUsernameExists($username)
	{
		$criteria = new Criteria();
		
		$criteria->add(self::USERNAME, $username, Criteria::EQUAL);
		$user = WebschoolUserPeer::doSelectOne($criteria);
		
		return ($user != null);
	}
}
