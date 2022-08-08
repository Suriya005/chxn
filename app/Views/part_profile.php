<?php
    include_once APPPATH . 'Views/header.php';
?>


<!-- ---------------------ข้อมูลทั่วไป--------------------------------- -->
<div class="row "style="padding-left:250px; margin-bottom:15px; margin-top:100px; font-size:25px;">
<div class="col-10"><a style="font-size:25px;font-weight: 500;color: #2A2A2A;">ข้อมูล คู่ค้า</a></div>
<div class="col-1"><button type="button" class="btnsaves" style="width:150px;margin-left:50px;" data-bs-toggle="modal" data-bs-target="#exampleModal" >บันทึก</button></div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    <div align="center"><img src="assets/image/icon/question-mark.png" class="popupimg"></div>
        <div align="center"><p>บันทึก ?</p></div>
        <div align="center"><span>ต้องการบันทึกข้อมูล ใช่หรือไม่</span></div>
        <div align="center" class="popuphr"></div>
        <div class="row" align="center" style="margin-top:18px;">
            <div class="col-6" align="right"><button type="button" class="popupbtncancle" data-bs-dismiss="modal">ยกเลิก</button></div>
            <div class="col-6" align="left"><button type="button" class="popupbtnsave">บันทึก</button></div>
        </div>
    </div>
  </div>
</div>


 <div class="main" >
    <div class="row" style=" padding-left:15px; padding-top:15px; ">
        <div class="col-4" >
        <div class="row" >
                    <div class="col-4" style="max-width: 27%;">
                        <p>ข้อมูลทั่วไป</p>
                    </div>
                    <div class="col-4">
                    <label class="container" style="margin-top: 0px;padding-left: 18px;">ข้อมูลทั่วไป
                      <input type="radio"  name="radio" id="normalCheck" checked onclick="myFunction()">
                        <span class="checkmark"></span>
                    </label>

                       <!-- <div class="form-check" style="padding-left:0px;">
                          <input class="cusradio" type="radio"  name="flexRadioDefault"  id="normalCheck" checked onclick="myFunction()" >
                          <label class="form-check-label" for="flexRadioDefault1" style="margin-top:5px;">ข้อมูลทั่วไป</label>
                      </div> -->
                    </div>
                    <div class="col-4">
                    <label class="container" style="margin-top: 0px;padding-left: 18px;">ข้อมูลนิติบุคคล
                      <input type="radio"  name="radio" id="nitiCheck" onclick="myFunction()">
                        <span class="checkmark"></span>
                    </label>
<!-- 
                       <div class="form-check"  style="padding-left:0px;">
                          <input class="cusradio" type="radio" name="flexRadioDefault" id="nitiCheck" onclick="myFunction()">
                          <label class="form-check-label" for="flexRadioDefault1" style="margin-top:5px;">ข้อมูลนิติบุคคล</label>
                      </div> -->
                    </div>
            </div>
        </div>
        <div class="col-4">  <p>ที่อยู่สำหรับออกใบกำกับภาษี</p></div>
        <div  class="col-4" > <p>ที่อยู่สำหรับจัดส่งสินค้า</p></div>
    </div>

