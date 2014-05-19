<?php

class WidgetFormChoiceQuiz extends sfWidgetFormChoice
{
	/**
	 * @var integer
	 */
	private $correctAnswer = -1;
	
	/**
	 * @var integer
	 */
	private $givenAnswer = -1;
	
	/**
	 * @var boolean
	 */
	private $isResult = false;
	
	/**
	 * Constructor method for WidgetFormChoiceQuiz
	 */
	public function __construct($options = array(), $attributes = array())
	{
		// Adds a custom option
		$this->addOption('values', null);
		
		parent::__construct($options, $attributes);
	}
	
	/**
	 * Gets the values in the Values option
	 * 
	 * @return array
	 */
	public function getValues()
    {
    	$values = $this->getOption('values');
      	if ($values instanceof sfCallable)
      	{
        	$values = $values->call();
      	}

      	return $values;
    }
	
	/**
	 * Renders the widget as HTML
	 * 
	 * @return string
	 */
	public function render($name, $value = null, $attributes = array(), $errors = array())
	{
		$choices = $this->getChoices();
		$values = $this->getValues();
		
		$liAnswers = $this->renderLiTags($name, $choices, $values, $attributes);
		
		$labelQuestion = $this->renderContentTag('label', $this->getOption('label'), array('class' => 'question'));
		$ulQuestion = $this->renderContentTag('ul', implode($liAnswers), array('class' => 'alternatives small-block-grid-1 large-block-grid-2'));
		
		return $this->renderContentTag('div', $labelQuestion . $ulQuestion, array('class' => 'small-12 columns question'));
	}
	
	/**
	 * Sets the variable $this->correctAnswer
	 */
	public function setCorrectAnswer($correctAnswer)
	{
		$this->correctAnswer = $correctAnswer;
	}
	
	/**
	 * Sets the variable $this->givenAnswer
	 */
	public function setGivenAnswer($givenAnswer)
	{
		$this->givenAnswer = $givenAnswer;
	}
	
	/**
	 * Sets the variable $this->isResult
	 */
	public function setIsResult($isResult)
	{
		$this->isResult = $isResult;
	}
	
	/**
	 * Renders the li-tags in for the widget HTML
	 * 
	 * @return array
	 */
	private function renderLiTags($name, $choices, $values, $attributes)
	{
		$liAnswers = array();
		
		foreach ($choices as $key => $option)
		{
			$baseAttributes = array(
		        'name'  => $name,
		        'type'  => 'radio',
		        'value' => $inputValue = $values[$key],
		        'id'    => $id = $this->generateId($name) . '_' . $inputValue
			);
	
			$inputAnswer = $this->renderTag('input', array_merge($baseAttributes, $attributes));
			
			// If isResult == true, widget renders a quiz-result
			if ($this->isResult == true)
			{	
				$labelAttributes = array('for' => $id);
				if ($this->givenAnswer == $inputValue)
				{
					$labelAttributes['class'] = 'givenAnswer';
				}
				if ($this->correctAnswer === $inputValue)
				{
					$labelAttributes['class'] = 'correct'; 
				}
				$labelAnswer = $this->renderContentTag('label', $inputAnswer . ' ' . self::escapeOnce($option), $labelAttributes);
			}
			else
			{
				$labelAnswer = $this->renderContentTag('label', $inputAnswer . ' ' . self::escapeOnce($option), array('for' => $id));
			}
			
			$liAnswer = $this->renderContentTag('li', $labelAnswer);
			$liAnswers[] = $liAnswer;
		}
		
		return $liAnswers;
	}
}
