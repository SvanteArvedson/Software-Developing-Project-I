<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Lesson filter form base class.
 *
 * @package    webschool
 * @subpackage filter
 * @author     Your name here
 */
class BaseLessonFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'text'      => new sfWidgetFormFilterInput(),
      'title'     => new sfWidgetFormFilterInput(),
      'quiz_list' => new sfWidgetFormPropelChoice(array('model' => 'Question', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'text'      => new sfValidatorPass(array('required' => false)),
      'title'     => new sfValidatorPass(array('required' => false)),
      'quiz_list' => new sfValidatorPropelChoice(array('model' => 'Question', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('lesson_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function addQuizListColumnCriteria(Criteria $criteria, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $criteria->addJoin(QuizPeer::LESSONID, LessonPeer::LESSONID);

    $value = array_pop($values);
    $criterion = $criteria->getNewCriterion(QuizPeer::QUESTIONID, $value);

    foreach ($values as $value)
    {
      $criterion->addOr($criteria->getNewCriterion(QuizPeer::QUESTIONID, $value));
    }

    $criteria->add($criterion);
  }

  public function getModelName()
  {
    return 'Lesson';
  }

  public function getFields()
  {
    return array(
      'lessonID'  => 'Number',
      'text'      => 'Text',
      'title'     => 'Text',
      'quiz_list' => 'ManyKey',
    );
  }
}
