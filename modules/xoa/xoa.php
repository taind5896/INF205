<?php ob_start();?>
<?php
$key=$_GET["id"];
$xoa="delete from giohang where idgh='$key'";
$tt=mysql_query($xoa);
if($tt)
{
echo("<script>location.href = 'index.php?mod=giohang';</script>");
}
else "Xóa không thành công!";
?>