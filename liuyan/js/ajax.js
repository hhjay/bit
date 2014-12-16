$(document).ready(function() {// get jQuery
    $("#sub").click(function() {
        var user = $("#user").val();
        var mail = $("#mail").val();
        var con = $("#con").val();
        var url = "insert.php?user="+user+"&mail="+mail+"&con="+con;
        console.log(url);
        // alert("aaaaa");
        $.get(url,function(data,status){
            console.log("data:"+data+" status:"+status);
            $("#conMain").html(data+"<br/>");
        });
    });
    // $("#pageNav").
    // console.log($("#pageNav li"));
    $("#pageNav li").click(function(){
        var page = $(this).attr("class");
        // alert("aaa");
        var url = "fenye.php?page="+page;
        $.get(url,function(data,status){
            // console.log("data:"+data+" status:"+status);
            $("#conMain").html(data);
        });
    })
});