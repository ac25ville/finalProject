<?php
    function writeFeedback(){
//        $filename = 'feedbackdata.txt';
//        $file = fopen($filename, 'a+') or die("Unable to open file!".$file);
//        echo $file;
//        fwrite($file, $_POST['feedback_name'].'\n');
//        fwrite($file, $_POST['feedback_sNum'].'\n');
//        fwrite($file, $_POST['feedback_response'].'\n');
//        fwrite($file, 'endofpost\n');
//        fclose($file);
        echo $_POST['feedback_name'].'\n'. $_POST['feedback_sNum'].'\n'.$_POST['feedback_response'].'\n';
    }

    if(isset($_GET['funct'])){
        if($_GET['funct']=='printFeedback'){
            writeFeedback();
            header("http://ec2-3-134-90-38.us-east-2.compute.amazonaws.com/pages/about.html");
    }
    
}
?>