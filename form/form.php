<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="reg.php" method="POST">
        <label for="Fullname" >Fullname: </label>
        <input type="text" name="Fullname" id="Fullname" placeholder="Enter fullname" />
        <br/><br/><br/>
        <label for="Email" >Email: </label>
        <input type="email" name="Email" id="Email" placeholder="Enter Email" />
        <br/><br/><br/>
        <label for="Password">Password: </label>
        <input type="password" name="Password" id="Password" placeholder="Enter Password"/>
        <br/><br/><br/>
        <label for="Confirm_Password">Confirm Password: </label>
        <input type="password" name="Confirm_Password" id="Confirm_Password" placeholder="Confirm Password"/>
        <br/><br/>
        <input type="Submit" />
    </form>    

 
<!-- All inputs in the confirm password and password field must start with capital letter
Add characters to the input of for password and password field like hearts, diamonds, moons -->



</body>
</html>