<?php

class Webschool
{
	/**
	 * Replace all non ASCII characters with "-"
	 *
	 * @return string $text
	 */
	static public function slugify($text)
	{
		$text = preg_replace(array('/å/i', '/ä/i', '/ö/i'), array('a', 'a', 'o'), $text);
		$text = preg_replace('/\W+/', '-', $text);
		
		$text = strtolower(trim($text, '-'));
		
		if (empty($text))
		{
			return 'ingen-titel';
		}
		
		return $text;
	}
}
