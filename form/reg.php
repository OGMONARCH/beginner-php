<?php 

require 'connectDB.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $pattern = "^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$^";
    
    
    $Fullname = $_POST['Fullname'];

    $Mail = $_POST['Email'];
    
    $password = $_POST['Password'];

    $confirmPassword = $_POST['Confirm_Password'];
     

 
    if($password !== $confirmPassword){
            echo "<script>alert('Password Mismatch')</script>";
        }elseif(!preg_match($pattern, $password)){
                print "<script> alert('
                Minimum eight characters
                <br/>
                 at least one uppercase letter
                 <br/>
                 one lowercase letter
                 <br/>
                 one number 
                 <br/>
                 one special character') </script>";
            }
            else{
                $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
            }

       try{
        $sql = "INSERT INTO users (Username, Email,Password)  VALUES( ?, ?, ?)";
        // INITIALIZING DB CONNECTION

        $stmt=mysqli_stmt_init( $connection );
        $preparestmt = mysqli_stmt_prepare($stmt, $sql);
        
        
        if($preparestmt){
            mysqli_stmt_bind_param($stmt, 'sss',$Fullname,$Mail,$hashedpassword);
            mysqli_stmt_execute($stmt);
            print "<script> alert('Registration Successful')</script>";
        }else {
            print "<script> alert('Registration Unsuccessful')</script>";
      }}
      catch(\Throwable $th){
            print 'Error:'  . $th->$getMessage();
      }
    
    }
?>