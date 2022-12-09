<?php
    $num = $_GET["num"];
    $page = $_GET["page"];


    $product_name = $_POST["product_name"];
    $price = $_POST["price"];
    $memo = $_POST["memo"];

    $con = mysqli_connect("sample1.czyc2ammdyra.us-east-1.rds.amazonaws.com", "als971023", "1q2w3e4rqQ!", "sample");
    $sql = "update product_my set product_name='$product_name', price='$price', memo='$memo'";
    $sql .= " where num=$num";
    mysqli_query($con, $sql);

    mysqli_close($con);

    echo "
	      <script>
	          location.href = 'product_list.php?page=$page';
	      </script>
	  ";
?>
