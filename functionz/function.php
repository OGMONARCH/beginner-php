<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function SayHello(){
        print "Hello World!";
    }
    SayHello();


    //Mulitiplies a number by it self

    function multiply($number){
        return $number * $number;
    } 

    print "<br/>";
    
   print multiply(3);

    print "<br/>";


   //Convert from km to m
    function convert($symbol){
        return $symbol * 1000;
    }
    // print "<br/>";
    print convert(200);

    // print "<br/>";

    //function to reverse a string
    function convo($rev){
        return strrev($rev);
    }
    print "<br/>";
    print convo("Hello World");

    print "<br/>";
    function Age($birth_year){
        return "Your Age is ". 2024 - $birth_year;
    }
    print  Age(2005);











    /////////////////////////////////////////////
    /////////////////////////////////////////////
    //////////////////LOOPS//////////////////////
    /////////////////////////////////////////////
    /////////////////////////////////////////////

    //Types Of Loops
    //For Loop
    //Print Welcome to AppClick x10

    // for(expression1   assigmnent; expression2 comparison; expression3  increment/decrement){

    // }

    for($yo = 1; $yo <= 10; $yo++){
        print "<br/>". " Welcome to AppClick : $yo <br>";
    }

    for($norm = 30; $norm <=50; $norm++){
        if($norm%3 == 0 && $norm%5 == 0){
            print "<br/>" . $norm. " Is a Multiple of 3 and 5<br/>";            
        }
    }



    //While loop
    //Generally indictaes infinte loop
    /////
    ////while(){

     ////}

/*
    The above code will keep on printing the value of $age until it becomes false, which is 11. So we need to change it to something else like 0 or null so that the condition can become
    * Do While Loop
    * It will execute the code block at least once, then it checks the condition in the end. If the condition is true, it executes again.
    * Indicates that the code inside will be executed at least once, then it checks the condition
    */


 //echo numbers between 1500-3600 divisible by 7 and 5
    // $age = 1500;
    // while($age <= 3600){
    //     if($age%5 == 0 && $age%7 == 0){
    //         print $age . "<br/>";
    //     }
    //     $age++ . "<br/>";
    // }


    // //do while loop
    // $a = 4;
    // do {
    //  print $a . "<br/>";
    //  $a++ . "<br/>";
    // } while ($a <= 10);

    // $a = 60;
    // do{
    //     print $a;
    //     $a-- . "<br/>";
        // break if($a <= 40){
        //     print $a;
        // }

    // }while($a <= 60);






















//Assignment
//using do while loop
//write a function that generates random numbers until a certain conition is met;


// function ($random){
// do{
// }while();

// }


// function generateCondition() {
//     do {
//         $randomNumber = rand(40, 60);
//         print "Generated Random Number: $randomNumber\n";
//         if($randomNumber < 0){
//             break;
//         }
//         if($randomNumber  == $randomNumber ) {
//             break;
//             print $randomNumber;
//         }
//     } while ($randomNumber <= 60);
//        print "Condition met! Ending loop.\n";
// }
// generateCondition();



// function GenerateNumber ($inputedNumber){
//     do {
//        //generate number
//    $GenerateRandomNumber = rand(40,60);

//    print "random Number is : " . $GenerateRandomNumber;

//     } while($GenerateRandomNumber <= $inputedNumber);                                                                                                                                                                                                                                                                                                                                                        <= $inputedNumber);
// }

// GenerateNumber(60);




?>


<!-- <form action="form.php" method="get">
Name:<input type="text" name="username" />
<input type="submit" />
</form>

<br/>
<br/>-->
</body>
</html>