<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sửa thành viên - Quản lý thành viên</title>
</head>
<body>
	<div class="content">
		<div class="dangkythanhvien">
			<a href="index.php?controller=member&action=list" class="list">Danh sách thành viên</a>
			<h3>Cập nhật mới thành viên</h3>
			<form action="", method="POST">
				<table>
					<tr>
						<td>Tên thành viên: </td>
						<td><input type="text" name="fullName" placeholder="Họ và tên" value="<?php echo $dataID['fullName'] ?>"></td>
					</tr>
					<tr>
						<td>Năm sinh: </td>
						<td><input type="text" name="yearOfBirth" placeholder="Năm sinh" value="<?php echo $dataID['yearOfBirth'] ?>"></td>
					</tr>
					<tr>
						<td>Quê quán: </td>
						<td><input type="text" name="address" placeholder="Quê quán" value="<?php echo $dataID['address'] ?>"></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="submit" name="edit_user" value="Cập nhật"></td>
					</tr>
				</table>
			</form>
			<?php 
				if (isset($addAction) && in_array('add_success', $addAction)) {
					echo "<p style='color: green; text-align: center'>Cập nhật thành công </p>";
				}
				elseif (isset($addAction) && in_array('add_fail', $addAction)) {
					echo "<p style='color: red; text-align: center'>Cập nhật thất bại</p>";
				}
			?>
		</div>
	</div>
</body>
</html>