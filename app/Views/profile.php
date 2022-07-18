<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- ------------CSS---------------- -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css'); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=IBM Plex Sans Thai' rel='stylesheet'>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.11.0/css/all.css" rel="stylesheet" crossorigin="anonymous">
  <!-- ------------JS---------------- -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body style="background-color: white;">


  <div class="nav-div">
    <img src="assets/image/chxlogo.png" alt="" style="width:199px;height:50px; margin-top:20px;margin-left:15px;">

    <div class="nav-rights flex-div">
      <p>พฤ. 24 ก.พ. 2022</p>
      <p>10:10:40</p>
      <div class="hrs"></div>
      <div class="circular"> <img src="assets/image/chxprofile.jpg" alt=""></div>
      <div><a style="margin-bottom:0px;">สวัสดี โรเซ่</a></br>
        <span>Admin</span>
      </div>
      <div class="top-drops"><a href="#"><img src="assets/image/icon/Dropdown.png" alt=""></a></div>

    </div>
  </div>

  <div class="sidebar">
    <ul>
      <li>
        <a href="#" class="dropbtn"><img src="<?php echo base_url('assets/image/icon/graph-2.png'); ?>" style="margin-right:10px;" class="sidebarimg">รายงานภาพรวม</a>
      </li>
      <li>
        <div class="dropdown">
          <a class="dropbtn"><img src="<?php echo base_url('assets/image/icon/business-and-trade-4.png'); ?>" style="margin-right:10px;" class="sidebarimg">โปรไฟล์<img src="<?php echo base_url('assets/image/icon/next.png'); ?>" class="rightimg" alt="" align="right"></a>
          <div class="dropdown-content">
            <ul>
              <li>
                <a href="<?php echo base_url('profile'); ?>" class="dropbtn">ข้อมูลบริษัท</a>
              </li>
              <li>
                <div class="dropdown-sub">
                  <a class="dropbtn">พนักงาน<img src="<?php echo base_url('assets/image/icon/next.png'); ?>'); ?>" alt="" class="rightimg" align="right"></a>
                  <div class="dropdown-sub-content">
                    <ul>
                      <li><a href="<?php echo base_url('empprofile'); ?>" class="dropbtn">ข้อมูลพนักงาน</a></li>
                      <li><a href="#" class="dropbtn">สิทธิการเข้าถึง</a></li>
                    </ul>
                  </div>
                </div>
              </li>
              <li>
                <div class="dropdown-sub">
                  <a class="dropbtn">ลูกค้า/คู่ค้า<img src="<?php echo base_url('assets/image/icon/next.png'); ?>'); ?>" class="rightimg" alt="" align="right"></a>
                  <div class="dropdown-sub-content">
                    <a href="<?php echo base_url('cusprofile'); ?>" class="dropbtn">ข้อมูลลูกค้า</a>
                    <a href="<?php echo base_url('partprofile'); ?>" class="dropbtn">ข้อมูลคู่ค้า</a>
                  </div>
                </div>
              </li>

            </ul>
          </div>
        </div>
      </li>

      <li>
        <div class="dropdown">
          <a class="dropbtn"><img src="<?php echo base_url('assets/image/icon/crown.png'); ?>" style="margin-right:10px;" class="sidebarimg">มาสเตอร์<img src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt="" class="rightimg" align="right"></a>
          <div class="dropdown-content">
            <ul>

              <li>
                <div class="dropdown-sub">
                  <a class="dropbtn">ไอเทม<img src="<?php echo base_url('assets/image/icon/next.png'); ?>'); ?>" alt="" class="rightimg" align="right"></a>
                  <div class="dropdown-sub-content">
                    <ul>
                      <li><a href="<?php echo base_url('master'); ?>" class="dropbtn">ประเภทสินค้า</a></li>
                      <li><a href="<?php echo base_url('mastercorrection'); ?>" class="dropbtn">คอลเลคชั่น</a></li>
                      <li><a href="<?php echo base_url('mastersize'); ?>" class="dropbtn">ขนาดสินค้า</a></li>
                    </ul>
                  </div>
              </li>

              <li>
                <div class="dropdown-sub">
                  <a class="dropbtn">โลหะ<img src="<?php echo base_url('assets/image/icon/next.png'); ?>'); ?>" alt="" class="rightimg" align="right"></a>
                  <div class="dropdown-sub-content">
                    <ul>
                      <li><a href="<?php echo base_url('mastermetalcolor'); ?>" class="dropbtn">สีโลหะ</a></li>
                      <li><a href="<?php echo base_url('mastermetalname'); ?>" class="dropbtn">ชื่อโลหะ</a></li>
                    </ul>
                  </div>
              </li>

              <li>
                <div class="dropdown-sub">
                  <a class="dropbtn">อัญมณี<img src="<?php echo base_url('assets/image/icon/next.png'); ?>'); ?>" alt="" class="rightimg" align="right"></a>
                  <div class="dropdown-sub-content">
                    <ul>
                      <li><a href="<?php echo base_url('masterstonegroup'); ?>" class="dropbtn">กลุ่มอัญมณี</a></li>
                      <li><a href="<?php echo base_url('masterstonename'); ?>" class="dropbtn">ชื่ออัญมณี/เพชร</a></li>
                      <li><a href="<?php echo base_url('masterstoneshape'); ?>" class="dropbtn">รูปทรง</a></li>
                      <li><a href="<?php echo base_url('mastergemcolor'); ?>" class="dropbtn">สีอัญมณี</a></li>
                      <li><a href="<?php echo base_url('masterclarity'); ?>" class="dropbtn">Clarity</a></li>
                      <li><a href="<?php echo base_url('mastercutting'); ?>" class="dropbtn">Cutting</a></li>
                      <li><a href="<?php echo base_url('masterquality'); ?>" class="dropbtn">คุณภาพ</a></li>
                      <li><a href="<?php echo base_url('mastergemsize'); ?>" class="dropbtn">ขนาดอัญมณี</a></li>
                    </ul>
                  </div>
              </li>

              <li>
                <div class="dropdown-sub">
                  <a class="dropbtn">อื่นๆ<img src="<?php echo base_url('assets/image/icon/next.png'); ?>'); ?>" alt="" class="rightimg" align="right"></a>
                  <div class="dropdown-sub-content">
                    <ul>
                      <li><a href="#" class="dropbtn">คลัง</a></li>
                      <li><a href="#" class="dropbtn">อื่นๆ</a></li>
                    </ul>
                  </div>
              </li>

            </ul>
          </div>
        </div>
      </li>

      <li>
        <div class="dropdown">
          <a class="dropbtn"><img src="<?php echo base_url('assets/image/icon/rings.png'); ?>" style="margin-right:10px;" class="sidebarimg">ข้อมูลสินค้า<img src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt="" class="rightimg" align="right"></a>
          <div class="dropdown-content">
            <ul>
              <li><a href="<?php echo base_url('productstone'); ?>" class="dropbtn">อัญมณี/เพชร</a></li>
              <li><a href="<?php echo base_url('productjewelry'); ?>" class="dropbtn">จิวเวลรี่</a></li>
            </ul>
          </div>
        </div>
      </li>

      <li>
        <div class="dropdown">
          <a class="dropbtn"><img src="<?php echo base_url('assets/image/icon/check-list-3.png'); ?>" style="margin-right:10px;" class="sidebarimg">คำสั่งขาย<img src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt="" class="rightimg" align="right"></a>
          <div class="dropdown-content">
            <ul>
              <li><a href="<?php echo base_url('/saleorder/saleorderstone'); ?>" class="dropbtn">อัญมณี/เพชร</a></li>
              <li><a href="<?php echo base_url('/saleorder/saleorderjewelry'); ?>" class="dropbtn">จิวเวลรี่</a></li>
              <li><a href="#" class="dropbtn">รายงาน</a></li>
            </ul>
          </div>
        </div>
      </li>

      <li>
        <div class="dropdown">
          <a class="dropbtn"><img src="<?php echo base_url('assets/image/icon/support-3.png'); ?>" style="margin-right:10px;" class="sidebarimg">เซอร์วิสออเดอร์<img src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt="" class="rightimg" align="right"></a>
          <div class="dropdown-content">
            <ul>
              <li><a href="#" class="dropbtn">ออเดอร์ผลิต</a></li>
              <li><a href="#" class="dropbtn">ออเดอร์ซ่อม</a></li>
              <li><a href="#" class="dropbtn">รายงาน</a></li>
            </ul>
          </div>
        </div>
      </li>

      <li>
        <div class="dropdown">
          <a class="dropbtn"><img src="<?php echo base_url('assets/image/icon/pay-day-3.png'); ?>" style="margin-right:10px;" class="sidebarimg">การออม<img src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt="" class="rightimg" align="right"></a>
          <div class="dropdown-content">
            <ul>
              <li><a href="#" class="dropbtn">อัญมณี / เพชร</a></li>
              <li><a href="#" class="dropbtn">จิวเวลรี่</a></li>
              <li><a href="#" class="dropbtn">ตัวเรือน</a></li>
              <li><a href="#" class="dropbtn">รายงาน</a></li>
            </ul>
          </div>
        </div>
      </li>

      <li>
        <div class="dropdown">
          <a class="dropbtn"><img src="<?php echo base_url('assets/image/icon/coin-2.png'); ?>" style="margin-right:10px;" class="sidebarimg">การขาย<img src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt="" class="rightimg" align="right"></a>
          <div class="dropdown-content">
            <ul>
              <li><a href="#" class="dropbtn">อัญมณี / เพชร</a></li>
              <li><a href="#" class="dropbtn">จิวเวลรี่</a></li>
              <li><a href="#" class="dropbtn">ตัวเรือน</a></li>
              <li><a href="#" class="dropbtn">รายงาน</a></li>
            </ul>
          </div>
        </div>
      </li>

      <li>
        <div class="dropdown">
          <a class="dropbtn"><img src="<?php echo base_url('assets/image/icon/cargo-3.png'); ?>" style="margin-right:10px;" class="sidebarimg">การจัดซื้อ<img src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt="" class="rightimg" align="right"></a>
          <div class="dropdown-content">
            <ul>
              <li>
                <div class="dropdown-sub">
                  <a class="dropbtn">จัดซื้อ(Purchase)<img src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt="" class="rightimg" align="right"></a>
                  <div class="dropdown-sub-content">
                    <ul>
                      <li><a href="<?php echo base_url('/purchase/purchasestone'); ?>" class="dropbtn">อัญมณี / เพชร</a></li>
                      <li><a href="<?php echo base_url('/purchase/purchasejewelry'); ?>" class="dropbtn">จิวเวลรี่</a></li>
                    </ul>
                  </div>
              </li>

              <li>
                <div class="dropdown-sub">
                  <a class="dropbtn">MEMO In<img src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt="" class="rightimg" align="right"></a>
                  <div class="dropdown-sub-content">
                    <ul>
                      <li><a href="<?php echo base_url('/memoin/memoinstone'); ?>" class="dropbtn">อัญมณี / เพชร</a></li>
                      <li><a href="<?php echo base_url('/memoin/memoinjewelry'); ?>" class="dropbtn">จิวเวลรี่</a></li>
                    </ul>
                  </div>
              </li>
              <li>
                <div class="dropdown-sub">
                  <a class="dropbtn">MEMO Return<img src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt="" class="rightimg" align="right"></a>
                  <div class="dropdown-sub-content">
                    <ul>
                      <li><a href="<?php echo base_url('/memoreturn/memoreturnstone'); ?>" class="dropbtn">อัญมณี / เพชร</a></li>
                      <li><a href="<?php echo base_url('/memoreturn/memoreturnjewelry'); ?>" class="dropbtn">จิวเวลรี่</a></li>
                    </ul>
                  </div>
              </li>
              <li><a href="#" class="dropbtn">รายงาน</a></li>
            </ul>
          </div>
        </div>
      </li>

      <li>
        <div class="dropdown">
          <a class="dropbtn"><img src="<?php echo base_url('assets/image/icon/warehouse.png'); ?>" style="margin-right:10px;" class="sidebarimg">คลังสินค้า<img src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt="" class="rightimg" align="right"></a>
          <div class="dropdown-content">
            <ul>
              <li>
                <div class="dropdown-sub">
                  <a class="dropbtn">การจัดซื้อ(Purchase)<img src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt="" class="rightimg" align="right"></a>
                  <div class="dropdown-sub-content">
                    <ul>
                      <li><a href="<?php echo base_url('/inventory/purchasestone'); ?>" class="dropbtn">อัญมณี / เพชร</a></li>
                      <li><a href="<?php echo base_url('/inventory/purchasejewelry'); ?>" class="dropbtn">จิวเวลรี่</a></li>
                    </ul>
                  </div>
              </li>

              <li>
                <div class="dropdown-sub">
                  <a class="dropbtn">คลัง MEMO<img src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt="" class="rightimg" align="right"></a>
                  <div class="dropdown-sub-content">
                    <ul>
                      <li><a href="<?php echo base_url('/memo/memostone'); ?>" class="dropbtn">อัญมณี / เพชร</a></li>
                      <li><a href="<?php echo base_url('/memo/memojewelry'); ?>" class="dropbtn">จิวเวลรี่</a></li>
                    </ul>
                  </div>
              </li>

              <li>
                <div class="dropdown-sub">
                  <a class="dropbtn">คลังเซอร์วิสออเดอร์<img src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt="" class="rightimg" align="right"></a>
                  <div class="dropdown-sub-content">
                    <ul>
                      <li><a href="<?php echo base_url('/inventory/serviceorder'); ?>" class="dropbtn">ออเดอร์ผลิต</a></li>
                      <li><a href="<?php echo base_url('/inventory/servicerepair'); ?>" class="dropbtn">ออเดอร์ซ่อม</a></li>
                      <li><a href="<?php echo base_url('/inventory/servicemounting'); ?>" class="dropbtn">ออเดอร์ตัวเรือน</a></li>
                    </ul>
                  </div>
              </li>
              <li><a href="#" class="dropbtn">โยกสินค้า</a></li>
            </ul>
          </div>
        </div>
      </li>

      <li>
        <div class="dropdown">
          <a class="dropbtn"><img src="<?php echo base_url('assets/image/icon/profit.png'); ?>" style="margin-right:10px;" class="sidebarimg">การเงิน<img src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt="" class="rightimg" align="right"></a>
          <div class="dropdown-content">
            <ul>
              <li>
                <div class="dropdown-sub">
                  <a class="dropbtn">ใบการเงิน<img src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt="" class="rightimg" align="right"></a>
                  <div class="dropdown-sub-content">
                    <ul>
                      <li><a href="#" class="dropbtn">ค้างรับ</a></li>
                      <li><a href="#" class="dropbtn">ค้างจ่าย</a></li>

                    </ul>
                  </div>
              </li>
              <li><a href="#" class="dropbtn">รายงาน</a></li>

            </ul>
          </div>
        </div>
      </li>
    </ul>
  </div>


  <div class="main" style="margin-top: 108px;">
    <div>
      <div class="main-head">
        <a class="alignleft" style="font-size:25px;font-weight: 500;color: #2A2A2A;">ข้อมูลบริษัท</a>
        <div align="right"><button type="button" class="btnchxcan" style="margin-right:20px; width:150px; ">ยกเลิก</button>
        <button type="button" onclick="insert_action()" id="submit-action" class="btnchxsave" style="width:150px;" data-bs-toggle="modal" data-bs-target="#exampleModal">บันทึก</button></div>
        <!-- แก้ไข -->
        <button type="button" onclick="update_unlock()" id="update_unlock" class="btnchxsave" style="width:150px;">แก้ไข</button></div>


      </div>
      <!-- <div class="row">
            <div class="col-9"> <p style=" margin-left:30px; margin-bottom:15px;padding-top:15px; font-size:25px; font-weight: 500;">ข้อมูลบริษัท</p></div>
            <div class="col-3" style="margin-left:30px; margin-bottom:15px;padding-top:15px;"> <button type="button" class="btnchxcan" style="margin-right:20px; width:150px; ">ยกเลิก</button><button type="button" class="btnchxsave" style="width:150px;">บันทึก</button></div>
        </div> -->
      <div class="tab" style="margin-bottom:30px;margin-left:30px;">
        <button class="tablinks active" onclick="changeTap(event, 'detail')">ข้อมูลทั่วไป</button>
        <button class="tablinks" onclick="changeTap(event, 'bank')">ข้อมูลธนาคาร</button>
      </div>

      <form id="main-form" method="POST">
        <input type="hidden" id="checktap" name="checktap" value="detail">
        <div id="detail" class="tabcontent" style="display:block; ">
        <?php 
          if($company_info != null){
            echo '
            <div class="detail-grid">
            <div class="detail-grid-item">
              <p>โลโก้แบรนด์</p>
              <div id="circle1" style="margin-bottom:15px; margin-left:15px;"></div>
              <div style="margin-left: 57px;"><button class="upload-btn">อัพโหลด</button></div>
            </div>
            <div class="detail-grid-item">
              <p>ข้อมูลทั่วไป</p>
              <label>ชื่อบริษัท <a style="color:red;">*</a></label>
              <input type="text" id="company_name" class="form-control" name="company_name" value="'. $company_info[0]->company_name.'" disabled>
              <label>หมายเลขจดทะเบียน</label>
              <input type="text" id="company_number" class="form-control " name="company_number" value="'. $company_info[0]->company_register_id.'" disabled>
              <label>ที่อยู่ตามทะเบียนภาษี</label>
              <textarea class="form-control" id="company_register_address" name="company_register_address" style="width:599px; height:90px;" disabled>'. $company_info[0]->company_register_address.'</textarea>
              <div class="row">
                <div id="select_edit" style="display: none; box-sizing: border-box;">
                <div class="col-6" style="padding:0;">
                  <label>จังหวัด</label></br>
                  <select class="form-select" id="province-select" >
                    <option value="'. $company_info[0]->province.'" selected >'. $company_info[0]->province.'</option>
                    <option value="ชลบุรี">ชลบุรี</option>
                    <option value="กรุงเทพ">กรุงเทพมหานคร</option>
                    <option>นครสวรรค์</option>
                    <option>นครปฐม</option>
                  </select>
                  <!-- <input type="text" class="form-control"></br> -->
                  <label>อำเภอ/เขต</label></br>
                  <select class="form-select" name="distric" id="distric-select">
                    <option value="'. $company_info[0]->district.'" selected>'. $company_info[0]->district.'</option>
                    <option value="บึง">บึง</option>
                    <option>test</option>
                    <option>test</option>
                    <option>test</option>
                  </select>
                </div>
                <div class="col-6" style="padding:0;">
                  <label>ตำบล/แขวง</label></br>
                  <select class="form-select" name="sub_distric" id="sub_distric-select">
                  <option value="'. $company_info[0]->sub_district.'" selected>'. $company_info[0]->sub_district.'</option>
                    <option value="ศรีราชา">ศรีราชา</option>
                    <option>test</option>
                    <option>test</option>
                    <option>test</option>
                  </select>
                  <label>รหัสไปรษณีย์</label></br>
                  <select class="form-select" name="posnum" id="posnum-select">
                  <option value="'. $company_info[0]->poscode.'" selected>'. $company_info[0]->poscode.'</option>
                    <option value="20230">20230</option>
                    <option>test</option>
                    <option>test</option>
                    <option>test</option>
                  </select>
                </div>
                </div>

                <div id="select_readonly" display: block; box-sizing: border-box;>
                <div class="col-6" style="padding:0;">
                  <label>จังหวัด</label></br>
                  <select class="form-select" id="province-select" disabled>
                    <option value="'. $company_info[0]->province.'" selected >'. $company_info[0]->province.'</option>
                    <option value="ชลบุรี">ชลบุรี</option>
                    <option value="กรุงเทพ">กรุงเทพมหานคร</option>
                    <option>นครสวรรค์</option>
                    <option>นครปฐม</option>
                  </select>
                  <!-- <input type="text" class="form-control"></br> -->
                  <label>อำเภอ/เขต</label></br>
                  <select class="form-select" id="distric-select" disabled>
                    <option value="'. $company_info[0]->district.'" selected>'. $company_info[0]->district.'</option>
                    <option value="บึง">บึง</option>
                    <option>test</option>
                    <option>test</option>
                    <option>test</option>
                  </select>
                </div>
                <div class="col-6" style="padding:0;">
                  <label>ตำบล/แขวง</label></br>
                  <select class="form-select" id="sub_distric-select" disabled>
                  <option value="'. $company_info[0]->sub_district.'" selected>'. $company_info[0]->sub_district.'</option>
                    <option value="ศรีราชา">ศรีราชา</option>
                    <option>test</option>
                    <option>test</option>
                    <option>test</option>
                  </select>
                  <label>รหัสไปรษณีย์</label></br>
                  <select class="form-select" id="posnum-select" disabled>
                  <option value="'. $company_info[0]->poscode.'" selected>'. $company_info[0]->poscode.'</option>
                    <option value="20230">20230</option>
                    <option>test</option>
                    <option>test</option>
                    <option>test</option>
                  </select>
                </div>
                </div>

              </div>

            </div>

            <div class="detail-grid-item" style="padding-left:50px;">
              <p>ข้อมูลการติดต่อ</p>
              <label>อีเมล</label>
              <input type="text" id="email" class="form-control " name="email" value="'. $company_info[0]->email.'" disabled></br>
              <label>Line ID</label>
              <input type="text" id="lindid" class="form-control " name="lindid" value="'. $company_info[0]->line_id.'" disabled></br>
              <label>ชื่อผู้ติดต่อ</label>
              <input type="text" id="namecontrac" class="form-control " name="namecontrac" value="'. $company_info[0]->company_name.'" disabled></br>
              <label>เบอร์โทรศัพท์</label>
              <div class="buttonIn">
                <input type="text" id="tel" class="form-control" name="tel" value="'. $company_info[0]->company_name.'" disabled>
              </div>
            </div>
          </div>
            ';
          }else{
            echo '<div class="detail-grid">
            <div class="detail-grid-item">
              <p>โลโก้แบรนด์</p>
              <div id="circle1" style="margin-bottom:15px; margin-left:15px;"></div>
              <div style="margin-left: 57px;"><button class="upload-btn">อัพโหลด</button></div>
            </div>
            <div class="detail-grid-item">
              <p>ข้อมูลทั่วไป</p>
              <label>ชื่อบริษัท <a style="color:red;">*</a></label>
              <input type="text" id="large-input" class="form-control" name="company_name" placeholder="ชื่อบริษัท">
              <label>หมายเลขจดทะเบียน</label>
              <input type="text" id="large-input" class="form-control " name="company_number" placeholder="13 หลัก">
              <label>ที่อยู่ตามทะเบียนภาษี</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="ที่อยู่" name="company_register_address" style="width:599px; height:90px;"></textarea>
              <div class="row">
                <div class="col-6" style="max-width: 49%; ">
                  <label>จังหวัด</label></br>
                  <select class="form-select" name="province" id="small-input">
                    <option value="" disabled selected>เลือกจังหวัด</option>
                    <option value="ชลบุรี">ชลบุรี</option>
                    <option value="กรุงเทพ">กรุงเทพมหานคร</option>
                    <option>นครสวรรค์</option>
                    <option>นครปฐม</option>
                  </select>
                  <!-- <input type="text" class="form-control"></br> -->
                  <label>อำเภอ/เขต</label></br>
                  <select class="form-select" name="distric" id="small-input">
                    <option value="" disabled selected>เลือกอำเภอ/เขต</option>
                    <option value="บึง">บึง</option>
                    <option>test</option>
                    <option>test</option>
                    <option>test</option>
                  </select>
                </div>
                <div class="col-6" style="padding:0;">
                  <label>ตำบล/แขวง</label></br>
                  <select class="form-select" name="sub_distric" id="small-input">
                    <option value="" disabled selected>เลือกตำบล/แขวง</option>
                    <option value="ศรีราชา">ศรีราชา</option>
                    <option>test</option>
                    <option>test</option>
                    <option>test</option>
                  </select>
                  <label>รหัสไปรษณีย์</label></br>
                  <select class="form-select" name="posnum" id="small-input">
                    <option value="" disabled selected>เลือกรหัสไปรษณีย์</option>
                    <option value="20230">20230</option>
                    <option>test</option>
                    <option>test</option>
                    <option>test</option>
                  </select>
                </div>
              </div>

            </div>

            <div class="detail-grid-item" style="padding-left:50px;">
              <p>ข้อมูลการติดต่อ</p>
              <label>อีเมล</label>
              <input type="text" id="large-input" class="form-control " name="email" placeholder="อีเมล"></br>
              <label>Line ID</label>
              <input type="text" id="large-input" class="form-control " name="lindid" placeholder="Line ID"></br>
              <label>ชื่อผู้ติดต่อ</label>
              <input type="text" id="large-input" class="form-control " name="namecontrac" placeholder="ชื่อผู้ติดต่อ"></br>
              <label>เบอร์โทรศัพท์</label>
              <div class="buttonIn">
                <input type="text" id="large-input" class="form-control" name="tel" placeholder="เบอร์โทรศัพท์">
                <button><img src="assets/image/icon/PLUSS.png"></button>
              </div>
            </div>
          </div>';
          }
        ?>


          

        </div>


        <div id="bank" class="tabcontent" style="padding-left:30px;">

          <p>ข้อมูลธนาคาร</p>
          <div class="borderbank">
            <div class="row">
              <div class="col-2 " style="padding-left:35px;"><label>ประเภทบัญชี</label></br></div>
              <div class="col-2 " style="padding-left:54px;"><label>ธนาคาร</label></br></div>
              <div class="col-2 " style="padding-left:70px;"><label>สาขาธนาคาร</label></br></div>
              <div class="col-2 " style="padding-left:87px;"><label>ชื่อบัญชี</label></br></div>
              <div class="col-2 " style="padding-left:103px;"><label>หมายเลขบัญชี</label></br></div>
            </div>

          
            <!-- ---select bank ---- -->
            <?php
            foreach($book_info as $item){
              $item = json_decode($item->book_info, true);
              $typebook = $item['typebook'];
              $typebook_text = "";
              if($typebook =="daytrade"){
                $typebook_text = "บัญชีกระแสรายวัน";
              }else{
                $typebook_text = "บัญชีออมทรัพย์";
              }
              $typebank = $item['typebank'];
              $typebank_text = "";
              if($typebank =="kasikorn"){
                $typebank_text = "กสิกรไทย";
              }else{
                $typebank_text = "กรุงเทพ";
              }
              $subbank = $item['subbank'];
              $bookname = $item['bookname'];
              $booknum = $item['booknum'];
              echo '<div class="row" style="height: 60px;">
              <div class="col-2 " style="margin-right:20px; margin-left:20px;">
                <select class="form-select" disabled>
                <option value="'.$typebook.'">'.$typebook_text.'</option>
                  <option value="daytrade">บัญชีกระแสรายวัน</option>
                  <option value="daytrade">บัญชีออมทรัพย์</option>
                </select>
              </div>
              <div class="col-2 mr-3" style="margin-right:20px;">
                <select class="form-select" disabled>
                <option value="'.$typebank.'">'.$typebank_text.'</option>
                  <option value="kasikorn">กสิกร</option>
                  <option>test</option>
                  <option>test</option>
                  <option>test</option>
                </select>
              </div>
              <div class="col-2 mr-3" style="margin-right:20px;">
                <input type="text" class="form-control mb-3" placeholder="สาขาธนาคาร" value="'.$subbank.'" readonly></br>
              </div>
              <div class="col-2 mr-3" style="margin-right:20px;">
                <input type="text" class="form-control mb-3"placeholder="ชื่อบัญชี" value="'.$bookname.'" readonly></br>
              </div>
              <div class="col-2 mr-3" style="margin-right:20px;">
                <input type="text" class="form-control mb-3" placeholder="หมายเลขบัญชี" value="'.$booknum.'" readonly></br>
              </div>
            </div>';
           
            }

            ?>
            
              <!-- --select bank-- -->

            <div id="form-bank">
              <!-- ---start bank ---- -->
              <!-- <div class="row" style="height: 60px;">
                <div class="col-2 " style="margin-right:20px; margin-left:20px;">
                  <select class="form-select" name="typebook1" disabled>
                    <option value="" disabled selected>ประเภทบัญชี</option>
                    <option value="daytrade">บัญชีกระแสรายวัน</option>
                    <option>บัญชีออมทรัพย์</option>
                  </select>
                </div>
                <div class="col-2 mr-3" style="margin-right:20px;">
                  <select class="form-select" name="typebank1" disabled>
                    <option value="" disabled selected>ธนาคาร</option>
                    <option value="kasikorn">กสิกร</option>
                    <option>test</option>
                    <option>test</option>
                    <option>test</option>
                  </select>
                </div>
                <div class="col-2 mr-3" style="margin-right:20px;">
                  <input type="text" class="form-control mb-3" name="subbank1" placeholder="สาขาธนาคาร" readonly></br>
                </div>
                <div class="col-2 mr-3" style="margin-right:20px;">
                  <input type="text" class="form-control mb-3" name="bookname1" placeholder="ชื่อบัญชี" readonly></br>
                </div>
                <div class="col-2 mr-3" style="margin-right:20px;">
                  <input type="text" class="form-control mb-3" name="booknum1" placeholder="หมายเลขบัญชี" readonly></br>
                </div> -->
                <!-- <div class="col-1 mr-3" style="margin-right:20px; padding-right:10px;">
                  <div class="delbank"><img src="assets/image/icon/delete.png"></div>
                </div> -->
              </div>
              <!-- --end bank-- -->
           
            </div>
            <div class="addbank" onclick="addFormBank()" align="right" style="margin-top:15px;"><img src="assets/image/icon/add.png"></div>
          </div>
          <!-- <div class="addbank" align="right" style="margin-top:15px;"><a href="" id="adddiv"><img src="assets/image/icon/add.png" ></a></div> -->
       
        </div>

    </div>



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
          <div class="col-6" align="left"><button type="submit" class="popupbtnsave">บันทึก</button></div>
        </div>
      </div>
    </div>
  </div>

  </form>


  <script>
