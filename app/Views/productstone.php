<?php
include_once APPPATH . 'Views/header.php';

?>


<div class="row " style="padding-left:250px; margin-bottom:15px; margin-top:100px; font-size:25px;">
  <div class="col-8"><a style="font-size:25px;font-weight: 500;color: #2A2A2A;">ข้อมูลสินค้า อัญมณี / เพชร</a></div>
  <div class="col-1" style="margin-left:20px;"><button type="button" class="btnchxcan" style="width:150px; ">ยกเลิก</button></div>
  <div class="col-1" style="margin-left:20px;"><button type="button" id="nextstep" class="btnchxnext" style="width:150px; ">ต่อไป</button></div>
  <div class="col-1" style="margin-left:20px;"><button type="button" class="btnchxsave" style="width:150px;" id="btn_submit" onclick="insert_form()">บันทึก</button></div>
</div>

<div class="main">

  <div class="producthead">
    <div class="row">
      <div class="col-4" align="right">
        <div id="smallcircle">1</div>
      </div>
      <div class="col-1" style="padding:0px;">
        <p style="margin-top: 16px; color:#2CBAB5;">ข้อมูลทั่วไป</p>
      </div>
      <div class="col-1" style="padding-top: 15px;">
        <div id="pdot" class="pdot">....................</div>
      </div>
      <div class="col-1" style=" max-width: 4.333333%;">
        <div id="smallcirclev2">2</div>
      </div>
      <div class="col-4">
        <p style="margin-top: 16px; padding:0px; color:#dadada;" id="x" class="x">ขนาดสินค้า</p>
      </div>
    </div>
  </div>
  <form id="main_form">
    <div id="pageone" style="display:block">
      <div class="detail-grid" style=" padding-left:15px; padding-top:20px; ">
        <div class="detail-grid-item">
          <p>รูปภาพ</p>
          <div id="box" style="margin-bottom:15px; margin-left:15px;"></div>
          <div style="margin-left: 40px;"><button class="upload-btn">อัพโหลด</button></div>
          <div style="margin-left: 20px;margin-top: 10px;"><span><a style="color:red;">*</a> อัพโหลดได้สูงสุด 4 รูป</span></div>
        </div>

        <div class="detail-grid-item">
          <p>ข้อมูลทั่วไป</p>
          <div class="row">
            <div class="col-8">
              <label>รหัสอัญมณี Stone Code <a style="color:red;">*</a></label></br>
              <input type="text" id="stonecode" name="stonecode" class="form-control " placeholder="รหัสอัญมณี Stone Code">
            </div>
            <div class="col-4"></br>
              <label class="container" style="margin-top: 18px;padding-left: 18px;">สร้างรหัสอัตโนมัติ
                <input type="radio" name="radio" id="nitiCheck" onclick="myFunction()">
                <span class="checkmark" style="top: 46px;"></span>
              </label>
            </div>
          </div>

          <div class="row">
            <div class="col-6" style="max-width: 47%;">
              <label>กลุ่มอัญมณี <a style="color:red;">*</a></label></br>
              <select class="form-select smalls-input" id="product_group" name="product_group">
                <option value="" disabled selected>กรุณาเลือก</option>
              </select>

            </div>
            <div class="col-6">
              <label>ชื่ออัญมณี <a style="color:red;">*</a></label></br>
              <select class="form-select smalls-input" id="product_name" name="product_name">
                <option value="" disabled selected>กรุณาเลือก</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col-6" style="max-width: 47%;">
              <label>รูปร่าง</label></br>
              <select class="form-select smalls-input" id="product_shape" name="product_shape">
                <option value="" disabled selected>กรุณาเลือก</option>
              </select>
            </div>
            <div class="col-6">
              <label>สีอัญมณี</label></br>
              <select class="form-select smalls-input" id="product_color" name="product_color">
                <option value="" disabled selected>กรุณาเลือก</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-4" style="max-width: 31.333333%;">
              <label>Clarity</label></br>
              <select class="form-select smalls-inputv3" id="product_clarity" name="product_clarity">
                <option value="" disabled selected>กรุณาเลือก</option>
              </select>

            </div>
            <div class="col-4" style="max-width: 31.333333%;">
              <label>Cutting</label></br>
              <select class="form-select smalls-inputv3" id="product_cutting" name="product_cutting">
                <option value="" disabled selected>กรุณาเลือก</option>
              </select>
            </div>
            <div class="col-4">
              <label>คุณภาพ</label></br>
              <select class="form-select smalls-inputv3" id="product_quality" name="product_quality">
                <option value="" disabled selected>กรุณาเลือก</option>
              </select>
            </div>
          </div>

        </div>
        <div class="detail-grid-item" style="padding-left:50px;padding-top:50px;">

          <label>รายละเอียด</label></br>
          <textarea class="form-control" id="detail" name="detail" placeholder="รายละเอียด" style="width:477px;"></textarea>
        </div>
      </div>
    </div>
 

  <div id="pagetwo" style="display:none;">
    <h4>ขนาดอัญมณี</h4>
    </br>
    <div class="sizebox">
      <!-- checkbox -->
      <div class="form-check">
        <label class="containerv2" style="  padding-left:40px; margin-top:0px; width: 150px; margin-bottom: 20px;">
          <input type="checkbox" class="checkbox_type" id="check_all" onclick="check_all_btn(<?php echo count($data['item_product_type']); ?>)">
          <span class="checkmarks"></span>
          เลือกทั้งหมด
        </label>
      </div>


      <input type="hidden" id="count_type" name="count_type" value="<?php echo count($data['item_product_type']); ?>">
      <?php
      foreach ($data['item_product_type'] as $key => $value) {
      ?>
        <div class="form-check">
          <label class="containerv2" style="  padding-left:40px; margin-top:0px; width: 150px; margin-bottom: 20px;">
            <input type="checkbox" class="checkbox_type" name="<?php echo 'check' . $key; ?>" id="<?php echo 'check' . $key; ?>" value="<?php echo $value->master_name; ?>">
            <span class="checkmarks"></span>
            <?php echo $value->master_name; ?>
          </label>
        </div>
      <?php
      }

      ?>

    </div>
  </div>
  </form>
