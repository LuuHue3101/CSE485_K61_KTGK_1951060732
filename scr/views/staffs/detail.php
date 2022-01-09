<?php
//file hiển thị thông báo lỗi
require_once 'views/commons/error.php';
?>

<h1>HIỂN THỊ CHI TIẾT DANH SÁCH GIẢNG VIÊN</h1>
<br>

<table border="1" cellspacing="0" cellpadding="8">
    <tr>
        <th>Mã giảng viên</th>
        <th>Họ và tên</th>
        <th>Ngày sinh</th>
        <th>Giới tính</th>
        <th>Trình độ</th>
        <th>Chuyên môn</th>
        <th>Học hàm</th>
        <th>Học vị</th>
        <th>Cơ quan</th>

    </tr>
    <?php if (!empty($teachers)): ?>      
        <?php foreach ($teachers AS $teacher) : ?>
            <tr>
                <td><?php echo $teacher['magv'] ?></td>
                <td><?php echo $teacher['hovaten'] ?></td>
                <td><?php echo $teacher['ngaysinh'] ?></td>
                <td><?php echo $teacher['gioitinh'] ?></td>
                <td><?php echo $teacher['trinhdo'] ?></td>
                <td><?php echo $teacher['chuyenmon'] ?></td>
                <td><?php echo $teacher['hocham'] ?></td>
                <td><?php echo $teacher['hocvi'] ?></td>
                <td><?php echo $teacher['coquan'] ?></td>
                
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="2">Không có dữ liệu</td>
        </tr>
    <?php endif; ?>
</table>