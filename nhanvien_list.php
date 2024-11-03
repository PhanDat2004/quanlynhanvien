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
                                    <a href="nhanvien_form.php" class="subnav-link">
                                        <i class="fa-solid fa-circle subnav__icon"></i>
                                        Thêm nhân viên
                                    </a>
                                </li>
                                <li class="subnav-item">
                                    <a href="nhanvien_list.php" class="subnav-link">
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
                    <header class="header header__list">
                        <h2 class="heading">Nhân viên</h2>
                        <a href="./nhanvien_form.php" class="btn control__btn">Thêm nhân viên</a>
                    </header>

                    <div class="main-content">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="table__header">Số CCCD</th>
                                    <th class="table__header">Tên nhân viên</th>
                                    <th class="table__header">Số điện thoại</th>
                                    <th class="table__header">Email</th>
                                    <th class="table__header">Quê quán</th>
                                    <th class="table__header">Hành Động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="table__data">037204000818</td>
                                    <td class="table__data">Phan Thành Đạt</td>
                                    <td class="table__data">0961748135</td>
                                    <td class="table__data">dat65531@gmail.com</td>
                                    <td class="table__data">Nam Định</td>
                                    <td class="table__data">
                                        <a href="" class="table__action">Sửa</a>
                                        <a href="" class="table__action">Xoá</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>