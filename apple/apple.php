<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
    $checkApple = "This sentence contains apple🍎";
    strtolower($checkApple);
    if (strpos($checkApple,"apple") !== false) {
        print "The word 'apple🍎' is in the string."; 
    } else {
        print "The word 'apple🍎' is not in the string.";}

    ?>
</body>
</html>