<?php
/* session_start();
$servername = "localhost";
$username = "root";
$password = "Database";
$dbname = "csv_db";

    $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $connection->query("SELECT * FROM tbl_name");
    $stmt->execute();

if(isset($_POST['username']))
{
    $uname=$_POST['username'];
    $password=$_POST['password'];

    if(empty($uname) || empty($password))
    {
        $message = 'All fields are required';
    }
    else
    {
        $query = $connection->prepare("Select User, Pass FROM loginform where User=? AND Pass=?");
        $query->execute(array($uname,$password));
        $row = $query->fetch(PDO::FETCH_BOTH);

        if($query->rowCount() > 0)
        {
            $_SESSION['username'] = $uname;
            header('location:main');
        }
        else
        {
            $message = "Username/Password is incorrect";
        }
    }

} */
?>

<!DOCTYPE html>
    <head>
    <title>Sign In</title>
    <style>
    body{
    margin: 0%;
    padding: 0;
    background-image: url(loginBackground.jpg);
    background-color: lightgrey;
    background-size: cover;
    background-position: top;
    font-family: sans-serif;

}

.logo{
    padding-top: 50px;
    padding-left: 30px;
}

.loginbox{
    width: 320px;
    height: 420px;
    background: #000;
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px
}

.loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
    color: #00783f;
}

.loginbox h1{
    color: #0a4190;
}

.loginbox input{
    width: 100%;
    margin-bottom: 20px;
}

.loginbox input[type="text"], input[type="password"]{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;

}

.loginbox input[type="submit"]{
    border: none;
    outline: none;
    height: 40px;
    background: #e87903;
    color:#fff;
    font-size: 18px;
    border-radius: 20px;
}

.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}

h1, h2{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size:  22px;
    color: #0a4190;
}
.quote{
    color: #0a4190;
    font-size: 26px;
    font-weight: bold;
    padding-left: 60px;

}

div {
    background-color: lightgrey;
    border: 10px solid black;
    padding: 25px;
    margin: 15px;
}
</style>
    </head>


    <body>
        <div class ="loginbox">
        <img src="avatar.png" class = "avatar">
            <h1>Login Here:</h1>
            <form method="POST" action="#">
                <p>Username</p>
                <input type="text" name="username" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter Password">
                <input type="submit" name ="login" onclick="location.href='home'" value="Login">
                <br>
                <?php if(isset($message)){echo $message;}?>
                <button type="button" onclick="location.href='home'">Dashboard</button><br>
                <!-- Create Account Placeholder
                <br>
                <br>
                Reset Password Placeholder -->
                
            </form>
        </div>
       <!--  <img src="cmsLogo.png" class = "logo">
       <p class="quote">
           It's relationships, not programs, that change children.
           <br>
           -Bill Milliken
       </p> -->
    </body>

    

</html>