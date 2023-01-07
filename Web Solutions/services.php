<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Web Solutions/Services</title>
	<script src="https://kit.fontawesome.com/e4eb051004.js" crossorigin="anonymous"></script>
	<link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Nova Flat' rel='stylesheet'>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
	<style>
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

	*{
		  margin: 0;
		  padding: 0;
		  box-sizing: border-box;
		  font-family: "Poppins", sans-serif;
	}

	body{
	    background-color: #001277;
	    /*font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;*/
	    color: #fff;
	}

	a{
	    text-decoration: none;
	    color: #fff;
	}

	#container{
	    width: 100%;
	    height: 100%;
	    background-color: #001277;
	}

	.logo{
	    position: relative;
	    left: 0;
	    width: 150px;
	    margin: 10px;
	    animation: animate-logo;
	    animation-duration: 2s;
	    animation-fill-mode: forwards;
	    
	}

	@keyframes animate-logo {
	    0%{
	        transform: scaleX(0) scaleY(0);
	    }

	    100%{
	        transform: scaleX(1) scaleY(1);
	    }
	}

	nav{
	    width: 85%;
	    display: flex;
	    /*background-color: darkcyan; */
	}

	nav ul{
	    display: flex;
	    flex-direction: flex-start;
	    position: relative;
	    left: 30em;
	}

	nav ul li{
	    list-style: none;
	    position: relative;
	    padding: 10px 20px;
	    margin: 5px;
	}

	nav ul li::after{
	    content: "";
	    width: 0;
	    height: 2px;
	    left: 0;
	    bottom: 0;
	    background-color: #f1b100;
	    position: absolute;
	    transition: 0.3s;
	}

	nav ul li:hover::after{
	    width: 100%;
	}

	.mobnav{
	    width: 100%;
	    display: none;
	    /* background-color: green; */
	}

	.mobnav ul{
	    display: flex;
	    flex-direction: flex-end;
	}

	.mobnav ul li{
	    display: block;
	    text-align: center;
	    padding: 10px 20px;
	    border-bottom: 1px solid rgba(255, 255, 255, .2);
	}

	#conn{
	    /* background-color: yellow; */
	    float: right;
	    position: relative;
	    width: 15%;
	    top: 59px;
	    padding: 5px;
	}

	#conn a{
	    color: #f1b100;
	    margin: 5px;
	}

	#conn a.sign{
	    border: 1px solid #f1b100;
	    border-radius: 2px;
	    padding: 10px;
	    /* width: 80px; */
	}

	#content-1{
	    width: 100%;
	    height: 500px;
	    /* background-color: aquamarine; */
	    margin-top: 30px;
	}

	.sv-hd{
		text-align: center;
		margin-top: 50px;
	}

	.services{
		display: flex;
		flex-wrap: wrap;
		justify-content: space-around;
		width: 100%;
		height: 450px;
		margin: auto;
	}

	.card{
		/*background: darkcyan;*/
		display: flex;
		flex-direction: column;
		min-width: 220px;
		width: 320px;
		height: 320px;
		justify-content: center;
		align-items: center;
		padding: 30px;
		margin: 12px 6px;
	}	

	.card img{
		width: 120px;
		height: 120px;
		border-radius: 50%;
		margin: 0 auto;
		position: relative;
		/*top: 10px;*/
	}

	.card h3{
		text-align: center;
		margin: 15px 0 5px 0;
	}	

	.card p{
		width: 100%;
		text-align: center;
	}
	</style>
</head>
<body>
	<div id="container">
		<a href="index.html"><img src="img/demo-logo.png" alt="" class="logo"></a>
        <div id="conn">
            <a href="#" class="login">Sign In</a>
            <a href="#" class="sign">Sign Up</a>
        </div>

        <nav id="nav">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>

        <!-- mobnav -->
        <div class="mobnav">
            <a href="#" class="menu"><i class="fas fa-bars fa-2x"></i></a>
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
		<h2 class="sv-hd">Our Services</h2>
        <div class="services">
        	<div class="card">
        		<img src="img/4380747.jpg" alt="">
        		<h3>Service One</h3>
        		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae architecto, possimus, sequi a magni officia voluptates excepturi rem inventore quis? Repudiandae maxime necessitatibus ratione ipsam voluptas explicabo minima quasi optio.</p>
        	</div>
        	<div class="card">
        		<img src="img/4380747.jpg" alt="">
        		<h3>Service One</h3>
        		<p>Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Ad sunt fugiat accusantium, cupiditate, ducimus quia recusandae non. Ratione, dolores, cum.</p>
        	</div>
        	<div class="card">
        		<img src="img/4380747.jpg" alt="">
        		<h3>Service One</h3>
        		<p>Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Ad sunt fugiat accusantium, cupiditate, ducimus quia recusandae non. Ratione, dolores, cum.</p>
        	</div>
        	<div class="card">
        		<img src="img/4380747.jpg" alt="">
        		<h3>Service One</h3>
        		<p>Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Ad sunt fugiat accusantium, cupiditate, ducimus quia recusandae non. Ratione, dolores, cum.</p>
        	</div>		
        </div>
	</div>

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