<?php
session_start();
include 'db.php';

if (isset($_POST['save_changes'])) {
    // รับข้อมูลผู้ใช้จาก input
    $editname = $_POST['editname'];
    $editemail = $_POST['editemail'];
    $editednumber = $_POST['editnumber'];
    $editaddress = $_POST['editaddress'];

    // อัปเดตข้อมูลผู้ใช้ในฐานข้อมูลโดยใช้คำสั่งเตรียมพร้อม
    $updateQuery = "UPDATE users SET username = ?, email = ?, number = ?, address = ? WHERE id = ?";
    $stmt = $conn->prepare($updateQuery);
    $stmt->bind_param("ssssi", $editname, $editemail, $editednumber, $editaddress, $_SESSION['id']);
    echo $stmt->execute();
    if ($stmt->execute()) {
        // อัปเดตฐานข้อมูลสำเร็จ

        // จัดการอัปโหลดรูปภาพ
        if (isset($_FILES["avatarInput"]) && $_FILES["avatarInput"]["error"] == 0) {
            // จัดการโลจิกการอัปโหลดไฟล์
            $targetDir = "../img/";
            $targetFile = $targetDir . basename($_FILES["avatarInput"]["name"]);

            // ตรวจสอบประเภทของไฟล์, ขนาดของไฟล์, และอื่น ๆ

            if (move_uploaded_file($_FILES["avatarInput"]["tmp_name"], $targetFile)) {
                // อัปเดต URL รูปภาพในฐานข้อมูล
                $imageUrl = "../img/" . basename($_FILES["avatarInput"]["name"]);
                $updateImageQuery = "UPDATE users SET img = '$imageUrl' WHERE id = {$_SESSION['id']}";

                if ($conn->query($updateImageQuery) !== TRUE) {
                    echo "เกิดข้อผิดพลาดในการอัปเดตรูปภาพ: " . $conn->error;
                }
            } else {
                echo "เกิดข้อผิดพลาดในการอัปโหลดไฟล์.";
            }
        }

        // echo "<script>alert('อัปเดตสำเร็จ'); window.location.href = '../user/profile.php';</script>";
        // exit;
    } else {
        // ข้อผิดพลาดฐานข้อมูล
        // error_log("เกิดข้อผิดพลาดในการอัปเดตรายละเอียดผู้ใช้: " . $stmt->error);
        // echo "ไม่สามารถอัปเดตข้อมูลผู้ใช้ได้ กรุณาลองอีกครั้ง.";
    }

    // $stmt->close();
}
?>
