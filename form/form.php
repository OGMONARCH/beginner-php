<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="form.php" method="get">
    Name:<input type="text" name="username" />
    <input type="submit" />
    </form>

    <br/>
    <br/>


    <?php print $_GET["username"];  ?>

</body>
</html>