<?php

// app/models/Game.php

class Member extends Eloquent
{
	public  $table = 'members';

	var $filled = array("username","email","password");

}