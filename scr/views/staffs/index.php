<?php
//file hiển thị thông báo lỗi
require_once 'views/commons/error.php';
?>
<a href="index.php?controller=staff&action=add">
    Thêm nhân viên mới
</a>
<br>

<table border="1" cellspacing="0" cellpadding="8">
    <tr>
        <th>Mã nhân viên</th>
        <th>Họ và tên</th>
        <th>Chức vụ</th>
        <th>Phòng ban</th>
        <th>Lương</th>
        <th>Ngày vào làm</th>
    </tr>
    <?php if (!empty($staffs)): ?>          <!-- bien books nay truyen tu BookController.php sang -->
        <?php foreach ($staffs AS $staff) : ?>
            <tr>
                <td><?php echo $staff['maNV'] ?></td>
                <td><?php echo $staff['hovaten'] ?></td>
                <td><?php echo $staff['chucvu'] ?></td>
                <td><?php echo $staff['phongban'] ?></td>
                <td><?php echo $staff['luong'] ?></td>
                <td><?php echo $staff['ngayvaolam'] ?></td>
                    <?php
                    //khai báo 3 url xem, sửa, xóa
                    $urlDetail =
                        "index.php?controller=staff&action=detail&maNV=" . $staff['maNV'];
                    $urlEdit =
                        "index.php?controller=staff&action=edit&maNV=" . $staff['maNV'];
                    $urlDelete =
                        "index.php?controller=staff&action=delete&maNV=" . $staff['maNV'];
                    ?>
                    <a href="<?php echo $urlDetail?>">Chi tiết</a> &nbsp;
                    <a href="<?php echo $urlEdit?>">Sửa</a> &nbsp;
                    <a onclick="return confirm('Bạn chắc chắn muốn xóa?')"
                       href="<?php echo $urlDelete?>">
                        Xóa
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="2">Không có dữ liệu</td>
        </tr>
    <?php endif; ?>
</table>