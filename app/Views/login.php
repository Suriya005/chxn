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

    <!-- ------------JS---------------- -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <title>Document</title>
</head>
<body style="background-color:white;">
<div class="centered">
<div class="row">
  <div class="column-left" align="right" >
    <div style="padding-top:147px;"><img src="assets/image/chxlogo.png" style="width:384px;height:106px"></div>
  </div>

  <div class="column-right" align="left" >
    <div class="login-head">
      <h2>ยินดีต้อนรับ</h2>
      <p>เข้าสู่ระบบเพื่อใช้งาน</p>
    </div>
  
  <div class="login-detail">
      <img src="assets/image/ilog.png" style="width:25px; padding-bottom:5px;">
      <lebel>ชื่อผู้ใช้</lebel></br>
      <input type="text" name="username" id="username" placeholder="กรอกชื่อผู้ใช้" style="width:448px; height:55px;"></br>
      <img src="assets/image/ipass.png" style="width:25px; padding-bottom:5px;">
      <lebel>รหัสผ่าน</lebel></br>
      <input type="password" name="password" id="password" placeholder="กรอกรหัสผ่าน" style="width:448px; height:55px;"></br>
      <input type="checkbox" id="save" name="save" value="save">
      <label for="save"> บันทึกการใช้งาน</label><br>
      <form action="<?php  echo base_url('profile'); ?>">
        <input class="primary btn" type="submit" value="เข้าสู่ระบบ" style="width:193px; height:45px;">
      </form>
    </div>
  </div>
</div>
</div>
</body>
</html>