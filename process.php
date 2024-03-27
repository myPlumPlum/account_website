<?php

session_start();
include "./connect.php";

// log-in
if (isset($_GET["log-in"])) {

    $userID = $_GET["userID"];
    $passwordID = $_GET["passwordID"];
    // echo $user.".".$passwordID;

    $sql = "SELECT * FROM user_admin WHERE userID = :userID AND passwordID = :passwordID";
    $stmt = $conn->prepare($sql);
    $params = array(
        'userID' => $userID,
        'passwordID' => $passwordID
    );
    $stmt->execute($params);

    $result = $stmt->fetchAll();
    
    foreach ($result as $row) {
        echo $row['role_user'];
        if ($row['role_user'] == 0) {
            // 0 = admin
            $_SESSION['userID'] = $row['userID'];
            header("Location:admin.php");
        } else if ($row['role_user'] == 1) {
            // 1 = user
            $_SESSION['id'] = $row['id'];
            $_SESSION['userID'] = $row['userID'];
            $_SESSION['FullyName'] = $row['FullyName'];
            $_SESSION['bank_name'] = $row['bank_name'];
            $_SESSION['acc_number'] = $row['acc_number'];
            header("Location:index.php");
        } else {
            header("Location:loginPage.php");
        }
    }
}

if (isset($_GET['Logout'])) {
    session_destroy();
    header("Location:index.php");
}
if(isset($_GET['register'])){

    $userID = $_GET["userID"];
    $passwordID = $_GET["passwordID"];
    $FullyName = $_GET["FullyName"];
    $bank_name = $_GET["bank_name"];
    $acc_number = $_GET["acc_number"];
    $role_user = 1;

    $sql = "INSERT INTO user_admin (`userID`, `passwordID`, `FullyName`, `bank_name`, `acc_number`, `role_user`) 
            VALUES (:userID, :passwordID, :FullyName, :bank_name, :acc_number, :role_user )";
    $stmt = $conn->prepare($sql);
    $params = array(
        'userID' => $userID,
        'passwordID' => $passwordID,
        'FullyName' => $FullyName,
        'bank_name' => $bank_name,
        'acc_number' => $acc_number,
        'role_user' => $role_user
    );
    $stmt->execute($params);
    $_SESSION['msg'] = "บันทึกลงระบบเรียบร้อยแล้ว";
    header("Location:loginPage.php");

}
if (isset($_GET['registerDoc'])) {

    $dega_ID = $_GET["dega_ID"];
    $number_form = $_GET["number_form"];
    $list_item = $_GET["list_item"];
    $department = $_GET["department"];
    $total_cost = $_GET["total_cost"];
    $type_pay = $_GET["type_pay"];
    $type_pay = $_GET["type_pay"];
    $status_doc = 0;

    $sql = "INSERT INTO tracking_doc (`dega_ID`, `number_form`, `list_item`, `total_cost`, `type_pay`, `department`, `status_doc`, `id_user`) 
            VALUES (:dega_ID, :number_form, :list_item, :total_cost, :type_pay, :department, :status_doc, :id_user)";
    $stmt = $conn->prepare($sql);
    $params = array(
        'dega_ID' => $dega_ID,
        'number_form' => $number_form,
        'list_item' => $list_item,
        'total_cost' => $total_cost,
        'type_pay' => $type_pay,
        'department' => $department,
        'status_doc' => $status_doc,
        'id_user' => $_SESSION['id']
    );
    $stmt->execute($params);
    $_SESSION['msg'] = "บันทึกลงระบบเรียบร้อยแล้ว";
    header("Location:doc-Tracking.php");
}

if (isset($_POST['edit_admin'])) {
    
    $id_tracking = $_POST['id_tracking'];
    $dega_ID = $_POST['dega_ID'];
    $number_form = $_POST['number_form'];
    $list_item = $_POST['list_item'];
    $total_cost = $_POST['total_cost'];
    $type_pay = $_POST['type_pay'];
    $department = $_POST['department'];
    $status_doc = $_POST['status_doc'];

    $sql = "    UPDATE tracking_doc
                SET   
                    dega_ID = :dega_ID, 
                    number_form = :number_form, 
                    list_item = :list_item, 
                    type_pay = :type_pay,
                    department = :department,
                    total_cost = :total_cost,
                    status_doc = :status_doc
                WHERE id_tracking = :id_tracking ";
    
    $stmt = $conn->prepare($sql);
    $params = array(
        'dega_ID' => $dega_ID,
        'number_form' => $number_form,
        'list_item' => $list_item,
        'type_pay' => $type_pay,
        'department' => $department,
        'total_cost' => $total_cost,
        'status_doc' => $status_doc,
        'id_tracking' => $id_tracking
    );
    $stmt->execute($params);
    $_SESSION['msg'] = "อัปเดตข้อมูลเรียบร้อย";
    header("Location:admin_doc-Tracking.php");
}
// user can edit
if (isset($_POST['edit'])) {
    
    $userID = $_POST['userID'];
    $FullyName = $_POST['FullyName'];
    $passwordID = $_POST['passwordID'];
    $bank_name = $_POST['bank_name'];
    $acc_number = $_POST['acc_number'];
    $role_user = $_POST['role_user'];
    $id_tracking = $_POST['id_tracking'];

    $sql = "    UPDATE tracking_doc
                SET  
                    userID = :userID, 
                    FullyName = :FullyName, 
                    passwordID = :passwordID, 
                    bank_name = :bank_name, 
                    acc_number = :acc_number, 
                    role_user = :role_user 
                WHERE id = :id                  ";
    
    $stmt = $conn->prepare($sql);
    $params = array(
        'userID' => $userID,
        'FullyName' => $FullyName,
        'passwordID' => $passwordID,
        'bank_name' => $bank_name,
        'acc_number' => $acc_number,
        'role_user' => $role_user,
        'id' => $id
    );
    $stmt->execute($params);
    $_SESSION['msg'] = "อัปเดตข้อมูลเรียบร้อย";
    header("Location:user.php");
}
?>