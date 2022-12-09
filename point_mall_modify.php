<?php
    $num = $_GET["num"];
    $page = $_GET["page"];


    $product_name = $_POST["product_name"];
    $point = $_POST["point"];

    $con = mysqli_connect("sample1.czyc2ammdyra.us-east-1.rds.amazonaws.com", "als971023", "1q2w3e4rqQ!", "goodpang");
    $sql = "update point_mall set product_name='$product_name', point='$point'";
    $sql .= " where num=$num";
    mysqli_query($con, $sql);

    mysqli_close($con);

    echo "
	      <script>
	          location.href = 'point_mall_list.php?page=$page';
	      </script>
	  ";
?>
