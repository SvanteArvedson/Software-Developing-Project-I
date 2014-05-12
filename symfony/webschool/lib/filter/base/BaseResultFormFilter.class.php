<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Result filter form base class.
 *
 * @package    webschool
 * @subpackage filter
 * @author     Your name here
 */
class BaseResultFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'lessonID'   => new sfWidgetFormPropelChoice(array('model' => 'Lesson', 'add_empty' => true)),
      'userID'     => new sfWidgetFormPropelChoice(array('model' => 'User', 'add_empty' => true)),
      'score'      => new sfWidgetFormFilterInput(),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'lessonID'   => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Lesson', 'column' => 'lessonID')),
      'userID'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'User', 'column' => 'userID')),
      'score'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('result_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Result';
  }

  public function getFields()
  {
    return array(
      'resultID'   => 'Number',
      'lessonID'   => 'ForeignKey',
      'userID'     => 'ForeignKey',
      'score'      => 'Number',
      'created_at' => 'Date',
    );
  }
}
