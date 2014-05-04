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
      'user' 	 => new sfWidgetFormInput(),
      'pass'	 => new sfWidgetFormInputPassword(),
      'passAgain'=> new sfWidgetFormInputPassword(),
      'name'     => new sfWidgetFormInput(),
      'email'    => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorPropelChoice(
      					array('model' => 'WebschoolUser', 
      						'column' => 'id', 'required' => false)),
      'user'  	 => new sfValidatorString(
      					array('max_length' => 25), 
      					array('required' => 'Får ej lämnas tomt', 
      						'max_length' => 'Max %max_length% tecken')),
      'pass' 	 => new sfValidatorString(
						array('max_length' => 8, 'min_length' => 8), 
						array('required' => 'Får ej lämnas tomt', 
							'max_length' => 'Måste vara %max_length% tecken', 
							'min_length' => 'Måste vara %min_length% tecken')),
	  'passAgain'=> new sfValidatorString(
						array('max_length' => 8, 'min_length' => 8), 
						array('required' => 'Får ej lämnas tomt', 
							'max_length' => 'Måste vara %max_length% tecken', 
							'min_length' => 'Måste vara %min_length% tecken')),
      'name'     => new sfValidatorString(
      					array('max_length' => 40), 
      					array('required' => 'Får ej lämnas tomt', 
      						'max_length' => 'Max %max_length% tecken')),
      'email'    => new sfValidatorEmail(
      					array('max_length' => 50, 'required' => true), 
      					array('required' => 'Får ej lämnas tomt', 'invalid' => 'Ogiltig epostadress', 
      						'max_length' => 'Max %max_length% tecken'))
    ));

	$this->validatorSchema->setPostValidator(
		new sfValidatorSchemaCompare('pass', sfValidatorSchemaCompare::EQUAL, 'passAgain',
			array('throw_global_error' => true),
			array('invalid' => 'Lösenord och Repetera lösenord var olika')
		)
	);

    $this->widgetSchema->setNameFormat('webschool_user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'WebschoolUser';
  }
}
