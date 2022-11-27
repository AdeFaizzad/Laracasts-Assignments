<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>
<body>
    <ul>
        <?php
            foreach($ProjectTask as $key => $val){
                echo "<li><strong>$key:</strong> $val</li>";
            }
        ?>
    </ul>
</body>
</html>