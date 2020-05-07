<?php
    function printFormValue(){
        echo $_POST['feedback_name'].' '.$_POST['feedback_sNum'].' '.$_POST['feedback_response'];
    }
    if(strcmp($_GET['funct'],'printFormValue')){
        printFromValue();
    }
?>