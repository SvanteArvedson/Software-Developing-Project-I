Individuellt-mjukvaruutvecklingsprojekt
=======================================

## Innehåll

I katalogen *Individuellt-projekt-dokumentation* ligger följande:
* Vision
* Kravlista
* Iterationsplaner och rapporter
* Databasdokumentation
* Användningsfall
* Testfall
* Testrapporter
* Post Mortem/Projektrapport

I katalogen *Övrigt* ligger följande:
* Körinstruktioner
* Länk till demonstrationsvideo
* Referat Gästföreläsning 2014-04-29
* Bildspel till den muntliga presentationen

I katalogen *symfony* ligger följande
* Källkod

I katalogen *bilder-och-illustrationer-orginal* ligger följande:
* Alla bilder och grafiska element i orginal

## Viktiga anteckningar!
### Egenskrivna filer och autogenererade filer
Mapparna *symfony/data*, *symfony/doc*, *symfony/lib* och *symfony/licenses* och filerna i mappen *symfony* tillhör ramverket. I mappen *symfony/webschool* ligger min applikationsspecifika kod. 
#### Mappen *symfony/webschool/apps*
* I mappen *symfony/webschool/apps/frontend/config* är alla filerna automatgenererare men jag har modifierat dem
* I mappen *symfony/webschool/apps/frontend/i18n* är alla filerna automatgenererade
* I mappen *symfony/webschool/apps/frontend/lib/view* har jag skrivit alla filerna själv
* I mappen *symfony/webschool/apps/frontend/modules* har jag skrivit alla filerna själv
* I mappen *symfony/webschool/apps/frontend/templates* har jag skrivit alla filerna själv
#### Mappen *symfony/webschool/cache*
I den här mappen är alla filerna automatgenererade.
#### Mappen *symfony/webschool/config*
I den här mappen är alla filerna automatgenereade men jag har modifierat dem.
#### Mappen *symfony/webschool/lib*
* I mappen *symfony/webschool/lib/filter* är alla filerna automatgenererade
* I mappen *symfony/webschool/lib/form* har jag skrivit följande filer själv (resten är automatgenererade):
	* LessonQuizForm.php
	* LoginForm.php
	* UserDeleteForm.php
	* UserEditForm.php
	* UserEditPasswordForm.php
* I mappen *symfony/webschool/lib/model* har jag skrvit följande filer själv (resten är automatgenererade):
	* LessonQuiz.php
	* QuizQustion.php
	* UserResult.php
* I mappen *symfony/webschool/lib/test* har jag skrivit alla filerna själv
* I mappen *symfony/webschool/lib/widget* har jag skrivit alla filerna själv
* Filen *symfony/webschool/lib/model/Webschool.class.php* har jag skrivit själv
#### Mappen *symfony/webschool/log*
I den här mappen är alla filerna automatgenererade.
#### Mappen *symfony/webschool/test*
* I mappen *symfony/webschool/test/bootstrap* har jag skrvit följande filer själv (resten är automatgenererade):
	* Propel.php
* I mappen *symfony/webschool/test/fixtures* har jag skrivit alla filerna själv
* I mappen *symfony/webschool/test/functional* har jag skrivit alla filerna själv
* I mappen *symfony/webschool/test/unit* har jag skrivit alla filerna själv
#### Mappen *symfony/webschool/web*
* I mappen *symfony/webschool/web* har jag **INTE** skrvit följande filer själv (resten har jag skrivit själv):
	* .htaccess
	* frontend_dev.php
	* index.php
* I mappen *symfony/webschool/web/css* har jag **INTE** skrvit följande filer själv (resten har jag skrivit själv):
	* foundation.css
	* normalize.css
* I mappen *symfony/webschool/web/images* har jag skapat alla filerna själv
* I mappen *symfony/webschool/web/js* har jag **INTE** skrivit några filer själv
