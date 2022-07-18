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
    
</head>
<body style="background-color: #EBEEF0; overflow: scroll;">

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
<div class="col-10"><a style="font-size:25px;font-weight: 500;color: #2A2A2A;">Memo In จิวเวลรี่</a></div>
<div class="col-1" style="margin-left:75px;"><button type="button" class="btnchxsave" style="width:150px; "  data-bs-toggle="modal" data-bs-target="#exampleModal" disabled>บันทึก</button></div>
</div>

<div class="saletap">
  <div class="saletap-item" style="    margin-left: 80px;">
    <label for="">เลขที่ใบงาน</label></br>
    <input type="text" class="form-control" placeholder="MEMO-JW050001" readonly>
  </div>

  <div class="saletap-item">
    <label>วันเกิด</label></br>
    <input type="date" name="datefilter" class="form-control mb-2 " style="padding-left:40px;background-color: white; " value="กรุณาเลือก" /><span><img src="<?php echo base_url('assets/image/icon/calendar-5.png'); ?>" class="iconsalecalenda"></span>
  </div>

  <div class="saletap-item">
    <label for="">คู่ค้า</label></br>
    <select  class="form-select"  style="width:280px;">
      <option value="" disabled selected>เลือกลูกค้า</option>
      <option>??</option>
      <option>??</option>
      <option>??</option>
      <option>??</option>
    </select>
  </div >

  

  <div class="saletap-item" >
    <label for="">เลขที่อ้างอิง 1</label></br>
    <input type="text" class="form-control" placeholder="เลขที่อ้างอิง 1" >
  </div>

  <div class="saletap-item" >
    <label for="">เลขที่อ้างอิง 2</label></br>
    <input type="text" class="form-control" placeholder="เลขที่อ้างอิง 2">
  </div>


</div>
<div class="main" style="height: 381px; width: 2573px; position: relative;">

<div class="purchasehead">
<span style="margin-right:25px;margin-left:15px;">รูป</span>
  <span style="margin-right:218px;">Lot No.</span>
  <span style="margin-right:90px;">ประเภทสินค้า</span>
  <span style="margin-right:75px;">รหัสสินค้า Product Code</span>
  <span style="margin-right: 25px;">น้ำหนักตัวเรือน(Nwt)</span>
  <span style="margin-right: 57px;">น้ำหนักสุทธิ(Gwt)</span>
  <span style="margin-right: 88px;">จำนวน</span>
  <span style="margin-right: 233px;">ราคาทุน</span>
  <span style="margin-right: 126px;">ราคารวม</span>
  <span style="margin-right: 225px;">ราคาขาย</span>
  <span style="margin-right:15px;">หมายเหตุ</span>
</div>

<div class="purchasedetail">
<span>1</span>
<input type="text"   style="width: 47px;" placeholder="icon">
<input type="text "  style="width: 281px;" placeholder="Lot No.">
<select  style="width:200px;">
      <option value="" disabled selected>เลือกประเภทสินค้า</option>
      <option>??</option>
      <option>??</option>
      <option>??</option>
      <option>??</option>
</select>
<select  style="width:281px;">
      <option value="" disabled selected>เลือกรหัสสินค้า Product Code</option>
      <option>??</option>
      <option>??</option>
      <option>??</option>
      <option>??</option>
</select>

<input type="text "  style="width: 200px;" placeholder="0.00">
<input type="text "  style="width: 200px;" placeholder="0">
<input type="text "  style="width: 145px;" placeholder="0">
<input type="text "  style="width: 200px;" placeholder="0">
<input type="text "  style="width: 92px;" value="ชิ้น" readonly>
<input type="text "  style="width: 200px;" placeholder="0">
<input type="text "  style="width: 200px;" placeholder="0">
<input type="text "  style="width: 92px;"value="ชิ้น" readonly>
<input type="text "  style="width: 281px;"placeholder="หมายเหตุ">
</div>

<div style="margin-top:15px;margin-left:15px;"> <a href="#"><img src="<?php echo base_url('assets/image/icon/add.png'); ?>"style="width:44px;height:44px;"></a></div>


<div style="position: absolute; bottom: 4px;">
<lavel>หมายเหตุ</lavel>
  <input type="text" class="form-control" placeholder="หมายเหตุ" style="width:1141px">
</div>



