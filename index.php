<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<h1 id="hours" style="background:  #eee; padding: 20px;"></h1>
    <?php
    $name = "King";
    print $name. "<br>";

    $car = "lambo";
    print $car. "<br>";
    
    $school = "Appclick";
    print $school. "<br>";
    
    $age = 25 ;
    print $age. "<br>". "sup";
    
    $color = "blue";
    print $color. "<br>";
    
    $lang = "en";
    print $lang. "<br>";
    
    $baller = "Messi";
    print $baller. "<br>";
    
    $html = "duo";
    print $html. "<br>";
    
    $tate = "topg";
    print $tate. "<br>";
    
    $boxer = "Mike Tyson";
    print  $boxer. "<br>". "<br>". "<br>". "<br>". "<br>";



    print substr("Manchester United", 11). "<br>". "<br>";


    $club = "Manchester United";
    print $newclub = str_replace("Manchester", "NewCastle", $club) . "<br/>";
    print $club;

    print "<br/>";
    print "<br/>";
    print "<br/>";






    
    $a = "Chelsea";
    
    print "The number of the texts are " . strlen($a) . '<br/>' . '<br/>' . '<br/>';



    //conversion of cases
        //lowercase
        print strtolower ('UPPER')  . '<br/>' . '<br/>';

        //uppercase

        print strtoupper('upper'). '<br/>'. '<br/>';



        //string position 
        $n = 'appClickpap';
        
        print "<br/>";
        
        print strpos($n, "pap");
        //returns the index number of the first occurence




        //strrpos() checks the last occurrence of a substring
        $animal = 'Hippopotamus';

        print "<br/>";

        print strrpos($animal,'po');

        print "<br/>";

        //strstr() finds the occurence of the string
        print strstr($animal, 'ta');

        print "<br/>";

        //how ot slice a string
        print substr($animal, 5, 4);

        print "<br/>";

        $word= 'appClick';
        $app = 'our link';

        print "<br/>";

        print substr($word, 3, 5) . substr($app,3, 5);



        //how to cast i.e change from one data type to another

        $number4 = 5;

        $number4 = (string) $number4;

        print  "<br/>";

        var_dump($number4);




        $number5 = '5';
        $number5 = (int)$number5;
        print "<br/>";
        var_dump($number5);


        //min and max

        print "<br/>";
        print min(3,1,4,6,7,8,0,8);

        print "<br/>";
        print max(3,1,4,6,7,8,0,8);


        print '<br/>';

        print rand(1,100);

        //define('avogadro',6.02);
        //This is used to define constants

    ?> 
       

       <script type="module">
        var hours = document.getElementById('hours');

function updateClock() {
    var currentTime = new Date();
    var hoursValue = currentTime.getHours();
    var minutesValue = currentTime.getMinutes();
    var secondsValue = currentTime.getSeconds();

   
    var formattedTime = `${hoursValue}:${minutesValue}:${secondsValue}`;

 
    hours.textContent = formattedTime;

  
    setTimeout(updateClock, 1000);
}


updateClock();
        
    </script>

</body>
</html>