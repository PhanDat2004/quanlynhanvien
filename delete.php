<?php
include 'connect.php';
$id = $_GET['this_id'];

// câu lệnh sql thực hiện việc xoá dữ liệu trong database
$sql = "DELETE FROM employee WHERE `employee`.`employee_id` = '$id'";

// thực hiện lệnh sql 
mysqli_query($conn, $sql);

// Quay về trang nhanvien_list.php khi thực hiện xoá 1 nhân viên
header('location:nhanvien_list.php');
