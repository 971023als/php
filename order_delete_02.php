<?php

    $num   = $_GET["num"];
    $page   = $_GET["page"];

    $con = mysqli_connect("sample1.czyc2ammdyra.us-east-1.rds.amazonaws.com", "als971023", "1q2w3e4rqQ!", "sample");
    $sql = "delete from order_my where num = $num";
    mysqli_query($con, $sql);
    mysqli_close($con);

    echo "
	     <script>
	         location.href = 'order_list.php?page=$page';
	     </script>
	   ";
?>
