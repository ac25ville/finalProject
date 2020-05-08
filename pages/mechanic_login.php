<!DOCTYPE html>
<html lang="en">
<head>
    <!--
    Name: Austin Corteville
    Pawprint: acc9cm
    Date: 4/5/2020
    Final Project

    @refrences:
    -->
<meta charset = "UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../css/mechanic_login.css">
<title>Bike Resource Center - Mechanic Login</title>
</head>
<body>
    
    <nav class="navbar navbar-top sticky-top">
        <span id="navbar_title"><a href="index.php" class="text-decoration-none navbar-brand">BRC</a></span>
        <a href="index.php" class="text-decoration-none navbar-brand">Home</a>
        <a href="about.php" class="text-decoration-none navbar-brand">About the Project</a>
        <a href="services_hours.php" class="text-decoration-none navbar-brand">Services &amp; Hours</a>
        <a href="self_help_diy.php" class="text-decoration-none navbar-brand">Self Help &amp; DIY</a>
        <a href="mechanic_login.php" class="text-decoration-none navbar-brand">Mechanic Login</a>
    </nav>
    <div id="page_title">
        Mechanic Login
    </div>
    
    <div id="login_wrap">
        <h2>Login</h2>
        <p>This is the login for the Bike Resource Center Mechanics.</p>
        <form id="login_form" action="../script/php/login.php" method="POST">
            <?php
                if($error){
                    print "<p>".$error."</p>";
                }
            ?>
            <input type="hidden" name="action" value="do_login">
            
            <label for="username">Username:</label> <input type="text" id="username" name="username">
            <br>
            <label for="password">Password:</label> <input type="password" id="password" name="password">
            <br>
            <button type="submit" id="login">Login</button>
            
        </form>
    </div>

</body>
</html>