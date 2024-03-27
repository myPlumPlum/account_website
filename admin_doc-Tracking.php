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
            <b><i class="bi bi-house-fill" style='font-size:24px;color:#22668D;'></i></i>หน้าแรก</b>
          </a>
        </li>
        <!-- <li class="nav-item me-3 me-lg-1">
          <a class="nav-link mx-4" href="doc-Tracking.php" style="font-size: 22px;">
            <b><i class="bi bi-coin" style='font-size:24px;color:#22668D;'></i> ข้อมูลข่าวสารทางการเงิน</b>
          </a>
        </li> -->
        <li class="nav-item me-3 me-lg-1">
          <a class="nav-link mx-4" href="loan.php" style="font-size: 22px;">
            <b><i class="bi bi-cash-coin" style='font-size:24px;color:#22668D;'></i> แบบธรรมเนียมทางการเงิน</b>
          </a>
        </li>

        <li class="nav-item me-3 me-lg-1">
          <a class="nav-link mx-4" href="manual.php" style="font-size: 22px;">
            <b><i class="bi bi-book-half" style='font-size:24px;color:#22668D;'></i> คู่มือประกอบฎีกา</b>
          </a>
        </li>
        <li class="nav-item me-3 me-lg-1">
          <a class="nav-link mx-4" href="doc-Tracking.php" style="font-size: 22px;">
            <b><i class="bi bi-calendar-range" style='font-size:24px;color:#22668D;'></i> ติดตามเอกสาร</b>
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
      <div class="col" style="background: #543d00;text-align: center;">
        <i class="bi bi-calendar-range" style='font-size:84px;color:#fff;'></i>

        <?php
        if (!isset($_SESSION["userID"])) {
        ?>
          <a href="loginPage.php" style="color: #fff;">กรุณาเข้าสู่ระบบ</a>
      </div>
    </div>
    <?php
        } else {
          if (!isset($_SESSION["msg"])) {
    ?>
      <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <img src="..." class="rounded me-2" alt="...">
          <strong class="me-auto">Bootstrap</strong>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
          <?php echo $_SESSION['msg']; ?>
        </div>
      </div>
    <?php
          }
    ?>
    <h3 class="mt-4"><b style="color: #fff;"><i class="bi bi-filetype-pdf"></i>ติดตามคำขอเบิกเงิน</b></h3> <br>
    <table class="table table-info">
      <thead>
        <tr>
          <th scope="col">เลขที่ฏีกา</th>
          <th scope="col">เลขที่เอกสาร</th>
          <th scope="col">รายการ</th>
          <th scope="col">ประเภทการจ่าย</th>
          <th scope="col">จำนวนเงิน (บาท)</th>
          <th scope="col">สถานะเอกสาร</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php
          $info = "SELECT * FROM tracking_doc INNER JOIN user_admin ON tracking_doc.id_user = user_admin.id";
          $stmt = $conn->prepare($info);
          $stmt->execute();
          $result = $stmt->fetchAll();
          foreach ($result as $row) {
        ?>
          <tr>
            <td><?php echo $row["dega_ID"] ?></td>
            <td><?php echo $row["number_form"] ?></td>
            <td><?php echo $row["list_item"] ?></td>
            <td><?php
                if ($row["type_pay"] == "1") {
                  echo "ค่าเดินทางไปราชการ";
                } else if ($row["type_pay"] == "2") {
                  echo "ค่าศึกษาบุตร ";
                } else if ($row["type_pay"] == "3") {
                  echo "ค่ารักษาพยาบาล";
                }
                ?></td>
            <td><?php echo $row["total_cost"] ?></td>
            <td><?php
                if ($row["status_doc"] == 0) {
                  echo "รอแก้ไข";
                } else if ($row["status_doc"] == 1) {
                  echo "รออนุมัติ";
                  // หลังใส่ฏีกา
                } else if ($row["status_doc"] == 2) {
                  echo "รอสรุปจ่าย";
                } else if ($row["status_doc"] == 3) {
                  echo "จ่ายเงินแล้ว";
                }
                ?>
            </td>
            <td><a href="doc-Tracking_Edit.php?id_tracking=<?php echo $row["id_tracking"]; ?>" class="btn btn-warning">อัปเดตข้อมูล</a></td>
          </tr>
        <?php
          }
        ?>
      </tbody>
    </table>
  <?php
        }
  ?>
  </div>
  <img src="images/contactUs.png" class="figure-img img-fluid rounded" alt="">
  </div>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>