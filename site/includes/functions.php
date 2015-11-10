<?php

		function redirect_to( $location = NULL ) {
			if ($location != NULL) {
				header("Location: {$location}");
				exit;
			}
		}
		

		
		
		function ReportErrors()
		{			
			$err_count = count($_SESSION['err']);
			if($err_count > 0)
			{
				$errors = implode(" ",$_SESSION['err']);
				$err = '<div class="span12 alert alert-error"><ul>'.$errors.'</ul></div>';
			}
			else
				$err = '';
			//Reset Errors here
			$_SESSION['err'] = array();
			
			return $err;		
		}
		
		
		
		
		function random($length, $chars = '')
		{
			if (!$chars) {
				$chars = implode(range('a','z'));
				$chars .= implode(range('0','9'));
			}
			$shuffled = str_shuffle($chars);
			return substr($shuffled, 0, $length);
		}
		
		function randomkey()
		{
			return random(4).''.random(4).''.random(4).''.random(4);
		}
		