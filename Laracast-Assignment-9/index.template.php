<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions</title>
</head>
<body>
    <ul>
        <?php
            if(!$ProjectTask['IsSumitted']){
                echo "Thank You so Much, the Task Recieved!";
            } else {
                echo "Please Submit the Task before the Deadline!";
            }
        ?>
    </ul>
</body>
</html>