<?php 
	header("Content-type: text/html; charset=UTF-8");
	$word = "一段年少时的爱恋牵出一生的爱恋大学时代的赵默笙阳光灿烂对法学系大才子何以琛一见倾心开朗直率的她拔足倒追终于使才气出众的他为她停留驻足何以笙箫默一个执着于等待和相爱的故事全书约11万字作者顾漫结局温馨完整之外的更完整";
	function fnWord($data) {
	 	$len = mb_strlen($data,"utf-8");
	 	$num = rand(0,$len-4);
	 	$resWord = mb_substr($data,$num,4,"utf-8");
	 	return $resWord;
	}
	$resWord = fnWord($word);
	var_dump($resWord);
	
?>