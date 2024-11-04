<?php
include 'connect.php'; // Kết nối cơ sở dữ liệu
include 'header.php'; // Thêm phần đầu trang
include 'sidebar.php'; // Thêm phần sidebar

$employeeID = $_GET['this_id'];

// Truy vấn SQL để lấy dữ liệu
$getEmployeeSql = "SELECT * FROM employee WHERE employee_id = '$employeeID'";
$query = mysqli_query($conn, $getEmployeeSql);

// Kiểm tra xem có dữ liệu không trước khi lấy
$employee = mysqli_fetch_assoc($query);
?>

<div class="grid__col-10">
    <div class="container">
        <header class="header">
            <h2 class="heading">Sửa thông tin nhân viên</h2>
        </header>
        <div class="main-content">
            <!-- Hiển thị thông tin nhân viên -->
            <form class="form" action="nhanvien_edit.php" method="POST" enctype="multipart/form-data">
                <div class="form__group">
                    <label for="" class="form__label">Họ tên</label>
                    <input type="text" class="form__input" name="name" value="<?php echo $employee['name']; ?>">
                </div>
                <div class="form__group">
                    <label for="" class="form__label">Số điện thoại</label>
                    <input type="tel" class="form__input" name="phone_number" value="<?php echo $employee['phone_number']; ?>">
                </div>
                <div class="form__group">
                    <label for="" class="form__label">Email</label>
                    <input type="email" class="form__input" name="email" value="<?php echo $employee['email']; ?>">
                </div>
                <div class="form__group">
                    <label for="" class="form__label">Quê quán</label>
                    <input type="text" class="form__input" name="hometown" value="<?php echo $employee['hometown']; ?>">
                </div>
                <button class="btn" name="btn" type="submit">Sửa</button>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?> <!-- Thêm phần chân trang -->