<?php
    function writeFeedback(){
        $file = fopen('feedbackdata.txt', 'a');
        fwrite($file, $_POST['feedback_name'].'\n');
        fwrite($file, $_POST['feedback_sNum'].'\n');
        fwrite($file, $_POST['feedback_response'].'\n');
        fwrite($file, 'endofpost\n');
        echo $_POST['feedback_name'].'\n'. $_POST['feedback_sNum'].'\n'.$_POST['feedback_response'].'\n';
        fclose($file);
    }

    if(isset($_GET['funct'])){
        if($_GET['funct']=='printFeedback'){
            writeFeedback();
    }
}
?>