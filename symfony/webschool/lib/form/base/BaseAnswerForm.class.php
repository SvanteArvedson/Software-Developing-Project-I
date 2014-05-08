<?php

/**
 * Answer form base class.
 *
 * @package    webschool
 * @subpackage form
 * @author     Your name here
 */
class BaseAnswerForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'answerID'             => new sfWidgetFormInputHidden(),
      'text'                 => new sfWidgetFormInput(),
      'incorrectanswer_list' => new sfWidgetFormPropelChoiceMany(array('model' => 'Question')),
    ));

    $this->setValidators(array(
      'answerID'             => new sfValidatorPropelChoice(array('model' => 'Answer', 'column' => 'answerID', 'required' => false)),
      'text'                 => new sfValidatorString(array('max_length' => 255)),
      'incorrectanswer_list' => new sfValidatorPropelChoiceMany(array('model' => 'Question', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('answer[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Answer';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['incorrectanswer_list']))
    {
      $values = array();
      foreach ($this->object->getIncorrectanswers() as $obj)
      {
        $values[] = $obj->getQuestionid();
      }

      $this->setDefault('incorrectanswer_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveIncorrectanswerList($con);
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
    $c->add(IncorrectanswerPeer::ANSWERID, $this->object->getPrimaryKey());
    IncorrectanswerPeer::doDelete($c, $con);

    $values = $this->getValue('incorrectanswer_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new Incorrectanswer();
        $obj->setAnswerid($this->object->getPrimaryKey());
        $obj->setQuestionid($value);
        $obj->save();
      }
    }
  }

}
