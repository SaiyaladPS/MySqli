<?php
// ເຊືອມຕໍ່ກັບຖານຂໍ້ມູນ
    require('dbconnect.php');

    //ດືງຂໍ້ມູນຈາກຕາຕະລາງ
    $sql = "SELECT * FROM employees";

    //ສັ່ງລັນຄຳສັັ່ງ sql
    $result = mysqli_query($con,$sql);
    //ຈະເປັນການຊອກຫາຂໍ້ມູນໃຫ້ຕົວປ່ຽນ $row ຕົວໃຫ້ຕາຕະລາງ ຖາ້ມີຂໍ້ອ່ານໃຫ້ສະແດງກໍຈະສະແດງມາຈົນໝົດທີ່ຢູ່ໃນຕາຕະລາງ
    while($row = mysqli_fetch_array($result)){
        echo "ລະຫັດພະນັກງານ = " . $row[0] . "<br>";
        echo "ຊື່ = " . $row[1] . "<br>";
        echo "ນາມສະກຸນ = " . $row[2] . "<br>";
        echo "ເພດ = " . $row[3] . "<br>";
        echo "ທັກສະ = " . $row[4] . "<br>";
        echo "<hr>";
    }
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<a href="index.php" class="btn btn-primary">ກັບໜ້າຫຼັກ</a>