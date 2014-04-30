<?php

/**
 * user actions.
 *
 * @package    webschool
 * @subpackage user
 * @author     Svante Arvedson
 */
class userActions extends sfActions
{

	/**
	 * Controller method for "/"
	 * 
	 * Return to view AUTHENTICATED if user is logged in, 
	 * otherwise return to view UNAUTHENTICATED
	 * 
	 */
	public function executeIndex(sfWebRequest $request)
	{
		$this->form = null;
		$this->loginfailed = null;
		
		if ($request->isMethod('get')) 
		{
			if ($this->getUser()->isAuthenticated())
			{
				$this->username = $this->getUser()->getAttribute('username', 'Användare');
				return UserView::AUTHENTICATED;
			}
			else
			{
				$this->form = new LoginForm();
				return UserView::UNAUTHENTICATED;
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
					return UserView::UNAUTHENTICATED;
				}

				return UserView::UNAUTHENTICATED;
			}
		}
	}

	/**
	 * Controller for "/registrera-ny-anvandare"
	 */
	public function executeNew(sfWebRequest $request)
	{
		$this->usernameExists = null;
		
		if ($this->getUser()->isAuthenticated())
		{
			$this->redirect($this->generateUrl('homepage'));
		}
		
		if ($request->isMethod('post'))
		{
			$this->form = new WebschoolUserForm();
			$this->form->bind($request->getParameter('webschool_user'));
			
			if ($this->form->isValid())
			{
				if (!WebschoolUserPeer::checkIfUsernameExists($this->form->getValue('user')))
				{
					// Om validate lyckas, spara till databasen
					$newUser = new WebschoolUser();
					
					$newUser->setName($this->form->getValue('name'));
					$newUser->setEmail($this->form->getValue('email'));
					$newUser->setUsername($this->form->getValue('user'));
					$newUser->setPassword($this->form->getValue('pass'));
					
					if ($newUser->validate())
					{
						$this->getUser()->setFlash('success', 'Ditt användarkonto har skapats');
						$newUser->save();
						
						$this->redirect($this->generateUrl('homepage'));
					}
					
					$this->getUser()->setFlash('error', 'Ditt användarkonto kunde inte sparas. 
						Kontakta administratören om promlemet inte försvinner.');
				}
				
				$this->usernameExists = 'Användarnamnet är upptaget. Välj ett annat.';
			}
		}
		else if ($request->isMethod('get'))
		{
			$this->form = new WebschoolUserForm();
		}
	}
}
