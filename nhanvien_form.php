<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- emdbed fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- reset css  -->
    <link rel="stylesheet" href="./assets/css/reset.css">
    <!-- common css -->
    <link rel="stylesheet" type="text/css" href="./assets/css/common.css">
    <!-- embed icons -->
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.6.0/css/all.min.css">
    <title>Quản Lý Nhân Viên</title>
</head>

<body>
    <div class="main">
        <div class="grid__row">
            <div class="grid__col-2">
                <aside class="sidebar">
                    <ul class="sidebar-nav">
                        <li class="sidebar-item">
                            <a href="" class="sidebar-link">
                                <i class="fa-solid fa-house sidebar__icon"></i>
                                Trang chủ
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="" class="sidebar-link">
                                <i class="fa-solid fa-money-bill sidebar__icon"></i>
                                Lương
                                <i class="fa-solid fa-caret-down sidebar__icon-down"></i>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="" class="sidebar-link">
                                <i class="fa-solid fa-users sidebar__icon"></i>
                                Tài khoản
                                <i class="fa-solid fa-caret-down sidebar__icon-down"></i>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="" class="sidebar-link">
                                <i class="fa-solid fa-user sidebar__icon"></i>
                                Nhân viên
                                <i class="fa-solid fa-caret-down sidebar__icon-down"></i>
                            </a>
                            <ul class="subnav">
                                <li class="subnav-item">
                                    <a href="add_nhanvien.php" class="subnav-link">
                                        <i class="fa-solid fa-circle subnav__icon"></i>
                                        Thêm nhân viên
                                    </a>
                                </li>
                                <li class="subnav-item">
                                    <a href="add_nhanvien.php" class="subnav-link">
                                        <i class="fa-solid fa-circle subnav__icon"></i>
                                        Danh sách nhân viên
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a href="" class="sidebar-link">
                                <i class="fa-solid fa-sitemap sidebar__icon"></i>
                                Phòng ban
                                <i class="fa-solid fa-caret-down sidebar__icon-down"></i>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="" class="sidebar-link">
                                <i class="fa-solid fa-star sidebar__icon"></i>
                                Khen thưởng
                                <i class="fa-solid fa-caret-down sidebar__icon-down"></i>
                            </a>
                        </li>
                    </ul>
                </aside>
            </div>

            <div class="grid__col-10">
                <div class="container">
                    <header class="header">
                        <h2 class="heading">Thêm nhân viên</h2>
                    </header>
                    <div class="main-content">
                        <form class="form" action="nhanvien_form.php" method="POST" enctype="multipart/form-data">
                            <div class="form__group">
                                <label for="" class="form__label">Căn cước công dân</label>
                                <input type="text" class="form__input" name="id" placeholder="Nhập CCCD">
                            </div>
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
        </div>
    </div>
</body>

</html>

<?php
include 'connect.php'; // Nhập code từ file connect.php

// Kiểm tra form đã được submit
if (isset($_POST['btn'])) {
    // Lấy dữ liệu được nhập từ form 
    $name = $_POST['name'];
    $id = $_POST['id'];
    $phoneNumber = $_POST['phone_number'];
    $email = $_POST['email'];
    $hometown = $_POST['hometown'];

    // Câu lệnh sql để thêm dữ liệu vào database
    $sql = "INSERT INTO `employee` (`id`, `name`, `phone_number`, `email`, `hometown`) VALUES ('$id', '$name', '$phoneNumber', '$email', '$hometown');";

    // Thực hiện câu lệnh sql
    mysqli_query($conn, $sql);
    
    // Chuyển sang trang danh sách nhân viên khi thêm 1 nhân viên
    header('loaction:nhanvien_list.php');
}
?>