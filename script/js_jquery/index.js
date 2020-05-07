$(function(){
    var titleSwitch = false;
    var contentSwitch = true;
   $("#page_title").click(function(){
       if(!titleSwitch){
            $(this).css("background-color", "#A4BA80");
       }else{
            $(this).css("background-color", "#EDEDF0");
       }
       titleSwitch = !titleSwitch;
   });
});