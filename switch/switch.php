<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $DaysOfWeek = 'Sunday';


    switch ($DaysOfWeek) {
        case 'Friday':
            print  "Jumah mubarak";  
            break;

        case 'Monday':
            print  "Monday Hustle";  
            break;
        
        default:
            print "Invalid day of the week";
            break;
    }
    
    //between  1-10, 
    // If odd state odd, If even state even


    print "<br/>";
    print "<br/>";
    print "<br/>";
    //if else method
    $number = 4;
    if(($number % 2 == 0)) {
        print "number is " . $number . "  and it's an even number.";
    }else{
        print "number is " . $number . "  and it's  an odd number.";
    }


    print "<br/>";
    print "<br/>";
    print "<br/>";
        //switch method
        $Odds = 80;

        switch ($Odds) {
            case $Odds % 2 == 1:
            // if(($Odds% 2 == 0)) {
            //     print "number is " . $Odds . "  and it's an even number.";
            // }else{
            //      print "number is " . $Odds . "  and it's  an odd number.";
            // }

                print 'number is odd';

                break;
            
            default:
                print "number is even";
                break;
        }


        print "<br/>";
        print "<br/>";
        print "<br/>";
        print "<br/>";
        print "<br/>";
        

        //// Building a managemant dashboard, three roles: admin, editor, viewer 
        ///conditions: 
        //Admin has all access and all priviledges
        //Editor limited access and edit the page
        //viewer can read only

        $role = 'Admin';
        strtolower($role);

        switch ($role) {
            case $role:
              print "All access and all priviledges";
                break;
            case $role:
                print "Limited access and edit the page";
                break;
            default:
                print "Read Only";
                break;
        }

        





    ?>
</body>
</html>