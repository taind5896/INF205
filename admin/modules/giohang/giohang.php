<?php
function xemhoadon(){
	$qr = "SELECT * FROM dathang";
	return mysql_query($qr);
}
?>
<style>
table, th, td {
    border: 1px solid black;
}
th, td {
    padding: 5px;
	font-size: 20px;
}
th {
    text-align: left;
}
caption{;
	}
</style>
<form method="post" action="" id="giohang"  >

<table style="width:100%" cellspacing="0" cellpadding="5">
  <center><h1>QUẢN LÝ GIỎ HÀNG<h1></center>
  <tr>
    <th>ID</th>
    <th>Tên User</th>
	 <th>ID Sản Phẩm</th>
    <th>Tên Sản Phẩm</th>
	 <th>Số Lượng</th>
    <th>Giá</th>
	 <th>Tổng Tiền</th>
	 <th>Thanh Toán</th>
	 <th>Sửa</th>
  </tr>
<?php
$row = xemhoadon();
while($hoadon = mysql_fetch_array($row)){
ob_start();
?>
  <tr>
    <td>{{id}}</td>
    <td>{{tendangnhap}}</td>
	<td>{{idsp}}</td>
    <td>{{ProductName}}</td>
	<td>{{sl}}</td>
    <td>{{Price}}</td>
	<td>{{TongTien}}</td>
	<td>{{thanhtoan}}</td>
	<td><a href="modules/giohang/sua.php?id={{id}}">sua</a></td>
  </tr>
  <?php
  $s = ob_get_clean();
      $s = str_replace("{{id}}",$hoadon["id"],$s);
	  $s = str_replace("{{tendangnhap}}",$hoadon["tendangnhap"],$s);
	  $s = str_replace("{{idsp}}",$hoadon["idsp"],$s);
	  $s = str_replace("{{ProductName}}",$hoadon["ProductName"],$s);
	  $s = str_replace("{{sl}}",$hoadon["sl"],$s);
	  $s = str_replace("{{Price}}",$hoadon["Price"],$s);
	  $s = str_replace("{{TongTien}}",$hoadon["TongTien"],$s);
	  $s = str_replace("{{thanhtoan}}",$hoadon["thanhtoan"],$s);
	  echo $s;
  }
  ?>
</table>
</form>