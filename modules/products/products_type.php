

<?php 
include('./ketnoi.php');
$vSQL_PL = "SELECT * FROM products_type WHERE ID=$vType";
$vResult_PL = mysql_query($vSQL_PL);
$rowPL = mysql_fetch_array($vResult_PL)
?>
	<h3><?php echo $rowPL["ProductTypeName"]; ?></h3>
	
	<?php 
	$vSQL = "SELECT * FROM products WHERE ProductTypeID=$vType";
	$vResult = mysql_query($vSQL);
	
	while($row = mysql_fetch_array($vResult)) {
	?>
		<div class="product_item">
			<a href="?mod=chitietsanpham&ID=<?php echo $row["ID"];?>" >	<img  class="image"src="<?php echo $row["Image"] ?>"  border="0" alt="" />
			<span>	
			<p class="chitiet">		KIỂU: &nbsp;	<?php echo $row["Kiểu"]; ?>
		</p>		
		<p class="chitiet">		KÍCH THƯỚC: &nbsp;	<?php echo $row["kichthuoc"]; ?>
			
</p>		
			</span></a>
			
		<a href="?mod=chitietsanpham&ID=<?php echo $row["ID"];?>" >
		<div class="title"><?php echo $row["ProductName"]; ?></div></a>
									<div class="price"><?php echo number_format($row['Price'],0,',','.'); ?>&nbsp;đ</div>
																		<div class="stat"><img src="images/IcoRating0.png" alt="" /></div>

					<div class="link">	<a href="?mod=them&ID=<?php echo $row["ID"];?>" >MUA HÀNG</a></div>


		</div>
	<?php } ?>
	<div class="clear"></div>
