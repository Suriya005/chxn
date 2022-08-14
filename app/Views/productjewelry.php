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

<body style="background-color: #EBEEF0;">

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



  <div class="row " style="padding-left:250px; margin-bottom:15px; margin-top:100px; font-size:25px;">
    <div class="col-9"><a style="font-size:25px;font-weight: 500;color: #2A2A2A;">ข้อมูลสินค้า จิวเวลรี่</a></div>
    <div class="col-1" style="margin-left:20px;"><button type="button" class="btnchxnext" style="width:150px; ">ต่อไป</button></div>
    <div class="col-1" style="margin-left:20px;"><button type="button" class="btnchxsave" style="width:150px; " data-bs-toggle="modal" data-bs-target="#exampleModal" id="submit_btn" onclick="insert_form()" disabled>บันทึก</button></div>
  </div>

  <div class="main">
    <div class="producthead">
      <div class="row">
        <div class="col-4" align="right">
          <div id="smallcircle">1</div>
        </div>
        <div class="col-1" style="padding:0px;">
          <p style="margin-top: 16px;">ข้อมูลทั่วไป</p>
        </div>
        <div class="col-1" style="padding-top: 15px;">
          <div id="pdot">....................</div>
        </div>
        <div class="col-1" style=" max-width: 4.333333%;">
          <div id="smallcirclev2">2</div>
        </div>
        <div class="col-4">
          <p style="margin-top: 16px; padding:0px;">ข้อมูลอัญมณี/เพชร</p>
        </div>
      </div>
    </div>

    <form id="main_form">
      <!-- hiden input -->
      <input type="hidden" name="nwt_price" id="nwt_price" value="0">
      <input type="hidden" name="gwt_price" id="gwt_price" value="0">
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
              <label>ประเภทสินค้า <a style="color:red;">*</a></label></br>
              <select class="form-select" id="item_product_type" name="item_product_type">
                <option value="" disabled selected>เลือกประเภทสินค้า</option>

              </select>
            </div>

            <div class="col-6">
              <label>ชื่อสินค้า <a style="color:red;">*</a></label></br>
              <input type="text" class="form-control " id="jewelry_name" name="jewelry_name" placeholder="ชื่ออัญมณี">
            </div>
          </div>

          <div class="row">
            <div class="col-6" style="max-width: 47%;">
              <label>คอลเลคชั่น </label></br>
              <select class="form-select" id="item_collection" name="item_collection">
                <option value="" disabled selected>เลือกคอลเลคชั่น</option>

              </select>
            </div>
            <div class="col-6">
              <label>ขนาด </label></br>
              <select class="form-select" id="item_product_size" name="item_product_size">
                <option value="" disabled selected>เลือกขนาด</option>

              </select>
            </div>
          </div>

          <div class="row">
            <div class="col-6" style="max-width: 47%;">
              <label>โลหะ <a style="color:red;">*</a></label></br>
              <select class="form-select" id="metal_name" name="metal_name" onchange="show_price()">
                <option value="" disabled selected>เลือกโลหะ </option>

              </select>
            </div>
            <div class="col-6">
              <label>สีโลหะ</label></br>
              <select class="form-select" id="metal_color" name="metal_color">
                <option value="" disabled selected>เลือกสีโลหะ</option>

              </select>
            </div>
          </div>


        </div>
        <div class="detail-grid-item" style="padding-left:30px;padding-top:50px;">

          <div class="row">
            <div class="col-6" style="max-width: 48%;">
              <label>น้ำหนักตัวเรือน ( Nwt )</label></br>
              <div class="custom-formcontrol" id="small-input">
                <input type="text" id="weight" name="weight" style="outline: 0; border: 0; width: 235px; height: 30px; " placeholder="รูปร่าง">
                <span>กรัม</span>
              </div>
            </div>
            <div class="col-6">
              <label>น้ำสุทธิ ( Gwt )</label></br>
              <div class="custom-formcontrol" id="small-input">
                <input type="text" id="net_weight" name="net_weight" style="outline: 0; border: 0; width: 235px; height: 30px; " placeholder="0.00">
                <span>กรัม</span>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-4" style="max-width: 28.333333%;">
              <label>ราคาต่อกรัม ( Gwt )</label></br>
              <div class="custom-formcontrol" style="width:173px;">
                <input type="text" id="price_per_unit" name="price_per_unit" style="outline: 0; border: 0; width: 110px; height: 30px; " placeholder="@0.00">
                <span>บาท</span>
              </div>
            </div>
            <div class="col-3" style="margin-top:42px; max-width: 19%;">
              <select class="form-select" style="width:117px; height: 45px;" id="nwt_gwt" name="nwt_gwt" onchange="cal_price()">
              <option value="" disabled selected>คำนวณ</option>
                <option value="nwt">Nwt </option>
                <option value="gwt">Gwt</option>
              </select>
            </div>
            <div class="col-5">
              <label>รวมราคาโลหะ</label></br>
              <div class="custom-formcontrol" id="small-input">
                <input type="text" id="total_price" name="total_price" style="outline: 0; border: 0; width: 235px; height: 30px; " placeholder="0.00">
                <span>บาท</span>
              </div>
            </div>
          </div>

          <label>รายละเอียด</label></br>
          <textarea class="form-control" id="detail" name="detail" placeholder="รายละเอียด"></textarea>


        </div>
      </div>
      <div class="totaldiv">
        <div id="showtotaldiv">
          <div align="right">
            <div id="closetotaldiv" align="center"><img src="assets/image/icon/aa.png" class="totalimg"></div>
          </div>
          <div class="indetail">
            <div class="row">
              <div class="col-6" align="left">
                <p>ราคาโลหะ</p>
              </div>
              <div class="col-6" align="right">
                <p id="metal_price">15,620.00 บาท</p>
              </div>
            </div>
            <hr>

            <div class="row">
              <div class="col-6" align="left">
                <p>ราคาอัญมณี/เพชร</p>
              </div>
              <div class="col-6" align="right">
                <p>0.00 บาท</p>
              </div>
            </div>
            <hr>

            <div class="row">
              <div class="col-6" align="left">
                <p>ราคาค่าแรง</p>
              </div>
              <div class="col-6" align="right">
                <div class="custom-formcontrol" style="width: 187.18px; height: 38px; ">
                  <input type="text" style="outline: 0; border: 0; width: 120px; height: 25px; " placeholder="0.00">
                  <span>บาท</span>
                </div>
              </div>
            </div>
            <hr>

            <div class="row">
              <div class="col-6" align="left">
                <p>ราคาขาย</p><input type="checkbox" style="width:30px;">ราคาอัติโนมัติ
              </div>
              <div class="col-6" align="right">
                <p>0.00 บาท</p>
              </div>
            </div>
            <hr>


          </div>
        </div>
        <div id="detailup" align="center"><img src="assets/image/icon/up.png" class="totalimg"></div>
        <div class="detail"><a>ราคารวมทั้งสิ้น</a><a  id="metal_total_price">0.00 บาท</a></div>
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
        </form>

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
                <div class="col-6" align="left"><button type="button" class="popupbtnsave" onclick="document.getElementById('main_form').submit();">บันทึก</button></div>
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
          <th scope="col">ประเภทสินค้า</th>
          <th scope="col">รหัสสินค้า</th>
          <th scope="col">คอลเลคชัน</th>
          <th scope="col">ขนาด</th>
          <th scope="col">โลหะ</th>
          <th scope="col">ราคา(บาท)</th>
          <th scope="col">รายละเอียด</th>
          <th scope="col">วันที่แก้ไขล่าสุด</th>

        </tr>

        <?php 
        foreach($table_data as $key => $value){

        ?>
        <tr>
          <td scope="row">
            <label class="containerv2" style="  padding-left:40px; margin-top:0px; width: 30px;">
            <?php $key ?>
              <input type="checkbox">
              <span class="checkmarks"></span>
            </label>
          </td>
          <td><img src="assets/image/plus.png" style="width:40.54px; width:40px;"></td>
          <td>
          <?php
            foreach ($data['item_product_type'] as $item) {
              if ($value->product_group == $item->uid) {
                echo $item->master_name;
              }
            }
            ?>
          </td>
          <td><?php echo $value ->stone_code; ?></td>
          <td>
          <?php
            foreach ($data['item_collection'] as $item) {
              if ($value->item_collection == $item->uid) {
                echo $item->master_name;
              }
            }
            ?>
          </td>
          <td>
          <?php
            foreach ($data['item_product_size'] as $item) {
              if ($value->product_size == $item->uid) {
                echo $item->master_name;
              }
            }
            ?>
          </td>
          <td>
          <?php
            foreach ($data['metal_name'] as $item) {
              if ($value->metal_name == $item->uid) {
                echo $item->master_name;
              }
            }
            ?>
          </td>
          <td><?php echo $value ->totail_price; ?></td>
          <td><?php echo $value ->product_description; ?></td>
          <td>24/04/2565</td>
        </tr>

        <?php } ?>

        







    </div>
  </div>








  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

  <script>
    var jewelry_data ;
    var price_per_unit_global;
    window.onload = function() {
      jewelry_data = <?php echo json_encode($data); ?>;
      let data = <?php echo json_encode($data); ?>;
      console.log(data);
      let product_group = document.getElementById('item_product_type');
      for (let i = 0; i < data.item_product_type.length; i++) {
        let option = document.createElement('option');
        option.value = data.item_product_type[i].uid;
        option.innerHTML = data.item_product_type[i].master_name;
        product_group.appendChild(option);
      }
      // item_collection
      let item_collection = document.getElementById('item_collection');
      for (let i = 0; i < data.item_collection.length; i++) {
        let option = document.createElement('option');
        option.value = data.item_collection[i].uid;
        option.innerHTML = data.item_collection[i].master_name;
        item_collection.appendChild(option);
      }
      // item_product_size
      let item_product_size = document.getElementById('item_product_size');
      for (let i = 0; i < data.item_product_size.length; i++) {
        let option = document.createElement('option');
        option.value = data.item_product_size[i].uid;
        option.innerHTML = data.item_product_size[i].master_name;
        item_product_size.appendChild(option);
      }
      // metal_name
      let metal_name = document.getElementById('metal_name');
      for (let i = 0; i < data.metal_name.length; i++) {
        let option = document.createElement('option');
        option.value = data.metal_name[i].uid;
        option.innerHTML = data.metal_name[i].master_name;
        metal_name.appendChild(option);
      }
      // metal_color
      let metal_color = document.getElementById('metal_color');
      for (let i = 0; i < data.metal_color.length; i++) {
        let option = document.createElement('option');
        option.value = data.metal_color[i].uid;
        option.innerHTML = data.metal_color[i].master_name;
        metal_color.appendChild(option);
      }
    }


    const insert_form = () => {
      let main_form = document.getElementById('main_form');
      main_form.action = 'productjewelry/insert';
      main_form.method = 'post';

    }

    const delete_data = (id) => {
      let main_form = document.getElementById('main_form');
      main_form.action = `productjewelry/delete/${id}`;
      main_form.method = 'post';
      main_form.submit();
    }


    const show_price = ()=>{
      let metal_name = document.getElementById('metal_name').value;
      let price_per_unit = document.getElementById('price_per_unit');
      console.log(jewelry_data);
      console.log((jewelry_data.metal_name[1].parent_id).replaceAll('"',''));
      console.log(metal_name);
      // map jewelry_data.metal_name
      let price = jewelry_data.metal_name.map((item)=>{
        if(item.uid == metal_name){
          let price_form = item.parent_id.replaceAll('"','')
          parseInt(price_form);
          price_per_unit.value = price_form.replace(/\d(?=(\d{3})+\.)/g, '$&,');
          price_per_unit_global = parseInt(item.parent_id.replaceAll('"',''));
        }

      })
    }

    const cal_price = ()=>{
      let nwt_gwt = document.getElementById('nwt_gwt').value;
      let total_price = document.getElementById('total_price');
      let weight = parseInt(document.getElementById('weight').value);
      let net_weight = parseInt(document.getElementById('net_weight').value);
      let nwt_price = document.getElementById('nwt_price');
      let gwt_price = document.getElementById('gwt_price');
      let metal_price = document.getElementById('metal_price');
      let metal_total_price = document.getElementById('metal_total_price');
      if(nwt_gwt == 'nwt'){
        total_price.value = (price_per_unit_global * weight).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
        metal_price.innerHTML = (price_per_unit_global * weight).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') + ' บาท';
        metal_total_price.innerHTML = (price_per_unit_global * weight).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') + ' บาท';
      }else if(nwt_gwt == 'gwt'){
        total_price.value = (price_per_unit_global * net_weight).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
        metal_price.innerHTML = (price_per_unit_global * net_weight).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') + ' บาท';
        metal_total_price.innerHTML = (price_per_unit_global * net_weight).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') + ' บาท';
      }
      nwt_price.value = (price_per_unit_global * weight);
      gwt_price.value = (price_per_unit_global * net_weight).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');

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
        $('#stonecode').prop('readonly', true);

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

    $(document).ready(function() {
      $('#detailup').click(function() {
        var showdiv = document.getElementById("showtotaldiv");
        if (showdiv.style.display == "none") {
          document.getElementById("showtotaldiv").style.display = "block";
        } else {
          document.getElementById("showtotaldiv").style.display = "none";
        }
      });
    });
    $(document).ready(function() {
      $('#closetotaldiv').click(function() {
        var showdiv = document.getElementById("showtotaldiv");
        if (showdiv.style.display == "none") {
          document.getElementById("showtotaldiv").style.display = "block";
        } else {
          document.getElementById("showtotaldiv").style.display = "none";
        }
      });
    });
  </script>
</body>

</html>