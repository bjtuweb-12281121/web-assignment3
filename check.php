<?php

	//是否填满
	function is_filled($form_vars)
	{
		foreach($form_vars as $key => $value)
		{
			if(!(isset($key)) || ($value == ''))
			{
				return false;
			}
		}
		return true;
	}
	
?>