<?php

class LessonQuizFrom extends sfForm 
{
	/**
	 * @var LessonQuiz an instance of LessonQuiz
	 */
	private $quiz;
	
	/**
	 * Constructor for LessonQuizFrom
	 * 
	 * @oaram LessonQuiz a lessonQuiz object
	 */
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
		$this -> widgetSchema->setNameFormat('quiz[%s]');

		$count = 1;
		foreach ($this->quiz->getQuestions() as $question) {
			
			$name = 'question' . $count;
			$choices = array();
			$ids = array();
			
			foreach ($question->getAnswers() as $choice) {
				$choices[] = $choice->getText();
				$ids[] = $choice->getAnswerid();
			}

			$this->widgetSchema[$name] = new WidgetFormChoiceQuiz(
				array('expanded' => true, 
					'multiple' => false,
					'choices' => $choices,
					'label' => $question->getQuestion()->getText(),
					'values' => $ids)
			);
			
			$count += 1;
		}
	}
	
	/**
	 * @return LessonQuiz quiz
	 */
	public function getQuiz()
	{
		return $this->quiz;
	}
}
