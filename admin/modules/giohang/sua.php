<?php
include_once("config.php");
function xem($id){
	$qr = "SELECT * FROM dathang WHERE id='$id'";
	$ct =  mysql_query($qr);
	return mysql_fetch_array($ct);
	}
?>

<?php
$id = $_GET["id"];
settype($id,"int");
$row = xem($id);
?>

<?php
if(isset($_POST["btnsua"])){
	$t = $_POST["tinhtrang"];
	
	$qr = "UPDATE dathang SET thanhtoan='$t' WHERE id='$id'";
	mysql_query($qr);
	}
?>

<form action="" method="POST">
  UserName:<br>
  <input type="text" value="<?php echo $row["tendangnhap"]?>" name="ten" id="ten" disabled>
  <br>
  Product ID:<br>
  <input type="text" value="<?php echo $row["idsp"]?>" name="idsp" id="idsp" disabled><br>
  Product Name:<br>
  <input type="text" value="<?php echo $row["ProductName"]?>" name="ProductName" id="ProductName" disabled><br>
  Quanlity:<br>
  <input type="text" value="<?php echo $row["sl"]?>" name="sl" id="sl" disabled><br>
  Price:<br>
  <input type="text" value="<?php echo $row["Price"]?>"name="Price" id="Price" disabled><br>
  Amount<br>
  <input type="text" value="<?php echo $row["TongTien"]?>" name="TongTien" id="TongTien" disabled><br><br>
  <select id="tinhtrang" name="tinhtrang">
    <option <?php if($row["thanhtoan"] ==0) echo "selected='selected'";?> value="0"> Chua Thanh Toan</option>
    <option <?php if($row["thanhtoan"] ==1) echo "selected='selected'";?> value="1"> Da Thanh Toan </option>
                                </select>
  <input type="submit" value="sua" id="btnsua" name="btnsua">
</form>