<div id="tapnormal" >
  <div class="cus-grid" style=" padding-left:15px; ">
      <div class="cus-grid-item" >
                  <label>รหัสสมาชิก</label></br>
              <input type="text" id="large-inputv2" class="form-control " value="CUS-0001">
              <label>ชื่อ<a style="color:red;">*</a></label></br>
              <input type="text" id="large-inputv2" class="form-control " placeholder="ชื่อ-นามสกุล" >
              <div class="row">
                  <div class="col-4" style="max-width: 29.5%;">
                    <label>วันเกิด</label></br><img src="assets/image/icon/calendar-5.png" class="iconcarenda">
                    <input type="text" name="datefilter" class="form-control mb-2 " style="padding-left:40px;background-color: white;" value="กรุณาเลือก"  READONLY/>
                  </div>
                  <div class="col-4" style="max-width: 29.5%;">
                    <label>อายุ</label></br>
                    <select class="form-select" >
                        <option value="" disabled selected>กรุณาเลือก</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                    </select>
                  </div>
                  <div class="col-4" style="max-width: 29.5%;">
                    <label>เพศ</label></br>
                    <select class="form-select" >
                        <option value="" disabled selected>กรุณาเลือก</option>
                        <option>ชาย</option>
                        <option>หญิง</option>

                    </select>
                </div>
              </div>
              <label>อีเมล</label></br>
                  <input type="text" id="large-inputv2" class="form-control  "  placeholder="อีเมล">
            <label>เบอร์โทรศัพท์<a style="color:red;">*</a></label></br>
            <input type="text" id="large-inputv2" class="form-control "  placeholder="เบอร์โทรศัพท์">
      </div>
      <div class="cus-grid-item" >
            <label>หมายเลขบัตรประชาชน</label></br>
            <input type="text" id="large-inputv2" class="form-control " placeholder="หมายเลขบัตรประชาชน">
            <label>ที่อยู่</label></br>
            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="ที่อยู่" style="width:477px;"></textarea>
            <div class="row">
              <div class="col-6" style="max-width: 43%; ">
              <label >จังหวัด</label></br>
                    <select  class="form-select" id="small-inputv2">
                        <option value="" disabled selected>เลือกจังหวัด</option>
                        <option>ชลบุรี</option>
                        <option>กรุงเทพมหานคร</option>
                        <option>นครสวรรค์</option>
                        <option>นครปฐม</option>
                    </select>

                    <label >อำเภอ/เขต</label></br>
                    <select  class="form-select" id="small-inputv2">
                        <option value="" disabled selected>เลือกอำเภอ/เขต</option>
                        <option>test</option>
                        <option>test</option>
                        <option>test</option>
                        <option>test</option>
                    </select>
              </div>
              <div class="col-6">
              <label>ตำบล/แขวง</label></br>
                    <select  class="form-select" id="small-inputv2">
                        <option value="" disabled selected>เลือกตำบล/แขวง</option>
                        <option>test</option>
                        <option>test</option>
                        <option>test</option>
                        <option>test</option>
                    </select>
                    <label>รหัสไปรษณีย์</label></br>
                    <select  class="form-select" id="small-inputv2">
                        <option value="" disabled selected>เลือกรหัสไปรษณีย์</option>
                        <option>test</option>
                        <option>test</option>
                        <option>test</option>
                        <option>test</option>
                    </select>
              </div>
            </div>
      </div>
      <div class="cus-grid-item" >
            <!-- <div class="row">
                  <div class="col-1" style="margin-top:15px; " ><input class="red-input" type="checkbox" /></div>
                  <div class="col-10"><label class="form-check-label" for="flexCheckChecked" style="margin-bottom:60px;">ใช้ที่อยู่เดียวกับที่อยู่สำหรับออกใบกำกับภาษี</label></br></div>
            </div> -->
            <label class="containerv2" style="padding-left: 40px; color: #2CBAB5;">ใช้ที่อยู่เดียวกับที่อยู่สำหรับออกใบกำกับภาษี
              <input type="checkbox" >
                <span class="checkmarks"></span>
            </label>
            <label>อื่นๆ</label></br>
            <input type="text" id="large-inputv2" class="form-control " placeholder="กรอกรายละเอียด">

          </div>
          
      </div>
      
  </div>


  <div id="tapniti" style="display:none;">
  <div class="cus-grid" style=" padding-left:15px; ">
      <div class="cus-grid-item" >
                 
              <label>รหัสสมาชิก</label></br>
              <input type="text" id="large-inputv2" class="form-control " value="CUS-0001">
              <label>ชื่อบริษัท<a style="color:red;">*</a></label></br>
              <input type="text" id="large-inputv2" class="form-control " placeholder="ชื่อบริษัท" >
              <label>อีเมล</label></br>
              <input type="text" id="large-inputv2" class="form-control " placeholder="อีเมล" >
              <label>ชื่อผู้ติดต่อ</label></br>
              <input type="text" id="large-inputv2" class="form-control " placeholder="ชื่อผู้ติดต่อ" >

            <label>เบอร์โทรศัพท์<a style="color:red;">*</a></label></br>
            <input type="text" id="large-inputv2" class="form-control "  placeholder="เบอร์โทรศัพท์">
      </div>
      <div class="cus-grid-item" >
      <div class="row">
              <div class="col-6" style="max-width: 42%;">
              <label>หมายเลขจดทะเบียนบริษัท</label></br>
              <input type="text" id="small-inputv2" class="form-control " placeholder="หมายเลขจดทะเบียนบริษัท" >
              </div>
              <div class="col-6">
              <label>หมายเลขสาขา</label></br>
              <input type="text" id="small-inputv2" class="form-control " placeholder="หมายเลขสาขา" >
              </div>
            </div>
            <label>ที่อยู่</label></br>
            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="ที่อยู่" style="width:477px;"></textarea>
            <div class="row">
              <div class="col-6" style="max-width: 43%; ">
              <label >จังหวัด</label></br>
                    <select class="form-select" id="small-inputv2">
                        <option value="" disabled selected>เลือกจังหวัด</option>
                        <option>ชลบุรี</option>
                        <option>กรุงเทพมหานคร</option>
                        <option>นครสวรรค์</option>
                        <option>นครปฐม</option>
                    </select>

                    <label >อำเภอ/เขต</label></br>
                    <select class="form-select" id="small-inputv2">
                        <option value="" disabled selected>เลือกอำเภอ/เขต</option>
                        <option>test</option>
                        <option>test</option>
                        <option>test</option>
                        <option>test</option>
                    </select>
              </div>
              <div class="col-6">
              <label>ตำบล/แขวง</label></br>
                    <select class="form-select" id="small-inputv2">
                        <option value="" disabled selected>เลือกตำบล/แขวง</option>
                        <option>test</option>
                        <option>test</option>
                        <option>test</option>
                        <option>test</option>
                    </select>
                    <label>รหัสไปรษณีย์</label></br>
                    <select class="form-select" id="small-inputv2">
                        <option value="" disabled selected>เลือกรหัสไปรษณีย์</option>
                        <option>test</option>
                        <option>test</option>
                        <option>test</option>
                        <option>test</option>
                    </select>
              </div>
            </div>
      </div>
      <div class="cus-grid-item" >
      
           
      <!-- <div class="row">
                  <div class="col-1" style="margin-top:15px;"><input class="red-input" type="checkbox" /></div>
                  <div class="col-10"><label class="form-check-label" for="flexCheckChecked" style="margin-bottom:60px;">ใช้ที่อยู่เดียวกับที่อยู่สำหรับออกใบกำกับภาษี</label></br></div>
            </div> -->
            <label>อื่นๆ</label></br>
            <input type="text" id="large-inputv2" class="form-control " placeholder="กรอกรายละเอียด">

            
          </div>
      </div>
  </div>

