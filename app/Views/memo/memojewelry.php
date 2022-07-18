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
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/css/bootstrap-select.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.11.0/css/all.css" rel="stylesheet" crossorigin="anonymous">

    <!-- ------------JS---------------- -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>


</head>

<body style="background-color: #EBEEF0; overflow-x: hidden;">

<div class="nav-div">

    <img src="<?php echo base_url('assets/image/chxlogo.png'); ?>" alt="" style="width:199px;height:50px; margin-top:20px;margin-left:15px;">

    <div class="nav-rights flex-div">
        <p>พฤ. 24 ก.พ. 2022</p>
        <p >10:10:40</p>
        <div class="hrs"></div>
        <div class="circular"> <img src="<?php echo base_url('assets/image/chxprofile.jpg'); ?>" alt=""></div>
        <div><a style="margin-bottom:0px;">สวัสดี โรเซ่</a></br>
        <span>Admin</span> </div>
        <div class="top-drops"><a href="#"><img src="<?php echo base_url('assets/image/icon/Dropdown.png'); ?>" alt=""></a></div>
    
    </div>
</div>

<div class="sidebar" >
    <ul>
        <li>
        <a href="#" class="dropbtn" ><img src="<?php echo base_url('assets/image/icon/graph-2.png'); ?>" style="margin-right:10px;" class="sidebarimg">รายงานภาพรวม</a>
        </li>
        <li>
          <div class="dropdown">
            <a class="dropbtn"><img src="<?php echo base_url('assets/image/icon/business-and-trade-4.png'); ?>"style="margin-right:10px;" class="sidebarimg" >โปรไฟล์<img src="<?php echo base_url('assets/image/icon/next.png'); ?>" class="rightimg" alt="" align="right"></a>
            <div class="dropdown-content" >
                <ul>
                  <li>
                    <a href="<?php echo base_url('profile'); ?>" class="dropbtn">ข้อมูลบริษัท</a>
                  </li>
                  <li>
                    <div class="dropdown-sub">
                      <a class="dropbtn">พนักงาน<img src="<?php echo base_url('assets/image/icon/next.png'); ?>'); ?>" alt="" class="rightimg" align="right"></a>
                      <div class="dropdown-sub-content" >
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
                      <div class="dropdown-sub-content" >
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
                    <a class="dropbtn">ไอเทม<img src="<?php echo base_url('assets/image/icon/next.png'); ?>'); ?>" alt="" class="rightimg"  align="right"></a>
                    <div class="dropdown-sub-content" >
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
                    <div class="dropdown-sub-content" >
                      <ul>
                        <li><a href="<?php echo base_url('mastermetalcolor'); ?>" class="dropbtn">สีโลหะ</a></li>
                        <li><a href="<?php echo base_url('mastermetalname'); ?>" class="dropbtn">ชื่อโลหะ</a></li>
                      </ul>
                    </div>
                </li>

                <li>
                  <div class="dropdown-sub">
                    <a class="dropbtn">อัญมณี<img src="<?php echo base_url('assets/image/icon/next.png'); ?>'); ?>" alt="" class="rightimg" align="right"></a>
                    <div class="dropdown-sub-content" >
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
                    <div class="dropdown-sub-content" >
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
            <a class="dropbtn"><img src="<?php echo base_url('assets/image/icon/support-3.png'); ?>" style="margin-right:10px;" class="sidebarimg" >เซอร์วิสออเดอร์<img src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt="" class="rightimg" align="right"></a>
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
            <a class="dropbtn"><img src="<?php echo base_url('assets/image/icon/pay-day-3.png'); ?>" style="margin-right:10px;" class="sidebarimg" >การออม<img src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt="" class="rightimg" align="right"></a>
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
                <li><a href="#"  class="dropbtn">อัญมณี / เพชร</a></li>
                <li><a href="#"  class="dropbtn">จิวเวลรี่</a></li> 
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
                    <div class="dropdown-sub-content" >
                      <ul>
                        <li><a href="<?php echo base_url('/purchase/purchasestone'); ?>" class="dropbtn">อัญมณี / เพชร</a></li>
                        <li><a href="<?php echo base_url('/purchase/purchasejewelry'); ?>" class="dropbtn">จิวเวลรี่</a></li>
                      </ul>
                    </div>
                </li>
                
                <li>
                  <div class="dropdown-sub">
                    <a class="dropbtn">MEMO In<img src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt="" class="rightimg" align="right"></a>
                    <div class="dropdown-sub-content" >
                      <ul>
                        <li><a href="<?php echo base_url('/memoin/memoinstone'); ?>" class="dropbtn">อัญมณี / เพชร</a></li>
                        <li><a href="<?php echo base_url('/memoin/memoinjewelry'); ?>" class="dropbtn">จิวเวลรี่</a></li>
                      </ul>
                    </div>
                </li>
                <li>
                  <div class="dropdown-sub">
                    <a class="dropbtn">MEMO Return<img src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt="" class="rightimg" align="right"></a>
                    <div class="dropdown-sub-content" >
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
                <li> <div class="dropdown-sub">
                    <a class="dropbtn">การจัดซื้อ(Purchase)<img src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt="" class="rightimg" align="right"></a>
                    <div class="dropdown-sub-content" >
                      <ul>
                       <li><a href="<?php echo base_url('/inventory/purchasestone'); ?>" class="dropbtn">อัญมณี / เพชร</a></li>
                        <li><a href="<?php echo base_url('/inventory/purchasejewelry'); ?>" class="dropbtn">จิวเวลรี่</a></li>
                      </ul>
                    </div></li>

                    <li> <div class="dropdown-sub">
                    <a class="dropbtn">คลัง MEMO<img src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt="" class="rightimg" align="right"></a>
                    <div class="dropdown-sub-content" >
                      <ul>
                       <li><a href="<?php echo base_url('/memo/memostone'); ?>" class="dropbtn">อัญมณี / เพชร</a></li>
                        <li><a href="<?php echo base_url('/memo/memojewelry'); ?>" class="dropbtn">จิวเวลรี่</a></li>
                      </ul>
                    </div></li>

                    <li> <div class="dropdown-sub">
                    <a class="dropbtn">คลังเซอร์วิสออเดอร์<img src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt="" class="rightimg" align="right"></a>
                    <div class="dropdown-sub-content" >
                      <ul>
                       <li><a href="<?php echo base_url('/inventory/serviceorder'); ?>" class="dropbtn">ออเดอร์ผลิต</a></li>
                        <li><a href="<?php echo base_url('/inventory/servicerepair'); ?>" class="dropbtn">ออเดอร์ซ่อม</a></li>
                        <li><a href="<?php echo base_url('/inventory/servicemounting'); ?>" class="dropbtn">ออเดอร์ตัวเรือน</a></li>
                      </ul>
                    </div></li>
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
                  <a class="dropbtn">ใบการเงิน<img src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt="" class="rightimg"  align="right"></a>
                  <div class="dropdown-sub-content" >
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




