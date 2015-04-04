<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>留言板</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<script type="text/javascript" src="../../../jquery/jquery.min.js"></script>
	<script type="text/javascript" src="js/ajax.js"></script>
</head>
<body>
<div id="main">
	<div id="left">
		<form id="message" name="message">
			<p>
				<label for="user">昵称：</label>
				<input type="text" name="user" id="user"  />
			</p>
			<p>
				<label for="mail">邮箱：</label>
				<input type="text" name="mail" id="mail"  />
			</p>
			<label for="con">内容：</label>
			<textarea name="con" id="con" cols="30" rows="15" ></textarea>
			<p>
				<button type="reset" id="reset" name="reset">重置</button>
				<button type="" id="sub" name="sub">确定</button>
			</p>
		</form>
	</div>
	<div id="right">
		<h1>往事</h1>	
		<div id="conMain">	
			<?php
				include("select.php");
			?>
		</div>
	</div>
</div>
</body>
</html>