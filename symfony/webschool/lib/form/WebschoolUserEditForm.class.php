<?php

/**
 * WebschoolUser form.
 *
 * @package    webschool
 * @subpackage form
 * @author     Your name here
 */
class WebschoolUserEditForm extends BaseWebschoolUserForm
{
	public function configure()
	{
		unset(
			$this['pass'],
			$this['passAgain']
		);
		
		$this->widgetSchema['passOld'] = new sfWidgetFormInputPassword(array('always_render_empty' => true));
		
		$this->validatorSchema['passOld'] = new sfValidatorString(
			array('max_length' => 8, 'min_length' => 8, 'required' => false),
			array('max_length' => 'Måste vara %max_length% tecken', 
				'min_length' => 'Måste vara %min_length% tecken')
		);
	}
}
