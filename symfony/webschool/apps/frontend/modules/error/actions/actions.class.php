<?php

/**
 * error actions.
 *
 * @package    webschool
 * @subpackage error
 * @author     Svante Arvedson
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class errorActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeError404(sfWebRequest $request)
  {
  	$this->lessons = LessonPeer::doSelect(new Criteria());
  }
}
