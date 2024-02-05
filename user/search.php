<?php
    include '../control/index.php';
    include '../view/navbar.php';
?>

<div class="container col-md-6 mx-auto">
    <div class="card mt-2">
        <div class="card-body">
            <!-- Collapse for small screens -->
            <div class="collapse mt-2" id="collapseSmall">
                <div class="col-md mt-2 ">
                    <p>ค้นหาเพิ่มเติม</p>
                    <input type="text" class='form-control' placeholder="ค้นหาเพิ่มเติม/ค้นหาเฉพาะ">
                </div>
                <div class="col-md mt-2">
                    <p> สถานที่ปฏิบัติงาน</p>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-md mt-2">
                    <p>ประเภทงาน</p>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
                    <button class="btn btn-primary" type="button">
                        ค้นหา
                    </button>
                </div>
            </div>



            <!-- Collapse for large screens -->

            <div class="collapse d-lg-block" id="collapseLarge">
                <div class="row">
                    <div class="col-md  ">
                        <p>ค้นหาเพิ่มเติม</p>
                        <input type="text" class='form-control' placeholder="ค้นหาเพิ่มเติม/ค้นหาเฉพาะ">
                    </div>
                    <div class="col-md ">
                        <p> สถานที่ปฏิบัติงาน</p>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-md ">
                        <p>ประเภทงาน</p>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
                        <button class="btn btn-primary" type="button">
                            ค้นหา
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>