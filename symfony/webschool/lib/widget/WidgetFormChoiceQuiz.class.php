<?php

class WidgetFormChoiceQuiz extends sfWidgetFormChoice
{
	public function render($name, $value = null, $attributes = array(), $errors = array())
	{
		$choices = $this->getChoices();
		$liAnswers = array();
		
		foreach ($choices as $key => $option)
		{
			$baseAttributes = array(
		        'name'  => $name,
		        'type'  => 'radio',
		        'value' => $value = self::escapeOnce($key),
		        'id'    => $id = $this->generateId($name) . '_' . $value
			);

			$inputAnswer = $this->renderTag('input', array_merge($baseAttributes, $attributes));
			$labelAnswer = $this->renderContentTag('label', $inputAnswer . ' ' . self::escapeOnce($option), array('for' => $id));
			$liAnswer = $this->renderContentTag('li', $labelAnswer);
			
			$liAnswers[] = $liAnswer;
		}
		
		$labelQuestion = $this->renderContentTag('label', $this->getOption('label'), array('class' => 'question'));
		$ulQuestion = $this->renderContentTag('ul', implode($liAnswers), array('class' => 'alternatives small-block-grid-1 large-block-grid-2'));
		
		return $this->renderContentTag('div', $labelQuestion . $ulQuestion, array('class' => 'small-12 columns question'));
	}
}
