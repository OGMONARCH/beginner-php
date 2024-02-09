<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="form.php" method="get">
    <label>
    Password:<input type="password" name="password" />
    </label>
    <br>
    <input type="submit" />
    </form> -->
    
    <?php
    // print 2 ** 4;
    
    // print "<br/>";

    // print sqrt(16);

    // print 4 == 2;
    //Since this statement is false you get a blank page
    //If the number 2 was changed to 4, THe statement will become true giving me a value of 1 on my browser

    //print 4 != 4
    //The operator used here just checking if  4 is not equal to 4
    //If this code is run, then I will get a blank page since that line of code is false.

    $number1 = 5;
    $number2 = 3;

    //print $number1 != number2;
    //Here I will see a value of zero on my browser since this statement is true

     print $number1 > $number2;

     print "<br/>";

    // && stands for AND;
    // || stands for OR;
    // ! stands for NOT;

    //assignment operator
    $x = 5;
    $x += 2;
    //Code on line 40 simply means $x = $x + 2;
    print $x;

    print "<br/>";


    //Post Increment
    $y = 4;
    print $y++;
    
    print "<br/>";

    //Pre Increament
    $y = 4;
    print ++$y;

    print "<br/>";

    //Pre Decrement
    $y = 4;
    print --$y;

    print "<br/>";


    //Post Decrement
    $y = 4;
    print $y--;

    print "<br/>";

    /////////////////////////
    ////////////////////////
    ////////////////////////
    //////////////////////////
    //CONDITIONALS
    $age = 12;
    if($age >= 18){
        print "<h1>Hello My Niggas, Welcome to the party!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!😎🤪</h1>";
    }
    else if($age  < 18 && $age > 0) {
        print "<h1>Come back  Next Year</h1>";
    }


    // $password = "hgbyugvbhjnijnij";
    // if($password >= strlen(substr($password, 8))){
    //     print "Login Successful😎";}
    // else if($password == ""){
    //     print "Password is empty" ;}
    // else{
    //     print "Invalid Password! It should be at least 8 characters long.🤦‍♂️";
    // }







    // create a password variable if password less than 8 throw error

    $password = "hgbyugvbhjnijnij";
    if(strlen($password) >= 8){
        print "Login Successful😎";}
    else if($password == ""){
       print "Password is empty" ;}
    else{
        print "Invalid Password! It should be at least 8 characters long.🤦‍♂️";
    }

    //write a script that validates for a score and age  of a user
    //score must be 70 and above and age must be 18 and above
    //Alert user the result and echo

    $age= 18;
    $score = 70;
    if($score >= 70  || $age >= 18 ){
        print "Your are eligible for the party🎉 You have scored  70 or above and you are 18 years old or older.";
        print "<br/>";
        print "<script>alert('Login Successful😎')</script>" . "<br/>";
    }
    else{
        print "Not eligible";
        print "<script>alert('Login Successful😎')</script>" . "<br/>";
    }






























    ?>
</body>
</html>