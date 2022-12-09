<?php

    $num   = $_GET["num"];
    $page   = $_GET["page"];

    $con = mysqli_connect("sample.czyc2ammdyra.us-east-1.rds.amazonaws.com", "als971023", "1q2w3e4rqQ!", "sample");
    $sql = "select * from basket_my where num = $num";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    $copied_name = $row["file_copied"];

    $sql = "delete from basket_my where num = $num";
    mysqli_query($con, $sql);
    mysqli_close($con);

    echo "
	     <script>
	         location.href = 'basket_list.php?page=$page';
	     </script>
	   ";
?>
