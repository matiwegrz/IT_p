<?php
session_start();
?>


<!DOCTYPE HTML>
<html lang="eng">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title>Arduino weather station</title>
	
	<meta name="description" content="Arduino weather station" />
	<meta name="keywords" content="Arduino, weather, station" />
	
	<link rel="stylesheet" href="style.css" type="text/css"/>
	
	<! Font Lato from google fonts>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
	
	<!fontello>
	<link rel="stylesheet" href="css/fontello.css" type="text/css"/>
	
	
	
</head>

<body>
	
	
	
	<div id="container">
	
		<div ID="heading">
			<h1 class="heading">HOME WEATHER STATION
			<i class="icon-sun"></i>
			</h1>
			
		</div>
	<!Login to site>
	<form action="logging.php" method="post">
		Login:<br/><input type="text" name="login" /> <br/>
		Password: <br/><input type="password" name="pass"/><br/><br/>
		<input type="submit"/>
		
	</form>
	
	<?php
	echo $_SESSION['err'];
	?>
	
	</div>

</body>

</html>