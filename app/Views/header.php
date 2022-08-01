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
        <img src="../assets/image/chxlogo.png" alt="" style="width:199px;height:50px; margin-top:20px;margin-left:15px;">

        <div class="nav-rights flex-div">
            <p id="current_datetime"></p>
            <div class="hrs"></div>
            <div class="circular"> <img src="../assets/image/chxprofile.jpg" alt=""></div>
            <div><a style="margin-bottom:0px;">สวัสดี โรเซ่</a></br>
                <span>Test</span>
            </div>
            <div class="top-drops"><a href="#"><img src="assets/image/icon/Dropdown.png" alt=""></a></div>

        </div>
    </div>

    <div class="sidebar">
        <ul>
            <!-- รายงานภาพรวม -->
            <?php
               if (session()->get('overview') == "1"){
                echo '<li>
                <a href="#" class="dropbtn"><img src="'.base_url('assets/image/icon/graph-2.png').'"
                        style="margin-right:10px;" class="sidebarimg">รายงานภาพรวม</a>
            </li>';
               }
            ?>

            <!-- โปรไฟล์ -->
            <?php if (session()->get('profile') == "1") { 
                echo '<li>
                <div class="dropdown">
                    <a class="dropbtn"><img src="'. base_url('assets/image/icon/business-and-trade-4.png') .'"
                            style="margin-right:10px;" class="sidebarimg">โปรไฟล์<img
                            src="'.base_url('assets/image/icon/next.png').'" class="rightimg" alt=""
                            align="right"></a>
                    <div class="dropdown-content">
                        <ul>
                            <li>
                                <a href="'.base_url('profile').'" class="dropbtn">ข้อมูลบริษัท</a>
                            </li>
                            <li>
                                <div class="dropdown-sub">
                                    <a class="dropbtn">พนักงาน<img
                                            src="'.base_url('assets/image/icon/next.png').'" alt=""
                                            class="rightimg" align="right"></a>
                                    <div class="dropdown-sub-content">
                                        <ul>
                                            <li><a href="'.base_url('empprofile').'"
                                                    class="dropbtn">ข้อมูลพนักงาน</a></li>
                                            <li><a href="#" class="dropbtn">สิทธิการเข้าถึง</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-sub">
                                    <a class="dropbtn">ลูกค้า/คู่ค้า<img
                                            src="'.base_url('assets/image/icon/next.png').'"
                                            class="rightimg" alt="" align="right"></a>
                                    <div class="dropdown-sub-content">
                                        <a href="'.base_url('cusprofile').'" class="dropbtn">ข้อมูลลูกค้า</a>
                                        <a href="'.base_url('partprofile').'"
                                            class="dropbtn">ข้อมูลคู่ค้า</a>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </li>';
             }?>

