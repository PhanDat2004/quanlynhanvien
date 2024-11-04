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


// Xử lý sửa thông tin nhân viên khi nhấn nút
if (isset($_POST['btn'])) {
    // Lấy thông tin được nhập từ input
    $name = $_POST['name'];
    $phoneNumber = $_POST['phone_number'];
    $email = $_POST['email'];
    $hometown = $_POST['hometown'];

    // Câu lệnh sql thực hiện việc cập nhật thông tin nhân viên trong bảng employee
    $updateEmployeeSql = "UPDATE `employee` SET `name` = '$name', `phone_number` = '$phoneNumber',
     `email` = '$email', `hometown` = '$hometown'  WHERE `employee`.`employee_id` = '$employeeID'";

    // Thực thi câu lệnh SQL cập nhật thông tin trong bảng empolyee 
    mysqli_query($conn, $updateEmployeeSql);

    header('location:nhanvien_list.php'); // Quay lại trang nhanvien_list.php
}
?>

<div class="grid__col-10">
    <div class="container">
        <header class="header">
            <h2 class="heading">Sửa thông tin nhân viên</h2>
        </header>
        <div class="main-content">
            <!-- Hiển thị thông tin nhân viên -->
            <form class="form" action="nhanvien_edit.php?this_id=<?php echo $employeeID; ?>" method="POST" enctype="multipart/form-data">
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