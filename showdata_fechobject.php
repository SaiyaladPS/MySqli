<?php

// ເຊືອມຕໍ່ກັບຖານຂໍ້ມູນ
    require('dbconnect.php');

    //ດືງຂໍ້ມູນຈາກຕາຕະລາງ
    $sql = "SELECT * FROM employees";

    //ສັ່ງລັນຄຳສັັ່ງ sql
    $result = mysqli_query($con,$sql);
    // ເປັນການດືງຂໍ້ມູນອອກມາໃນຮູບແບບຂອງ object ເຊັ່ນຖ້າວ່າມີພະນັກງານຢູ່ 10 ຄົນກໍຈະໜາຍຄວາມວ່າມີ object ຢູ່ 10 ອັນເຊັນກັນ
    $row = mysqli_fetch_object($result);
    // ຈະເປັນຄືກັບອາເລ ແຕ່ ຈະປ່ຽນ [ ] ເປັນ -> ແທນ
    echo "ລະຫັດພະນັກງານ = " . $row -> id . "<br>";
    echo "ຊື່ = " . $row -> fname . "<br>";
    echo "ນາມສະກຸນ = " . $row -> lname . "<br>";
    echo "ເພດ = " . $row -> gender . "<br>";
    echo "ທັກສະ = " . $row -> skills . "<br>";
    echo "<hr>";

    //ຄົນຕໍ່ໄປເລືອຍໆ
    $row = mysqli_fetch_object($result);
    echo "ລະຫັດພະນັກງານ = " . $row -> id . "<br>";
    echo "ຊື່ = " . $row -> fname . "<br>";
    echo "ນາມສະກຸນ = " . $row -> lname . "<br>";
    echo "ເພດ = " . $row -> gender . "<br>";
    echo "ທັກສະ = " . $row -> skills . "<br>";
    echo "<hr>";
    var_dump($row);

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<a href="showdata_forloop.php" class="btn btn-warning">showdata_forloop.php</a>