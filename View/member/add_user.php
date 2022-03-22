<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Quản lý thành viên</title>
</head>
<body>
	<div class="content">
		<div class="dangkythanhvien">
			<a href="index.php?controller=member&action=list" class="list">Danh sách thành viên</a>
			<h3>Thêm mới thành viên</h3>
			<form action="", method="POST">
				<table>
					<tr>
						<td>Tên thành viên: </td>
						<td><input type="text" name="fullName" placeholder="Tên thành viên"></td>
					</tr>
					<tr>
						<td>Năm sinh: </td>
						<td><input type="text" name="yearOfBirth" placeholder="Năm sinh"></td>
					</tr>
					<tr>
						<td>Quê quán: </td>
						<td><input type="text" name="address" placeholder="Quê quán"></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="submit" name="add_user" value="Thêm mới"></td>
					</tr>
				</table>
			</form>
			<?php 
				if (isset($addAction) && in_array('add_success', $addAction)) {
					echo "<p style='color: green; text-align: center'>Thêm mới thành công </p>";
				}
				elseif (isset($addAction) && in_array('add_fail', $addAction)) {
					echo "<p style='color: red; text-align: center'>Thêm mới thất bại</p>";
				}
			 ?>
		</div>
	</div>
</body>
</html>