<?php

$entireText = $_GET['wholeText'];
$censuredOne = $_GET['censuredWord'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text censured</title>
</head>
<body>
    <h2>Here your Text</h2>

    <p>Here your entire text : <?php echo $entireText ?></p>
    <p>The paragraph is long: <?php echo strlen($entireText)  ?></p>


    <p> and here the censured one : <?php echo str_replace($censuredOne, '*******', $entireText)  ?>  </p>
    <p> The nex censured paragraph is long : <?php echo strlen($censuredOne) ?> </p>

</body>
</html>