<?php

/**
 * WebschoolUser form base class.
 *
 * @package    webschool
 * @subpackage form
 * @author     Your name here
 */
class BaseWebschoolUserForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'username' => new sfWidgetFormInput(),
      'password' => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorPropelChoice(array('model' => 'WebschoolUser', 'column' => 'id', 'required' => false)),
      'username' => new sfValidatorString(array('max_length' => 25)),
      'password' => new sfValidatorString(array('max_length' => 8)),
    ));

    $this->widgetSchema->setNameFormat('webschool_user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'WebschoolUser';
  }


}
