<?php
    require "redirect.php";
    function printFeedback(){
        echo $_POST['feedback_name']."<br>". $_POST['feedback_sNum']."<br>".$_POST['feedback_response']."<br>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--
    Name: Austin Corteville
    Pawprint: acc9cm
    Date: 5/7/2020
    Final Project
    
    This is a php response document
    
    @refrences:
    -->
<meta charset = "UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../../css/about.css">
<title>Bike Resource Center - About the Project</title>
</head>
<body>
    <div class="content">
        <?php
        if(isset($_GET['funct'])){
            if($_GET['funct']=='printFeedback'){
            printFeedback();
        } 
        ?>
    </div>
</body>
</html>