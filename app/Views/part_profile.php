<?php
include_once APPPATH . 'Views/header.php';
?>


<!-- ---------------------ข้อมูลทั่วไป--------------------------------- -->
<div class="row " style="padding-left:250px; margin-bottom:15px; margin-top:100px; font-size:25px;">
  <div class="col-9"><a style="font-size:25px;font-weight: 500;color: #2A2A2A;">ข้อมูล ลูกค้า</a></div>
  <div class="col-1" style="margin-right:30px;margin-left:30px;"><button type="button" class="btnchxcan" style="width:150px;">ยกเลิก</button></div>
  <div class="col-1"><button type="button" class="btnchxsave" style="width:150px;" onclick="insert_form()" id="submit_btn" data-bs-toggle="modal" data-bs-target="#exampleModal">บันทึก</button></div>
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
        <div class="col-6" align="left"><button type="button" onclick="submit_form()" class="popupbtnsave">บันทึก</button></div>
      </div>
    </div>
  </div>
</div>


<div class="main">
  <form id="main_form">
    <div class="row" style=" padding-left:15px; padding-top:15px; ">
      <div class="col-4">
        <div class="row">
          <div class="col-4" style="max-width: 27%;">
            <p>ข้อมูลทั่วไป</p>
            <input type="hidden" id="hiddentap" name="customer_type" value="บุคคลทั่วไป">
          </div>
          <div class="col-4">
            <label class="container" style="margin-top: 0px;padding-left: 18px;">ข้อมูลทั่วไป
              <input type="radio" name="radio" id="normalCheck" checked onclick="myFunction()">
              <span class="checkmark"></span>
            </label>

            <!-- <div class="form-check" style="padding-left:0px;">
                          <input class="cusradio" type="radio"  name="flexRadioDefault"  id="normalCheck" checked onclick="myFunction()" >
                          <label class="form-check-label" for="flexRadioDefault1" style="margin-top:5px;">ข้อมูลทั่วไป</label>
                      </div> -->
          </div>
          <div class="col-4">
            <label class="container" style="margin-top: 0px;padding-left: 18px;">ข้อมูลนิติบุคคล
              <input type="radio" name="radio" id="nitiCheck" onclick="myFunction()">
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
      <div class="col-4">
        <p>ที่อยู่สำหรับออกใบกำกับภาษี</p>
      </div>
      <div class="col-4">
        <p>ที่อยู่สำหรับจัดส่งสินค้า</p>
      </div>
    </div>

    <div id="tapnormal">
      <div class="cus-grid" style=" padding-left:15px; ">
        <div class="cus-grid-item">
          <label>รหัสสมาชิก</label></br>
          <input type="text" id="customer_id" class="form-control " name="customer_id" placeholder="CUS-0001">
          <label>ชื่อ<a style="color:red;">*</a></label></br>
          <input type="text" id="fullname" class="form-control " name="fullname" placeholder="ชื่อ-นามสกุล">
          <div class="row">
            <div class="col-4" style="max-width: 29.5%;">
              <label>วันเกิด</label></br><img src="assets/image/icon/calendar-5.png" class="iconcarenda">
              <input type="date" class="form-control mb-2 " style="padding-left:35px;background-color: white;" id="birthday" name="birthday">
            </div>
            <div class="col-4" style="max-width: 29.5%;">
              <label>อายุ</label></br>
              <select class="form-select" id="age" name="age">
                <option value="" disabled selected>กรุณาเลือก</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
              </select>
            </div>
            <div class="col-4" style="max-width: 29.5%;">
              <label>เพศ</label></br>
              <select class="form-select" id="gender" name="gender">
                <option value="" disabled selected>กรุณาเลือก</option>
                <option value="male">ชาย</option>
                <option value="female">หญิง</option>
                <option value="lgbt">ทางเลือก</option>

              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-6" style="max-width: 42.5%;">
              <label>อีเมล</label></br>
              <input type="text" id="email" class="form-control  " name="email" placeholder="อีเมล">
            </div>
            
          </div>
          <label>เบอร์โทรศัพท์<a style="color:red;">*</a></label></br>
          <input type="text" id="tel" class="form-control " name="tel" placeholder="เบอร์โทรศัพท์">
        </div>
        <div class="cus-grid-item">
          <label>หมายเลขบัตรประชาชน</label></br>
          <input type="text" id="id_card_number" class="form-control " name="id_card_number" placeholder="หมายเลขบัตรประชาชน">
          <label>ที่อยู่</label></br>
          <textarea class="form-control" placeholder="ที่อยู่" id="address_nomal" name="address_nomal" style="width:477px;"></textarea>
          <div class="row">
            <div class="col-6" style="max-width: 43%; ">
              <label>จังหวัด</label></br>
              <select class="form-select" name="province" id="province" onchange="select_amphures()">
                <option value="" disabled selected>เลือกจังหวัด</option>

              </select>

              <label>อำเภอ/เขต</label></br>
              <select class="form-select" name="distric" id="distric" onchange="select_tambons()">
                <option value="" disabled selected>เลือกอำเภอ/เขต</option>


              </select>
            </div>
            <div class="col-6">
              <label>ตำบล/แขวง</label></br>
              <select class="form-select" name="sub_distric" id="sub_distric" onchange="select_poscode()">
                <option value="" disabled selected>เลือกตำบล/แขวง</option>


              </select>
              <label>รหัสไปรษณีย์</label></br>
              <select class="form-select" name="posnum" id="posnum">
                <option value="" disabled selected>เลือกรหัสไปรษณีย์</option>


              </select>
            </div>
          </div>
        </div>
        <div class="cus-grid-item">
          <!-- <div class="row">
                  <div class="col-1" style="margin-top:15px; " ><input class="red-input" type="checkbox" /></div>
                  <div class="col-10"><label class="form-check-label" for="flexCheckChecked" style="margin-bottom:60px;">ใช้ที่อยู่เดียวกับที่อยู่สำหรับออกใบกำกับภาษี</label></br></div>
            </div> -->
          <label class="containerv2" style="padding-left: 40px; color: #2CBAB5;">ใช้ที่อยู่เดียวกับที่อยู่สำหรับออกใบกำกับภาษี
            <input type="checkbox" name="check_tex_address" id="check" checked>
            <span class="checkmarks"></span>
          </label>
          <div class="additionalcheck" id="additionalcheck" style="display:none;">
            <label>ที่อยู่</label></br>
            <textarea class="form-control" id="address_delivery" placeholder="ที่อยู่" name="address_delivery" style="width:477px;"></textarea>
            <div class="row">
              <div class="col-6" style="max-width: 43%; ">
                <label>จังหวัด</label></br>
                <select class="form-select" name="province_deliver" id="province_deliver" onchange="select_amphures_deliver()">
                  <option value="" disabled selected>เลือกจังหวัด</option>

                </select>

                <label>อำเภอ/เขต</label></br>
                <select class="form-select" name="distric_deliver" id="distric_deliver" onchange="select_tambons_deliver()">
                  <option value="" disabled selected>เลือกอำเภอ/เขต</option>


                </select>
              </div>
              <div class="col-6">
                <label>ตำบล/แขวง</label></br>
                <select class="form-select" name="sub_distric_deliver" id="sub_distric_deliver" onchange="select_poscode_deliver()">
                  <option value="" disabled selected>เลือกตำบล/แขวง</option>


                </select>
                <label>รหัสไปรษณีย์</label></br>
                <select class="form-select" name="posnum_deliver" id="posnum_deliver">
                  <option value="" disabled selected>เลือกรหัสไปรษณีย์</option>


                </select>
              </div>
            </div>
          </div>
          <label>อื่นๆ</label></br>
          <input type="text" id="additional" name="additional" class="form-control " placeholder="กรอกรายละเอียด">

        </div>

      </div>

    </div>


    <div id="tapniti" style="display:none;">
      <div class="cus-grid" style=" padding-left:15px; ">
        <div class="cus-grid-item">

          <label>รหัสสมาชิก</label></br>
          <input type="text" id="company_id" class="form-control " name="company_id" placeholder="CUS-0001">
          <label>ชื่อบริษัท<a style="color:red;">*</a></label></br>
          <input type="text" id="company_name" class="form-control " name="company_name" placeholder="ชื่อบริษัท">
          <label>อีเมล</label></br>
          <input type="email" id="email_niti" class="form-control " name="email_niti" placeholder="อีเมล">
          <label>ชื่อผู้ติดต่อ</label></br>
          <input type="text" id="fullname_niti" class="form-control " name="fullname_niti" placeholder="ชื่อผู้ติดต่อ">

          <label>เบอร์โทรศัพท์<a style="color:red;">*</a></label></br>
          <input type="text" id="tel_niti" class="form-control " name="tel_niti" placeholder="เบอร์โทรศัพท์">
        </div>
        <div class="cus-grid-item">
          <div class="row">
            <div class="col-6" style="max-width: 42%;">
              <label>หมายเลขจดทะเบียนบริษัท</label></br>
              <input type="text" id="company_registation_id" class="form-control " name="company_registation_id" placeholder="หมายเลขจดทะเบียนบริษัท">
            </div>
            <div class="col-6">
              <label>หมายเลขสาขา</label></br>
              <input type="text" id="company_branch_id" class="form-control " name="company_branch_id" placeholder="หมายเลขสาขา">
            </div>
          </div>
          <label>ที่อยู่</label></br>
          <textarea class="form-control" id="address_niti" placeholder="ที่อยู่" name="address_niti" style="width:477px;"></textarea>
          <div class="row">
            <div class="col-6" style="max-width: 43%; ">
              <label>จังหวัด</label></br>
              <select class="form-select" name="province_niti" id="province_niti" onchange="select_amphures_niti()">
                <option value="" disabled selected>เลือกจังหวัด</option>

              </select>

              <label>อำเภอ/เขต</label></br>
              <select class="form-select" name="distric_niti" id="distric_niti" onchange="select_tambons_niti()">
                <option value="" disabled selected>เลือกอำเภอ/เขต</option>


              </select>
            </div>
            <div class="col-6">
              <label>ตำบล/แขวง</label></br>
              <select class="form-select" name="sub_distric_niti" id="sub_distric_niti" onchange="select_poscode_niti()">
                <option value="" disabled selected>เลือกตำบล/แขวง</option>


              </select>
              <label>รหัสไปรษณีย์</label></br>
              <select class="form-select" name="posnum_niti" id="posnum_niti">
                <option value="" disabled selected>เลือกรหัสไปรษณีย์</option>


              </select>
            </div>
          </div>
        </div>
        <div class="cus-grid-item">
          <!-- <div class="row">
                  <div class="col-1" style="margin-top:15px; " ><input class="red-input" type="checkbox" /></div>
                  <div class="col-10"><label class="form-check-label" for="flexCheckChecked" style="margin-bottom:60px;">ใช้ที่อยู่เดียวกับที่อยู่สำหรับออกใบกำกับภาษี</label></br></div>
            </div> -->
          <label class="containerv2" style="padding-left: 40px; color: #2CBAB5;">ใช้ที่อยู่เดียวกับที่อยู่สำหรับออกใบกำกับภาษี
            <input type="checkbox" name="check2" id="check2" checked>
            <span class="checkmarks"></span>
          </label>
          <div class="additionalcheck2" id="additionalcheck2" style="display:none;">
            <label>ที่อยู่</label></br>
            <textarea class="form-control" id="address_delivery_niti" placeholder="ที่อยู่" name="address_delivery_niti" style="width:477px;"></textarea>
            <div class="row">
              <div class="col-6" style="max-width: 43%; ">
                <label>จังหวัด</label></br>
                <select class="form-select" name="province_deliver_niti" id="province_deliver_niti" onchange="select_amphures_niti_deliver()">
                  <option value="" disabled selected>เลือกจังหวัด</option>

                </select>

                <label>อำเภอ/เขต</label></br>
                <select class="form-select" name="distric_deliver_niti" id="distric_deliver_niti" onchange="select_tambons_niti_deliver()">
                  <option value="" disabled selected>เลือกอำเภอ/เขต</option>


                </select>
              </div>
              <div class="col-6">
                <label>ตำบล/แขวง</label></br>
                <select class="form-select" name="sub_distric_deliver_niti" id="sub_distric_deliver_niti" onchange="select_poscode_niti_deliver()">
                  <option value="" disabled selected>เลือกตำบล/แขวง</option>


                </select>
                <label>รหัสไปรษณีย์</label></br>
                <select class="form-select" name="posnum_deliver_niti" id="posnum_deliver_niti">
                  <option value="" disabled selected>เลือกรหัสไปรษณีย์</option>


                </select>
              </div>
            </div>
          </div>
          <label>อื่นๆ</label></br>
          <input type="text" id="additional_niti" name="additional_niti" class="form-control " placeholder="กรอกรายละเอียด">

        </div>
      </div>
    </div>

