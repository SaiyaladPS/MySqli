<?php
    //ເຊືອມຕໍ່ກັບຖານຂໍ້ມູນ
    require('dbconnect.php');

    // ການຮັບຄ່າ
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];

    // ແປງ array ເປັນ string
    $emskill = implode(",",$_POST['skills']); 

    //ຄຳສັ່ງແກ້ໄຂຂໍ້ມູນ
    $sql = "UPDATE employees SET fname = '$fname',lname = '$lname',gender = '$gender',skills = '$emskill' WHERE id = $id ";

    //ລັນຄຳສັ່ງ sql
    $result = mysqli_query($con,$sql);

    if($result) {
        header("location: showdata_table.php");
        exit(0);
    } else {
        echo "ເກີດຂໍ້ຜິດພາດ";
    }

?>