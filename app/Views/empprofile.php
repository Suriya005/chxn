<?php
    include_once APPPATH . 'Views/header.php';
?>


    <div class="row " style="padding-left:250px; margin-bottom:15px; margin-top:100px; font-size:25px;">
        <div class="col-9"><a style="font-size:25px;font-weight: 500;color: #2A2A2A;">ข้อมูลพนักงาน</a></div>
        <div class="col-1" style="margin-right:30px;margin-left:30px;"><button type="button" class="btnchxcan"
                style="width:150px;">ยกเลิก</button></div>
        <div class="col-1"><button id="form_action" onclick="insert_form()" type="button" class="btnchxsave" style="width:150px;"
                data-bs-toggle="modal" data-bs-target="#exampleModal">บันทึก</button></div>
    </div>

    <!-- Modal -->
    <form id="emp_form" enctype="multipart/form-data">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div align="center"><img src="assets/image/icon/question-mark.png" class="popupimg"></div>
                    <div align="center">
                        <p>บันทึก ?</p>
                    </div>
                    <div align="center"><span>ต้องการบันทึกข้อมูล php </span></div>
                    <div align="center" class="popuphr"></div>
                    <div class="row" align="center" style="margin-top:18px;">
                        <div class="col-6" align="right"><button type="button" class="popupbtncancle"
                                data-bs-dismiss="modal">ยกเลิก</button></div>
                        <div class="col-6" align="left"><button type="submit" class="popupbtnsave">บันทึก</button></div>
                    </div>
                </div>
            </div>
        </div>



        <div class="main">

            <div class="detail-grid" style=" padding-left:15px; padding-top:20px; ">

                <div class="detail-grid-item">
                     <p>รูปภาพ แก้ไข</p>
                     <img id="output"/>
                     <div class="inputfilediv">
                        <input type="file" name="image_url" id="file"  onchange="loadFile(event)"/>
                    </div>
                    <!-- <div id="circle2" style="margin-bottom:15px;"></div>
                    <div style="margin-left: 40px; font-size:20px;"><button class="upload-btn" onchange="loadFile(event)">อัพโหลด</button></div>
                    <input type="file"  accept="image/*" onchange="loadFile(event)">
                     -->

                </div>

                <div class="detail-grid-item">
                    <p>ข้อมูลทั่วไป</p>
                    <label>ชื่อ<a style="color:red;"> *</a></label></br>
                    <input type="text" id="fullname" name="fullname" class="form-control " placeholder="ชื่อ-นามสกุล">
                    <label>เบอร์โทรศัพท์</label></br>
                    <input type="text" id="tel" name="tel" class="form-control " placeholder="เบอร์โทรศัพท์">
                    <label>ชื่อสำหรับใช้งานระบบ</label></br>
                    <input type="text" id="system_name" name="system_name" class="form-control "
                        placeholder="ชื่อสำหรับใช้งานระบบ">
                    <div class="row">
                        <div class="col-6" style="max-width: 47%; ">
                            <label>อีเมล</label>
                            <input type="text" id="email" name="email" class="form-control " placeholder="อีเมล">
                        </div>
                        <div class="col-6">
                            <label>รหัสผ่าน</label>
                            <input type="password" id="password" name="password" class="form-control "
                                placeholder="รหัสผ่าน">
                        </div>
                    </div>


                </div>
                <div class="detail-grid-item" style="padding-left:50px;">
                    <p>สิทธิการเข้าถึงระบบ</p>
                    <label>สิทธิการเข้าถึงระบบ</label></br>
                    <select class="form-select" id="role_id" name="role_id">
                        <option value="" disabled selected>สิทธิการเข้าถึงระบบ</option>
                        <option value="1">Employee</option>
                        <option value="2">Admin</option>
                    </select>
                </div>

            </div>

        </div>
    </form>


    <div class="main">
        <div style=" background-color:white; padding-left:15px; padding-top:20px; ">
            <div class="row">
                <div class="col-7">
                    <p style="font-size:25px;font-weight: 500;color: #2A2A2A;">รายการ</p>
                </div>
                <div class="col-5">
                    <div class="row">
                        <div class="col-3" style="padding-left:30px; padding-top: 5px;">
                            <div class="row">
                                <div class="col-4">
                                    <img src="assets/image/icon/excel.png" style="width:31px;height:31px;">
                                </div>
                                <div class="col-4">
                                    <img src="assets/image/icon/printing.png" style="width:31px;height:31px;">
                                </div>
                                <div class="col-4">
                                    <img src="assets/image/icon/setting.png" style="width:31px;height:31px;">
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <select class="form-select" id="list" style="margin-left:30px;">
                                <option value="" disabled selected>รายการ 5</option>
                                <option>??</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <div class="input-group">
                                <img src="assets/image/icon/Search.png">
                                <input type="text" id="search" class="form-control" placeholder="Search">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <table id="maintable">
                <tr>
                    <th scope="col"><label class="containerv2"
                            style="  padding-left:40px; margin-top:0px; width: 30px;">#
                            <input type="checkbox">
                            <span class="checkmarks"></span>
                        </label></th>
                    <th scope="col">รูปภาพ</th>
                    <th scope="col">ชื่อ</th>
                    <th scope="col">ชื่อสำหรับใช้งานระบบ</th>
                    <th scope="col">อีเมล</th>
                    <th scope="col">สิทธิการเข้าถึงระบบ</tinmh>
                    <th scope="col">วันที่แก้ไขล่าสุด</th>
                    <th scope="col">สถานะ</th>
                    <th scope="col">คำสั่ง</th>
                </tr>

                <?php if($employee != null){
          foreach($employee as $row){
            echo '<tr onclick="update_form('.$row['uid'].',`'.$row['fullname'].'`,`'.$row['system_name'].'`,`'.$row['email'].'`,'.$row['role_id'].',`'.$row['tel'].'`)">';
            echo '<td scope="row">';
            echo '<label class="containerv2" style="  padding-left:40px; margin-top:0px; width: 30px;">'.$row['uid'].'
              <input type="checkbox">
              <span class="checkmarks"></span>
            </label>';
            echo '</td>';
            echo '<td><img src="assets/image/plus.png" style="width:40.54px; width:40px;"></td>';
            echo '<td>'.$row['fullname'].'</td>';
            echo '<td>'.$row['system_name'].'</td>';
            echo '<td>'.$row['email'].'</td>';
            $emp_status ="";
            if($row['role_id'] == 1){$emp_status = "employee";}elseif($row['role_id'] == 2){$emp_status = "admin";}else{$emp_status = "ไม่ทราบสถานะ";}
            echo '<td>'.$emp_status.'</td>';
            echo '<td>'.$row['last_update'].'</td>';
            echo '<td><label class="switch" style="margin-top:0;">
              <input type="checkbox">
              <span class="slider round"></span>
            </label></td>';
            echo '<td><img src="assets/image/icon/action.png" style="width:40.54px; width:40px;"></td>';
            echo '</tr>';
          }
        
        } ?>





        </div>
    </div>











    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }




    $(document).ready(function() {
        $("input").keydown(function() {
            $(".btnchxsave").addClass('btnchxsaves');
            $(".btnchxsave").removeClass('btnchxsave');
            $(".btnchxsaves").removeAttr('disabled');
        });
    });
    // ------ change btn --------- //

    function insert_form() {
        let emp_form = document.getElementById("emp_form");
        emp_form.action = "emp_profile_form/insert";
        emp_form.method = "post";
    }
    function update_form(uid, fullname, system_name, email, role_id, tel) {
        let fullname_input = document.getElementById("fullname");
        let tel_input = document.getElementById("tel");
        let system_name_input = document.getElementById("system_name");
        let email_input = document.getElementById("email");
        let role_id_input = document.getElementById("role_id");
        fullname_input.value = fullname;
        tel_input.value = tel;
        system_name_input.value = system_name;
        email_input.value = email;
        role_id_input.value = role_id;
        let form_action = document.getElementById("form_action");
        form_action.setAttribute("onclick",`update_action(${uid})`);
    }
    function update_action(id) {
        let emp_form = document.getElementById("emp_form");
        emp_form.action = `emp_profile_form/update/${id}`;
        emp_form.method = "post";
    }




    var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };

    </script>

<?php
include_once APPPATH . 'Views/footer.php';
?>