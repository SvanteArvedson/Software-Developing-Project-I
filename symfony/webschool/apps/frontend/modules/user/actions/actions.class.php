<?php

/**
 * user actions.
 *
 * @package    webschool
 * @subpackage user
 * @author     Svante Arvedson
 */
class userActions extends sfActions {

	/*
	 public function executeList(sfWebRequest $request)
	 {
	 $this->webschool_user_list = WebschoolUserPeer::doSelect(new Criteria());
	 }

	 public function executeShow(sfWebRequest $request)
	 {
	 $this->webschool_user = WebschoolUserPeer::retrieveByPk($request->getParameter('id'));
	 $this->forward404Unless($this->webschool_user);
	 }

	 public function executeNew(sfWebRequest $request)
	 {
	 $this->form = new WebschoolUserForm();
	 }

	 public function executeCreate(sfWebRequest $request)
	 {
	 $this->forward404Unless($request->isMethod('post'));

	 $this->form = new WebschoolUserForm();

	 $this->processForm($request, $this->form);

	 $this->setTemplate('new');
	 }

	 public function executeEdit(sfWebRequest $request)
	 {
	 $this->forward404Unless($webschool_user = WebschoolUserPeer::retrieveByPk($request->getParameter('id')), sprintf('Object webschool_user does not exist (%s).', $request->getParameter('id')));
	 $this->form = new WebschoolUserForm($webschool_user);
	 }

	 public function executeUpdate(sfWebRequest $request)
	 {
	 $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
	 $this->forward404Unless($webschool_user = WebschoolUserPeer::retrieveByPk($request->getParameter('id')), sprintf('Object webschool_user does not exist (%s).', $request->getParameter('id')));
	 $this->form = new WebschoolUserForm($webschool_user);

	 $this->processForm($request, $this->form);

	 $this->setTemplate('edit');
	 }

	 public function executeDelete(sfWebRequest $request)
	 {
	 $request->checkCSRFProtection();

	 $this->forward404Unless($webschool_user = WebschoolUserPeer::retrieveByPk($request->getParameter('id')), sprintf('Object webschool_user does not exist (%s).', $request->getParameter('id')));
	 $webschool_user->delete();

	 $this->redirect('user/index');
	 }

	 */

	public function executeIndex(sfWebRequest $request) {
		$this -> form = null;
		$this -> loginfailed = null;
		
		if ($request -> isMethod('get')) 
		{
			if ($this -> getUser() -> isAuthenticated())
			{
				$this -> username = $this -> getUser() -> getAttribute('username', 'Användare');
			}
			else
			{
				$this -> form = new LoginForm();
			}
		}
		else
		{
			if ($this -> getUser() -> isAuthenticated())
			{
				$this -> getUser() -> setAuthenticated(false);
				$this -> redirect($this -> generateUrl('homepage'));
			}
			else
			{
				$this -> form = new LoginForm();
				$this -> form -> bind($request->getParameter('login'));
				
				if ($this -> form -> isValid()) {
					$username = $this -> form -> getValue('user');
					$password = $this -> form -> getValue('pass');
					
					if (WebschoolUserPeer::checkIfUserExists($username, $password))
					{
						$this -> getUser() -> setAttribute('username', $this -> form -> getValue('user'));
						$this -> getUser() -> setAuthenticated(true);
						$this -> redirect($this -> generateUrl('homepage'));
					}
					
					$this -> loginfailed = 'Felaktigt använarnamn eller lösenord';
				}
			}
		}
	}
}
