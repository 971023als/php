<meta charset='utf-8'>

<?php

	$num = $_GET["num"];

	$mode = $_GET["mode"];



	$con = mysqli_connect("sample1.czyc2ammdyra.us-east-1.rds.amazonaws.com", "als971023", "1q2w3e4rqQ!", "sample");


	$sql = "delete from message where num=$num";

	mysqli_query($con, $sql);



	mysqli_close($con);                // DB 연결 끊기



	if($mode == "send")

		$url = "./message_box.php?mode=send";

	else

		$url = "./message_box.php?mode=rv";



	echo "

	<script>

		location.href = '$url';
	</script>

	";

?>

  
