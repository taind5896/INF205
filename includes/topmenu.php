<?php include_once("includes/dangnhap.php");

if($vModule=='logout') {
	abc();
}
?>
<div id="dangnhap">
<div id="top">

	<div id="bg-menu">

<ul>
	
	<?
        	if(!$_SESSION['tendangnhap'])
			{
		?>
        <li align="center" text-color:"#fff"><strong><a href="?mod=dangnhap">Đăng nhập </a></strong></li>-
        <li align="center"><strong><a href="?mod=dangky">Đăng ký</a></strong></li>
		<?
			}
			else
			{
		?>
        <li colspan="2" align="center">Xin chào: <?=$_SESSION['tendangnhap']?>&nbsp-&nbsp[<a href="?mod=thongtintaikhoan">Thông Tin Tài Khoản</a>] &nbsp-&nbsp[<a href="?mod=logout">Đăng xuất</a>]</li>
		<?
			}
		?>

	</ul>
	
	</div>
</div>
</div><div class="clear"></div>