</div>



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
            <span class="checkmarks" style="left:8px;"></span>
          </label></th>
        <th scope="col">รูปภาพ</th>
        <th scope="col">กลุ่มอัญมณี</th>
        <th scope="col">รหัสอัญมณี</th>
        <th scope="col">ชื่ออัญมณี</th>
        <th scope="col">รูปทรง</th>
        <th scope="col">สีอัญมณี</th>
        <!-- <th scope="col">ขนาดอัญมณี</th>
        <th scope="col">วันที่แก้ไขล่าสุด</th> -->
        <th scope="col">สถานะ</th>
        <th scope="col">คำสั่ง</th>
      </tr>


      <?php
      foreach ($table_data as $key => $row) {
      ?>
        <tr>
          <td scope="row">
            <label class="containerv2" style="  padding-left:40px; margin-top:0px; width: 30px;">
              <?php echo $key + 1; ?>
              <input type="checkbox">
              <span class="checkmarks"></span>
            </label>
          </td>

          <td><img src="assets/image/plus.png" style="width:40.54px; width:40px;"></td>
          <td>
            <?php
            foreach ($data['gem_group'] as $item) {
              if ($row->product_group == $item->uid) {
                echo $item->master_name;
              }
            }
            ?>
          </td>
          <td>
            <?php
            echo $row->stone_code;
            ?>
          </td>
          <td>
            <?php
            foreach ($data['gem_name'] as $item) {
              if ($row->product_name == $item->uid) {
                echo $item->master_name;
              }
            }
            ?>
          </td>
          <td>
            <?php
            foreach ($data['gem_shape'] as $item) {
              if ($row->product_shape == $item->uid) {
                echo $item->master_name;
              }
            }
            ?>
          </td>
          <td>
            <?php
            foreach ($data['gem_color'] as $item) {
              if ($row->product_color == $item->uid) {
                echo $item->master_name;
              }
            }
            ?>
          </td>
          <td><label class="switch" style="margin-top:0;">
              <input type="checkbox">
              <span class="slider round"></span>
            </label></td>
          <td onclick="delete_data(<?php echo $row->uid; ?>)"><img src="assets/image/icon/action.png" style="width:40.54px; width:40px;"></td>
        </tr>


      <?php
      }
      ?>








  </div>
