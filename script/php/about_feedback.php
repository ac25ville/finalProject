<?php
    function printFormValue(){
        echo $_POST['feedback_name'].' '.$_POST['feedback_sNum'].' '.$_POST['feedback_response'];
    }

    echo $_POST['feedback_name'];
    if(isset($_GET['funct'])){
        if($_GET['funct']=='printFeedback'){
            printFromValue();
    }
}
?>