<?php

// Adds content to the slots in "/../../templates/layout.php"
slot('title', 'Ensemble Coloris Webbskola - Sidan existerar inte');

slot('styles', use_stylesheet(null));

slot('navigation', get_partial('global/authenticatedNavigation', array('lessons' => $lessons)));

echo    '<div id="pagecontent" class="small-10 small-centered columns">
			<div class="small-12 large-7 columns">
				<h1>Sidan existerar inte</h1>
				<p>
					Sidan du efterfrågar existerar inte. Det är allt vi vet...
				</p>
			</div>
			<div class="large-5 columns hide-for-small">'
				. image_tag('Denise-Poncher-Vision-of-Death.jpg', 'alt_title="Denise Poncher knäböjer framför döden. Illustration från 1500-talet, Frankrike."') .
			'</div>
		</div>';