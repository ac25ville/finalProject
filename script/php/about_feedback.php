<?php
    function printFormValue(){
        echo $_POST['feedback_name'].' '.$_POST['feedback_sNum'].' '.$_POST['feedback_response'];
    }
    if(isset($_GET['funct'])){
        if(strcmp($_GET['funct']='printFeedback'){
            echo 'hello world';
            printFromValue();
    }
    }
    
?>