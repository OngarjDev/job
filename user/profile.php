<?php
   session_start();
   include '../control/index.php';
   include('../config/db.php');
   include '../view/navbar.php';
?>

<div class="container col-md-8 py-3">
    <div class="row">
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body text-center">
                <?php
// ตัวอย่างการดึงค่าจากฐานข้อมูล
$query = $conn->query("SELECT * FROM users WHERE id = {$_SESSION['id']}");
if ($query->num_rows > 0) {
    $row = $query->fetch_assoc();
    $img = "../img/" . $row['img'];
} else {
    $img = "../img/";
}
?>

<img id="avatarImage" src="<?php echo $img ?>" alt="avatar" class="rounded img-fluid" style="width: 500px;">



                    <form method="post" action="../config/editprofile.php" enctype="multipart/form-data">
                        <input type="file" class="form-control mt-3" id="avatarInput" name="avatarInput"
                            accept="image/*" style="display: none;">

                        <p class="text-muted mb-1 mt-3" id="roleText">Full Stack Developer</p>

                        <div id="roleContainer"></div>
                        </form>
                </div>
            </div>

        </div>
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">ข้อมูลบริษัท</h5>
                        <button type="button" class="btn btn-primary btn-sm" onclick="editProfile()">
                            แก้ไขข้อมูล
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <!-- แสดง label ข้อมูล -->
                    <?php $sql= "SELECT * FROM users WHERE id = {$_SESSION['id']} ";
                       $result=  $conn-> query($sql );
                       $row = $result->fetch_assoc();
                       ?>
                    <p id="companyNameLabel">ชื่อบริษัท: <?php echo $row ['username']; ?></p>
                    <p id="companyEmailLabel">อีเมล: <?php echo $row ['email']; ?></p>
                    <p id="companyPhoneLabel">เบอร์โทรศัพท์: <?php echo $row ['number']; ?></p>
                    <p id="companyAddressLabel">ที่อยู่: <?php echo $row ['address']; ?></p>

                    <form method="post" action="../config/editprofile.php">
                        <input type="text" class="form-control" name="editname" id="editCompanyName"
                            value="<?php echo $row['username']; ?>" style="display: none;">
                        <input type="text" class="form-control" name="editemail" id="editCompanyEmail"
                            value="<?php echo $row['email']; ?>" style="display: none;">
                        <input type="text" class="form-control" name="editnumber" id="editCompanyPhone"
                            value="<?php echo $row['number']; ?>" style="display: none;">
                        <input type="text" class="form-control" name="editaddress" id="editCompanyAddress"
                            value="<?php echo $row['address']; ?>" style="display: none;">


                        <!-- เพิ่มปุ่มบันทึก -->
                        <!-- เพิ่ม name ให้กับปุ่มบันทึก -->
                        <button type="submit" class="btn btn-success" name="save_changes" style="display: none;"
                            id="saveChangesButton">บันทึก</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- ... (ส่วนที่เหลือถูกเก็บไว้) ... -->

    <script>
    function editProfile() {
        // ซ่อน label และแสดง input
        document.getElementById('companyNameLabel').style.display = 'none';
        document.getElementById('companyEmailLabel').style.display = 'none';
        document.getElementById('companyPhoneLabel').style.display = 'none';
        document.getElementById('companyAddressLabel').style.display = 'none';

        document.getElementById('editCompanyName').style.display = 'block';
        document.getElementById('editCompanyEmail').style.display = 'block';
        document.getElementById('editCompanyPhone').style.display = 'block';
        document.getElementById('editCompanyAddress').style.display = 'block';

        // แสดงปุ่มบันทึก
        document.getElementById('saveChangesButton').style.display = 'block';

        // แสดงปุ่มแก้ไขรูปที่ซ่อนไว้
        document.getElementById('avatarInput').style.display = 'block';

        // เปลี่ยน <p> เป็น <select>
        var roleText = document.getElementById('roleText');
        var roleSelect = document.createElement('select');
        roleSelect.className = 'form-control';
        roleSelect.id = 'editRole';
        var roles = ['Full Stack Developer', 'Frontend Developer', 'Backend Developer', 'DevOps Engineer',
            'UI/UX Designer'
        ];

        // สร้าง <option> สำหรับแต่ละตำแหน่ง
        for (var i = 0; i < roles.length; i++) {
            var option = document.createElement('option');
            option.value = roles[i];
            option.text = roles[i];

            // ตรวจสอบว่าตำแหน่งปัจจุบันตรงกับตำแหน่งในรายการหรือไม่
            if (roles[i] === roleText.innerText) {
                option.selected = true;
            }

            roleSelect.appendChild(option);
        }

        // แทรก <select> ลงในตำแหน่งที่ต้องการ
        var roleContainer = document.getElementById('roleContainer');
        roleContainer.innerHTML = '';
        roleContainer.appendChild(roleSelect);
    }

    function saveChanges() {
        // ดึงข้อมูลจาก input
        var form = document.getElementById('profileForm');
        var formData = new FormData(form);
        var editedName = document.getElementById('editCompanyName').value;
        var editedEmail = document.getElementById('editCompanyEmail').value;
        var editedPhone = document.getElementById('editCompanyPhone').value;
        var editedAddress = document.getElementById('editCompanyAddress').value;

        // แสดงข้อมูลใน label และซ่อน input
        document.getElementById('companyNameLabel').innerHTML = 'ชื่อบริษัท: ' + editedName;
        document.getElementById('companyEmailLabel').innerHTML = 'อีเมล: ' + editedEmail;
        document.getElementById('companyPhoneLabel').innerHTML = 'เบอร์โทรศัพท์: ' + editedPhone;
        document.getElementById('companyAddressLabel').innerHTML = 'ที่อยู่: ' + editedAddress;

        document.getElementById('companyNameLabel').style.display = 'block';
        document.getElementById('companyEmailLabel').style.display = 'block';
        document.getElementById('companyPhoneLabel').style.display = 'block';
        document.getElementById('companyAddressLabel').style.display = 'block';

        document.getElementById('editCompanyName').style.display = 'none';
        document.getElementById('editCompanyEmail').style.display = 'none';
        document.getElementById('editCompanyPhone').style.display = 'none';
        document.getElementById('editCompanyAddress').style.display = 'none';

        // ซ่อนปุ่มบันทึก
        document.getElementById('saveChangesButton').style.display = 'none';

        // ซ่อน <select> และ <input> ที่แสดงตำแหน่งงาน
        var roleSelect = document.getElementById('editRole');
        roleSelect.style.display = 'none';

        // ซ่อน input รูปภาพ
        document.getElementById('avatarInput').style.display = 'none';
        document.getElementById('avatarImage').style.display = 'none';

        // เรียกฟังก์ชัน editAvatar() เพื่ออัปโหลดรูปภาพใหม่
        editAvatar();
        fetch('../config/editprofile.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                console.log(data); // ตรวจสอบผลลัพธ์ใน Console
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }

    function editAvatar() {
        // เปิด input element สำหรับอัปโหลดรูปภาพ
        var avatarInput = document.getElementById('avatarInput');
        avatarInput.click();

        // เพิ่ม event listener เพื่อตรวจจับการเลือกรูปภาพ
        avatarInput.addEventListener('change', function() {
            // แสดงรูปภาพที่ถูกเลือก
            displaySelectedImage(avatarInput);
        });
    }

    function displaySelectedImage(input) {
        // ตรวจสอบว่ามีการเลือกรูปภาพหรือไม่
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                // แสดงรูปภาพที่ถูกเลือก
                document.getElementById('avatarImage').src = e.target.result;
                document.getElementById('avatarImage').style.display = 'block'; // แสดงรูปภาพ
            };

            // อ่านข้อมูลรูปภาพ
            reader.readAsDataURL(input.files[0]);
        }
    }
    </script>

    </script>
    <?php
    include '../user/postin.php';
?>

</div>