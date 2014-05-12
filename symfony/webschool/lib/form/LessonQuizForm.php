<?php

class LessonQuizFrom extends sfForm 
{
	private $quiz;
	
	public function __construct(LessonQuiz $lessonQuiz)
	{
		$this->quiz = $lessonQuiz;
		
		parent::__construct();
	}
	
	/**
	 * Configure the quiz form
	 */
	public function configure()
	{
		$count = 1;

		$this -> widgetSchema->setNameFormat('quiz[%s]');

		foreach ($this->quiz->getQuestions() as $question) {
			
			$name = 'question' . $count;
			$choices = array();
			foreach ($question->getAnswers() as $choice) {
				$choices[] = $choice->getText();
			}
			
			$this->widgetSchema[$name] = new WidgetFormChoiceQuiz(
				array('expanded' => true, 
					'multiple' => false,
					'choices' => $choices,
					'label' => $question->getQuestion()->getText())
			);

//			$this->widgetSchema[$name]->setLabel($question->getQuestion()->getText());

			$this->validatorSchema[$name] = new sfValidatorChoice(
				array('choices' => $choices),
				array('required' => 'Du måste välja ett alternativ'));

			$count += 1;
		}
	}
}