</div>
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
            <span class="checkmarks"></span>
          </label></th>
        <th scope="col">ประเภทลูกค้า</th>
        <th scope="col">รหัสสมาชิก</th>
        <th scope="col">ชื่อ/ชื่อบริษัท</th>
        <th scope="col">อีเมล</th>
        <th scope="col">line ID</th>
        <th scope="col">เบอร์โทรศัพท์</th>
        <th scope="col">สถานะ</th>
        <th scope="col">คำสั่ง</th>
      </tr>

      <?php
      foreach ($customer as $row) {
        $edit_data = array($row);
        $js_array = json_encode($edit_data, JSON_UNESCAPED_UNICODE);
        // replace double quotes with single quotes in the json
        $js_parameter = str_replace('"', "'", $js_array);
      ?>
        <tr onclick="edit_data(<?= $js_parameter ?>)">
          <td scope="row">
            <label class="containerv2" style="  padding-left:40px; margin-top:0px; width: 30px;">1
              <input type="checkbox">
              <span class="checkmarks"></span>
            </label>
          </td>
          <td>
            <?php
            if ($row->customer_type == 'personal') {
              echo "บุคคลทั่วไป";
            } else if ($row->customer_type == 'company') {
              echo "นิติบุคคล";
            }
            ?>
          </td>
          <td>
            <?php if ($row->customer_type == 'personal') {
              echo $row->customer_id;
            } else {
              echo $row->customer_id;
            } ?>
          </td>
          <td>
            <?php echo $row->fullname; ?>
          </td>
          <td>
            <?php echo $row->email; ?>
          </td>
          <td>
            <?php if ($row->customer_type == 'personal') {
              echo $row->line_id;
            } else {
              echo '-';
            } ?>
          </td>
          <td>
            <?php echo $row->tel; ?>
          </td>
          <td><label class="switch" style="margin-top:0;">
              <input type="checkbox">
              <span class="slider round"></span>
            </label></td>
          <td onclick="delete_data(<?= $row->uid ?>)"><img src="assets/image/icon/action.png" style="width:40.54px; width:40px;"></td>
        </tr>

      <?php
      }
      ?>




    </table>
    </form>

  </div>
