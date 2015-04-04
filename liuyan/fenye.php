<?php 
	include("conn.php");
	if( isset($_GET['page']) ){// 获取当前页
  		$page = intval( $_GET['page'] );
	}else{
  		$page = 1;
	} 
	$pageSize = 6; // 每页条数
	$sql = "SELECT count(*) AS amount FROM message";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	$all = $row['amount']; // 获取总条数
	if ($all) {
		if ($all < $pageSize){
			$curNum = 1;// 总页数
		}else{
			if ($all % $pageSize == 0) {
				$curNum = $all / $pageSize;
			}else{
				$curNum = floor($all / $pageSize) + 1;
			}
		}
	}else{
		echo "亲，没有数据吧！";
	}
	if($all){
		$a = ($page-1)*$pageSize;
  		$result = mysql_query("SELECT * FROM message ORDER BY id DESC LIMIT $a,$pageSize");
  		while ( $row = mysql_fetch_array($result) ){
    		echo '<div class="rCon">';
			echo '<div class="rConLi">'.$row["id"]."&nbsp;".$row["main"].'</div>';
			echo '<p>'.date('Y/m/d', $row['time']).'</p><p>'.$row["author"].'</p>';
			echo "</div>";
  		}
	}else{
  		$rowset = array();
	}
	echo '<div id="pageNav"><ul>';
	for ($i=0; $i < $curNum; $i++) {	
		echo '<li class="' . ($i+1) . '"><a href=?page='.($i+1).'>' . ($i+1) . '</a></li>';	
	}
	echo '</ul></div>';// 利用get传值
	mysql_close($conn);
?>