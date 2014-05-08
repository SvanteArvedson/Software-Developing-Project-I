<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Question filter form base class.
 *
 * @package    webschool
 * @subpackage filter
 * @author     Your name here
 */
class BaseQuestionFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'text'                 => new sfWidgetFormFilterInput(),
      'answerID'             => new sfWidgetFormPropelChoice(array('model' => 'Answer', 'add_empty' => true)),
      'incorrectanswer_list' => new sfWidgetFormPropelChoice(array('model' => 'Answer', 'add_empty' => true)),
      'quiz_list'            => new sfWidgetFormPropelChoice(array('model' => 'Lesson', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'text'                 => new sfValidatorPass(array('required' => false)),
      'answerID'             => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Answer', 'column' => 'answerID')),
      'incorrectanswer_list' => new sfValidatorPropelChoice(array('model' => 'Answer', 'required' => false)),
      'quiz_list'            => new sfValidatorPropelChoice(array('model' => 'Lesson', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('question_filters[%s]');

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

    $criteria->addJoin(IncorrectanswerPeer::QUESTIONID, QuestionPeer::QUESTIONID);

    $value = array_pop($values);
    $criterion = $criteria->getNewCriterion(IncorrectanswerPeer::ANSWERID, $value);

    foreach ($values as $value)
    {
      $criterion->addOr($criteria->getNewCriterion(IncorrectanswerPeer::ANSWERID, $value));
    }

    $criteria->add($criterion);
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

    $criteria->addJoin(QuizPeer::QUESTIONID, QuestionPeer::QUESTIONID);

    $value = array_pop($values);
    $criterion = $criteria->getNewCriterion(QuizPeer::LESSONID, $value);

    foreach ($values as $value)
    {
      $criterion->addOr($criteria->getNewCriterion(QuizPeer::LESSONID, $value));
    }

    $criteria->add($criterion);
  }

  public function getModelName()
  {
    return 'Question';
  }

  public function getFields()
  {
    return array(
      'questionID'           => 'Number',
      'text'                 => 'Text',
      'answerID'             => 'ForeignKey',
      'incorrectanswer_list' => 'ManyKey',
      'quiz_list'            => 'ManyKey',
    );
  }
}