</div>





<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<script>
  window.onload = function() {

    // จังหวัด json file
    // path json public/assets/json/province.json
    $.getJSON("<?= base_url('assets/json/thai_provinces.json') ?>", function(data) {
      $.each(data.RECORDS, function(key, value) {
        $("#province").append("<option value='" + value.id + "'>" + value.name_th + "</option>");
        $("#province_deliver").append("<option value='" + value.id + "'>" + value.name_th + "</option>");
        $("#province_niti").append("<option value='" + value.id + "'>" + value.name_th + "</option>");
        $("#province_deliver_niti").append("<option value='" + value.id + "'>" + value.name_th + "</option>");
      });
    });
  }

  function select_amphures() {
    var province_id = $("#province").val();
    $("#distric").empty();
    $.getJSON("<?= base_url('assets/json/thai_amphures.json') ?>", function(data) {
      $.each(data.RECORDS, function(key, value) {
        if (value.province_id == province_id) {
          $("#distric").append("<option value='" + value.id + "'>" + value.name_th + "</option>");
        }
      });
    });
  }

  function select_amphures_deliver() {
    var province_id = $("#province_deliver").val();
    $("#distric_deliver").empty();
    $.getJSON("<?= base_url('assets/json/thai_amphures.json') ?>", function(data) {
      $.each(data.RECORDS, function(key, value) {
        if (value.province_id == province_id) {
          $("#distric_deliver").append("<option value='" + value.id + "'>" + value.name_th + "</option>");
        }
      });
    });
  }

  function select_amphures_niti() {
    var province_id = $("#province_niti").val();
    $("#distric_niti").empty();
    $.getJSON("<?= base_url('assets/json/thai_amphures.json') ?>", function(data) {
      $.each(data.RECORDS, function(key, value) {
        if (value.province_id == province_id) {
          $("#distric_niti").append("<option value='" + value.id + "'>" + value.name_th + "</option>");
        }
      });
    });
  }

  function select_amphures_niti_deliver() {
    var province_id = $("#province_deliver_niti").val();
    $("#distric_deliver_niti").empty();
    $.getJSON("<?= base_url('assets/json/thai_amphures.json') ?>", function(data) {
      $.each(data.RECORDS, function(key, value) {
        if (value.province_id == province_id) {
          $("#distric_deliver_niti").append("<option value='" + value.id + "'>" + value.name_th + "</option>");
        }
      });
    });
  }

  function select_tambons() {
    var distric_id = $("#distric").val();
    $("#sub_distric").empty();
    $.getJSON("<?= base_url('assets/json/thai_tambons.json') ?>", function(data) {
      $.each(data.RECORDS, function(key, value) {
        if (value.amphure_id == distric_id) {
          $("#sub_distric").append("<option value='" + value.id + "'>" + value.name_th + "</option>");
        }
      });
    });
  }

  function select_tambons_deliver() {
    var distric_id = $("#distric_deliver").val();
    $("#sub_distric_deliver").empty();
    $.getJSON("<?= base_url('assets/json/thai_tambons.json') ?>", function(data) {
      $.each(data.RECORDS, function(key, value) {
        if (value.amphure_id == distric_id) {
          $("#sub_distric_deliver").append("<option value='" + value.id + "'>" + value.name_th + "</option>");
        }
      });
    });
  }

  function select_tambons_niti() {
    var distric_id = $("#distric_niti").val();
    $("#sub_distric_niti").empty();
    $.getJSON("<?= base_url('assets/json/thai_tambons.json') ?>", function(data) {
      $.each(data.RECORDS, function(key, value) {
        if (value.amphure_id == distric_id) {
          $("#sub_distric_niti").append("<option value='" + value.id + "'>" + value.name_th + "</option>");
        }
      });
    });
  }

  function select_tambons_niti_deliver() {
    var distric_id = $("#distric_deliver_niti").val();
    $("#sub_distric_deliver_niti").empty();
    $.getJSON("<?= base_url('assets/json/thai_tambons.json') ?>", function(data) {
      $.each(data.RECORDS, function(key, value) {
        if (value.amphure_id == distric_id) {
          $("#sub_distric_deliver_niti").append("<option value='" + value.id + "'>" + value.name_th + "</option>");
        }
      });
    });
  }

  function select_poscode() {
    var sub_distric_id = $("#sub_distric").val();
    $("#posnum").empty();
    $.getJSON("<?= base_url('assets/json/thai_tambons.json') ?>", function(data) {
      $.each(data.RECORDS, function(key, value) {
        if (value.id == sub_distric_id) {
          $("#posnum").append("<option value='" + value.zip_code + "'>" + value.zip_code + "</option>");
        }
      });
    });
  }

  function select_poscode_deliver() {
    var sub_distric_id = $("#sub_distric_deliver").val();
    $("#posnum_deliver").empty();
    $.getJSON("<?= base_url('assets/json/thai_tambons.json') ?>", function(data) {
      $.each(data.RECORDS, function(key, value) {
        if (value.id == sub_distric_id) {
          $("#posnum_deliver").append("<option value='" + value.zip_code + "'>" + value.zip_code + "</option>");
        }
      });
    });
  }

  function select_poscode_niti() {
    var sub_distric_id = $("#sub_distric_niti").val();
    $("#posnum_niti").empty();
    $.getJSON("<?= base_url('assets/json/thai_tambons.json') ?>", function(data) {
      $.each(data.RECORDS, function(key, value) {
        if (value.id == sub_distric_id) {
          $("#posnum_niti").append("<option value='" + value.zip_code + "'>" + value.zip_code + "</option>");
        }
      });
    });
  }

  function select_poscode_niti_deliver() {
    var sub_distric_id = $("#sub_distric_deliver_niti").val();
    $("#posnum_deliver_niti").empty();
    $.getJSON("<?= base_url('assets/json/thai_tambons.json') ?>", function(data) {
      $.each(data.RECORDS, function(key, value) {
        if (value.id == sub_distric_id) {
          $("#posnum_deliver_niti").append("<option value='" + value.zip_code + "'>" + value.zip_code + "</option>");
        }
      });
    });
  }




  function edit_data(data) {
    let povince = data[0].province;
    let distric = data[0].district;
    let sub_distric = data[0].sub_district;
    let submit = document.getElementById('submit_btn');
    submit.setAttribute('onclick', `update_form(${data[0].uid})`);

    if (data[0].customer_type == "personal") {
      $('#normalCheck').click();
      $('#customer_id').val(data[0].customer_id);
      $('#fullname').val(data[0].fullname);
      $('#email').val(data[0].email);
      $('#line_id').val(data[0].line_id);
      $('#tel').val(data[0].tel);
      $('#address').val(data[0].address);

      $('#province').val(data[0].province);


      $.getJSON("<?= base_url('assets/json/thai_amphures.json') ?>", function(data) {
        $("#distric").empty();
        $.each(data.RECORDS, function(key, value) {
          if (value.province_id == povince) {
            $("#distric").append("<option value='" + value.id + "'>" + value.name_th + "</option>");
          }
        });
      });
      $('#distric').val(data[0].district);

      $.getJSON("<?= base_url('assets/json/thai_tambons.json') ?>", function(data) {
        $("#sub_distric").empty();
        $.each(data.RECORDS, function(key, value) {
          if (value.amphure_id == distric) {
            $("#sub_distric").append("<option value='" + value.id + "'>" + value.name_th + "</option>");
          }
        });
      });
      $('#sub_distric').val(data[0].sub_district);
      $.getJSON("<?= base_url('assets/json/thai_tambons.json') ?>", function(data) {
        $("#posnum").empty();
        $.each(data.RECORDS, function(key, value) {
          if (value.id == sub_distric) {
            $("#posnum").append("<option value='" + value.zip_code + "'>" + value.zip_code + "</option>");
          }
        });
      });
      $('#birthday').val(data[0].birthday);
      $('#posnum').val(data[0].poscode);
      $('#age').val(data[0].age);
      $('#line_id').val(data[0].line_id);
      $('#id_card_number').val(data[0].id_card_number);
      $('#address_nomal').val(data[0].address);
      $('#additional').val(data[0].additional);
      $('#gender').val(data[0].gender);
      if (data[0].gender == "Male") {
        $('#gender').val("male");
      } else if (data[0].gender == "Female") {
        $('#gender').val("female")
      } else {
        $('#gender').val("lgbt")
      }
      if (data[0].address_deliver_product != "same_address") {
        $('#check').prop('checked', false);
        document.getElementById('additionalcheck').style.display = 'block';

        $.getJSON("<?= base_url('assets/json/thai_amphures.json') ?>", function(data) {
          $("#distric_deliver").empty();
          $.each(data.RECORDS, function(key, value) {
            if (value.province_id == povince) {
              $("#distric_deliver").append("<option value='" + value.id + "'>" + value.name_th + "</option>");
            }
          });
        });
        $('#distric_deliver').val(data[0].district);

        $.getJSON("<?= base_url('assets/json/thai_tambons.json') ?>", function(data) {
          $("#sub_distric_deliver").empty();
          $.each(data.RECORDS, function(key, value) {
            if (value.amphure_id == distric) {
              $("#sub_distric_deliver").append("<option value='" + value.id + "'>" + value.name_th + "</option>");
            }
          });
        });
        $('#sub_distric_deliver').val(data[0].sub_district);
        $.getJSON("<?= base_url('assets/json/thai_tambons.json') ?>", function(data) {
          $("#posnum_deliver").empty();
          $.each(data.RECORDS, function(key, value) {
            if (value.id == sub_distric) {
              $("#posnum_deliver").append("<option value='" + value.zip_code + "'>" + value.zip_code + "</option>");
            }
          });
        });

        $('#address_delivery').val(data[0].address_deliver_product);
        $('#province_deliver').val(data[0].deliver_province);
        $('#posnum_deliver').val(data[0].deliver_poscode);

      }

    } else if (data[0].customer_type == "company") {
      $('#nitiCheck').click();
      $('#company_id').val(data[0].customer_id);
      $('#company_name').val(data[0].company_name);
      $('#email_niti').val(data[0].email);
      $('#tel_niti').val(data[0].tel);
      $('#fullname_niti').val(data[0].fullname);
      $('#company_registation_id').val(data[0].company_registation_id);
      $('#company_branch_id').val(data[0].company_branch_id);
      $('#address_niti').val(data[0].address);
      $('#province_niti').val(data[0].province);

      $.getJSON("<?= base_url('assets/json/thai_amphures.json') ?>", function(data) {
        $("#distric_niti").empty();
        $.each(data.RECORDS, function(key, value) {
          if (value.province_id == povince) {
            $("#distric_niti").append("<option value='" + value.id + "'>" + value.name_th + "</option>");
          }
        });
      });
      $('#distric_niti').val(data[0].district);

      $.getJSON("<?= base_url('assets/json/thai_tambons.json') ?>", function(data) {
        $("#sub_distric_niti").empty();
        $.each(data.RECORDS, function(key, value) {
          if (value.amphure_id == distric) {
            $("#sub_distric_niti").append("<option value='" + value.id + "'>" + value.name_th + "</option>");
          }
        });
      });
      $('#sub_distric_niti').val(data[0].sub_district);
      $.getJSON("<?= base_url('assets/json/thai_tambons.json') ?>", function(data) {
        $("#posnum_niti").empty();
        $.each(data.RECORDS, function(key, value) {
          if (value.id == sub_distric) {
            $("#posnum_niti").append("<option value='" + value.zip_code + "'>" + value.zip_code + "</option>");
          }
        });
      });
      $('#posnum_niti').val(data[0].postcode);


      if (data[0].address_deliver_product != "same_address") {
        $('#check2').prop('checked', false);
        document.getElementById('additionalcheck2').style.display = 'block';

        $.getJSON("<?= base_url('assets/json/thai_amphures.json') ?>", function(data) {
          $("#distric_deliver_niti").empty();
          $.each(data.RECORDS, function(key, value) {
            if (value.province_id == povince) {
              $("#distric_deliver_niti").append("<option value='" + value.id + "'>" + value.name_th + "</option>");
            }
          });
        });
        $('#distric_deliver_niti').val(data[0].district);

        $.getJSON("<?= base_url('assets/json/thai_tambons.json') ?>", function(data) {
          $("#sub_distric_deliver_niti").empty();
          $.each(data.RECORDS, function(key, value) {
            if (value.amphure_id == distric) {
              $("#sub_distric_deliver_niti").append("<option value='" + value.id + "'>" + value.name_th + "</option>");
            }
          });
        });
        $('#sub_distric_deliver_niti').val(data[0].sub_district);
        $.getJSON("<?= base_url('assets/json/thai_tambons.json') ?>", function(data) {
          $("#posnum_deliver_niti").empty();
          $.each(data.RECORDS, function(key, value) {
            if (value.id == sub_distric) {
              $("#posnum_deliver_niti").append("<option value='" + value.zip_code + "'>" + value.zip_code + "</option>");
            }
          });
        });

        $('#address_delivery_niti').val(data[0].address_deliver_product);
        $('#province_deliver_niti').val(data[0].deliver_province);
        $('#posnum_deliver_niti').val(data[0].deliver_poscode);
        $('#additional_niti').val(data[0].additional);
      }
    }
  }

  function update_form(uid) {
    let main_form = document.getElementById('main_form');
    main_form.action = `partprofile/update/${uid}`;
    main_form.method = 'post';
  }


  function insert_form() {
    let main_form = document.getElementById('main_form');
    main_form.method = 'post';
    main_form.action = 'partprofile/insert';
  }

  function submit_form() {
    let main_form = document.getElementById('main_form');
    main_form.submit();
  }

  function delete_data(uid) {
    if (confirm('Are you sure to delete this data?')) {
      let main_form = document.getElementById('main_form');
      main_form.action = `partprofile/delete/${uid}`;
      main_form.method = 'post';
      main_form.submit();
    }
  }

  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
  }
  let dropdown = document.getElementsByClassName("dropdown-btn");
  let i;

  for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
      this.classList.toggle("active");
      let dropdownContent = this.nextElementSibling;
      if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
      } else {
        dropdownContent.style.display = "block";
      }
    });
  }

  function myFunction() {
    let niticheck = document.getElementById("nitiCheck");
    let tapniti = document.getElementById("tapniti");
    let normalcheck = document.getElementById("normalCheck");
    let tapnormal = document.getElementById("tapnormal");
    if (niticheck.checked == true) {
      tapniti.style.display = "block";
      tapnormal.style.display = "none";
      let hidden = document.getElementById("hiddentap");
      hidden.value = "นิติบุคคล"
    } else if (normalcheck.checked == true) {
      tapniti.style.display = "none";
      tapnormal.style.display = "block";
      let hidden = document.getElementById("hiddentap");
      hidden.value = "บุคคลทั่วไป";
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


  $(document).ready(function() {
    $("input").keydown(function() {
      $(".btnchxsave").addClass('btnchxsaves');
      $(".btnchxsave").removeClass('btnchxsave');
      $(".btnchxsaves").removeAttr('disabled');
    });
  });

  //if check is checked then show the additioncheck div
  $(document).ready(function() {
    $("#check").click(function() {
      if ($(this).is(":checked")) {
        let additionalcheck = document.getElementById("additionalcheck");
        additionalcheck.style.display = "none";
      } else {
        let additionalcheck = document.getElementById("additionalcheck");
        additionalcheck.style.display = "block";
      }
    });
  });
  $(document).ready(function() {
    $("#check2").click(function() {
      if ($(this).is(":checked")) {
        let additionalcheck = document.getElementById("additionalcheck2");
        additionalcheck.style.display = "none";
      } else {
        let additionalcheck = document.getElementById("additionalcheck2");
        additionalcheck.style.display = "block";
      }
    });
  });

  // ------ change btn --------- //
</script>
</body>

</html>