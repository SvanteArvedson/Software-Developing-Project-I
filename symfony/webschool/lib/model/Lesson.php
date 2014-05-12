<?php

class Lesson extends BaseLesson
{
	public function getTitleSlug()
	{
		return Webschool::slugify($this->getTitle());
	}
}