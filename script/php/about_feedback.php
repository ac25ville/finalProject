<?php
    function writeFeedback(){
        $filename = 'feedbackdata.txt';
        $file = fopen($filename, 'w') or die("Unable to open file!");
        echo $file;
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