
<?php

$tong=0;
?>
<h3>Giỏ Hàng</h3>
 <table border="1" width="700px">
      <tr bgcolor='#ccc'>
           <td>Số lượng</td>
           <td>Hình ảnh</td>
           <td>Tên sản phẩm</td>
           <td>Giá</td>
           <td>Tổng giá</td>
           <td>Thay đổi số lượng</td>
           <td>Xóa sản phẩm</td>
      <tr>
<?php
//include('/ketnoi.php');
$username=$_SESSION["tendangnhap"];

		   $prod = "SELECT * FROM giohang WHERE  tendangnhap='$username'";
		   $prod2 = mysql_query($prod);
			while($prod3=mysql_fetch_assoc($prod2))
				{
					echo "<td>";
					echo $prod3['sl'];
					echo "</td>";
					echo "<td>";
					echo "<img src='$prod3[Image]' width=150 height=150/></td>";
					echo "<td>";
					echo $prod3['ProductName'];
					echo "</td>";
					echo "<td align='right'>";
					echo number_format($prod3['Price'],0,',','.');
					echo "</td>";
					echo "<td align='right'>";
					echo $gia=$prod3['Price'] * $prod3['sl'];
					echo "</td>";
					echo "<td>";
					echo "<form action='' method='POST'>
						<input tyle='text' name='tdsl' size='2'><br>
						<input type='hidden' name='tendangnhap' value='".$prod3['tendangnhap']."'>
						<input type='submit' name='thaydoi' value='Thay đổi số lượng'>
						</form></td>";
					echo "<td>";
					echo "<a href='?mod=xoa&id=".$prod3['idgh']."'>Xóa</a>";
					echo "</td>";
					echo "</tr>";
				$tong=$tong+$gia;
			}
?>

<tr bgcolor='#ccc'>
	<td colspan='4' align='right'>
		Tổng hóa đơn:
	</td>
	<td align='right'>
		<?php echo  number_format($tong,0,',','.');?>&nbsp đ
	</td>
	<td colspan='2'></td>
</tr>
</table>
<?php
	if (isset($_POST['thaydoi']))
		{
			$tdsl=$_POST['tdsl'];
			$id=$_POST['tendangnhap'];
			$query = "UPDATE giohang SET sl='$tdsl' WHERE tendangnhap='$id'";
			$results = mysql_query($query)
			or die(mysql_error());
				echo "Số lượng đã được thay đổi<br>";
				echo "<a href='?mod=giohang'><input type='submit' name='capnhat' value='Cập Nhật Giỏ Hàng'></a><br>'";;
		}
?>
<form method="POST" action="?mod=thanhtoan">
	<input type='submit' name='thanhtoan' value='THANH TOÁN'>
</form>
</br>
<a href="index.php">Trở về trang chủ</a>