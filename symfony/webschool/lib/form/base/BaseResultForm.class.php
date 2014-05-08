<?php

/**
 * Result form base class.
 *
 * @package    webschool
 * @subpackage form
 * @author     Your name here
 */
class BaseResultForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'resultID' => new sfWidgetFormInputHidden(),
      'lessonID' => new sfWidgetFormPropelChoice(array('model' => 'Lesson', 'add_empty' => false)),
      'userID'   => new sfWidgetFormPropelChoice(array('model' => 'User', 'add_empty' => false)),
      'score'    => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'resultID' => new sfValidatorPropelChoice(array('model' => 'Result', 'column' => 'resultID', 'required' => false)),
      'lessonID' => new sfValidatorPropelChoice(array('model' => 'Lesson', 'column' => 'lessonID')),
      'userID'   => new sfValidatorPropelChoice(array('model' => 'User', 'column' => 'userID')),
      'score'    => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('result[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Result';
  }


}