</div>
</div>








<div class="main">
<div style=" background-color:white; padding-left:15px; padding-top:20px; ">
<div class="row" >
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
          <input type="text" id="search" class="form-control" placeholder="Search" >
      </div>
        </div>
    </div>
  </div>
</div>

<table >
  <tr>
      <th scope="col"><label class="containerv2" style="  padding-left:40px; margin-top:0px; width: 30px;">#
              <input type="checkbox" >
                <span class="checkmarks"></span>
            </label></th>
      <th scope="col">ประเภทลูกค้า</th>
      <th scope="col">รหัสสมาชิก</th>
      <th scope="col">ชื่อ/ชื่อบริษัท</th>
      <th scope="col">อีเมล</th>
      <th scope="col">line ID</th>
      <th scope="col">เบอร์โทรศัพท์</th>
      <th scope="col">วันที่แก้ไขล่าสุด</th>
      <th scope="col">สถานะ</th>
      <th scope="col">คำสั่ง</th>
  </tr>
  <tr>
      <td scope="row">
      <label class="containerv2" style="  padding-left:40px; margin-top:0px; width: 30px;">1
              <input type="checkbox" >
                <span class="checkmarks"></span>
            </label>
      </td>
      <td>บุคคลทั่วไป</td>
      <td>CUS-0001</td>
      <td>จัสติน บีเบอร์</td>
      <td>Justin@gmail.com</td>
      <td>Justin12</td>
      <td>088-881-3457</td>
      <td>24/04/2565</td>
      <td><label class="switch" style="margin-top:0;">
        <input type="checkbox">
          <span class="slider round"></span>
        </label></td>
      <td><img src="assets/image/icon/action.png" style="width:40.54px; width:40px;" ></td>
  </tr>
  <tr>
      <td scope="row">
      <label class="containerv2" style=" padding-left:40px; margin-top:0px; width: 30px;">2
              <input type="checkbox" >
                <span class="checkmarks"></span>
            </label>
      </td>
      <td>บุคคลทั่วไป</td>
      <td>CUS-0001</td>
      <td>จัสติน บีเบอร์</td>
      <td>Justin@gmail.com</td>
      <td>Justin12</td>
      <td>088-881-3457</td>
      <td>24/04/2565</td>
      <td><label class="switch" style="margin-top:0;">
        <input type="checkbox">
          <span class="slider round"></span>
        </label></td>
      <td><img src="assets/image/icon/action.png" style="width:40.54px; width:40px;" ></td>
  </tr>
  <tr>
      <td scope="row">
      <label class="containerv2" style=" padding-left:40px; margin-top:0px; width: 30px;">3
              <input type="checkbox" >
                <span class="checkmarks"></span>
            </label>
      </td>
      <td>บุคคลทั่วไป</td>

      <td>CUS-0001</td>
      <td>จัสติน บีเบอร์</td>
      <td>Justin@gmail.com</td>
      <td>Justin12</td>
      <td>088-881-3457</td>
      <td>24/04/2565</td>
      <td><label class="switch" style="margin-top:0;">
        <input type="checkbox">
          <span class="slider round"></span>
        </label></td>
      <td><img src="assets/image/icon/action.png" style="width:40.54px; width:40px;" ></td>
  </tr>
</table>


</div>
</div>













<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
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

function myFunction() {
  var niticheck = document.getElementById("nitiCheck");
  var tapniti = document.getElementById("tapniti");
  var normalcheck = document.getElementById("normalCheck");
  var tapnormal = document.getElementById("tapnormal");
  if (niticheck.checked == true){
    tapniti.style.display = "block";
    tapnormal.style.display = "none";
  }
  else if(normalcheck.checked == true){
    tapniti.style.display = "none";
    tapnormal.style.display = "block";
  }
}


$(function() {

$('input[name="datefilter"]').daterangepicker({
    autoUpdateInput: false,
    locale: {
        cancelLabel: 'Clear'
    }
});

$('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
    $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
});

$('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
    $(this).val('');
});

});

$(document).ready(function(){
  $("input").keydown(function(){
    $(".btnchxsave").addClass('btnchxsaves');
    $(".btnchxsave").removeClass('btnchxsave');
    $(".btnchxsaves").removeAttr('disabled');
  });
});
// ------ change btn --------- //

</script>
</body>
</html>