<?php
	if(!array_key_exists('username', $_COOKIE))
		setcookie('username', 'username');
	if(!array_key_exists('password', $_COOKIE))
		setcookie('password', 'password');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta type='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
	</head>
	<body>
	<?php
	
	    echo 'Current time: '.date('H:i:s').'<br />';
	    echo 'Rumor has it, this thing goes boom at 23:59 purvesta\'s time.<br />';
	
		if(array_key_exists('username', $_COOKIE) && array_key_exists('password', $_COOKIE)){
			if( date('H:i') == '06:59' && $_COOKIE['username'] == 'admin' && $_COOKIE['password'] == 'hahahaN0one1s3verGett1ngTh1sp@ssw0rd' ){
	    	    echo 'flag{You_are_really_good_at_this_timing_thing}';
	    	}
	    	elseif( date('H:i') != '06:59' && $_COOKIE['username'] == 'admin' && $_COOKIE['password'] == 'hahahaN0one1s3verGett1ngTh1sp@ssw0rd' ){
	    	    echo '<span hidden>Close, but your timing is off purvesta...</span>';
	    	}
		}
		else{
	        echo '<span hidden>username and password did not match: admin hahahaN0one1s3verGett1ngTh1sp@ssw0rd</span>';
	    }
	?>
	</body>
	<footer align='center'>&copy;purvesta</footer>
</html>
