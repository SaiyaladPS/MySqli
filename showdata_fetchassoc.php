<?php

// ເຊືອມຕໍ່ກັບຖານຂໍ້ມູນ
    require('dbconnect.php');

    //ດືງຂໍ້ມູນຈາກຕາຕະລາງ
    $sql = "SELECT * FROM employees";

    //ສັ່ງລັນຄຳສັັ່ງ sql
    $result = mysqli_query($con,$sql);

    //ການດືງຂໍ້ມູນອອກມາສະແດງຢູ່ໜ້າເວັບ ແບບ mysqli_fetch_assoc
    $row = mysqli_fetch_assoc($result);// ເປັນການລີເທີນຄ່າກັບມາ ໃນຮູບແບບຂອງ ອາເລ ແຕ່ຈະປ່ຽນຄ່າດ້ວຍການອ່າງອີງການເຂົ້າຫາຕົວເລກindex ເປັນ ຟິວຂອງຕາຕະລາງນັ້ນໆ
    echo "ລະຫັດພະນັກງານ = " . $row['id'] . "<br>";
    echo "ຊື່ = " . $row['fname'] . "<br>";
    echo "ນາມສະກຸນ = " . $row['lname'] . "<br>";
    echo "ເພດ = " . $row['gender'] . "<br>";
    echo "ທັກສະ = " . $row['skills'] . "<br>";
    echo "<hr>";

    //ຄົນຕໍ່ໄປເລືອຍໆ
    $row = mysqli_fetch_assoc($result);
    echo "ລະຫັດພະນັກງານ = " . $row['id'] . "<br>";
    echo "ຊື່ = " . $row['fname'] . "<br>";
    echo "ນາມສະກຸນ = " . $row['lname'] . "<br>";
    echo "ເພດ = " . $row['gender'] . "<br>";
    echo "ທັກສະ = " . $row['skills'] . "<br>";
    echo "<hr>";

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<a href="showdata_fetcharray.php" class="btn btn-warning">showdata_fetcharray.php</a>