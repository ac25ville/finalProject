//write an ajax call for the hours. this is really your last hard part. Just need to do the Login with another php page after that. Just follow the wergz tutorial on that.

$(function(){
    var day = "";
     $.get("../php/hours_request.php", function(data){
        console.log("success");
     });
});