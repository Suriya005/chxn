<?php
include_once APPPATH . 'Views/header.php';
?>




<div class="row " style="padding-left:250px; margin-bottom:15px; margin-top:100px; font-size:25px;">
  <div class="col-9"><a style="font-size:25px;font-weight: 500;color: #2A2A2A;">มาสเตอร์ ขนาดสินค้า</a></div>
  <div class="col-3"><button type="button" class="btnchxcan" style="margin-right:20px; width:150px; ">ยกเลิก</button><button type="button" class="btnchxsave" style="width:150px;" data-bs-toggle="modal" data-bs-target="#exampleModal" disabled>บันทึก</button></div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div align="center"><img src="assets/image/icon/question-mark.png" class="popupimg"></div>
      <div align="center">
        <p>บันทึก ?</p>
      </div>
      <div align="center"><span>ต้องการบันทึกข้อมูล ใช่หรือไม่</span></div>
      <div align="center" class="popuphr"></div>
      <div class="row" align="center" style="margin-top:18px;">
        <div class="col-6" align="right"><button type="button" class="popupbtncancle" data-bs-dismiss="modal">ยกเลิก</button></div>
        <div class="col-6" align="left"><button type="button" onclick="form_submit()" class="popupbtnsave">บันทึก</button></div>
      </div>
    </div>
  </div>
</div>

<div class="main">
  <div style="background-color:white; padding-left:30px; ">
    <div class="row" style="padding-top:20px; ">
      <div class="col-4">
        <p>ข้อมูลทั่วไป</p>
        <form action="<?= base_url('master/itemproductsize/insert') ?>" method="post" id="form_item_product_size">
          <lebel>รหัส Code <a style="color:red;">*</a></lebel></br>
          <input type="text" id="code" name="code" class="form-control " placeholder="รหัส Code">
          <lebel>ชื่อ</lebel></br>
          <input type="text" id="name" name="name" class="form-control " placeholder="ชื่อ">
          <lebel>รายละเอียด</lebel></br>
          <textarea class="form-control" name="detail" placeholder="รายละเอียด" style="width:477px; height:128px;"></textarea>
      </div>
      <div class="col-8" id="size-border" style="height: 455px;">
        <p>ประเภทสินค้า</p>
        <div class="form-check">
          <label class="containerv2" style="  padding-left:40px; margin-top:0px; width: 150px;">เลือกทั้งหมด
            <input type="checkbox" id="select_all" onclick="all_btn()">
            <span class="checkmarks"></span>
          </label>
        </div>

        <div class="form-check">
          <label class="containerv2" style="  padding-left:40px; margin-top:0px; width: 150px;">ต่างหู
            <input type="checkbox" name="earring" id="earring">
            <span class="checkmarks"></span>
          </label>
        </div>

        <div class="form-check">
          <label class="containerv2" style="  padding-left:40px; margin-top:0px; width: 150px;">สร้อย
            <input type="checkbox" name="necklace" id="necklace">
            <span class="checkmarks"></span>
          </label>
        </div>

        <div class="form-check">
          <label class="containerv2" style="  padding-left:40px; margin-top:0px; width: 150px;">แหวน
            <input type="checkbox" name="ring" id="ring">
            <span class="checkmarks"></span>
          </label>
        </div>

        <div class="form-check">
          <label class="containerv2" style="  padding-left:40px; margin-top:0px; width: 150px;">กำไลข้อมือ
            <input type="checkbox" name="bangle" id="bangle">
            <span class="checkmarks"></span>
          </label>
        </div>

        <div class="form-check">
          <label class="containerv2" style="  padding-left:40px; margin-top:0px; width: 150px;">กำไลข้อเท้า
            <input type="checkbox" name="anklet" id="anklet">
            <span class="checkmarks"></span>
          </label>
        </div>

        </form>

      </div>
    </div>

  </div>
</div>



