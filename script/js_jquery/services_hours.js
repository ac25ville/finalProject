//write an ajax call for the hours. this is really your last hard part. Just need to do the Login with another php page after that. Just follow the wergz tutorial on that.

$(function(){
    var days = ["monday", "tuesday", "wednesday", "thursday", "friday"];
    $.each(days, function(index,day){
        console.log(day);
    })
    $.get("../script/php/hours_request.php?hours=yes&day="+day, function(data){
       
     });
     
});