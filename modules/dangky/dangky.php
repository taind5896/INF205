<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
?>
<h3>Đăng ký</h3>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
	if($_REQUEST['dangky'])
	{
		$tendangnhap=$_REQUEST['tendangnhap'];
		$matkhau=$_REQUEST['matkhau'];
		$hoten=$_REQUEST['hoten'];
				$email=$_REQUEST['email'];
				$dienthoai=$_REQUEST['dienthoai'];
				$diachi=$_REQUEST['diachi'];

		$sql="select * from thanhvien where tendangnhap='$tendangnhap'";
		$rs=mysql_query($sql) or die("Không select được");
		if(mysql_num_rows($rs))
		{
			echo"<script>alert('Tên đăng nhập này đã được sử dụng. Bạn cần chọn 1 tên khác');</script>";
		}
		else
		{
			$sql="insert thanhvien(tendangnhap,matkhau,hoten,email,dienthoai,diachi) values('$tendangnhap','$matkhau','$hoten','$email','$dienthoai','$diachi')";
			$rs=mysql_query($sql) or die("Không chèn được DL");
			echo"<script>alert('Chúc mừng bạn đã là thành viên của JoliBobi. Mời bạn đăng nhập theo tài khoản đã đăng ký'); location='?mod=dangnhap';</script>";
		}
	}
?>
<form id="frmdangky" name="frmdangky"  method="post" onsubmit="return frmdangkyform()">
  <table width="80%" height="181" border="1" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="2" align="center">ĐĂNG KÝ </td>
    </tr>
    <tr>
      <td>Tên đăng nhập: </td>
      <td><label>
        <input name="tendangnhap" type="text" id="tendangnhap">
      </label></td>
    </tr>
    <tr>
      <td>Mật khẩu: </td>
      <td><label>
        <input name="matkhau" type="text" id="matkhau">
      </label></td>
    </tr>
   
    <tr>
  <td>Họ tên: </td>
      <td><label>
        <input name="hoten" type="text" id="hoten">
      </label></td>
    </tr>
	 <tr>
  <td>Địa chỉ: </td>
      <td><label>
        <input name="diachi" type="text" id="diachi">
      </label></td>
    </tr>
	 <tr>
  <td>Email: </td>
      <td><label>
        <input name="email" type="text" id="email">
      </label></td>
    </tr>
	 <tr>
  <td>Điện thoại: </td>
      <td><label>
        <input name="dienthoai" type="text" id="dienthoai">
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input name="dangky" type="submit" id="dangky" value="Đăng ký">
      </label></td>
    </tr>
  </table>
</form>
<script language="javascript">
															
								function frmdangkyform()
											{
													
												regEx = /^\s*$/;
												regExMail = /^(([\-\w]+)\.?)+@(([\-\w]+)\.?)+\.[a-zA-Z]{2,4}$/;
													
												
													if(regEx.test(document.frmdangky.tendangnhap.value))
												{
													alert('Nhập tên đăng nhập!');
													document.frmdangky.tendangnhap.focus();
													return false;
												}
												if(regEx.test(document.frmdangky.matkhau.value))
												{
													alert('Nhập mật khẩu!');
													document.frmdangky.matkhau.focus();
													return false;
												}
												if(regEx.test(document.frmdangky.hoten.value))
												{
												
													alert('Nhập họ và tên!');
													document.frmdangky.hoten.focus();
													return false;
												}
												if(regEx.test(document.frmdangky.diachi.value))
												{
													alert('Nhập địa chỉ liên hệ!');
													document.frmdangky.diachi.focus();
													return false;
												}
												
												if(regEx.test(document.frmdangky.dienthoai.value))
												{
													alert('Nhập số điện thoại!');
													document.frmdangky.dienthoai.focus();
													return false;
												}
												if(!regExMail.test(document.frmdangky.email.value))
												{
													alert('Nhập email đúng định dạng liên hệ!');
													document.frmdangky.email.focus();
													return false;
												}
											
													
												
													
												
												
												if(document.frmdangky.title.value.length>60)
												{
													alert('Please enter < 60 character!');
													document.frmdangky.title.focus();
													return false;
												}
												
												if(document.frmdangky.message.value.length>500)
												{
													alert('Please enter < 500 character!');
													document.frmdangky.message.focus();
													return false;
												}
												
												
											
											}
											function count()
												{
													document.frmdangky.txtcount.value=500-document.frmdangky.message.value.length;
													
												}
													 
							</script>