<!-- -----------------------total--------------- -->
<div class="totaldiv" style="bottom: 0px;right: 907px;">
    <div id="showtotaldiv">
      <div class="row">
        <div class="col-6"><input type="text" class="form-control" placeholder="ราคารวม VAT" style="margin-top:5px; margin-left:15px;width:175px;"></div>
        <div class="col-6" align="right"><div id="closetotaldiv" align="center"><img src="<?php echo base_url('assets/image/icon/aa.png'); ?>" class="totalimg"></div></div>
      </div>
      <!-- <div align="right"><div id="closetotaldiv" align="center"><img src="<?php echo base_url('assets/image/icon/aa.png'); ?>" class="totalimg"></div></div> -->
      <div class="indetail">
      <div class="row">
        <div class="col-6" align="left"><p>ราคา</p></div>
        <div class="col-6" align="right"><p>0.00 บาท</p></div>
      </div>

      <div class="row">
        <div class="col-2" align="left"><p>ส่วนลด</p></div>
        <div class="col-4" align="left">
          <div class="custom-formcontrol" style="width: 81px; height: 38px; ">
                     <input type="text" style="outline: 0; border: 0; width: 36px; height: 25px; " placeholder="0">
                      <span>%</span>
        </div>
      </div>
        <div class="col-6" align="right"><p>0.00 บาท</p></div>
      </div>

      <div class="row">
        <div class="col-6" align="left"><h3>ราคาหลังหักส่วนลด</h3></div>
        <div class="col-6" align="right"><h3>0.00 บาท</h3></div>
      </div>
      <hr>


      <div class="row">
        <div class="col-6" align="left"><p>ราคาก่อนรวม VAT</p></div>
        <div class="col-6" align="right"><p>0.00 บาท</p></div>
      </div>

      <div class="row">
        <div class="col-6" align="left"><p>VAT 7%</p></div>
        <div class="col-6" align="right"><p>0.00 บาท</p></div>
      </div>

      <div class="row">
        <div class="col-6" align="left"><h3>ราคาหลังรวม VAT</h3></div>
        <div class="col-6" align="right"><h3>0.00 บาท</h3></div>
      </div>
      <hr>

      <div class="row">
        <div class="col-6" align="left" ><a style="color: #DADADA;">มัดจำ</a></div>
        <div class="col-6" align="right" ><a style="color: #DADADA;">0.00 บาท</a></div>
      </div>
      <div class="row">
        <div class="col-6" align="left"><a style="color: #DADADA;">ราคาหลังมัดจำ</a></div>
        <div class="col-6" align="right"><a style="color: #DADADA;">0.00 บาท</a></div>
      </div>
      <label class="containerv2" style="  padding-left:40px; margin-top:4px; width: 200px;">หักภาษี ณ ที่จ่าย 3%
              <input type="checkbox" >
                <span class="checkmarks"></span>
            </label>
  
      </div>
    </div>  
    <div id="detailup" align="center"><img src="<?php echo base_url('assets/image/icon/up.png'); ?>" class="totalimg"></div>
    <div class="detail"><a>ราคารวมทั้งสิ้น</a><a>0.00 บาท</a></div>
  </div>

  <!-- ----------------------- endtotal--------------- -->
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
              <img src="<?php echo base_url('assets/image/icon/excel.png'); ?>" style="width:31px;height:31px;">
          </div>
          <div class="col-4">
            <img src="<?php echo base_url('assets/image/icon/printing.png'); ?>" style="width:31px;height:31px;">
          </div>
          <div class="col-4">
          <img src="<?php echo base_url('assets/image/icon/setting.png'); ?>" style="width:31px;height:31px;">
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
        <img src="<?php echo base_url('assets/image/icon/Search.png'); ?>">
          <input type="text" id="search" class="form-control" placeholder="Search" >
      </div>
        </div>
    </div>
  </div>


  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    <div align="center"><img src="<?php echo base_url('assets/image/icon/question-mark.png'); ?>" class="popupimg"></div>
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



</div>


<table id="maintable">
  <tr>
  <th scope="col"><label class="containerv2" style="  padding-left:40px; margin-top:0px; width: 30px;">#
              <input type="checkbox" >
                <span class="checkmarks" style="left:8px;"></span>
            </label></th>
      <th scope="col">เลขที่ใบงาน</th>
      <th scope="col">วันที่</th>
      <th scope="col">คู่ค้า</th>
      <th scope="col">เลขที่อ้างอิง 1</th>
      <th scope="col">เลขที่อ้างอิง 2</th>
      <th scope="col">จำนวน (ชิ้น)</th>
      <th scope="col">ราคารวม (บาท)</th>
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
      <td>PU-JW050001</td>
      <td>19/04/2565</td>
      <td>BOS Co., Ltd.</td>
      <td>-</td>
      <td>-</td>
      <td>1</td>
      <td>660,620.00</td>
      <td>
      <div class="selectdiv">
      <select class="custom-se" id="status">
          <option value="0" disabled selected>รออนุมัต</option>
          <option value="2">อนุมัติ</option>
          <option value="1">ยกเลิก</option>
      </select>
</div>
      </td>
      <td><img src="<?php echo base_url('assets/image/icon/action.png'); ?>" style="width:40.54px; width:40px;" ></td>
  </tr>



 
 

 



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

</script>
</body>
</html>