<!-- มาสเตอร์ -->
            <?php 
                if(session()->get('master') == "1"){
                    echo '<li>
                    <div class="dropdown">
                        <a class="dropbtn"><img src="'.base_url('assets/image/icon/crown.png').'"
                                style="margin-right:10px;" class="sidebarimg">มาสเตอร์<img
                                src="'.base_url('assets/image/icon/next.png').'" alt="" class="rightimg"
                                align="right"></a>
                        <div class="dropdown-content">
                            <ul>
    
                                <li>
                                    <div class="dropdown-sub">
                                        <a class="dropbtn">ไอเทม<img
                                                src="'.base_url('assets/image/icon/next.png').'" alt=""
                                                class="rightimg" align="right"></a>
                                        <div class="dropdown-sub-content">
                                            <ul>
                                                <li><a href="'.base_url('master').'"
                                                        class="dropbtn">ประเภทสินค้า</a></li>
                                                <li><a href="'.base_url('mastercorrection').'"
                                                        class="dropbtn">คอลเลคชั่น</a></li>
                                                <li><a href="'.base_url('mastersize').'"
                                                        class="dropbtn">ขนาดสินค้า</a></li>
                                            </ul>
                                        </div>
                                </li>
    
                                <li>
                                    <div class="dropdown-sub">
                                        <a class="dropbtn">โลหะ<img
                                                src="'.base_url('assets/image/icon/next.png').'" alt=""
                                                class="rightimg" align="right"></a>
                                        <div class="dropdown-sub-content">
                                            <ul>
                                                <li><a href="'.base_url('mastermetalcolor').'"
                                                        class="dropbtn">สีโลหะ</a></li>
                                                <li><a href="'.base_url('mastermetalname').'"
                                                        class="dropbtn">ชื่อโลหะ</a></li>
                                            </ul>
                                        </div>
                                </li>
    
                                <li>
                                    <div class="dropdown-sub">
                                        <a class="dropbtn">อัญมณี<img
                                                src="'.base_url('assets/image/icon/next.png').'" alt=""
                                                class="rightimg" align="right"></a>
                                        <div class="dropdown-sub-content">
                                            <ul>
                                                <li><a href="'.base_url('masterstonegroup').'"
                                                        class="dropbtn">กลุ่มอัญมณี</a></li>
                                                <li><a href="'.base_url('masterstonename').'"
                                                        class="dropbtn">ชื่ออัญมณี/เพชร</a></li>
                                                <li><a href="'.base_url('masterstoneshape').'"
                                                        class="dropbtn">รูปทรง</a></li>
                                                <li><a href="'.base_url('mastergemcolor').'"
                                                        class="dropbtn">สีอัญมณี</a></li>
                                                <li><a href="'.base_url('masterclarity').'"
                                                        class="dropbtn">Clarity</a></li>
                                                <li><a href="'.base_url('mastercutting').'"
                                                        class="dropbtn">Cutting</a></li>
                                                <li><a href="'.base_url('masterquality').'"
                                                        class="dropbtn">คุณภาพ</a></li>
                                                <li><a href="'.base_url('mastergemsize').'"
                                                        class="dropbtn">ขนาดอัญมณี</a></li>
                                            </ul>
                                        </div>
                                </li>
    
                                <li>
                                    <div class="dropdown-sub">
                                        <a class="dropbtn">อื่นๆ<img
                                                src="'.base_url('assets/image/icon/next.png').'" alt=""
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
                </li>';
                }
            ?>

<!-- ข้อมูลสินค้า -->
            <?php
                if(session()->get('product') == "1"){
                    echo '<li>
                    <div class="dropdown">
                        <a class="dropbtn"><img src="'.base_url('assets/image/icon/rings.png').'"
                                style="margin-right:10px;" class="sidebarimg">ข้อมูลสินค้า<img
                                src="'.base_url('assets/image/icon/next.png').'" alt="" class="rightimg"
                                align="right"></a>
                        <div class="dropdown-content">
                            <ul>
                                <li><a href="'.base_url('productstone').'" class="dropbtn">อัญมณี/เพชร</a></li>
                                <li><a href="'.base_url('productjewelry').'" class="dropbtn">จิวเวลรี่</a></li>
                            </ul>
                        </div>
                    </div>
                </li>';
                ?>
                
    
                <!-- คำสั่งขาย -->
                <?php 
                 if(session()->get('sell_order') == "1"){
                     echo '<li>
                         <div class="dropdown">
                             <a class="dropbtn"><img src="'.base_url('assets/image/icon/check-list-3.png').'"
                                     style="margin-right:10px;" class="sidebarimg">คำสั่งขาย<img
                                     src="'.base_url('assets/image/icon/next.png').'" alt="" class="rightimg"
                                     align="right"></a>
                             <div class="dropdown-content">
                                 <ul>
                                     <li><a href="'.base_url('/saleorder/saleorderstone').'"
                                             class="dropbtn">อัญมณี/เพชร</a></li>
                                     <li><a href="'.base_url('/saleorder/saleorderjewelry').'"
                                             class="dropbtn">จิวเวลรี่</a></li>
                                     <li><a href="#" class="dropbtn">รายงาน</a></li>
                                 </ul>
                             </div>
                         </div>
                     </li>';
                 }
                }
            ?>

