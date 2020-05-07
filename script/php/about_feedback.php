<?php
    function writeFeedback(){
        $file = fopen('feedbackdata.txt', 'a');
        
        foreach($_POST['feedback'] as $j){
            fwrite($file, $j.'\n');
            echo $j.'\n';
        }
        fwrite($file, 'endofpost\n');
        fclose($myfile);
    }

    

    if(isset($_GET['funct'])){
        if($_GET['funct']=='printFeedback'){
            writeFeedback();
    }
}
?>