</div>








<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<script>
  // on window load function pure javascript
  window.onload = function() {
    let data = <?php echo json_encode($data); ?>;
    // add option to product_group
    let product_group = document.getElementById('product_group');
    for (let i = 0; i < data.gem_group.length; i++) {
      let option = document.createElement('option');
      option.value = data.gem_group[i].uid;
      option.innerHTML = data.gem_group[i].master_name;
      product_group.appendChild(option);
    }
    // add option to product_name
    let product_name = document.getElementById('product_name');
    for (let i = 0; i < data.gem_name.length; i++) {
      let option = document.createElement('option');
      option.value = data.gem_name[i].uid;
      option.innerHTML = data.gem_name[i].master_name;
      product_name.appendChild(option);
    }
    // add option to product_shape
    let product_shape = document.getElementById('product_shape');
    for (let i = 0; i < data.gem_shape.length; i++) {
      let option = document.createElement('option');
      option.value = data.gem_shape[i].uid;
      option.innerHTML = data.gem_shape[i].master_name;
      product_shape.appendChild(option);
    }
    // add option to product_color
    let product_color = document.getElementById('product_color');
    for (let i = 0; i < data.gem_color.length; i++) {
      let option = document.createElement('option');
      option.value = data.gem_color[i].uid;
      option.innerHTML = data.gem_color[i].master_name;
      product_color.appendChild(option);
    }
    // add option to product_cut
    let product_cut = document.getElementById('product_cutting');
    for (let i = 0; i < data.gem_cutting.length; i++) {
      let option = document.createElement('option');
      option.value = data.gem_cutting[i].uid;
      option.innerHTML = data.gem_cutting[i].master_name;
      product_cut.appendChild(option);
    }
    // add option to product_clarity
    let product_clarity = document.getElementById('product_clarity');
    for (let i = 0; i < data.gem_clarity.length; i++) {
      let option = document.createElement('option');
      option.value = data.gem_clarity[i].uid;
      option.innerHTML = data.gem_clarity[i].master_name;
      product_clarity.appendChild(option);
    }
    // add option to product_quality
    let product_quality = document.getElementById('product_quality');
    for (let i = 0; i < data.gem_quality.length; i++) {
      let option = document.createElement('option');
      option.value = data.gem_quality[i].uid;
      option.innerHTML = data.gem_quality[i].master_name;
      product_quality.appendChild(option);
    }

  }

  function check_all_btn(count){
    let count_type = count
    let check_all = document.getElementById('check_all');
    if (check_all.checked) {
      for (let i = 0; i < count_type; i++) {
        let check_type = document.getElementById('check' + i);
        check_type.checked = true;
      }
    } else {
      for (let i = 0; i < count_type; i++) {
        let check_type = document.getElementById('check' + i);
        check_type.checked = false;
      }
    }
  


  }

  const insert_form = () => {
    let main_form = document.getElementById('main_form');
    main_form.action = 'productstone/insert';
    main_form.method = 'post';
    main_form.submit();
  }

  const delete_data = (id) => {
    let main_form = document.getElementById('main_form');
    main_form.action = `productstone/delete/${id}`;
    main_form.method = 'post';
    main_form.submit();
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

  function myFunction() {
    var stonecode = document.getElementById("stonecode");

    if (stonecode.checked == true) {
      document.getElementById("stonecode").value = "1";
    } else {
      document.getElementById("stonecode").value = "2";
    }
  }

  $(document).ready(function() {
    $("input").keydown(function() {
      $(".btnchxsave").addClass('btnchxsaves');
      $(".btnchxsave").removeClass('btnchxsave');
      $(".btnchxsaves").removeAttr('disabled');
    });
  });
  // ------ change btn --------- //
  $("#nextstep").click(function() {
    //delete all class active
    $("#pdot").addClass("productactive");
    $("#pdot").removeClass("pdot");
    $("#x").css("color", "#2CBAB5");
    //change background color by id smallcirclev2
    $("#smallcirclev2").css("background-color", "#2CBAB5");
    //get element by id
    document.getElementById("pageone").style.display = "none";
    document.getElementById("pagetwo").style.display = "block";
  });
</script>
</body>

</html>