<div class="danhsach">
	<h3>Danh sách thành viên - Quản lý thành viên</h3>
	<table border="1px">
		<thead>
			<tr>
				<th>STT</th>
				<th>Tên thành viên</th>
				<th>Năm sinh</th>
				<th>Quê quán</th>
				<th>Hành động</th>
			</tr>
			
		</thead>
		<tbody>
			<?php
			$stt = 1;
				foreach($data as $value){
			?>
			<tr>
				<td><?php echo $stt; ?></td>
				<td><?php echo $value['fullName']; ?></td>
				<td><?php echo $value['yearOfBirth']; ?></td>
				<td><?php echo $value['address']; ?></td>
				<td>
					<a onclick="return confirm('Bạn có chắc chắn muốn sửa không?')" href="index.php?controller=member&action=edit&id=<?php echo $value['id']; ?>">Edit</a>
					<a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="index.php?controller=member&action=delete&id=<?php echo $value['id']; ?>">Del</a>
				</td>
			</tr>
			<?php
				$stt++;
			}
			?>
		</tbody>
	</table>
	<tr>
		<td><a type="submit" name="add_user" href="index.php?controller=member&action=add">Thêm mới thành viên</a>
		</td>
	</tr>	
</div>