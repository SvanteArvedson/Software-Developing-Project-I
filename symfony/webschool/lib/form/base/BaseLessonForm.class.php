<?php

/**
 * Lesson form base class.
 *
 * @package    webschool
 * @subpackage form
 * @author     Your name here
 */
class BaseLessonForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'lessonID'  => new sfWidgetFormInputHidden(),
      'text'      => new sfWidgetFormTextarea(),
      'quiz_list' => new sfWidgetFormPropelChoiceMany(array('model' => 'Question')),
    ));

    $this->setValidators(array(
      'lessonID'  => new sfValidatorPropelChoice(array('model' => 'Lesson', 'column' => 'lessonID', 'required' => false)),
      'text'      => new sfValidatorString(),
      'quiz_list' => new sfValidatorPropelChoiceMany(array('model' => 'Question', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('lesson[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Lesson';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['quiz_list']))
    {
      $values = array();
      foreach ($this->object->getQuizs() as $obj)
      {
        $values[] = $obj->getQuestionid();
      }

      $this->setDefault('quiz_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveQuizList($con);
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
    $c->add(QuizPeer::LESSONID, $this->object->getPrimaryKey());
    QuizPeer::doDelete($c, $con);

    $values = $this->getValue('quiz_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new Quiz();
        $obj->setLessonid($this->object->getPrimaryKey());
        $obj->setQuestionid($value);
        $obj->save();
      }
    }
  }

}
