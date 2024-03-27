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
            <div class="col-4"></div>
            <div class="col-4">
                <?php
                $info = "SELECT * FROM Tracking_doc WHERE id_tracking = :id_tracking";
                $stmt = $conn->prepare($info);
                $params = array(
                    'id_tracking' => $_GET['id_tracking']
                );
                $stmt->execute($params);
                // $result = $stmt->fetchAll();
                // foreach ($result as $row) {
                //     $_SESSION["bank_name_full"] = $row["name_TH"];
                // }
                ?>
                <?php
                $sql_edit = "SELECT * FROM tracking_doc INNER JOIN user_admin ON tracking_doc.id_user = user_admin.id WHERE id_tracking = :id_tracking";
                $stmt_edit = $conn->prepare($sql_edit);
                $params_edit = array(
                    'id_tracking' => $_GET["id_tracking"]
                );
                $stmt_edit->execute($params_edit);
                $result_edit = $stmt_edit->fetchAll();
                foreach ($result_edit as $row_edit) {
                ?>
                    <div class="card mb-2" style="width: 36rem;">
                        <div class="card-body">
                            <h2 class="card-title">ข้อมูลผู้ใช้ <?php echo $row_edit['id_tracking']; ?></h2>
                            <p class="card-text">
                            <form action="process.php" method="POST">
                                <input type="hidden" name="id_tracking" value="<?php echo $row_edit['id_tracking']; ?>">
                                <input type="hidden" name="role_user" value="<?php echo $row_edit['role_user']; ?>">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">เลขที่ฏีกา</label>
                                    <input type="text" class="form-control" name="dega_ID" value="<?php echo $row_edit['dega_ID']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">เลขที่เอกสาร</label>
                                    <input type="text" class="form-control" name="number_form" value="<?php echo $row_edit['number_form']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">รายการ</label>
                                    <input type="text" class="form-control" name="list_item" value="<?php echo $row_edit['list_item']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">ประเภทการจ่าย</label>
                                    <input type="text" class="form-control" 
                                    placeholder="<?php
                                                                                                    if ($row_edit["type_pay"] == "1") {
                                                                                                        echo "ค่าเดินทางไปราชการ";
                                                                                                    } else if ($row_edit["type_pay"] == "2") {
                                                                                                        echo "ค่าศึกษาบุตร ";
                                                                                                    } else if ($row_edit["type_pay"] == "3") {
                                                                                                        echo "ค่ารักษาพยาบาล";
                                                                                                    }
                                                                                                    ?>"  readonly>
                                </div>
                                <input type="hidden" name="type_pay" value="<?php echo $row_edit['type_pay']; ?>" >
                                <div class="form-group">
                                    <label for="exampleInputEmail1">จำนวนเงิน (บาท)</label>
                                    <input type="text" class="form-control" name="total_cost" value="<?php echo $row_edit['total_cost']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">หน่วยงาน (ใหม่)</label>
                                    <select class="form-select" name="department" aria-label="Default select example" require>
                                        <option value="<?php echo $row_edit['department']; ?>" selected><?php echo $row_edit['department']; ?></option>
                                        <option value="1">กกพ.ทภ.3</option>
                                        <option value="2">กขว.ทภ.3</option>
                                        <option value="3">กยก.ทภ.3</option>
                                        <option value="4">กกบ.ทภ.3</option>
                                        <option value="5">กกร.ทภ.3</option>
                                        <option value="6">กปช.ทภ.3</option>
                                        <option value="7">ผพธ.ทภ.3</option>
                                        <option value="8">ผขส.ทภ.3</option>
                                        <option value="9">ผยย.ทภ.3</option>
                                        <option value="10">ผสพ.ทภ.3</option>
                                        <option value="11">ผ.สรรพกำลัง.ทภ.3</option>
                                        <option value="12">ผจเร.ทภ.3</option>
                                        <option value="13">ผสห.ทภ.3</option>
                                        <option value="14">ผธน.ทภ.3</option>
                                        <option value="15">ผสวส.ทภ.3</option>
                                        <option value="16">ผทส.ทภ.3</option>
                                        <option value="17">ผสบ.ทภ.3</option>
                                        <option value="18">ผอศจ.ทภ.3</option>
                                        <option value="19">สสส.ศปก.ทภ.3</option>
                                        <option value="20">บก.ทภ.3</option>
                                        <option value="21">ร้อย.บก.ทภ.3</option>
                                        <option value="<?php echo $row_edit['department']; ?>">ไม่แก้ไข</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">สถานะเอกสาร</label>
                                    <select class="form-select" name="status_doc" aria-label="Default select example" require>
                                        <option value="<?php echo $row_edit['status_doc']; ?>" selected disabled>
                                            <?php
                                            if ($row_edit["status_doc"] == 0) {
                                                echo "รอแก้ไข";
                                            } else if ($row_edit["status_doc"] == 1) {
                                                echo "รออนุมัติ";
                                                // หลังใส่ฏีกา
                                            } else if ($row_edit["status_doc"] == 2) {
                                                echo "รอสรุปจ่าย";
                                            } else if ($row_edit["status_doc"] == 3) {
                                                echo "จ่ายเงินแล้ว";
                                            }
                                            ?>
                                        </option>
                                        <option value="0">รอแก้ไข</option>
                                        <option value="1">รออนุมัติ</option>
                                        <option value="2">รอสรุปจ่าย</option>
                                        <option value="3">จ่ายเงินแล้ว</option>
                                        <option value="<?php echo $row_edit['status_doc']; ?>">ไม่แก้ไข</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                <?php
                            }
                                ?>
                                <!-- <div class="form-group">
                                <label for="exampleInputEmail1">รหัสผ่าน</label>
                                <input type="email" class="form-control" placeholder="กรุณาระบุรหัสผ่านใหม่">
                            </div> -->
                                <button type="submit" class="btn btn-success btn-lg my-2" style="width: 100%;" name="edit_admin" value="edit_admin">ยืนยันข้อมูล</button>
                            </form>
                            </p>
                            <a href="admin_doc-Tracking.php" class="card-link">ยกเลิกแก้ไขข้อมูล</a>
                        </div>
                    </div>
            </div>

        </div>
    </div>
    <img src="images/contactUs.png" class="figure-img img-fluid rounded" alt="">
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>