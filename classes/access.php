<?php

/**
 * Class access
 * разрешение на редактирование
 */

class access {
	public function __construct() {
	}

	public static function access()
	{
		if (!empty($_GET['a']) && $_GET['a'] ==='y')
		{
			return TRUE;
		}else{
			return FALSE;
		}
	}
}
