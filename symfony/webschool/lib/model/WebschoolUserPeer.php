<?php

class WebschoolUserPeer extends BaseWebschoolUserPeer
{
	static public function checkIfUserExists($username, $password)
	{
		$criteria = new Criteria();
		$criteria->add(self::USERNAME, $username, Criteria::EQUAL);
		$criteria->add(self::PASSWORD, $password, Criteria::EQUAL);
	  	$user = WebschoolUserPeer::doSelectOne($criteria);
		
		if ($user == null)
		{
			return false;
		}
		return true;
	}
}
