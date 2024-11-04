<?php

include 'connect.php';
include 'header.php';
include 'sidebar.php';
?>

<div class="grid__col-10">
    <div class="container">
        <header class="header">
            <h2 class="heading">Nhân viên</h2>
            <a href="./nhanvien_form.php" class="btn control__btn">Thêm nhân viên</a>
        </header>

        <div class="main-content">
            <table class="table">
                <thead>
                    <tr>
                        <th class="table__header">STT</th>
                        <th class="table__header">Mã nhân viên</th>
                        <th class="table__header">Tên nhân viên</th>
                        <th class="table__header">Số điện thoại</th>
                        <th class="table__header">Email</th>
                        <th class="table__header">Quê quán</th>
                        <th class="table__header">Hành Động</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    // Khởi tạo biến  ordinal number với giá trị ban đầu là 1
                    $ordinalNumber = 1;

                    // Câu lện sql để truy xuất dữ liệu
                    $sql = "SELECT * FROM employee";

                    // Thực thi câu lệnh sql
                    $query = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td class="table__data"> <?php echo $ordinalNumber ?> </td>
                            <td class="table__data"> <?php echo $row['employee_id'] ?> </td>
                            <td class="table__data"> <?php echo $row['name'] ?> </td>
                            <td class="table__data"> <?php echo $row['phone_number'] ?> </td>
                            <td class="table__data"> <?php echo $row['email'] ?> </td>
                            <td class="table__data"> <?php echo $row['hometown'] ?> </td>
                            <td class="table__data">
                                <a href="nhanvien_edit.php?this_id=<?php echo $row['employee_id'] ?>" class="table__action">Sửa</a>
                                <a href="delete.php?this_id=<?php echo $row['employee_id'] ?>" class="table__action">Xoá</a>
                            </td>
                        </tr>

                    <?php
                        // Tăng giá trị của biến ordinalNumber sau mỗi vòng lặp
                        $ordinalNumber++;
                    } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>