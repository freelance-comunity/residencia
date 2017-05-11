<?php

function currentUser()
{
	return auth()->user();
}

if (!function_exists('ratingColor')) {
	function ratingColor($id)  {
		$colors = ['teal','yellow','blue','green','purple','teal','yellow','blue','green','purple','teal','yellow','blue','green','purple','teal','yellow','blue','green','purple','teal','yellow','blue','green','purple','teal','yellow','blue','green','purple','teal','yellow','blue','green','purple','teal','yellow','blue','green','purple','teal','yellow','blue','green','purple','teal','yellow','blue','green','purple','teal','yellow','blue','green','purple','teal','yellow','blue','green','purple','teal','yellow','blue','green','purple','teal','yellow','blue','green','purple','teal','yellow','blue','green','purple','teal','yellow','blue','green','purple','teal','yellow','blue','green','purple'];
		return $colors[$id -1];
	}
}