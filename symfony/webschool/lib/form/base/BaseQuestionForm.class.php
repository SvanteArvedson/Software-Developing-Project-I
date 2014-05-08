<?php

/**
 * Question form base class.
 *
 * @package    webschool
 * @subpackage form
 * @author     Your name here
 */
class BaseQuestionForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'questionID'           => new sfWidgetFormInputHidden(),
      'text'                 => new sfWidgetFormInput(),
      'answerID'             => new sfWidgetFormPropelChoice(array('model' => 'Answer', 'add_empty' => false)),
      'incorrectanswer_list' => new sfWidgetFormPropelChoiceMany(array('model' => 'Answer')),
      'quiz_list'            => new sfWidgetFormPropelChoiceMany(array('model' => 'Lesson')),
    ));

    $this->setValidators(array(
      'questionID'           => new sfValidatorPropelChoice(array('model' => 'Question', 'column' => 'questionID', 'required' => false)),
      'text'                 => new sfValidatorString(array('max_length' => 255)),
      'answerID'             => new sfValidatorPropelChoice(array('model' => 'Answer', 'column' => 'answerID')),
      'incorrectanswer_list' => new sfValidatorPropelChoiceMany(array('model' => 'Answer', 'required' => false)),
      'quiz_list'            => new sfValidatorPropelChoiceMany(array('model' => 'Lesson', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('question[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Question';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['incorrectanswer_list']))
    {
      $values = array();
      foreach ($this->object->getIncorrectanswers() as $obj)
      {
        $values[] = $obj->getAnswerid();
      }

      $this->setDefault('incorrectanswer_list', $values);
    }

    if (isset($this->widgetSchema['quiz_list']))
    {
      $values = array();
      foreach ($this->object->getQuizs() as $obj)
      {
        $values[] = $obj->getLessonid();
      }

      $this->setDefault('quiz_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveIncorrectanswerList($con);
    $this->saveQuizList($con);
  }

  public function saveIncorrectanswerList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['incorrectanswer_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (is_null($con))
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(IncorrectanswerPeer::QUESTIONID, $this->object->getPrimaryKey());
    IncorrectanswerPeer::doDelete($c, $con);

    $values = $this->getValue('incorrectanswer_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new Incorrectanswer();
        $obj->setQuestionid($this->object->getPrimaryKey());
        $obj->setAnswerid($value);
        $obj->save();
      }
    }
  }

  public function saveQuizList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['quiz_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (is_null($con))
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(QuizPeer::QUESTIONID, $this->object->getPrimaryKey());
    QuizPeer::doDelete($c, $con);

    $values = $this->getValue('quiz_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new Quiz();
        $obj->setQuestionid($this->object->getPrimaryKey());
        $obj->setLessonid($value);
        $obj->save();
      }
    }
  }

}
