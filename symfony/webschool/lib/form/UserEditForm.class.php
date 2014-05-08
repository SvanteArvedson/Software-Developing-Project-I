<?php

/**
 * WebschoolUser form.
 *
 * @package    webschool
 * @subpackage form
 * @author     Your name here
 */
class UserEditForm extends BaseUserForm
{
	public function configure()
	{
		unset(
			$this['password'],
			$this['passwordAgain']
		);
		
		$this->widgetSchema['passwordOld'] = new sfWidgetFormInputPassword(array('always_render_empty' => true));
		
		$this->validatorSchema['passwordOld'] = new sfValidatorString(
			array('max_length' => 8, 'min_length' => 8, 'required' => false),
			array('max_length' 	=> '<em>Lösenord</em> måste vara %max_length% tecken', 
				'min_length' 	=> '<em>Lösenord</em> måste vara %min_length% tecken')
		);
	}
}
