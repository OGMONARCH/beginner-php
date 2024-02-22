<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Indexed Array = arrays with numeric index
    $ListOfCars = array("McLaren", "Lambo", "Ferrari");
//     var_dump($ListOfCars);  
//    array_push($ListOfCars, "Buggati");//This will not work in PHP because it is an indexed array and does not support the add() method.
//    //Instead you can use: //show the whole array in a readable format
//    print "<br/>";
//    var_dump($ListOfCars);
foreach($ListOfCars as $names){
    echo $names . "<br/>";
}


    //Associative Array = arrays with name keys
    $Ballers = array(
        "Chelsea"=>"Enzo",  
        "Man City"=>"Haaland",
        "WestHam" => "Danny Ings"
    );
print "<br/>";
 var_dump($Ballers);
 print "<br/>";
 //To Call Out Enzo,
 print $Ballers["Chelsea"];
 print "<br/>";


 print "<br/>";
    //Multidimensional Array = arrays containing one or more arrays
    $Club = array(array('Manchester', 'city'), array('Chelsea', 'WestHam'),array(array(array("London", array("Standford")))));
    print $Club[2][0][0][1][0];
    print "<br/>";


    $ListOfNumbers= [2,4,5,7];

    foreach($ListOfNumbers as $num){
        echo  "<br/>" . $num * 2 ."<br/>";
    }
    
    print "<br/>";
    print "<br/>";

    $arrayOfnumbers = array(2,3,4,5,6,7,89);

    // foreach($arrayOfnumbers as $sage){
    //     print $sage;
       
    // }


    $arrayOfnumbers = array(2, 3, 4, 5, 6, 7, 89);

foreach ($arrayOfnumbers as $sage) {
    print $sage . "<br/>";
    
    // Check if $sage is even
    if ($sage % 2 == 0) {
        // Multiply $sage by 2 and print the result
        print $sage * 2;
    } else {
        // If $sage is not even, print a message
        print "Not even";
    }

    print "<br/>";
}


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
</body>
</html>