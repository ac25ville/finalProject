<?php 

?>
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
<!--    <script src="../script/index.js"></script>-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../../css/mechanic_login.css">
<title>Bike Resource Center - Mechanic Page 1</title>
</head>
<body>
    <?php
                $val  = $_COOKIE['username'];
                print "<p>$val</p>";
    ?>
        <button id="logout" href="../../script/php/logout.php">Logout</button>

</body>
</html>