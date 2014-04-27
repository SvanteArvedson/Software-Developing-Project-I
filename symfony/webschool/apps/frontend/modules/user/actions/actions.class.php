<?php

/**
 * user actions.
 *
 * @package    webschool
 * @subpackage user
 * @author     Svante Arvedson
 */
class userActions extends sfActions {

	/**
	* Controller method for "/"
	*/
	public function executeIndex(sfWebRequest $request) {
		$this->form = null;
		$this->loginfailed = null;
		
		if ($request->isMethod('get')) 
		{
			if ($this->getUser()->isAuthenticated())
			{
				$this->username = $this->getUser()->getAttribute('username', 'Användare');
			}
			else
			{
				$this->form = new LoginForm();
			}
		}
		else
		{
			if ($this->getUser()->isAuthenticated())
			{
				$this->getUser()->setAuthenticated(false);
				$this->getUser()->getAttributeHolder()->remove('username');
				$this->redirect($this->generateUrl('homepage'));
			}
			else
			{
				$this->form = new LoginForm();
				$this->form->bind($request->getParameter('login'));
				
				if ($this->form->isValid()) {
					$username = $this->form->getValue('user');
					$password = $this->form->getValue('pass');
					
					if (WebschoolUserPeer::checkIfUserAndPass($username, $password))
					{
						$this->getUser()->setAttribute('username', $this->form->getValue('user'));
						$this->getUser()->setAuthenticated(true);
						$this->redirect($this->generateUrl('homepage'));
					}
					
					$this->loginfailed = 'Felaktigt använarnamn eller lösenord';
				}
			}
		}
	}
}
