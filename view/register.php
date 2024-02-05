<?php
    session_start();
    include '../control/index.php';
    include '../view/navbar.php';
    require_once '../config/db.php';
?>

<div class="container col-12 col-md-3 ">
    <div class="card mt-5">
        <div class="card-body p-3">
            <h4 class="card-title text-center mb-5 mt-2">สมัครสมาชิกสำหรับบริษัท</h4>
            <form action="../config/register.php" method="post">
                <div class="mb-3">
                    <input type="text" class="form-control" id="name" name="name" placeholder="ชื่อบริษัท">
                </div>
                <div class="mb-3">
                    <textarea type="text" class="form-control" id="address" name="address"
                        placeholder="ที่อยู่โดยละเอียด"> </textarea>
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" name="province" id="province">
                        <option selected>จังหวัด</option>
                        <option value="1">กรุงเทพมหานคร</option>
                        <option value="2">เชียงใหม่</option>
                    </select>
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" name="amphur" id="amphur">
                        <option selected>อำเภอ</option>
                        <option value="1">เมืองสมุทรปราการ
                        </option>
                        <option value="2">พระประแดง</option>
                    </select>
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" 
                        name="district" id="district">
                        <option selected>ตำบล</option>
                        <option value="1">ลาดกระบัง</option>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="อีเมล">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="รหัสผ่าน">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="cpassword" name="cpassword"
                        placeholder="ยืนยันรหัสผ่าน">
                </div>

                <div class="d-grid gap-2 col-6 mx-auto mt-5">
                    <button class="btn btn-primary" name="submit" type="submit">สมัครสมาชิก</button>
                </div>
            </form>
            <p class="mt-5 text-center">เป็นสมาชิกอยู่แล้ว? <a href="login.php">เข้าสู่ระบบ</a></p>
        </div>
    </div>
</div>