<!-- เซอร์วิสออเดอร์ -->
            <?php
                if(session()->get('service_order') == "1"){
                    echo '<li>
                    <div class="dropdown">
                        <a class="dropbtn"><img src="'.base_url('assets/image/icon/support-3.png').'"
                                style="margin-right:10px;" class="sidebarimg">เซอร์วิสออเดอร์<img
                                src="'.base_url('assets/image/icon/next.png').'" alt="" class="rightimg"
                                align="right"></a>
                        <div class="dropdown-content">
                            <ul>
                                <li><a href="#" class="dropbtn">ออเดอร์ผลิต</a></li>
                                <li><a href="#" class="dropbtn">ออเดอร์ซ่อม</a></li>
                                <li><a href="#" class="dropbtn">รายงาน</a></li>
                            </ul>
                        </div>
                    </div>
                </li>';
                }
            ?>

<!-- การออม -->
<?php
    if(session()->get('saving') == "1"){
        echo '
            <li>
                <div class="dropdown">
                    <a class="dropbtn"><img src="'.base_url('assets/image/icon/pay-day-3.png').'"
                            style="margin-right:10px;" class="sidebarimg">การออม<img
                            src="'.base_url('assets/image/icon/next.png').'" alt="" class="rightimg"
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
            </li>';
    } ?>

<!-- การขาย -->
        <?php if(session()->get('seller') == "1"){
        echo '
            <li>
                <div class="dropdown">
                    <a class="dropbtn"><img src="'.base_url('assets/image/icon/coin-2.png').'"
                            style="margin-right:10px;" class="sidebarimg">การขาย<img
                            src="'.base_url('assets/image/icon/next.png').'" alt="" class="rightimg"
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
            </li>';
        } ?>

<!-- การจัดซื้อ -->
        <?php if(session()->get('purchase') == "1"){
            echo '
            <li>
                <div class="dropdown">
                    <a class="dropbtn"><img src="'.base_url('assets/image/icon/cargo-3.png').'"
                            style="margin-right:10px;" class="sidebarimg">การจัดซื้อ<img
                            src="'.base_url('assets/image/icon/next.png').'" alt="" class="rightimg"
                            align="right"></a>
                    <div class="dropdown-content">
                        <ul>
                            <li>
                                <div class="dropdown-sub">
                                    <a class="dropbtn">จัดซื้อ(Purchase)<img
                                            src="'.base_url('assets/image/icon/next.png').'" alt=""
                                            class="rightimg" align="right"></a>
                                    <div class="dropdown-sub-content">
                                        <ul>
                                            <li><a href="'.base_url('/purchase/purchasestone').'"
                                                    class="dropbtn">อัญมณี / เพชร</a></li>
                                            <li><a href="'.base_url('/purchase/purchasejewelry').'"
                                                    class="dropbtn">จิวเวลรี่</a></li>
                                        </ul>
                                    </div>
                            </li>

                            <li>
                                <div class="dropdown-sub">
                                    <a class="dropbtn">MEMO In<img
                                            src="'.base_url('assets/image/icon/next.png').'" alt=""
                                            class="rightimg" align="right"></a>
                                    <div class="dropdown-sub-content">
                                        <ul>
                                            <li><a href="'.base_url('/memoin/memoinstone').'"
                                                    class="dropbtn">อัญมณี / เพชร</a></li>
                                            <li><a href="'.base_url('/memoin/memoinjewelry').'"
                                                    class="dropbtn">จิวเวลรี่</a></li>
                                        </ul>
                                    </div>
                            </li>
                            <li>
                                <div class="dropdown-sub">
                                    <a class="dropbtn">MEMO Return<img
                                            src="'.base_url('assets/image/icon/next.png').'" alt=""
                                            class="rightimg" align="right"></a>
                                    <div class="dropdown-sub-content">
                                        <ul>
                                            <li><a href="'.base_url('/memoreturn/memoreturnstone').'"
                                                    class="dropbtn">อัญมณี / เพชร</a></li>
                                            <li><a href="'.base_url('/memoreturn/memoreturnjewelry').'"
                                                    class="dropbtn">จิวเวลรี่</a></li>
                                        </ul>
                                    </div>
                            </li>
                            <li><a href="#" class="dropbtn">รายงาน</a></li>
                        </ul>
                    </div>
                </div>
            </li>';
} ?>


