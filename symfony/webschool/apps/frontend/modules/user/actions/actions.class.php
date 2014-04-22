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
  public function executeIndex(sfWebRequest $request)
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

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $webschool_user = $form->save();

      $this->redirect('user/edit?id='.$webschool_user->getId());
    }
  }
}
