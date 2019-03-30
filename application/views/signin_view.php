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
        header('Location: main');
    }
    else{

        //echo "Unsuccessful Login";
		$message = "Invalid Credentials";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header('Location: signin');
        //exit();
    }

}
?>

<!DOCTYPE html>
    <head>
            <title>Login</title>

            

             <!--Cached Boostrap CDN-->
             <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

            <!--Cached jQuery CDN-->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

           <!-- <link rel="stylesheet" type="text/css" href="http://localhost/simsdemo/CSS/login.css"> -->
            <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/CSS/login.css">
            

    </head>


    <body background="<?= base_url()?>/images/loginBackground.jpg">

    <div class="col-sm-2 sidenav">
                    <br><br><br>
                    <p class="signInText">Communities In Scools<p>
                    <br>
                    <p class="quote">It's relationships, not programs, that change children</p>
                  </div>

        <div class="loginbox">
         <img src="<?= base_url()?>/images/loginAvatar.jpg" class = "avatar"> 
            <h1>Login Here:</h1>
            <form method="POST" action="#">
                <p>Username</p>
                <input type="text" name="username" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter Password">
                <input type="submit" name ="" value="Login">
                <br>

            

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
