<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo"welcome to our home page !! <br/>";
    echo "<pre>";
    // var_dump($students);
    echo "</pre>";
    
    echo"<table class='table' > <tr> <th> ID</th>  <th> Name</th>  <td> ";

    foreach ($students as $std){
        echo "<tr> <td> " . $std['id'] . "</td>" . "<td> " . $std['name'] . "</td> </tr>";
    }
    
    
    echo"</table>";
    ?>
</body>
</html>