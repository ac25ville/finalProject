<?php
function printFormValue(){
        echo $_POST['feedback_name'].' '.$_POST['feedback_sNum'].' '.$_POST['feedback_text'];
    };

    printFormValue();
    if($_GET['funct']=='printFormValue'){
        printFromValue();
        echo 'Hello World !';
    }
    
    echo 'Hello World!';

?>