<?php

/**
 * Extends the symfony sfView with some custom elements.
 */

abstract class UserView extends sfView
{
	const AUTHENTICATED = 'Authenticated';
	
	const UNAUTHENTICATED = 'Unauthenticated';
}
