<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- start bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- https://icons.getbootstrap.com/ -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400&display=swap" rel="stylesheet">

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="icon" type="image/png" size="16x16" href="pic/html.png">
    <link rel="stylesheet" href="style.css">

    <title>Account web app</title>
    <link rel="stylesheet" href="style.css">

    <style>
        .carousel-caption {
            text-align: right;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    include "./connect.php";
    ?>
  <nav class="navbar navbar-expand-lg navbar-custom navbar-fixed-top">
    <div class="container-fluid justify-content-beetween">
      <a class="navbar-brand" href="index.php">
        <img src="images/Logo.png" width="150" height="150" class="d-inline-block align-top" alt="">
        <!-- <i class="bi bi-bank" style="font-size:48px;padding-left: 28%;color:#000;"></i> -->
        <!-- <h4 style="color:#000;">โปรแกรมการเงิน</h4> -->
      </a>

      <ul class="navbar-nav">
        <li class="nav-item">
          <!-- <a class="nav-link" href="productPage.php" style="font-size: 20px;">
                      Product
                  </a> -->
        </li>
        <li class="nav-item me-3 me-lg-1">
          <a class="nav-link mx-4" href="index.php" style="font-size: 22px;">
            <b>หน้าแรก</b>
          </a>
        </li>
        <!-- <li class="nav-item me-3 me-lg-1">
          <a class="nav-link mx-4" href="doc-Tracking.php" style="font-size: 22px;">
            <b><i class="bi bi-coin" style='font-size:24px;color:#22668D;'></i> ข้อมูลข่าวสารทางการเงิน</b>
          </a>
        </li> -->
        <li class="nav-item me-3 me-lg-1">
          <a class="nav-link mx-4" href="loan.php" style="font-size: 22px;">
            <b>แบบธรรมเนียมทางการเงิน</b>
          </a>
        </li>

        <li class="nav-item me-3 me-lg-1">
          <a class="nav-link mx-4" href="manual.php" style="font-size: 22px;">
            <b>คู่มือประกอบฎีกา</b>
          </a>
        </li>
        <li class="nav-item me-3 me-lg-1">
          <a class="nav-link mx-4" href="doc-Tracking.php" style="font-size: 22px;">
            <b>ติดตามเอกสาร</b>
          </a>
        </li>

        <?php 
        if (isset($_SESSION["userID"])) {
        ?>
        <li class="nav-item me-3 me-lg-1">
          <a class="nav-link mx-4" href="user.php" style="font-size: 22px;">
            <b><i class="bi bi-person-circle" style='font-size:24px;color:#22668D;'></i> ข้อมูลส่วนตัว</b>
          </a>
        </li>
        <?php
        }
        ?>
      </ul>
      
    </div>
  </nav>
    <div class="container-fluid">
        <!-- section 1 carousel-->
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 my-2" style="background: #22668D;text-align: none;height: 30%;">
                <form action="process.php" medthod="get">
                    <h3 class="mt-2 text-center text-white">ลงทะเบียน | Register</h3>
                    <div class="row">
                        <div class="col-3">
                            <select name="before-name" class="form-select mt-2" aria-label="Default select example">
                                <option selected disabled>คำนำหน้า</option>
                                <option value="พล.ท.">พล.ท.</option>
                                <option value="พล.ต.">พล.ต.</option>
                                <option value="พ.อ.(พ)">พ.อ.(พ)</option>
                                <option value="พ.อ.">พ.อ.</option>
                                <option value="พ.อ.หญิง">พ.อ.หญิง</option>
                                <option value="พ.ท.">พ.ท.</option>
                                <option value="พ.ท.หญิง">พ.ท.หญิง</option>
                                <option value="พ.ต.">พ.ต.</option>
                                <option value="พ.ต.หญิง">พ.ต.หญิง</option>
                                <option value="ร.อ.">ร.อ.</option>
                                <option value="ร.อ.หญิง">ร.อ.หญิง</option>
                                <option value="ร.ท.">ร.ท.</option>
                                <option value="ร.ท.หญิง">ร.ท.หญิง</option>
                                <option value="ร.ต.">ร.ต.</option>
                                <option value="ร.ต.หญิง">ร.ต.หญิง</option>
                                <option value="จ.ส.อ.(พ)">จ.ส.อ.(พ)</option>
                                <option value="จ.ส.อ.(พ)หญิง">จ.ส.อ.(พ)หญิง</option>
                                <option value="จ.ส.อ.">จ.ส.อ.</option>
                                <option value="จ.ส.อ.หญิง">จ.ส.อ.หญิง</option>
                                <option value="จ.ส.ท.">จ.ส.ท.</option>
                                <option value="จ.ส.ท.หญิง">จ.ส.ท.หญิง</option>
                                <option value="จ.ส.ต.">จ.ส.ต.</option>
                                <option value="จ.ส.ต.หญิง">จ.ส.ต.หญิง</option>
                                <option value="ส.อ.">ส.อ.</option>
                                <option value="ส.อ.หญิง">ส.อ.หญิง</option>
                                <option value="ส.ท.">ส.ท.</option>
                                <option value="ส.ท.หญิง">ส.ท.หญิง</option>
                                <option value="ส.ต.">ส.ต.</option>
                                <option value="ส.ต.หญิง">ส.ต.หญิง</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-9">
                            <div class="form-group">
                                <input type="text" class="form-control mt-2" name="FullyName" placeholder="ชื่อ-สกุล">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control mt-2" name="userID" placeholder="เบอร์โทรศัพท์">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <select class="form-select mt-2" name="bank_name" aria-label="Default select example">
                                <option selected disabled>รหัสธนาคาร | ธนาคาร</option>
                                <option value="1">001 | ธนาคารแห่งประเทศไทย</option>
                                <option value="2">002 | ธ. กรุงเทพ จำกัด (มหาชน)</option>
                                <option value="4">004 | ธ. กสิกรไทย จำกัด (มหาชน)</option>
                                <option value="5">005 | ธ. เดอะรอยัลแบงก์อ๊อฟสกอตแลนด์ เอ็น.วี.</option>
                                <option value="6">006 | ธ. กรุงไทย จำกัด (มหาชน)</option>
                                <option value="8">008 | ธ. เจพีมอร์แกน เชส</option>
                                <option value="9">009 | ธ. โอเวอร์ซี-ไชนีสแบงกิ้งคอร์ปอเรชั่น จำกัด</option>
                                <option value="10">010 | ธ. แห่งโตเกียว-มิตซูบิชิ ยูเอฟเจ จำกัด</option>
                                <option value="11">011 | ธ. ทหารไทย จำกัด (มหาชน)</option>
                                <option value="14">014 | ธ. ไทยพาณิชย์ จำกัด (มหาชน)</option>
                                <option value="15">015 | ธ. นครหลวงไทย จำกัด (มหาชน)</option>
                                <option value="17">017 | ธ. ซิตี้แบงก์</option>
                                <option value="18">018 | ธ. ซูมิโตโม มิตซุย แบงกิ้ง คอร์ปอเรชั่น</option>
                                <option value="20">020 | ธ. สแตนดาร์ดชาร์เตอร์ด (ไทย) จำกัด (มหาชน)</option>
                                <option value="23">023 | ธ. อาร์ เอช บี จำกัด</option>
                                <option value="24">024 | ธ. ยูโอบี จำกัด (มหาชน)</option>
                                <option value="25">025 | ธ. กรุงศรีอยุธยา จำกัด (มหาชน)</option>
                                <option value="26">026 | ธ. เมกะ สากลพาณิชย์ จำกัด (มหาชน)</option>
                                <option value="27">027 | ธ. แห่งอเมริกาเนชั่นแนลแอสโซซิเอชั่น</option>
                                <option value="28">028 | ธ. เครดิต อะกริกอล คอร์ปอเรทแอนด์อินเวสเมนท์แบงก์</option>
                                <option value="29">029 | ธ. อินเดียนโอเวอร์ซีส์</option>
                                <option value="30">030 | ธ. ออมสิน</option>
                                <option value="31">031 | ธ. ฮ่องกงและเซี่ยงไฮ้แบงกิ้งคอร์ปอเรชั่น จำกัด</option>
                                <option value="32">032 | ธ. ดอยซ์แบงก์</option>
                                <option value="33">033 | ธ. อาคารสงเคราะห์</option>
                                <option value="34">034 | ธ. เพื่อการเกษตรและสหกรณ์การเกษตร</option>
                                <option value="35">035 | ธ. เพื่อการส่งออกและนำเข้าแห่งประเทศไทย</option>
                                <option value="39">039 | ธ. มิซูโฮ คอร์ปอเรต จำกัด</option>
                                <option value="45">045 | ธ. บีเอ็นพี พารีบาส์</option>
                                <option value="52">052 | ธ. แห่งประเทศจีน จำกัด</option>
                                <option value="65">065 | ธ. ธนชาต จำกัด (มหาชน)</option>
                                <option value="66">066 | ธ. อิสลามแห่งประเทศไทย</option>
                                <option value="67">067 | ธ. ทิสโก้ จำกัด (มหาชน)</option>
                                <option value="69">069 | ธ. เกียรตินาคิน จำกัด (มหาชน)</option>
                                <option value="71">071 |ธ. ไทยเครดิต เพื่อรายย่อย จำกัด (มหาชน)</option>
                                <option value="73">073 |ธ. แลนด์ แอนด์ เฮ้าส์ จำกัด (มหาชน)</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" class="form-control mt-2" name="acc_number" placeholder="เลขที่บัญชี">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control mt-2" name="passwordID" placeholder="รหัสผ่าน">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg my-2" style="width: 100%;" name="register" value="register">ยืนยันข้อมูล</button>
                </form>
                <p style="color:#fff;">หากลงทะเบียนแล้ว<a href="loginPage.php" style="color:#fff;">คลิกที่นี้</a></p>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>