<?php
    function getHours(){
        $j = $_GET['day'];
        $j = strtolower($j);
        switch($j){
            case 'monday': return "12PM-4PM";
            case 'tuesday': return "10AM-2PM";
            case 'wednesday': return "12PM-4PM";
            case 'thursday': return "10AM-2PM";
            case 'friday': return "12PM-4PM";
            default: return "No hours for this day";
        }
    }
    
    if(isset($_GET['hours'])&&$_GET['hours']=='yes'){
        echo getHours();
    }
?>