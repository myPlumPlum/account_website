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
      <img src="images/welcome.png" class="img-fluid rounded" alt="">
      <div class="col">
      <form class="d-flex justify-content-center mb-2" action="loginPage.php" method="POST">
        <?php
        if (!isset($_SESSION["id"])) {
        ?>
          <button class="btn btn-outline-primary" href="loginPage.php" style="font-size: 20px;border-radius:.75rem;" name="Login" value="Login"><i class="bi bi-person-circle"></i> เข้าสู่ระบบ | Login</button>
        <?php
        } else {
          ?>
          <?php
                              $sql_read = "SELECT * FROM user_admin WHERE id = :id";
                              $stmt_read = $conn->prepare($sql_read);
                              $params_read = array(
                                'id' => $_SESSION['id']
                              );
                              $stmt_read->execute($params_read);
                              $result_read = $stmt_read->fetchAll();
                              foreach ($result_read as $row_read) {
                            ?>
            <a 
              class="btn btn-outline-primary mt-2" href="process.php?Logout=Logout" 
              name="Logout" value="Logout" style="font-size: 20px;border-radius:.75rem;"
            >
              <i class="bi bi-person-circle"> ออกจากระบบ | Logout</i>
            <?php
            echo "<h1 class='m-2' style='text-align: center;'>ยินดีต้อนรับ {$row_read['FullyName']} </h1>"
            ?>
          </a>
          <?php
          }}
          ?>
      </form>
      </div>
    </div>
    <div class="row">
      <div class="col d-flex justify-content-center figure-img img-fluid rounded" style="background-color: #543d00;">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/s02.png" class="d-block item" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/s01.png" class="d-block item" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/s03.png" class="d-block item" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
    <!-- section 2 3 picture-->
    <!-- <div class="row">
      <div class="col d-flex d-flex-row justify-content-around" style="background: #22668D;text-align: center;">
        <div class="card" style="width: 18rem;margin-right: 50px;margin-top: 60px; background: none;border: none;">
          <i class="bi bi-cash-coin" style='font-size:84px;color:#fff;'></i>
          <i class="bi bi-book-half" style='font-size:84px;color:#fff;'></i>
          <i class="bi bi-calendar-range" style='font-size:84px;color:#fff;'></i>
          <div class="card-body">
            <p class="card-text" style="color:#fff;">
              <b style="color: #fff;">แบบธรรมเนียมทางการเงิน</b> <br>
              <a style="color: #fff;" href="loan.php">คลิกที่นี้</a> เพื่อทำเรื่องขอยื่นกู้
            </p>
          </div>
        </div>
        <div class="card" style="width: 18rem;margin-right: 50px;margin-top: 60px; background: none;border: none;">
          <i class="bi bi-book-half" style='font-size:84px;color:#fff;'></i>
          <div class="card-body">
            <p class="card-text" style="color:#fff;">
              <b style="color: #fff;">คู่มือ</b> <br>
              <a style="color: #fff;" href="manual.php">คลิกที่นี้</a> เพื่ออ่านคู่มือต่าง ๆ
            </p>
          </div>
        </div>
        <div class="card" style="width: 18rem;margin-right: 50px;margin-top: 60px; background: none;border: none;">
          <i class="bi bi-calendar-range" style='font-size:84px;color:#fff;'></i>
          <div class="card-body">
            <p class="card-text" style="color:#fff;">
              <b style="color: #fff;">ติดตามเอกสาร</b> <br>
              <a style="color: #fff;" href="doc-Tracking.php">คลิกที่นี้</a> เพื่อติดตามเอกสารที่ยื่นขอ
            </p>
          </div>
        </div>
      </div>
    </div> -->
  </div>
</div>
<img src="images/contactUs.png" class="img-fluid rounded" alt="">
</div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>