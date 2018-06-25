<?php


namespace GurSergey;

class MathVerify
{
	public function VerifyString($str)
	{
		if(strlen($str) == 0) 
			return false;
		if(substr_count($str, "(")==substr_count($str, ")"))
			return true;
		else
			return false;
	}
}