/////////////////////////////////////////////////// slot bank ////////////////////////////////////////////////////////

    function addFormBank() {
      let form_bank = document.getElementById("form-bank");
      let slot = form_bank.children.length + 1;
      let old_inner = '';
      for (let i = 0; i < form_bank.children.length; i++) {
        old_inner += `<div class="row slot${i+1}" style="height: 60px;">
                <div class="col-2 " style="margin-right:20px; margin-left:20px;">
                  <select class="form-select" name="typebook${i+1}">
                    <option value="${form_bank.children[i].children[0].children[0].value}"selected>
                    ${form_bank.children[i].children[0].children[0].options[form_bank.children[i].children[0].children[0].selectedIndex].text}</option>
                    <option value="daytrade">บัญชีกระแสรายวัน</option>
                    <option value="savings_account">บัญชีออมทรัพย์</option>
                  </select>
                </div>
                <div class="col-2 mr-3" style="margin-right:20px;">
                  <select class="form-select" name="typebank${i+1}">
                    <option value="${form_bank.children[i].children[1].children[0].value}"selected>${form_bank.children[i].children[1].children[0].options[form_bank.children[i].children[1].children[0].selectedIndex].text}</option>
                    <option value="kasikorn">กสิกร</option>
                    <option>test</option>
                    <option>test</option>
                    <option>test</option>
                  </select>
                </div>
                <div class="col-2 mr-3" style="margin-right:20px;">
                  <input type="text" value="${form_bank.children[i].children[2].children[0].value}" class="form-control mb-3" name="subbank${i+1}" placeholder="สาขาธนาคาร"></br>
                </div>
                <div class="col-2 mr-3" style="margin-right:20px;">
                  <input type="text" value="${form_bank.children[i].children[3].children[0].value}" class="form-control mb-3" name="bookname${i+1}" placeholder="ชื่อบัญชี"></br>
                </div>
                <div class="col-2 mr-3" style="margin-right:20px;">
                  <input type="text" value="${form_bank.children[i].children[4].children[0].value}" class="form-control mb-3" name="booknum${i+1}" placeholder="หมายเลขบัญชี"></br>
                </div>
                <div class="col-1 mr-3" style="margin-right:20px; padding-right:10px;">
                  <div class="delbank" onclick="delete_bank_slot(${i+1})"><img src="assets/image/icon/delete.png"></div>
                </div>
              </div>`;
      }
      let new_inner = `<div class="row slot${slot}" style="height: 60px;">
                <div class="col-2 " style="margin-right:20px; margin-left:20px;">
                  <select class="form-select" name="typebook${slot}">
                    <option value="" disabled selected>ประเภทบัญชี</option>
                    <option value="daytrade">บัญชีกระแสรายวัน</option>
                    <option value="savings_account">บัญชีออมทรัพย์</option>
                  </select>
                </div>
                <div class="col-2 mr-3" style="margin-right:20px;">
                  <select class="form-select" name="typebank${slot}">
                    <option value="" disabled selected>ธนาคาร</option>
                    <option value="kasikorn">กสิกร</option>
                    <option>test</option>
                    <option>test</option>
                    <option>test</option>
                  </select>
                </div>
                <div class="col-2 mr-3" style="margin-right:20px;">
                  <input type="text" class="form-control mb-3" name="subbank${slot}" placeholder="สาขาธนาคาร"></br>
                </div>
                <div class="col-2 mr-3" style="margin-right:20px;">
                  <input type="text" class="form-control mb-3" name="bookname${slot}" placeholder="ชื่อบัญชี"></br>
                </div>
                <div class="col-2 mr-3" style="margin-right:20px;">
                  <input type="text" class="form-control mb-3" name="booknum${slot}" placeholder="หมายเลขบัญชี"></br>
                </div>
                <div class="col-1 mr-3" style="margin-right:20px; padding-right:10px;">
                  <div class="delbank" onclick="delete_bank_slot(${slot})"><img src="assets/image/icon/delete.png"></div>
                </div>
              </div>`
        form_bank.innerHTML = old_inner +  new_inner;
    }
    async function delete_bank_slot(slot){
      await delete_slot(slot)
      await refresh_bank_slot();
    }

    function delete_slot(slot) {
      let form_bank = document.getElementById("form-bank");
      let slot_delete = form_bank.children[slot - 1];
      form_bank.removeChild(slot_delete);
      
    }

    function refresh_bank_slot() {
      let form_bank = document.getElementById("form-bank");
      for (let i = 0; i < form_bank.children.length; i++) {
      form_bank.children[i].children[0].children[0].setAttribute("name","typebook"+(i+1));
      form_bank.children[i].children[1].children[0].setAttribute("name","typebank"+(i+1));
      form_bank.children[i].children[2].children[0].setAttribute("name","subbank"+(i+1));
      form_bank.children[i].children[3].children[0].setAttribute("name","bookname"+(i+1));
      form_bank.children[i].children[4].children[0].setAttribute("name","booknum"+(i+1));
      }
    };

    /////////////////////////////////////////////////// slot bank ////////////////////////////////////////////////////////

    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("main").style.marginLeft = "0";
    }

    function changeTap(evt, tapname) {

      let i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(tapname).style.display = "block";
      evt.currentTarget.className += " active";
      if (tapname == "bank") {
        document.getElementById("checktap").value = "bank";
      }
      if (tapname == "detail") {
        document.getElementById("checktap").value = "detail";

      }
    }

    $(document).ready(function() {
      $("input").keydown(function() {
        $(".btnchxsave").addClass('btnchxsaves');
        $(".btnchxsave").removeClass('btnchxsave');
        $(".btnchxsaves").removeAttr('disabled');
      });
    });
    

    function insert_action(){
      let main_form = document.getElementById("main-form");
      main_form.action = "test/test/insert/0";
    }
    function update_action(){
      let main_form = document.getElementById("main-form");
      main_form.action = "test/test/update/<?= $company_info[0]->uid ?>";
    }
    function update_unlock(){
      document.getElementById("email").disabled = false;
      document.getElementById("lindid").disabled = false;
      document.getElementById("namecontrac").disabled = false;
      document.getElementById("tel").disabled = false;
      document.getElementById("company_name").disabled = false;
      document.getElementById("company_number").disabled = false;
      document.getElementById("company_register_address").disabled = false;
      document.getElementById("select_readonly").style.display = "none";
      let select_readonly = document.getElementById("select_readonly");
      select_readonly.style.display = "none";
      let select_edit = document.getElementById("select_edit");
      select_edit.style.display = "block";
      let submit_action = document.getElementById("submit-action");
      // change onclick function
      submit_action.setAttribute("onclick","update_action()");

    }


    // ------ change btn --------- //

    //if id addbank onclick then alert
  </script>
</body>

</html>