<?php

require_once(dirname(__FILE__) . '/../bootstrap/Propel.php');

$test = new lime_test(5, new lime_output_color());

$test->is(Webschool::slugify('Renässansens polyfoni'), 'renassansens-polyfoni', '::slugify() - Gör alla bokstäver till gemener och hanterar svenska tecken');
$test->is(Webschool::slugify('    Renässansens polyfoni'), 'renassansens-polyfoni', '::slugify() - Tar bort blanksteg i början av strängen');
$test->is(Webschool::slugify('Renässansens polyfoni    '), 'renassansens-polyfoni', '::slugify() - Tar bort blanksteg i slutet av strängen');
$test->is(Webschool::slugify('Renässansens    polyfoni'), 'renassansens-polyfoni', '::slugify() - Tar bort blanksteg i mitten av strängen');
$test->is(Webschool::slugify(''), 'ingen-titel', '::slugify() - Hanterar tomsträngar');