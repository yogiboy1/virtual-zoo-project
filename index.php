<?php
    session_start();
?>

<html>
<head>
    <title>Zoo Management</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <style>
       h3 {color: white;
    text-transform: uppercase;
    font-size: 50px;
    text-align: center;
    margin-top: 75px;
    margin-left: 1px;}
    </style>
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
</head> 
<body>
    <header>
        
    <div class="row">
	<div class="logo">
            <img src="4.png">
     </div>
            
        <ul class="main-nav">  
            <li><a href="index.php">  HOME </a></li>

        <?php 
                if(isset($_SESSION["fnm"])) { 
                echo '<li><a href="menu/zooav.html" > MENU </a></li>';
                echo '<li><a href="http://localhost:3000/" > ANIMALS </a></li>';    
                echo '<li><a href="services/ser.html"> SERVICES </a></li>';
                echo '<li><a href="info/animalav.html"> INFO </a></li>';
                echo '<li><a href="about/abt.html"> ABOUT </a></li>';

            
                echo '<li><a href="logout.php">LOG OUT</a></li>';
                } 
            ?>
        </ul>    
        
    </div>
        
    <div class="hero">
        <h1>Welcome To The World Of Animals</h1>
	<h3>Bookings, Guides , Services , everything zoo-related can be found here</h3>
        <?php if (!isset($_SESSION["fnm"])) {
            echo '<div id="mainForm" class="">
                   <form action="back/login.php" method="POST" class="hcenter" id="">
                
                    <div class="inform hide" id="toggleMe">
                        <label for="email" id="change-pos1" class="email">Email</label>
                        <input type="text" name="email" id="on-hover-change-pos1" required>
                        <br>
                        <label for="pwd" class="toggle" id="change-pos2">Password</label>
                        <input type="password" name="pwd" id="on-hover-change-pos2" required>
                    </div>
                    <div class="button">
                        <a href="signup/signup.php" class="btn btn-one" id="signup">Sign In</a>
                        <input type="submit" name="submit" value="Log In" class="btn btn-two" id="toggle">   
                    </div>    
                </form>
            </div>';
        }
        ?>
    </div>

    
    </header>

    <script src="event4login.js"></script>
        
</body>    
</html>
