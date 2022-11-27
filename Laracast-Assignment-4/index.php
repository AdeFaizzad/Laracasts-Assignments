<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP and HTML</title>
</head>
<body>
    <h1>
        <?php

        // Assignment #4
	    // PHP and HTML
	    // Echo a sentence onto the page, while fetching a URL parameters from the address bar.

        //    echo "Hello " . $LastName = $_GET['LName'];
           echo "Hello " . htmlspecialchars($_GET['CName']);
        ?>
    </h1>
</body>
</html>