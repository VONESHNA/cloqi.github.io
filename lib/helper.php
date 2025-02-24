<?php
class Helper
{
	 public static function precentage($actual, $sell)
	{
		$r=round(100-(($sell/$actual)*100));
		return $r;
	}

		 public static function yousave($actual, $sell)
	{
		$r=$actual-$sell;
		return $r;
	}

				 public static function getusername($data)
		{
			$r=$data['fullname'];
			return $r;
		}
	
			 public static function getemail($data)
		{
			$r=$data['email'];
			return $r;
		}
}
?>