<!-- คลังสินค้า -->
        <?php if(session()->get('stock') == "1"){
            echo '
            <li>
                <div class="dropdown">
                    <a class="dropbtn"><img src="'.base_url('assets/image/icon/warehouse.png').'"
                            style="margin-right:10px;" class="sidebarimg">คลังสินค้า<img
                            src="'.base_url('assets/image/icon/next.png').'" alt="" class="rightimg"
                            align="right"></a>
                    <div class="dropdown-content">
                        <ul>
                            <li>
                                <div class="dropdown-sub">
                                    <a class="dropbtn">การจัดซื้อ(Purchase)<img
                                            src="'.base_url('assets/image/icon/next.png').'" alt=""
                                            class="rightimg" align="right"></a>
                                    <div class="dropdown-sub-content">
                                        <ul>
                                            <li><a href="'.base_url('/inventory/purchasestone').'"
                                                    class="dropbtn">อัญมณี / เพชร</a></li>
                                            <li><a href="'.base_url('/inventory/purchasejewelry').'"
                                                    class="dropbtn">จิวเวลรี่</a></li>
                                        </ul>
                                    </div>
                            </li>

                            <li>
                                <div class="dropdown-sub">
                                    <a class="dropbtn">คลัง MEMO<img
                                            src="'.base_url('assets/image/icon/next.png').'" alt=""
                                            class="rightimg" align="right"></a>
                                    <div class="dropdown-sub-content">
                                        <ul>
                                            <li><a href="'.base_url('/memo/memostone').'"
                                                    class="dropbtn">อัญมณี / เพชร</a></li>
                                            <li><a href="'.base_url('/memo/memojewelry').'"
                                                    class="dropbtn">จิวเวลรี่</a></li>
                                        </ul>
                                    </div>
                            </li>

                            <li>
                                <div class="dropdown-sub">
                                    <a class="dropbtn">คลังเซอร์วิสออเดอร์<img
                                            src="'.base_url('assets/image/icon/next.png').'" alt=""
                                            class="rightimg" align="right"></a>
                                    <div class="dropdown-sub-content">
                                        <ul>
                                            <li><a href="'.base_url('/inventory/serviceorder').'"
                                                    class="dropbtn">ออเดอร์ผลิต</a></li>
                                            <li><a href="'.base_url('/inventory/servicerepair').'"
                                                    class="dropbtn">ออเดอร์ซ่อม</a></li>
                                            <li><a href="'.base_url('/inventory/servicemounting').'"
                                                    class="dropbtn">ออเดอร์ตัวเรือน</a></li>
                                        </ul>
                                    </div>
                            </li>
                            <li><a href="#" class="dropbtn">โยกสินค้า</a></li>
                        </ul>
                    </div>
                </div>
            </li>';
        } ?>

<!-- การเงิน -->
        <?php if(session()->get('finance') == "1"){
            echo '
            <li>
                <div class="dropdown">
                    <a class="dropbtn"><img src="'.base_url('assets/image/icon/profit.png').'"
                            style="margin-right:10px;" class="sidebarimg">การเงิน<img
                            src="'.base_url('assets/image/icon/next.png').'" alt="" class="rightimg"
                            align="right"></a>
                    <div class="dropdown-content">
                        <ul>
                            <li>
                                <div class="dropdown-sub">
                                    <a class="dropbtn">ใบการเงิน<img
                                            src="'.base_url('assets/image/icon/next.png').'" alt=""
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
            </li>';
        } ?>
        </ul>
    </div>