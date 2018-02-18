<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Email Test from localhost</title>
</head>

<body>

	<?php
		
		$message = "The code is: " . 1234;
		$headers = "From: pratik.anwar@gmail.com" . "\r\n";;
		
		mail("almamunmistcse@gmail.com","Testing",$message,$headers);
		
		echo "Testing mail<bt/>";
		
	?>

</body>
</html>