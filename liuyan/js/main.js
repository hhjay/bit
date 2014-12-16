window.onload = function fenye() {
	var all = document.getElementById('conMain');// 获取总长度
	var now = 1;// 当前页面
	var curNum = 12;// 每页显示的条数
	var page = all.children.length/curNum;// 总的页数
	var pageList = '';// 页数按钮
	var iNum = 0;
	var pageNav = document.getElementById("pageNav");
	for(var i = 0; i < page; i++){// 显示所有的页数按钮
		if(pageList == undefined){ continue; }
        pageList += '<li><a href="javascript:;">'+ ( i + 1)+'</a></li>';
    }
    pageNav.innerHTML = pageList;

    for(var i = 0; i < pageNav.children.length; i++){
        pageNav.children[i].index = i;
        pageNav.children[i].onclick = function(){
            for(var t = 0; t < pageNav.children.length; t++){
                pageNav.children[t].className = '';
            }
            iNum = this.index;// 记录当前页面
            ini(iNum);
        };
    }

    function ini(iNum){
        for(var i = 0; i < all.children.length; i++){// 先把所有的隐藏起来
            all.children[i].style.display = 'none';
        }         
        for(var i = 0; i < curNum; i++){ // 当前页面
            if(all.children[(iNum * curNum + i)] == undefined){ continue; }
            all.children[(iNum * curNum + i)].style.display = 'block';
        }
    }
    ini(iNum);
}