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
	 * Controller for "/radera-konto"
	 */
	public function executeDelete(sfWebRequest $request)
	{
		$this->errorMessage = null;
		$this->form = new WebschoolUserDeleteForm();
		
		if ($request->isMethod('post'))
		{
			$this->form->bind($request->getParameter('webschool_user_delete'));
			
			if ($this->form->isValid())
			{
				if ($this->getUser()->getAttribute('user')->getPassword() != $this->form->getValue('pass'))
				{
					$this->errorMessage = 'Fel lösenord';
				}
				else
				{
					try
					{
						$user = $this->getUser()->getAttribute('user');
						WebschoolUserPeer::doDelete($user);
					}
					catch(exception $error)
					{
						$this->getUser()->setFlash('error', 'Ett fel inträffade när kontot skulle raderas.');
						$this->redirect($this->generateUrl('delete_user_account'));
					}
						$this->getUser()->setAuthenticated(false);
						$this->getUser()->getAttributeHolder()->remove('user');
						$this->getUser()->setFlash('success', 'Kontot har raderats.');
						$this->redirect($this->generateUrl('homepage'));
				}
			}
		}
	}
	
	/**
	 * Controller method for "/redigera-konto"
	 */
	public function executeEdit(sfWebRequest $request)
	{
		$this->errorMessage = null;
		$this->form = new WebschoolUserEditForm();
		
		if ($request->isMethod('get'))
		{
			$this->form->bind(array(
				'id' => $this->getUser()->getAttribute('user')->getId(),
				'user' => $this->getUser()->getAttribute('user')->getUsername(),
				'pass' => $this->getUser()->getAttribute('user')->getPassword(),
				'passAgain' => $this->getUser()->getAttribute('user')->getPassword(),
				'name' => $this->getUser()->getAttribute('user')->getName(),
				'email' => $this->getUser()->getAttribute('user')->getEmail()
			));
		}
		else
		{
			$this->form->bind($request->getParameter('webschool_user'));

			if ($this->form->isValid())
			{
				$user = $this->getUser()->getAttribute('user');
				
				if($user->getName() == $this->form->getValue('name') 
						&& $user->getEmail() == $this->form->getValue('email')
						&& $user->getPassword() == $this->form->getValue('pass')
						&& $user->getUsername() == $this->form->getValue('user'))
				{
					$this->getUser()->setFlash('message', 'Du ändrade inte dina kontouppgifter');
					$this->redirect($this->generateUrl('homepage'));
				}
				else if ($this->getUser()->getAttribute('user')->getPassword() != $this->form->getValue('passOld'))
				{
					$this->errorMessage = 'Du måste ange ditt gamla lösenord för att kunna spara ändringarna.';
				}
				else if (WebschoolUserPeer::checkIfUsernameExists($this->form->getValue('user')) 
					&& $this->form->getValue('user') != $user->getUsername())
				{
					$this->errorMessage = 'Användarnamnet är upptaget. Välj ett annat.';
				}
				else 
				{
					$user->setName($this->form->getValue('name'));
					$user->setEmail($this->form->getValue('email'));
					$user->setPassword($this->form->getValue('pass'));
					$user->setUsername($this->form->getValue('user'));
					$user->save();
					
					$this->getUser()->setFlash('message', 'Ändringarna har sparats');
					$this->redirect($this->generateUrl('homepage'));
				}
			}
		}
	}

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
				$this->name = $this->getUser()->getAttribute('user')->getName();
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
				$this->getUser()->getAttributeHolder()->remove('user');
				$this->redirect($this->generateUrl('homepage'));
			}
			else
			{
				$this->form = new LoginForm();
				$this->form->bind($request->getParameter('login'));
				
				if ($this->form->isValid()) {
					$username = $this->form->getValue('user');
					$password = $this->form->getValue('pass');
					
					$user = WebschoolUserPeer::retrieveByUsernameAndPass($username, $password);
					
					if (!empty($user))
					{	
						$this->getUser()->setAttribute('user', $user);
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
