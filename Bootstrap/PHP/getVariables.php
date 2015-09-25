
<!doctype html>
<html>
<head>
    <title>GET Variables</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
</head>

<body>

<?php

	if ($_GET["name"]) {
		
		echo "Your name is " .$_GET['name'];

	}



?>


    <form>
        
        <label for="name">Name</label>
        <input name="name" type="text" />

        <input type="submit" />

    </form>


</body>
</html>