<div class="row "style="padding-left:250px; margin-bottom:15px; margin-top:101px; font-size:25px;">
<div class="col-6"><a style="font-size:25px;font-weight: 500;color: #2A2A2A;">คลัง Purchase จิวเวลรี่</a></div>
<div class="col-1" style="margin-right:10px;"> <select name="" id="" class="form-select" style="width:140px;">
  <option value="">รายการ 100</option>
  <option value="">รายการ 100</option>
</select></div>
<div class="col-2" style="margin-right: 45px;" ><input type="text" name="datefilter" class="form-control mb-2 " style="padding-left:40px;background-color: white; width:317px;" value="กรุณาเลือก"  READONLY/><img src="<?php echo base_url('assets/image/icon/calendar-5.png'); ?>" class="iconpurstonecalenda"></div>
<div class="col-2"> <input type="text" class="form-control" style="width: 345px;" placeholder="ค้นหา"></div>
</div>



<div class="main" style="overflow-x: scroll; padding:0px; height:785px;" >
<table id="inventable" >
        <thead>
        <tr >
        <th rowspan="2"><label class="containerv2" style="  padding-left:40px; margin-top:0px;width: 70px;">#
              <input type="checkbox" >
                <span class="checkmarks" style="left:10px;"></span>
            </label></th>
  	<th rowspan="2" style="min-width: 150px;">เลขที่ใบงาน</th>
    <th rowspan="2" style="min-width: 150px;">เลขที่อ้างอิง 1</th>
  	<th rowspan="2" style="min-width: 150px;">เลขที่อ้างอิง 2</th>
    <th rowspan="2" style="min-width: 210px;">คู้ค้า</th>
    <th rowspan="2" style="min-width: 100px;">Lot No.</th>
  	<th rowspan="2" style="min-width: 150px;">วันที่</th>
  	<th rowspan="2" style="min-width: 150px;">ประเภทสินค้า</th>
  	<th rowspan="2" style="min-width: 150px;">รหัสอัญมณี</th>
    <th colspan="5" id="inventableblue" style="text-align:center;">รับเข้า</th>
    <th colspan="5" id="inventablepink" style="text-align:center;">จัดซื้อ</th>
    
    <th colspan="5" id="inventableyellow " style="text-align:center ; color:white; background-color:#FFC164; min-width: 465px;">ออม</th>
    <th colspan="5" id="inventablepurple" style="text-align:center;">Job</th>
    <th colspan="5" id="inventablered" style="text-align:center;">ขาย</th>
    <th colspan="5" id="inventabledeep" style="text-align:center;">ขาย</th>
    <th colspan="5" id="inventablegreen" style="text-align:center;">คงเหลือ</th>

  </tr>
  <tr >
    <th colspan="1" id="inventablebluesub">จำนวน</th>
    <th colspan="1" id="inventablebluesub">Nwt</th>
    <th colspan="1" id="inventablebluesub">Gwt</th>
    <th colspan="1" id="inventablebluesub">ราคา/ชิ้น</th>
    <th colspan="1" id="inventablebluesub">ราคา</th>

    <th colspan="1" id="inventablepinksub">จำนวน</th>
    <th colspan="1" id="inventablepinksub">Nwt</th>
    <th colspan="1" id="inventablepinksub">Gwt</th>
    <th colspan="1" id="inventablepinksub">ราคา/ชิ้น</th>
    <th colspan="1" id="inventablepinksub">ราคา</th>


    <th colspan="1" id="inventableyellowsub">จำนวน</th>
    <th colspan="1" id="inventableyellowsub">Nwt</th>
    <th colspan="1" id="inventableyellowsub">Gwt</th>
    <th colspan="1" id="inventableyellowsub">ราคา/ชิ้น</th>
    <th colspan="1" id="inventableyellowsub">ราคา</th>

    <th colspan="1" id="inventablepurplesub">จำนวน</th>
    <th colspan="1" id="inventablepurplesub">Nwt</th>
    <th colspan="1" id="inventablepurplesub">Gwt</th>
    <th colspan="1" id="inventablepurplesub">ราคา/ชิ้น</th>
    <th colspan="1" id="inventablepurplesub">ราคา</th>

    <th colspan="1" id="inventableredsub">จำนวน</th>
    <th colspan="1" id="inventableredsub">Nwt</th>
    <th colspan="1" id="inventableredsub">Gwt</th>
    <th colspan="1" id="inventableredsub">ราคา/ชิ้น</th>
    <th colspan="1" id="inventableredsub">ราคา</th>

    <th colspan="1" id="inventabledeepsub">จำนวน</th>
    <th colspan="1" id="inventabledeepsub">Nwt</th>
    <th colspan="1" id="inventabledeepsub">Gwt</th>
    <th colspan="1" id="inventabledeepsub">ราคา/ชิ้น</th>
    <th colspan="1" id="inventabledeepsub">ราคา</th>

    <th colspan="1" id="inventablegreensub">จำนวน</th>
    <th colspan="1" id="inventablegreensub">Nwt</th>
    <th colspan="1" id="inventablegreensub">Gwt</th>
    <th colspan="1" id="inventablegreensub">ราคา/ชิ้น</th>
    <th colspan="1" id="inventablegreensub">ราคา</th>
  </tr>
        </thead>
        <tbody>
            <tr>
            <td ><label class="containerv2" style="  padding-left:40px; margin-top:0px;width: 70px;">1
              <input type="checkbox" >
                <span class="checkmarks" style="left:8px;"></td>
              <td>PU-JW04001</td>
              <td>Ref-01</td>
              <td>-</td>
              <td>Jeweal Prosoft Co., Ltd.</td>
              <td>01001</td>
              <td>19/04/2565</td>
              <td>ต่างหู</td>
              <td>Vt 862</td>

              <td id="tdblue">100</td>
              <td id="tdblue">49.00</td>
              <td id="tdblue">49.00</td>
              <td id="tdblue">5000.00</td>
              <td id="tdblue">500000.00</td>

              <td id="tdpink">100</td>
              <td id="tdpink">49.00</td>
              <td id="tdpink">49.00</td>
              <td id="tdpink">5000.00</td>
              <td id="tdpink">500000.00</td>

              <td id="tdyellow">100</td>
              <td id="tdyellow">49.00</td>
              <td id="tdyellow">49.00</td>
              <td id="tdyellow">5000.00</td>
              <td id="tdyellow">500000.00</td>

              <td id="tdpurple">100</td>
              <td id="tdpurple">49.00</td>
              <td id="tdpurple">49.00</td>
              <td id="tdpurple">5000.00</td>
              <td id="tdpurple">500000.00</td>

              <td id="tdred">100</td>
              <td id="tdred">49.00</td>
              <td id="tdred">49.00</td>
              <td id="tdred">5000.00</td>
              <td id="tdred">500000.00</td>

              <td id="tddeep">100</td>
              <td id="tddeep">49.00</td>
              <td id="tddeepd">49.00</td>
              <td id="tddeep">5000.00</td>
              <td id="tddeep">500000.00</td>

              <td id="tdgreen">100</td>
              <td id="tdgreen">49.00</td>
              <td id="tdgreen">49.00</td>
              <td id="tdgreen">5000.00</td>
              <td id="tdgreen"> 500000.00</td>
            
            </tr>

        
     
         
        </tbody>
        <tfoot>
            <tr>
               <th colspan="9" style="border-top: 1px solid #ddd;"></th>
                <th id="inventablebluesub">200</th>
                <th id="inventablebluesub">98</th>
                <th id="inventablebluesub">50.00</th>
                <th colspan="1" id="inventablebluesub"></th>
                <th id="inventablebluesub">1000000</th>

                <th id="inventablepinksub">200</th>
                <th id="inventablepinksub">98</th>
                <th id="inventablepinksub">50.00</th>
                <th colspan="1" id="inventablepinksub"></th>
                <th id="inventablepinksub">1000000</th>

                <th id="inventableyellowsub">200</th>
                <th id="inventableyellowsub">98</th>
                <th id="inventableyellowsub">50.00</th>
                <th colspan="1" id="inventableyellowsub"></th>
                <th id="inventableyellowsub">1000000</th>


                <th id="inventablepurplesub">200</th>
                <th id="inventablepurplesub">98</th>
                <th id="inventablepurplesub">50.00</th>
                <th colspan="1" id="inventablepurplesub"></th>
                <th  id="inventablepurplesub">1000000</th>

     
                <th id="inventableredsub">200</th>
                <th id="inventableredsub">98</th>
                <th id="inventableredsub">50.00</th>
                <th colspan="1" id="inventableredsub"></th>
                <th id="inventableredsub">1000000</th>

                <th id="inventabledeepsub">200</th>
                <th id="inventabledeepsub">98</th>
                <th id="inventabledeepsub">50.00</th>
                <th colspan="1" id="inventabledeepsub"></th>
                <th id="inventabledeepsub">1000000</th>

       
                <th id="inventablegreensub">200</th>
                <th id="inventablegreensub">98</th>
                <th id="inventablegreensub">50.00</th>
                <th colspan="1" id="inventablegreensub"></th>
                <th id="inventablegreensub">1000000</th>
            </tr>

            
        </tfoot>
    </table> 

