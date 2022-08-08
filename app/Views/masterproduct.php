<?php
    include_once APPPATH . 'Views/header.php';
?>

<div class="main">
<div style=" background-color:white; padding-left:20px; ">
<div class="row">
            <div class="col-9"> <p style=" margin-bottom:15px;padding-top:15px; font-size:25px">ข้อมูลสินค้า อัญมณี/เพชร</p></div>
            <div class="col-3" style=" margin-bottom:15px;padding-top:15px;"> <button type="button" class="btnchx" style="margin-right:20px; width:150px; ">ยกเลิก</button><button type="button" class="btnchx" style="width:150px;" data-bs-toggle="modal" data-bs-target="#exampleModal">บันทึก</button></div>
        </div>


<div align="center"><a >1 ข้อมูลทั่วไป ....... 2 ขนาดสินค้า</a><hr></div>
</br>
    <div class="row">
        <div class="col-2">
             <p>รูปภาพ</p>
             <div id="box" style="margin-bottom:15px; margin-left:15px;"></div>
            <div style="margin-left: 50px;"><button class="upload-btn">อัพโหลด</button></div>
            <div style="margin-left: 28px;"><span><a style="color:red;">*</a> อัพโหลดได้สูงสุด 4 รูป</span></div>
        </div>

        <div class="col-5">
             <p>ข้อมูลทั่วไป</p>
             <div class="row">
                 <div class="col-8">
                 <lebel>รหัสอัญมณี Stone Code <a style="color:red;">*</a></lebel></br>
                    <input type="text" class="form-control mb-2" placeholder="รหัสอัญมณี Stone Code">
                 </div>
                 <div class="col-4"></br>
                 <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">สร้างรหัสอัติโนมัต</label>
                </div>
                 </div>
             </div>

             <div class="row">
                 <div class="col-6">
                 <lebel>กลุ่มอัญมณี <a style="color:red;">*</a></lebel></br>
                    <input type="text" class="form-control mb-2" placeholder="กลุ่มอัญมณี">
                 </div>
                 <div class="col-6">
                 <lebel>ชื่ออัญมณี <a style="color:red;">*</a></lebel></br>
                    <input type="text" class="form-control mb-2" placeholder="ชื่ออัญมณี">
                 </div>
             </div>

             <div class="row">
                 <div class="col-6">
                 <lebel>รูปร่าง</lebel></br>
                    <input type="text" class="form-control mb-2" placeholder="รูปร่าง">
                 </div>
                 <div class="col-6">
                 <lebel>สีอัญมณี</lebel></br>
                    <input type="text" class="form-control mb-2" placeholder="สีอัญมณี">
                 </div>
             </div>
             <div class="row">
                 <div class="col-4">
                 <lebel>Clarity</lebel></br>
                    <input type="text" class="form-control mb-2" placeholder="Clarity">
                 </div>
                 <div class="col-4">
                 <lebel>Cutting</lebel></br>
                    <input type="text" class="form-control mb-2" placeholder="Cutting">
                 </div>
                 <div class="col-4">
                 <lebel>คุณภาพ</lebel></br>
                    <input type="text" class="form-control mb-2" placeholder="คุณภาพ">
                 </div>
             </div>

        </div>

        <div class="col-4"></br></br>
             <lebel>รายละเอียด</lebel></br>
             <input type="text" class="form-control mb-2" style="height:90px;" placeholder="รายละเอียด">
        </div>
    </div>
</br>

</div>
</div>

<!-- -------------------------main------------------------------------ -->
<div class="main">
<div style=" background-color:white; padding-left:15px; ">
<h2 style=" margin-bottom:30px; padding-top:30px">รายการ</h2>
<table id="maintable">
  <thead>
    <tr>
    <th scope="col"><label class="containerv2" style="  padding-left:40px; margin-top:0px; width: 30px;">#
              <input type="checkbox" >
                <span class="checkmarks"></span>
            </label></th>
      <th scope="col">รหัส Code</th>
      <th scope="col">ชื่อ</th>
      <th scope="col">รายละเอียด</th>
      <th scope="col">วันที่แก้ไขล่าสุด</th>
      <th scope="col">สถานะ</th>
      <th scope="col">คำสั่ง</th>
    </tr>
  </thead>
  <tbody>
   <tr>
   <th scope="row"><label class="containerv2" style="  padding-left:40px; margin-top:0px; width: 30px;">1
              <input type="checkbox" >
                <span class="checkmarks"></span>
            </label></th>
      <td>BG-01</td>
      <td>กำไลข้อมือ</td>
      <td>กำไลสวนข้อมือ</td>
      <td>24/04/2565</td>
      <td><div class="form-check form-switch"><input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked></div></td>
      <td><img src="assets/image/icon/action.png" style="width:40.54px; width:40px;" ></td>
    </tr>
    <tr>
   <th scope="row"><label class="containerv2" style="  padding-left:40px; margin-top:0px; width: 30px;">2
              <input type="checkbox" >
                <span class="checkmarks"></span>
            </label></th>
      <td>BG-01</td>
      <td>กำไลข้อมือ</td>
      <td>กำไลสวนข้อมือ</td>
      <td>24/04/2565</td>
      <td><div class="form-check form-switch"><input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked></div></td>
      <td><img src="assets/image/icon/action.png" style="width:40.54px; width:40px;" ></td>
    </tr>
    <tr>
   <th scope="row"><label class="containerv2" style="  padding-left:40px; margin-top:0px; width: 30px;">3
              <input type="checkbox" >
                <span class="checkmarks"></span>
            </label></th>
      <td>BG-01</td>
      <td>กำไลข้อมือ</td>
      <td>กำไลสวนข้อมือ</td>
      <td>24/04/2565</td>
      <td><div class="form-check form-switch"><input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked></div></td>
      <td><img src="assets/image/icon/action.png" style="width:40.54px; width:40px;" ></td>
    </tr>
   
  </tbody>
</table>
</div>
</div>











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


</script>
</body>
</html>