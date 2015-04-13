<?php 
	// header("Content-type: text/html; charset=UTF-8");
	// 明天面试，今天就先不写了吧
	$word = "一段年少时的爱恋牵出一生的爱恋大学时代的赵默笙阳光灿烂对法学系大才子何以琛一见倾心开朗直率的她拔足倒追终于使才气出众的他为她停留驻足何以笙箫默一个执着于等待和相爱的故事全书约11万字作者顾漫结局温馨完整之外的更完整";
	function fnWord($data) {//中文字体截取
	 	$len = mb_strlen($data,"utf-8");
	 	$num = rand(0,$len-4);
	 	$resWord = mb_substr($data,$num,4,"utf-8");
	 	return $resWord;
	}
	$resWord = fnWord($word);
	function showImg($word) {//生成图片
		$imgH = 25;
		$imgW = 79;
		$img = imagecreate($imgW,$imgH);//生成一张图片 w/h

		imagecolorallocate($img, 255, 255, 255);//背景色
		$black = imagecolorallocate($img, 0, 0, 0);//定义黑色
		$gray = imagecolorallocate($img, 200, 200, 200);

		$font = "sszwjt.ttf";//加载外部字体库

		imagestring($img, 18, 0, 3, $word, $gray);
		// $word = iconv('gb2312','utf-8','面对对象');
		// imagettftext($im, 18, 0, 11, 21, $gray, $font, iconv("GB2312","UTF-8",$word));   
		// for ($i=0; $i < 4; $i++) { 
			imagettftext($img, 14, 2, 5,0,$gray, $font, $word);//图片 size 角度 x y 颜色 字体库 word
		// }
		imagerectangle($img,0,0,$imgW-1,$imgH-1,$black);//画矩形
		header("Content-type: image/PNG");
		imagepng($img);
		imagedestroy($img);
	}
	showImg($resWord);
?>