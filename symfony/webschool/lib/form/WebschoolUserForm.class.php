<?php

/**
 * WebschoolUser form.
 *
 * @package    webschool
 * @subpackage form
 * @author     Your name here
 */
class WebschoolUserForm extends BaseWebschoolUserForm
{
	public function configure()
	{
		$this->validatorSchema['email'] = new sfValidatorAnd(array(
			$this->validatorSchema['email'], 
			new sfValidatorEmail()), array(), array('required' => 'Får ej lämnas tomt', 
				'invalid' => 'Ogiltig epostadress')
		);
		
		$this->widgetSchema['passAgain'] = new sfWidgetFormInputPassword();
		
		$this->validatorSchema['passAgain'] = new sfValidatorString(
			array('max_length' => 8, 'min_length' => 8),
			array('required' => 'Får ej lämnas tomt', 'max_length' => 'Måste vara %max_length% tecken', 
				'min_length' => 'Måste vara %min_length% tecken')
		);
				
		$this->validatorSchema->setPostValidator(
			new sfValidatorSchemaCompare('pass', sfValidatorSchemaCompare::EQUAL, 'passAgain',
				array('throw_global_error' => true),
				array('invalid' => 'Lösenord och Repetera lösenord var inte lika')
			)
		);
	}
}
