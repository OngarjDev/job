<?php
    include '../control/index.php';
    include '../view/navbar.php';
?>
<div class="container col-md-8 mx-auto">
    <div class="row">
        <div class="col">
            <h3 class="mt-4 ml-auto">จัดการประเภท</h3>
        </div>
        <div class="col-auto mt-4">
            <p>จำนวนประเภททั้งหมด ผปแ</p>
        </div>
    </div>
    <hr>
    <div class="row g-3">
        <div class="col">
            <select class="form-select" aria-label="Default select example">
                <option selected>เลือกประเภท</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="col-md-3 d-flex justify-content-end">
            <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline"
                placeholder="เพิ่มประเภท">
            <button type="button" class="btn btn-primary ms-2">เพิ่ม</button>
        </div>
    </div>




    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ชื่อประเภท</th>
                <th scope="col">จำนวน/บริษัท</th>
                <th scope="col">จัดการ</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>จำนวน</td>
                <td><button type="button" class="btn btn-danger">ลบ</button></td>
            </tr>

        </tbody>
    </table>
</div>