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
		$this->form = new UserDeleteForm();
		
		if ($request->isMethod('post'))
		{
			$this->form->bind($request->getParameter('user_delete'));
			
			if ($this->form->isValid())
			{
				if ($this->getUser()->getAttribute('user')->getPassword() != $this->form->getValue('password'))
				{
					$this->errorMessage = 'Fel lösenord';
				}
				else
				{
					try
					{
						$user = $this->getUser()->getAttribute('user');
						$userID = $user->getUserid();
						$results = ResultPeer::retrieveByUserID($userID);
						$resultIDs = array();
						foreach ($results as $result) {
							$resultIDs[] = $result->getResultid();
						}
						ResultPeer::doDelete($resultIDs);
						UserPeer::doDelete($user);
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
		$this->form = new UserEditForm();
		
		if ($request->isMethod('get'))
		{
			$this->form->bind(array(
				'userID' => $this->getUser()->getAttribute('user')->getUserid(),
				'username' => $this->getUser()->getAttribute('user')->getUsername(),
				'name' => $this->getUser()->getAttribute('user')->getName(),
				'email' => $this->getUser()->getAttribute('user')->getEmail()
			));
		}
		else
		{
			$this->form->bind($request->getParameter('user'));

			if ($this->form->isValid())
			{
				$user = $this->getUser()->getAttribute('user');
				
				if($user->getName() == $this->form->getValue('name') 
						&& $user->getEmail() == $this->form->getValue('email')
						&& $user->getUsername() == $this->form->getValue('usernamn'))
				{
					$this->getUser()->setFlash('message', 'Du ändrade inte dina kontouppgifter');
					$this->redirect($this->generateUrl('homepage'));
				}
				else if ($this->getUser()->getAttribute('user')->getPassword() != $this->form->getValue('passwordOld'))
				{
					$this->errorMessage = 'Fel lösenord';
				}
				else if (UserPeer::checkIfUsernameExists($this->form->getValue('username')) 
					&& $this->form->getValue('username') != $user->getUsername())
				{
					$this->errorMessage = 'Användarnamnet är upptaget. Välj ett annat.';
				}
				else 
				{
					$user->setName($this->form->getValue('name'));
					$user->setEmail($this->form->getValue('email'));
					$user->setUsername($this->form->getValue('username'));
					$user->save();
					
					$this->getUser()->setFlash('message', 'Ändringarna har sparats');
					$this->redirect($this->generateUrl('homepage'));
				}
			}
		}
	}

	/**
	 * Controller for "/redigera-losenord"
	 */
	 public function executeEditpassword(sfWebRequest $request)
	 {
	 	$this->errorMessage = null;
		$this->form = new UserEditPasswordForm();
		
		if ($request->isMethod('post'))
		{
			$this->form->bind($request->getParameter('user_edit_password'));
			
			if ($this->form->isValid())
			{
				if ($this->getUser()->getAttribute('user')->getPassword() != $this->form->getValue('passwordOld'))
				{
					$this->errorMessage = 'Fel lösenord.';
				}
				else
				{
					$user = $this->getUser()->getAttribute('user');
					try
					{
						$user->setPassword($this->form->getValue('password'));
						$user->save();
					}
					catch(Exception $e)
					{
						$user->setPassword($this->form->getValue('passwordOld'));
						$this->getUser()->setFlash('error', 'Ett fel inträffade när lösenorder skulle ändras.');
						$this->redirect($this->generateUrl('user_edit_password'));
					}
					
					$this->getUser()->setFlash('success', 'Lösenordet har ändrats.');
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
		$this->errorMessage = null;
		
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
					$username = $this->form->getValue('username');
					$password = $this->form->getValue('password');
					
					$user = UserPeer::retrieveByUsernameAndPass($username, $password);
					
					if (!empty($user))
					{	
						$this->getUser()->setAttribute('user', $user);
						$this->getUser()->setAuthenticated(true);
						$this->redirect($this->generateUrl('homepage'));
					}
					
					$this->errorMessage = 'Felaktigt <em>Använarnamn</em> eller <em>Lösenord</em>';
					return UserView::UNAUTHENTICATED;
				}

				return UserView::UNAUTHENTICATED;
			}
		}
	}

	/**
	 * Controller for "/registrera-konto"
	 */
	public function executeNew(sfWebRequest $request)
	{
		$this->errorMessage = null;
		
		if ($this->getUser()->isAuthenticated())
		{
			$this->redirect($this->generateUrl('homepage'));
		}
		
		if ($request->isMethod('post'))
		{
			$this->form = new UserForm();
			$this->form->bind($request->getParameter('user'));
			
			if ($this->form->isValid())
			{
				if (!UserPeer::checkIfUsernameExists($this->form->getValue('username')))
				{
					$newUser = new User();
					
					$newUser->setName($this->form->getValue('name'));
					$newUser->setEmail($this->form->getValue('email'));
					$newUser->setUsername($this->form->getValue('username'));
					$newUser->setPassword($this->form->getValue('password'));
					
					if ($newUser->validate())
					{
						$this->getUser()->setFlash('success', 'Ditt användarkonto har skapats');
						$newUser->save();
						
						$this->redirect($this->generateUrl('homepage'));
					}
					
					$this->getUser()->setFlash('error', 'Ditt användarkonto kunde inte sparas. 
						Kontakta administratören om promlemet inte försvinner.');
				}
				
				$this->errorMessage = 'Användarnamnet är upptaget. Välj ett annat.';
			}
		}
		else if ($request->isMethod('get'))
		{
			$this->form = new UserForm();
		}
	}
}
