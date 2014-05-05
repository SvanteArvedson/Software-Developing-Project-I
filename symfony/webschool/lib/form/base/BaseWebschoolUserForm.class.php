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
      					array('required' => '<em>Användarnamn</em> får ej lämnas tomt', 
      						'max_length' => '<em>Användarnamn</em> får vara max %max_length% tecken')),
      'pass' 	 => new sfValidatorString(
						array('max_length' => 8, 'min_length' => 8), 
						array('required' => '<em>Lösenord</em> får ej lämnas tomt', 
							'max_length' => '<em>Lösenord</em> måste vara %max_length% tecken', 
							'min_length' => '<em>Lösenord</em> måste vara %min_length% tecken')),
	  'passAgain'=> new sfValidatorString(
						array('max_length' => 8, 'min_length' => 8), 
						array('required' => '<em>Repetera lösenord</em> får ej lämnas tomt', 
							'max_length' => '<em>Repetera lösenord</em> måste vara %max_length% tecken', 
							'min_length' => '<em>Repetera lösenord</em> måste vara %min_length% tecken')),
      'name'     => new sfValidatorString(
      					array('max_length' => 40), 
      					array('required' => '<em>Namn</em> får ej lämnas tomt', 
      						'max_length' => '<em>Namn</em> får vara max %max_length% tecken')),
      'email'    => new sfValidatorEmail(
      					array('max_length' => 50, 'required' => true), 
      					array('required' => '<em>Email</em> får ej lämnas tomt', 
      						'invalid' 	 => '<em>Email</em> ogiltig', 
      						'max_length' => '<em>Email</em> får vara max %max_length% tecken'))
    ));

	$this->validatorSchema->setPostValidator(
		new sfValidatorSchemaCompare('pass', sfValidatorSchemaCompare::EQUAL, 'passAgain',
			array('throw_global_error' => true),
			array('invalid' => '<em>Lösenord</em> och <em>Repetera lösenord</em> måste vara samma')
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