<!-- -------------------------main------------------------------------ -->


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
        <th scope="col"><label class="containerv2" style="  padding-left:40px; margin-top:0px; width: 30px;">#
            <input type="checkbox">
            <span class="checkmarks"></span>
          </label></th>
        <th scope="col">รหัส Code</th>
        <th scope="col">ชื่อ</th>
        <th scope="col">รายละเอียด</th>
        <th scope="col">วันที่แก้ไขล่าสุด</th>
        <th scope="col">สถานะ</th>
        <th scope="col">คำสั่ง</th>
      </tr>

      <tr>
        <td scope="row">
          <label class="containerv2" style="  padding-left:40px; margin-top:0px; width: 30px;">1
            <input type="checkbox">
            <span class="checkmarks"></span>
          </label>
        </td>
        <td>BG-01</td>
        <td>กำไลข้อมือ</td>
        <td>กำไลสวมข้อมือ</td>
        <td>24/04/2565</td>
        <td><label class="switch" style="margin-top:0;">
            <input type="checkbox">
            <span class="slider round"></span>
          </label></td>
        <td><img src="assets/image/icon/action.png" style="width:40.54px; width:40px;"></td>
      </tr>

      <tr>
        <td scope="row">
          <label class="containerv2" style="  padding-left:40px; margin-top:0px; width: 30px;">2
            <input type="checkbox">
            <span class="checkmarks"></span>
          </label>
        </td>
        <td>BG-01</td>
        <td>กำไลข้อมือ</td>
        <td>กำไลสวมข้อมือ</td>
        <td>24/04/2565</td>
        <td><label class="switch" style="margin-top:0;">
            <input type="checkbox">
            <span class="slider round"></span>
          </label></td>
        <td><img src="assets/image/icon/action.png" style="width:40.54px; width:40px;"></td>
      </tr>

      <tr>
        <td scope="row">
          <label class="containerv2" style="  padding-left:40px; margin-top:0px; width: 30px;">3
            <input type="checkbox">
            <span class="checkmarks"></span>
          </label>
        </td>
        <td>BG-01</td>
        <td>กำไลข้อมือ</td>
        <td>กำไลสวมข้อมือ</td>
        <td>24/04/2565</td>
        <td><label class="switch" style="margin-top:0;">
            <input type="checkbox">
            <span class="slider round"></span>
          </label></td>
        <td><img src="assets/image/icon/action.png" style="width:40.54px; width:40px;"></td>
      </tr>

      <tr>
        <td scope="row">
          <div class="row">
            <div class="col-1">
              <input class="red-input" type="checkbox" />
            </div>
            <div class="col-1">
              <a>1</a>
            </div>
          </div>
        </td>
        <td>BG-01</td>
        <td>กำไลข้อมือ</td>
        <td>กำไลสวมข้อมือ</td>
        <td>24/04/2565</td>
        <td><label class="switch" style="margin-top:0;">
            <input type="checkbox">
            <span class="slider round"></span>
          </label></td>
        <td><img src="assets/image/icon/action.png" style="width:40.54px; width:40px;"></td>
      </tr>
    </table>

  </div>
</div>







<script>
  function all_btn() {
    const select_all = document.getElementById('select_all')
    if (document.getElementById('select_all').checked) {
      document.getElementById('earring').checked = true;
      document.getElementById('necklace').checked = true;
      document.getElementById('bangle').checked = true;
      document.getElementById('ring').checked = true;
      document.getElementById('anklet').checked = true;

    } else {
      document.getElementById('earring').checked = false;
      document.getElementById('necklace').checked = false;
      document.getElementById('bangle').checked = false;
      document.getElementById('ring').checked = false;
      document.getElementById('anklet').checked = false;
    }
  }






  function form_submit() {
    var form = document.getElementById("form_item_product_size");
    form.submit();
  }

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
</script>


<?php
include_once APPPATH . 'Views/footer.php';
?>