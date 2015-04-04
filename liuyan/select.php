<?php 
	include("conn.php");
	$result = mysql_query("SELECT * FROM message ORDER BY id DESC");
  	while ( $row = mysql_fetch_array($result) ){
    	echo '<div class="rCon">';
		echo '<div class="rConLi">'.$row["id"]."&nbsp;".$row["main"].'</div>';
		echo '<p>'.date('Y/m/d', $row['time']).'</p><p>'.$row["author"].'</p>';
		echo "</div>";
  	}
?>