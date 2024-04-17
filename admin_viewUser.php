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
            <div class="col-4"></div>
            <div class="col-4">
            <?php
                $sql_read = "SELECT * FROM user_admin WHERE role_user = :role_user";
                $stmt_read = $conn->prepare($sql_read);
                $params_read = array(
                    'role_user' => 1
                );
                $stmt_read->execute($params_read);
                $result_read = $stmt_read->fetchAll();
                foreach ($result_read as $row_read) {
                ?>
                <?php
                $info = "SELECT * FROM bank WHERE bank_id = :bank_id";
                $stmt = $conn->prepare($info);
                $params = array(
                    'bank_id' => $row_read['bank_name']
                );
                $stmt->execute($params);
                $result = $stmt->fetchAll();
                foreach ($result as $row) {
                    $_SESSION["bank_name_full"] = $row["name_TH"];
                }

                ?>

                
                    <div class="card mb-2" style="width: 36rem;">
                        <div class="card-body">
                            <h5 class="card-title">
                                <h2 style="text-align:center;">ข้อมูลผู้ใช้ <?php echo  $row_read["id"]; ?> </h2>
                                <p class="card-text">
                                <h3>
                                    ชื่อ-นามสกุล : <?php echo  $row_read["FullyName"]; ?> <br>
                                    เบอร์โทรศัพท์ : <?php echo  $row_read["userID"]; ?> <br>
                                    รหัสผ่าน : <?php echo  $row_read["passwordID"]; ?> <br>
                                    ธนาคาร : <?php echo  $row_read["acc_number"]; ?> <br>
                                    ธนาคาร : <?php echo $_SESSION["bank_name_full"]; ?>
                                </h3>
                                </p>
                                <!-- <a href="edit.php" class="card-link">แก้ไขข้อมูลส่วนตัว</a> -->
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>

        </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>