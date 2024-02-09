<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $phrase = "Hustler's Academy";

        print $phrase;

        //To convert Academy to lowercase and Uppercase use: 
        // print strtoupper($phrase);
        //print strtolower($phrase);

        //To check the string length use:
        // print strlen($phrase);

        //To get the index:
        // print $phrase[1];
        //Index starts from zero

        //To make changes to the value of the individual index, 
        //you can just assign a value to the index of your choice. For Instance:
        //$phrase[0] = "O";
        // So now the "A" in Academy will become "O".


        //To replace the subString Hustler's with the word Panda,
        //Use:
        //print str_replace("Hustler's", "Panda", $phrase);



        //To grab/select a specific subString use:
            // print substr($phrase, 9);
            //So what is going to happen now is that only the word "Academy" wiil
            // be displayed on the web browser

            //for time display
            // var hours = document.getElementById('hours');

        // function updateRealTime() {
        //     var currentTime = new Date();
        //     const realTime = currentTime.gettimeoftheday();
        //     hours.textContent = realTime;
        // }

        // // Update realTime initially
        // updateRealTime();

        // // Update realTime every second (100 milliseconds)
        // setInterval(updateRealTime, 100);

        // var hours = document.getElementById('hours');

        // var currentTime = new Date();

        // const realTime = currentTime.getHours();

        // // Display the current time in the <h1> element
        // hours.textContent = "Current Hour: " + realTime;

//         var hours = document.getElementById('hours');

// function updateClock() {
//     var currentTime = new Date();
//     const realTime = currentTime.getHours();

//     // Display the current time in the h1 element
//     hours.textContent = realTime;

//     // Update the time every second (optional)
//     setTimeout(updateClock, 1000);
// }

// // Initial call to set the time
// updateClock();
    ?>
</body>
</html>