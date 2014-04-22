<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * WebschoolUser filter form base class.
 *
 * @package    webschool
 * @subpackage filter
 * @author     Your name here
 */
class BaseWebschoolUserFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'username' => new sfWidgetFormFilterInput(),
      'password' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'username' => new sfValidatorPass(array('required' => false)),
      'password' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('webschool_user_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'WebschoolUser';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'username' => 'Text',
      'password' => 'Text',
    );
  }
}
