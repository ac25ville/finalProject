<?php
    function printFeedback(){
        echo $_POST['feedback_name'].' '.$_POST['feedback_sNum'].' '.$_POST['feedback_response'];
    }

    if(isset($_GET['funct'])){
        if($_GET['funct']=='printFeedback'){
            printFeedback();
    }
}
?>