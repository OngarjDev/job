<?php
session_start();
require_once 'db.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $province = $_POST['province'];
    $amphur = $_POST['amphur'];
    $district = $_POST['district'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // ตรวจสอบว่ามีข้อมูลทุก field ถูกกรอกหรือไม่
    if (empty($name) || empty($email) || empty($password) || empty($cpassword)) {
        echo "<script>alert('กรุณากรอกข้อมูลให้ครบทุกช่อง');</script>";
        echo "<script>window.location.href='../view/register.php';</script>";
        exit;
    }

    $users_check = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($conn, $users_check);
    $user = mysqli_fetch_assoc($result);

    if ($user && $user['email'] === $email) {
        echo "<script>alert('อีเมลนี้มีอยู่ในระบบแล้ว');</script>";
        echo "<script>window.location.href='../view/register.php';</script>";
        exit;
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $role = 'user'; // กำหนด role ที่ต้องการ
        $query = "INSERT INTO users (username, address, province, amphoe, districts, email, password,role) VALUES ('$name', '$address', '$province', '$amphur', '$district', '$email', '$hashed_password','user')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "<script>alert('สมัครสมาชิกเรียบร้อยแล้ว');</script>";
            echo "<script>window.location.href='../view/login.php';</script>";
            exit;
        } else {
            echo "<script>alert('เกิดข้อผิดพลาดในการสมัครสมาชิก');</script>";
            echo "<script>window.location.href='../view/register.php';</script>";
            exit;
        }
    }
}
?>