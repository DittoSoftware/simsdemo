<?php


$con = new mysqli('cissims.mysql.database.azure.com', 'sims@cissims', 'Ospreys2019');
mysqli_select_db($con, 'csv_db');


if(isset($_POST['username'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from users where username='".$username."'AND password='".$password."' limit 1";
    // $result="select * from users where username='".$username."'AND password='".$password."' limit 1";


    $result=mysqli_query($con,$sql);

    if(mysqli_num_rows($result) == 1){
        // echo "Successful Login";
        // exit();
        session_start();
        $_SESSION['username'] = $_POST['username'];
        header('Location: users');
    }
    else{

        //echo "Unsuccessful Login";
		$message = "Invalid Credentials";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header('Location: log');
        //exit();
    }

}
?>

<!DOCTYPE html>
    <head>
            <title>Login</title>
            <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>CSS/login.css">
            <style>
  
</style>

    </head>


    <body>
        <div class ="loginbox">
        <!-- <img src="avatar.png" class = "avatar"> -->
            <h1>Login Here:</h1>
            <form method="POST" action="#">
                <p>Username</p>
                <input type="text" name="username" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter Password">
                <input type="submit" name ="" value="Login">
                <!-- <br>

                Create Account Placeholder
                <br>
                <br>
                Reset Password Placeholder -->

            </form>
        </div>
        <!-- <img src="cmsLogo.png" class = "logo" >
       <p class="quote">
           It's relationships, not programs, that change children.
           <br>
           -Bill Milliken
       </p> -->
    </body>



</html>
