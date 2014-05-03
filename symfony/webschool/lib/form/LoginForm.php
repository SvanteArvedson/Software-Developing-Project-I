<?php

class LoginForm extends sfForm 
{
	/**
	 * Configure the login form
	 */
	public function configure()
	{
		$this -> setWidgets(array(
			'user' => new sfWidgetFormInput(),
			'pass' => new sfWidgetFormInputPassword(),
		));
		
		$this -> widgetSchema->setNameFormat('login[%s]');
		
		$this -> setValidators(array(
			'user' => new sfValidatorString(
					array('max_length' => 25, 'required' => true, 'trim' => true), 
					array('required' => 'Får ej lämnas tomt', 'max_length' => 'Max %max_length% tecken')),
			'pass' => new sfValidatorString(
					array('max_length' => 8, 'min_length' => 8), 
					array('required' => 'Får ej lämnas tomt', 
						'max_length' => 'Måste %max_length% tecken', 
						'min_length' => 'Måste %max_length% tecken'))
		));
	}
}
