<?php
    include '../control/index.php';
    include '../view/navbar.php';
?>
<div class="container col-md-8 mx-auto">
    <div class="card mt-2 collapse d-lg-block" id="collapseLarge">
        <div class="card-body">
            <div>
                <div class="row">
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
                    <div class="col-md  ">
                        <p>ค้นหาเพิ่มเติม</p>
                        <input type="text" class='form-control' placeholder="ค้นหาเพิ่มเติม/ค้นหาเฉพาะ">
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



<div class="container mx-auto">
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Offcanvas right</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">สถานที่ปฏิบัติงาน</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-5">
                    <label for="exampleInputPassword1" class="form-label">ประเภทงาน</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">คำที่ต้องการค้นหา</label>
                    <input type="text" class='form-control' placeholder="ชื่อบริษัทหรือตำแหน่งงาน">
                </div>

                <div class="mx-auto col-2 mt-2">
                    <button class="btn btn-primary" type="button">
                        ค้นหา
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container mx-auto">
    <div class="mt-5">
        <h5>ตำแหน่งงาน ทั้งหมด พบ 261 ตำแหน่งงาน ชื่อตำแแหน่ง</h5>
    </div>
    <hr>
    <div class="row">
        <!--  -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    ชื่อบริษัท
                </div>
                <div class="row g-0 p-2">
                    <div class="row g-0">
                        <div class="col-md-2 col-sm-2 col-xs-2 ms-3 ">
                            <div class="card text-center">
                                <div class="card-body d-flex align-items-center justify-content-end">
                                    <div class="aspect-ratio ratio-4x4">
                                        <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/company-logo-design-template-e089327a5c476ce5c70c74f7359c5898_screen.jpg?ts=1672291305"
                                            class="img-fluid rounded " alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row col-md-10 ">
                            <div class="card-body ">
                                <h5 class="card-title">ชื่อตำแหน่งงาน</h5>
                                <p class="card-text"><i class="bi bi-shop"></i> จังหวัด</p>
                                <p class="card-text"> <i class="bi bi-coin"></i> เงินเดือน</p>
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-primary" type="button">Button</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="card mt-2">
                <div class="card-header">
                    ชื่อบริษัท
                </div>
                <div class="row g-0 p-2">
                    <div class="row g-0">
                        <div class="col-md-2 col-sm-2 col-xs-2 ms-3 ">
                            <div class="card text-center">
                                <div class="card-body d-flex align-items-center justify-content-end">
                                    <div class="aspect-ratio ratio-4x4">
                                        <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/company-logo-design-template-e089327a5c476ce5c70c74f7359c5898_screen.jpg?ts=1672291305"
                                            class="img-fluid rounded " alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row col-md-10 ">
                            <div class="card-body ">
                                <h5 class="card-title">ชื่อตำแหน่งงาน</h5>
                                <p class="card-text"><i class="bi bi-shop"></i> จังหวัด</p>
                                <p class="card-text"> <i class="bi bi-coin"></i> เงินเดือน</p>
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-primary" type="button">Button</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>