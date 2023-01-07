<?php

	include 'config.php';

	$uid = $_POST['userid'];
	$uname = $_POST["name"];
    $pass = $_POST["pass"];

    $data = mysqli_query($con, "select * from register where username ='$uname'");

    if (mysqli_num_rows($data) > 0) {
    	echo "Username already exists!";
    	$statement.exit();
    	$con.exit();
    }else{
	    $sql = "insert into register(ID,username,password) values(?, ?, ?)";

	    $statement = $con->prepare($sql);

	    $statement->bind_param("iss", $uid, $uname, $pass);

	    if($statement->execute()){
	    	echo "User Registered successfully!";
	    }else{
	    	echo "Registration failed!";
	    }

	    $statement->close();
	    $con->close();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Solutions</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/bee651337a.js" crossorigin="anonymous"></script>
	<link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Nova Flat' rel='stylesheet'>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>

    <style>
    	*{
    		margin: 0;
    		padding: 0;
    	}

        .reg{
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .reg_form{
            display: block;
            margin: 0 auto;
            width: 800px;
            padding: 30px;
        }

        .reg_form input{
           display: block;
           width: 70%;
           margin: 10px auto;
           padding: 10px 20px;
           outline: none;
        }

        .reg_form .btn{
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div id="container">
        <a href="index.html"><img src="img/demo-logo.png" alt="" class="logo"></a>
        <div id="conn">
            <a href="login.html" class="login">Sign In</a>
            <a href="register.html" class="sign">Sign Up</a>
        </div>

        <nav id="nav">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>

        <!-- mobnav -->
        <div class="mobnav">
            <a href="#" class="menu"><i class="fas fa-bars fa-2x"></i></a>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>

        <div class="reg">
            <form action="registration.php" method="post" class="reg_form">
                <input type="text" name="userid" placeholder="Id">
                <input type="text" name="name" placeholder="username">
                <input type="text" name="pass" placeholder="Password">
                <center><button type="submit" class="btn">Register</button></center>
            </form>
        </div>

        <footer>
        <h2>Subscribe Our NewsLetter</h2>
        <form action="home.html" method="post">
            <center><input type="email" placeholder="Enter Your Email" name="em" required>
            <button type="submit" class="frm-btn">Subscribe</button></center>
        </form><br><br><br>
        <center>2021&copy;&nbsp;&nbsp;<strong><a class="site" href="home.html">Company Name</a></strong></a></center>
    </footer>
    </div> <!-- Container end -->

    <!-- <footer>
        <h2>Subscribe Our NewsLetter</h2>
        <form action="home.html" method="post">
            <center><input type="email" placeholder="Enter Your Email" name="em" required>
            <button type="submit" class="frm-btn">Subscribe</button></center>
        </form><br><br><br>
        <center>2021&copy;&nbsp;&nbsp;<strong><a class="site" href="home.html">Company Name</a></strong></a></center>
    </footer> -->

    <!-- js for mobnav -->
    <script>
		$(document).ready(
            function(){
                $('.mobnav .menu').click(
                    function(){
                        $('.mobnav ul li').slideToggle();
                    }
                )
            }
        )
	</script>
</body>
</html>