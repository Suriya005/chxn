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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css'); ?>">
    <script type='text/javascript' src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=IBM Plex Sans Thai' rel='stylesheet'>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.11.0/css/all.css" rel="stylesheet" crossorigin="anonymous">

    <!-- ------------JS---------------- -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

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
                <a href="#" class="dropbtn"><img src="<?php echo base_url('assets/image/icon/graph-2.png'); ?>"
                        style="margin-right:10px;" class="sidebarimg">รายงานภาพรวม</a>
            </li>
            <li>
                <div class="dropdown">
                    <a class="dropbtn"><img src="<?php echo base_url('assets/image/icon/business-and-trade-4.png'); ?>"
                            style="margin-right:10px;" class="sidebarimg">โปรไฟล์<img
                            src="<?php echo base_url('assets/image/icon/next.png'); ?>" class="rightimg" alt=""
                            align="right"></a>
                    <div class="dropdown-content">
                        <ul>
                            <li>
                                <a href="<?php echo base_url('profile'); ?>" class="dropbtn">ข้อมูลบริษัท</a>
                            </li>
                            <li>
                                <div class="dropdown-sub">
                                    <a class="dropbtn">พนักงาน<img
                                            src="<?php echo base_url('assets/image/icon/next.png'); ?>'); ?>" alt=""
                                            class="rightimg" align="right"></a>
                                    <div class="dropdown-sub-content">
                                        <ul>
                                            <li><a href="<?php echo base_url('empprofile'); ?>"
                                                    class="dropbtn">ข้อมูลพนักงาน</a></li>
                                            <li><a href="#" class="dropbtn">สิทธิการเข้าถึง</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-sub">
                                    <a class="dropbtn">ลูกค้า/คู่ค้า<img
                                            src="<?php echo base_url('assets/image/icon/next.png'); ?>'); ?>"
                                            class="rightimg" alt="" align="right"></a>
                                    <div class="dropdown-sub-content">
                                        <a href="<?php echo base_url('cusprofile'); ?>" class="dropbtn">ข้อมูลลูกค้า</a>
                                        <a href="<?php echo base_url('partprofile'); ?>"
                                            class="dropbtn">ข้อมูลคู่ค้า</a>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </li>

            <li>
                <div class="dropdown">
                    <a class="dropbtn"><img src="<?php echo base_url('assets/image/icon/crown.png'); ?>"
                            style="margin-right:10px;" class="sidebarimg">มาสเตอร์<img
                            src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt="" class="rightimg"
                            align="right"></a>
                    <div class="dropdown-content">
                        <ul>

                            <li>
                                <div class="dropdown-sub">
                                    <a class="dropbtn">ไอเทม<img
                                            src="<?php echo base_url('assets/image/icon/next.png'); ?>'); ?>" alt=""
                                            class="rightimg" align="right"></a>
                                    <div class="dropdown-sub-content">
                                        <ul>
                                            <li><a href="<?php echo base_url('master'); ?>"
                                                    class="dropbtn">ประเภทสินค้า</a></li>
                                            <li><a href="<?php echo base_url('mastercorrection'); ?>"
                                                    class="dropbtn">คอลเลคชั่น</a></li>
                                            <li><a href="<?php echo base_url('mastersize'); ?>"
                                                    class="dropbtn">ขนาดสินค้า</a></li>
                                        </ul>
                                    </div>
                            </li>

                            <li>
                                <div class="dropdown-sub">
                                    <a class="dropbtn">โลหะ<img
                                            src="<?php echo base_url('assets/image/icon/next.png'); ?>'); ?>" alt=""
                                            class="rightimg" align="right"></a>
                                    <div class="dropdown-sub-content">
                                        <ul>
                                            <li><a href="<?php echo base_url('mastermetalcolor'); ?>"
                                                    class="dropbtn">สีโลหะ</a></li>
                                            <li><a href="<?php echo base_url('mastermetalname'); ?>"
                                                    class="dropbtn">ชื่อโลหะ</a></li>
                                        </ul>
                                    </div>
                            </li>

                            <li>
                                <div class="dropdown-sub">
                                    <a class="dropbtn">อัญมณี<img
                                            src="<?php echo base_url('assets/image/icon/next.png'); ?>'); ?>" alt=""
                                            class="rightimg" align="right"></a>
                                    <div class="dropdown-sub-content">
                                        <ul>
                                            <li><a href="<?php echo base_url('masterstonegroup'); ?>"
                                                    class="dropbtn">กลุ่มอัญมณี</a></li>
                                            <li><a href="<?php echo base_url('masterstonename'); ?>"
                                                    class="dropbtn">ชื่ออัญมณี/เพชร</a></li>
                                            <li><a href="<?php echo base_url('masterstoneshape'); ?>"
                                                    class="dropbtn">รูปทรง</a></li>
                                            <li><a href="<?php echo base_url('mastergemcolor'); ?>"
                                                    class="dropbtn">สีอัญมณี</a></li>
                                            <li><a href="<?php echo base_url('masterclarity'); ?>"
                                                    class="dropbtn">Clarity</a></li>
                                            <li><a href="<?php echo base_url('mastercutting'); ?>"
                                                    class="dropbtn">Cutting</a></li>
                                            <li><a href="<?php echo base_url('masterquality'); ?>"
                                                    class="dropbtn">คุณภาพ</a></li>
                                            <li><a href="<?php echo base_url('mastergemsize'); ?>"
                                                    class="dropbtn">ขนาดอัญมณี</a></li>
                                        </ul>
                                    </div>
                            </li>

                            <li>
                                <div class="dropdown-sub">
                                    <a class="dropbtn">อื่นๆ<img
                                            src="<?php echo base_url('assets/image/icon/next.png'); ?>'); ?>" alt=""
                                            class="rightimg" align="right"></a>
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
                    <a class="dropbtn"><img src="<?php echo base_url('assets/image/icon/rings.png'); ?>"
                            style="margin-right:10px;" class="sidebarimg">ข้อมูลสินค้า<img
                            src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt="" class="rightimg"
                            align="right"></a>
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
                    <a class="dropbtn"><img src="<?php echo base_url('assets/image/icon/check-list-3.png'); ?>"
                            style="margin-right:10px;" class="sidebarimg">คำสั่งขาย<img
                            src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt="" class="rightimg"
                            align="right"></a>
                    <div class="dropdown-content">
                        <ul>
                            <li><a href="<?php echo base_url('/saleorder/saleorderstone'); ?>"
                                    class="dropbtn">อัญมณี/เพชร</a></li>
                            <li><a href="<?php echo base_url('/saleorder/saleorderjewelry'); ?>"
                                    class="dropbtn">จิวเวลรี่</a></li>
                            <li><a href="#" class="dropbtn">รายงาน</a></li>
                        </ul>
                    </div>
                </div>
            </li>

            <li>
                <div class="dropdown">
                    <a class="dropbtn"><img src="<?php echo base_url('assets/image/icon/support-3.png'); ?>"
                            style="margin-right:10px;" class="sidebarimg">เซอร์วิสออเดอร์<img
                            src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt="" class="rightimg"
                            align="right"></a>
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
                    <a class="dropbtn"><img src="<?php echo base_url('assets/image/icon/pay-day-3.png'); ?>"
                            style="margin-right:10px;" class="sidebarimg">การออม<img
                            src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt="" class="rightimg"
                            align="right"></a>
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
                    <a class="dropbtn"><img src="<?php echo base_url('assets/image/icon/coin-2.png'); ?>"
                            style="margin-right:10px;" class="sidebarimg">การขาย<img
                            src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt="" class="rightimg"
                            align="right"></a>
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
                    <a class="dropbtn"><img src="<?php echo base_url('assets/image/icon/cargo-3.png'); ?>"
                            style="margin-right:10px;" class="sidebarimg">การจัดซื้อ<img
                            src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt="" class="rightimg"
                            align="right"></a>
                    <div class="dropdown-content">
                        <ul>
                            <li>
                                <div class="dropdown-sub">
                                    <a class="dropbtn">จัดซื้อ(Purchase)<img
                                            src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt=""
                                            class="rightimg" align="right"></a>
                                    <div class="dropdown-sub-content">
                                        <ul>
                                            <li><a href="<?php echo base_url('/purchase/purchasestone'); ?>"
                                                    class="dropbtn">อัญมณี / เพชร</a></li>
                                            <li><a href="<?php echo base_url('/purchase/purchasejewelry'); ?>"
                                                    class="dropbtn">จิวเวลรี่</a></li>
                                        </ul>
                                    </div>
                            </li>

                            <li>
                                <div class="dropdown-sub">
                                    <a class="dropbtn">MEMO In<img
                                            src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt=""
                                            class="rightimg" align="right"></a>
                                    <div class="dropdown-sub-content">
                                        <ul>
                                            <li><a href="<?php echo base_url('/memoin/memoinstone'); ?>"
                                                    class="dropbtn">อัญมณี / เพชร</a></li>
                                            <li><a href="<?php echo base_url('/memoin/memoinjewelry'); ?>"
                                                    class="dropbtn">จิวเวลรี่</a></li>
                                        </ul>
                                    </div>
                            </li>
                            <li>
                                <div class="dropdown-sub">
                                    <a class="dropbtn">MEMO Return<img
                                            src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt=""
                                            class="rightimg" align="right"></a>
                                    <div class="dropdown-sub-content">
                                        <ul>
                                            <li><a href="<?php echo base_url('/memoreturn/memoreturnstone'); ?>"
                                                    class="dropbtn">อัญมณี / เพชร</a></li>
                                            <li><a href="<?php echo base_url('/memoreturn/memoreturnjewelry'); ?>"
                                                    class="dropbtn">จิวเวลรี่</a></li>
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
                    <a class="dropbtn"><img src="<?php echo base_url('assets/image/icon/warehouse.png'); ?>"
                            style="margin-right:10px;" class="sidebarimg">คลังสินค้า<img
                            src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt="" class="rightimg"
                            align="right"></a>
                    <div class="dropdown-content">
                        <ul>
                            <li>
                                <div class="dropdown-sub">
                                    <a class="dropbtn">การจัดซื้อ(Purchase)<img
                                            src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt=""
                                            class="rightimg" align="right"></a>
                                    <div class="dropdown-sub-content">
                                        <ul>
                                            <li><a href="<?php echo base_url('/inventory/purchasestone'); ?>"
                                                    class="dropbtn">อัญมณี / เพชร</a></li>
                                            <li><a href="<?php echo base_url('/inventory/purchasejewelry'); ?>"
                                                    class="dropbtn">จิวเวลรี่</a></li>
                                        </ul>
                                    </div>
                            </li>

                            <li>
                                <div class="dropdown-sub">
                                    <a class="dropbtn">คลัง MEMO<img
                                            src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt=""
                                            class="rightimg" align="right"></a>
                                    <div class="dropdown-sub-content">
                                        <ul>
                                            <li><a href="<?php echo base_url('/memo/memostone'); ?>"
                                                    class="dropbtn">อัญมณี / เพชร</a></li>
                                            <li><a href="<?php echo base_url('/memo/memojewelry'); ?>"
                                                    class="dropbtn">จิวเวลรี่</a></li>
                                        </ul>
                                    </div>
                            </li>

                            <li>
                                <div class="dropdown-sub">
                                    <a class="dropbtn">คลังเซอร์วิสออเดอร์<img
                                            src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt=""
                                            class="rightimg" align="right"></a>
                                    <div class="dropdown-sub-content">
                                        <ul>
                                            <li><a href="<?php echo base_url('/inventory/serviceorder'); ?>"
                                                    class="dropbtn">ออเดอร์ผลิต</a></li>
                                            <li><a href="<?php echo base_url('/inventory/servicerepair'); ?>"
                                                    class="dropbtn">ออเดอร์ซ่อม</a></li>
                                            <li><a href="<?php echo base_url('/inventory/servicemounting'); ?>"
                                                    class="dropbtn">ออเดอร์ตัวเรือน</a></li>
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
                    <a class="dropbtn"><img src="<?php echo base_url('assets/image/icon/profit.png'); ?>"
                            style="margin-right:10px;" class="sidebarimg">การเงิน<img
                            src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt="" class="rightimg"
                            align="right"></a>
                    <div class="dropdown-content">
                        <ul>
                            <li>
                                <div class="dropdown-sub">
                                    <a class="dropbtn">ใบการเงิน<img
                                            src="<?php echo base_url('assets/image/icon/next.png'); ?>" alt=""
                                            class="rightimg" align="right"></a>
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
        <div class="col-9"><a style="font-size:25px;font-weight: 500;color: #2A2A2A;">ข้อมูลพนักงาน</a></div>
        <div class="col-1" style="margin-right:30px;margin-left:30px;"><button type="button" class="btnchxcan"
                style="width:150px;">ยกเลิก</button></div>
        <div class="col-1"><button id="form_action" onclick="insert_form()" type="button" class="btnchxsave" style="width:150px;"
                data-bs-toggle="modal" data-bs-target="#exampleModal">บันทึก</button></div>
    </div>

    <!-- Modal -->
    <form id="emp_form">
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
                    <div id="circle2" style="margin-bottom:15px;"></div>
                    <div style="margin-left: 40px; font-size:20px;"><button class="upload-btn">อัพโหลด</button></div>
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

    </script>
</body>

</html>