$(document).ready(function() {
    var len = 0,//总条数
        page = 1,//总页数
        pageSize = 6,//每页条数
        show;
    show = $(".rCon");
    len = show.length;
    $(".rCon").css("display","none");
    for (var i = ((page-1)*pageSize); i < (page*pageSize); i++) {
        $(".rCon")[i].style.display = "block";
    }
    if (len==0) {
        $("#conMain").text("data is null");
    }else{
        showLi(len);
        $("#pageNav li").click(function() {
            page = $(this).attr("class");
            console.log(page*pageSize);
            $(".rCon").css("display","none");
            for (var i = ((page-1)*pageSize); i < (page*pageSize); i++) {
                console.log($(".rCon")[i]);
                $(".rCon")[i].style.display = "block";
            }
        })
    }
    function showLi(len) {//显示点击列表
        var list = "";
        page = Math.ceil(len/pageSize);
        list += '<div id="pageNav"><ul>';
        for (var i = 0; i < page; i++) {
            list += '<li class="' + (i+1) + '">'+(i+1)+'</li>';
        }
        list += '</ul></div>';
        $("#conMain:last-child").after(list);
    }
});