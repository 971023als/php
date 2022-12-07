<?php require('lib/top.php'); ?>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/main.css">
<link rel="stylesheet" href="./css/bootstrap.min.css">
<link rel="stylesheet" href="./css/bar.css">

<body>
	
		<?php
		if (!$userid )
		{
			echo("<script>
					alert('로그인 후 이용해주세요!');
					history.go(-1);
					</script>
				");
			exit;
		}
		?>
	<section>
	    <?php include "point_mall_main.php";?>
	</section>
		<script src="js/jquery-2.1.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<?php require('lib/bottom.php'); ?>
