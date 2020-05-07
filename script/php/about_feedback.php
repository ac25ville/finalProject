<?php
    function printFormValue(){
        echo $_POST['feedback_name'].' '.$_POST['feedback_sNum'].' '.$_POST['feedback_text'];
    }

    foreach ($_POST as $key => $value) {
    echo '<p>'.$key.'</p>';
    foreach($value as $k => $v)
    {
    echo '<p>'.$k.'</p>';
    echo '<p>'.$v.'</p>';
    echo '<hr />';
    }

    }
    printFormValue();
//    if($_GET['funct']=='printFormValue'){
//        printFromValue();
//        echo 'Hello World!';
//    }

?>