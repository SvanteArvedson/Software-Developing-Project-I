<?php

/**
 * Incorrectanswer form base class.
 *
 * @package    webschool
 * @subpackage form
 * @author     Your name here
 */
class BaseIncorrectanswerForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'questionID' => new sfWidgetFormInputHidden(),
      'answerID'   => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'questionID' => new sfValidatorPropelChoice(array('model' => 'Question', 'column' => 'questionID', 'required' => false)),
      'answerID'   => new sfValidatorPropelChoice(array('model' => 'Answer', 'column' => 'answerID', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('incorrectanswer[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Incorrectanswer';
  }


}
