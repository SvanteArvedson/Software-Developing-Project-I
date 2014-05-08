<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Answer filter form base class.
 *
 * @package    webschool
 * @subpackage filter
 * @author     Your name here
 */
class BaseAnswerFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'text'                 => new sfWidgetFormFilterInput(),
      'incorrectanswer_list' => new sfWidgetFormPropelChoice(array('model' => 'Question', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'text'                 => new sfValidatorPass(array('required' => false)),
      'incorrectanswer_list' => new sfValidatorPropelChoice(array('model' => 'Question', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('answer_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function addIncorrectanswerListColumnCriteria(Criteria $criteria, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $criteria->addJoin(IncorrectanswerPeer::ANSWERID, AnswerPeer::ANSWERID);

    $value = array_pop($values);
    $criterion = $criteria->getNewCriterion(IncorrectanswerPeer::QUESTIONID, $value);

    foreach ($values as $value)
    {
      $criterion->addOr($criteria->getNewCriterion(IncorrectanswerPeer::QUESTIONID, $value));
    }

    $criteria->add($criterion);
  }

  public function getModelName()
  {
    return 'Answer';
  }

  public function getFields()
  {
    return array(
      'answerID'             => 'Number',
      'text'                 => 'Text',
      'incorrectanswer_list' => 'ManyKey',
    );
  }
}
