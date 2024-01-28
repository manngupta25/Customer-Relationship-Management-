<?php
include("connection.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Relationship Management</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="styles\style.css">
</head>

<body class="text-center">
<div class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#"> MY CRM</a>
</div>
    <div class="container justify-content-center  ">
        <form action="" method="POST" class="form-signin">
            <div class="card-body">
                <img class="mb-4" src="images\Crm.jpg" alt="CRM Logo" width="100" height="100">
                <label for="uname" class="sr-only">Username:</label>
                <input type="text" name="uname" class="form-control" placeholder="Username">
                <label for="pwd" class="sr-only">Password:</label>
                <input type="password" name="pwd" class="form-control" placeholder="Password">
                <input type="submit" name="login" class="btn btn-lg btn-primary btn-block" value="LOGIN IN">
            </div>
        </form>
    </div>



</body>

</html>
<?php
 if(isset($_POST['login'])){
    $username=$_POST['uname'];
    $password=$_POST['pwd'];

    $query=("SELECT * FROM `user` WHERE uname='$username'");
    
    $result= mysqli_query($conn,$query);
    

    if(mysqli_num_rows($result)==1){
        $email_pass = mysqli_fetch_assoc($result);
        
        if($email_pass['pwd'] == $password){
            session_start();
            $_SESSION['uname']= $username;
            echo "<script>alert('Login Successful.. Welcome ADMIN') </script>";
            header("location: home/home.php");
    
?>
    <script>
        //location.replace("home/home.php");
    </script>
<?php
        }else{
            echo "<script>alert('Incorrect Password')</script>";
        }
    }else{
        echo "<script>alert('Invalid Username')</script>";
    }
}
?>