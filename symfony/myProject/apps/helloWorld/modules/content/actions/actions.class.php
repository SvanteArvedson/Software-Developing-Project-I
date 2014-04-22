<?php

/**
 * content actions.
 *
 * @package    myProject
 * @subpackage content
 * @author     Svante Arvedson
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class contentActions extends sfActions
{
  /**
   * Action method for content/show
   */
  public function executeShow(sfWebRequest $request)
  {
  	$now = time();
  	$this->time = date("Y-m-d H:i:s", $now);
  }

  /**
   * Action method for content/update
   */
  public function executeUpdate(sfWebRequest $request)
  {
  	$this->name = $request->getParameter('name');
  }
}
