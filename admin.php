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
            <a class="nav-link mx-4" href="admin.php" style="font-size: 22px;">
              <b><i class="bi bi-person-circle" style='font-size:24px;color:#22668D;'></i> หน้าแอดมิน</b>
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
      <div class="col">
        <form class="d-flex justify-content-center mb-2" action="loginPage.php" method="POST">
          <?php
          if (!isset($_SESSION["userID"])) {
          ?>
            <button class="btn btn-outline-warning" href="loginPage.php" style="font-size: 20px;border-radius:.75rem;" name="Login" value="Login"><i class="bi bi-person-circle"></i> เข้าสู่ระบบ | Login</button>
          <?php
          } else {
          ?>
            <button class="btn btn-outline-warning" href="process.php" name="Logout" value="Logout" style="font-size: 20px;border-radius:.75rem;" value="Login"><i class="bi bi-person-circle"> ออกจากระบบ | Logout</i>
              <?php
              echo "<h1 class='m-2' style='text-align: center;'>ยินดีต้อนรับ {$_SESSION['userID']} </h1>"
              ?>
            </button>
          <?php
          }
          ?>
        </form>
      </div>
    </div>
    <div class="row justify-content-center mb-2">
      <div class="card d-flex " style="width: 18rem;">
        <ul class="list-group list-group-flush ">
          <li class="list-group-item"><a href="admin_viewUser.php" class="btn btn-info">ตรวจสอบข้อมูลผู้ใช้</a></li>
          <li class="list-group-item"><a href="admin_doc-Tracking.php" class="btn btn-info">ตรวจสอบสถานะคำขอ</a></li>
          <!-- <li class="list-group-item"><a href="#" class="btn btn-info">ค้นหาคำขอเบิกเงิน</a></li> -->
        </ul>
      </div>
    </div>
  </div>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>