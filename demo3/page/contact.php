<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Contact - Belle &amp; Carrie Rehabilitation Yoga Web Template</title>
	<link rel="stylesheet" type="text/css" href="../asset/css/style.css">
	<link rel="stylesheet" type="text/css" href="../asset/css/mobile.css">
	<script type='text/javascript' src='../asset/js/mobile.js'></script>
</head>
<body>
<?php include "../config/constant.php"?>
<?php $detect = CONTACT ?>
	<?php include "../common/header_common.php"?>
	<div id="body">
		<h2>Contact</h2>
		<form action="index.html">
			<h3>Inquiries</h3>
			<label for="name">
				<span>Name</span>
				<input type="text" id="name">
			</label>
			<label for="email">
				<span>Email</span>
				<input type="text" id="email">
			</label>
			<label for="subject">
				<span>Subject</span>
				<input type="text" id="subject">
			</label>
			<label for="message">
				<span>Message</span>
				<textarea name="message" id="message" cols="30" rows="10"></textarea>
			</label>
			<input type="submit" id="send" value="Send">
		</form>
	</div>
	<?php include "../common/footer_common.php"?>
</body>
</html>