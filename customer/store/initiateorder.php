<?php
include('../../admin/dbconnect.php');
// $pid=$_GET['pid'];
			$transnum=$_POST['transnum'];
			echo $transnum;
			$qty=$_POST['select2'];
			echo $qty;
			$pname=$_POST['pname'];
			$note=$_POST['note'];
			$total=$_POST['txtDisplay'];
			$shopno=$_POST['shop'];
			$username=$_POST['username'];
			echo $username;

			$sql="INSERT INTO orders(qty, confirmation, total, note, username, product_name, shopno) VALUES('$qty', '$transnum', '$total', '$note', '$username', '$pname', '$shopno')";
			$res=executequery($sql);
			// if($res){
			// 	echo "inserted";
			// 	// header("location:index.php?pid=$pid");
			// }
			// else{
			// 	echo "error";
			// }

?>
<meta http-equiv="refresh" content="1; url=../index.php?page=reviewcart&transnum=<?php echo $transnum;?>&username=<?php echo $username;?>">

