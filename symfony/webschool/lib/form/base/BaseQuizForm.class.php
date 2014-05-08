<?php

/**
 * Quiz form base class.
 *
 * @package    webschool
 * @subpackage form
 * @author     Your name here
 */
class BaseQuizForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'lessonID'   => new sfWidgetFormInputHidden(),
      'questionID' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'lessonID'   => new sfValidatorPropelChoice(array('model' => 'Lesson', 'column' => 'lessonID', 'required' => false)),
      'questionID' => new sfValidatorPropelChoice(array('model' => 'Question', 'column' => 'questionID', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('quiz[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Quiz';
  }


}