</div>






 <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script> -->
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
  var stonecode = document.getElementById("stonecode");
  
  if (stonecode.checked == true){
    document.getElementById("stonecode").value = "1";
  }
  else{
    document.getElementById("stonecode").value = "2";
    $('#stonecode').prop('readonly', true);
       
  }
}

$(document).ready(function(){
  $("input").keydown(function(){
    $(".btnchxsave").addClass('btnchxsaves');
    $(".btnchxsave").removeClass('btnchxsave');
    $(".btnchxsaves").removeAttr('disabled');
  });
});
// ------ change btn --------- //

$(document).ready(function() {
    $('#detailup').click(function() {
      var showdiv = document.getElementById("showtotaldiv");
      if(showdiv.style.display == "none"){
        document.getElementById("showtotaldiv").style.display="block";
      }
      else{
        document.getElementById("showtotaldiv").style.display="none";
      }
    });
});
$(document).ready(function() {
    $('#closetotaldiv').click(function() {
      var showdiv = document.getElementById("showtotaldiv");
      if(showdiv.style.display == "none"){
        document.getElementById("showtotaldiv").style.display="block";
      }
      else{
        document.getElementById("showtotaldiv").style.display="none";
      }
    });
});


$(document).on('change','#status' ,function(){
  var val = $('#status option:selected').val();
  var text = $('#status option:selected').text();
  if(val == 1){
    $("#status").attr("class", "custom-sev2");
  
  }
  else{
    $("#status").attr("class", "custom-sev3");
  }
})

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




</script>
</body>
</html>