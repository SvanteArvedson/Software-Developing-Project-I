<?php

class UserPeer extends BaseUserPeer
{
	/**
	 * @param String $username input Username
	 * @param String $password input Password
	 *
	 * @return User or null
	 */
	static public function retrieveByUsernameAndPass($username, $password)
	{
		$criteria = new Criteria();
		
		$criteria->add(self::USERNAME, $username, Criteria::EQUAL);
		$criteria->add(self::PASSWORD, $password, Criteria::EQUAL);
	  	$user = UserPeer::doSelectOne($criteria);
		
		return !empty($user) ? $user : null;
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
		$user = UserPeer::doSelectOne($criteria);
		
		return ($user != null);
	}
}
