<?php
include 'connect.php'; // Kết nối cơ sở dữ liệu
include 'header.php'; // Thêm phần đầu trang
include 'sidebar.php'; // Thêm phần sidebar

// Kiểm tra form đã được submit
if (isset($_POST['btn'])) {
    // Xử lý thêm nhân viên
    $name = $_POST['name'];
    $phoneNumber = $_POST['phone_number'];
    $email = $_POST['email'];
    $hometown = $_POST['hometown'];

    $sql = "INSERT INTO `employee` (`name`, `phone_number`, `email`, `hometown`) VALUES ('$name', '$phoneNumber', '$email', '$hometown');";
    mysqli_query($conn, $sql);

    header("location:nhanvien_list.php"); // Chuyển đến danh sách nhân viên sau khi thêm
}
?>

<div class="grid__col-10">
    <div class="container">
        <header class="header">
            <h2 class="heading">Thêm nhân viên</h2>
        </header>
        <div class="main-content">
            <form class="form" action="nhanvien_form.php" method="POST" enctype="multipart/form-data">
                <div class="form__group">
                    <label for="" class="form__label">Họ tên</label>
                    <input type="text" class="form__input" name="name" placeholder="Nhập họ tên nhân viên">
                </div>
                <div class="form__group">
                    <label for="" class="form__label">Số điện thoại</label>
                    <input type="tel" class="form__input" name="phone_number" placeholder="Nhập số điện thoại">
                </div>
                <div class="form__group">
                    <label for="" class="form__label">Email</label>
                    <input type="email" class="form__input" name="email" placeholder="Nhập email">
                </div>
                <div class="form__group">
                    <label for="" class="form__label">Quê quán</label>
                    <input type="text" class="form__input" name="hometown" placeholder="Nhập nơi sinh">
                </div>
                <button class="btn" name="btn" type="submit">Thêm nhân viên</button>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?> <!-- Thêm phần chân trang -->