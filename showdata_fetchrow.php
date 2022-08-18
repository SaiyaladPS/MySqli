<?php
// ເຊືອມຕໍ່ກັບຖານຂໍ້ມູນ
    require('dbconnect.php');

    //ດືງຂໍ້ມູນຈາກຕາຕະລາງ
    $sql = "SELECT * FROM employees";

    //ສັ່ງລັນຄຳສັັ່ງ sql
    $result = mysqli_query($con,$sql);

    //ການດືງຂໍ້ມູນອອກມາສະແດງຢູ່ໜ້າເວັບ ແບບ mysqli_fetch_row
    $row = mysqli_fetch_row($result);// ມີຊະນິດຂໍ້ມູນເປັນ ອາເລ ດືງຂໍ້ມູນຈາກຕາຕະລາງມາເປັນແຖວ

    // ສະແດງຂໍ້ມູນພະນັກງານ ດວ້ຍການອີງຕາມ ລຳດັບທີ່ຢູ່ໃນອາເລ ຂອງ $row
    echo "ລະຫັດພະນັກງານ = " . $row[0] . "<br>";
    echo "ຊື່ = " . $row[1] . "<br>";
    echo "ນາມສະກຸນ = " . $row[2] . "<br>";
    echo "ເພດ = " . $row[3] . "<br>";
    echo "ທັກສະ = " . $row[4] . "<br>";
    echo "<hr>";

    // ຄົນຕໍ່ໄປ
    $row = mysqli_fetch_row($result);
    echo "ລະຫັດພະນັກງານ = " . $row[0] . "<br>";
    echo "ຊື່ = " . $row[1] . "<br>";
    echo "ນາມສະກຸນ = " . $row[2] . "<br>";
    echo "ເພດ = " . $row[3] . "<br>";
    echo "ທັກສະ = " . $row[4] . "<br>";
    echo "<hr>";
    //ຄົນຕໍ່ໄປເລືອຍໆ
    $row = mysqli_fetch_row($result);
    echo "ລະຫັດພະນັກງານ = " . $row[0] . "<br>";
    echo "ຊື່ = " . $row[1] . "<br>";
    echo "ນາມສະກຸນ = " . $row[2] . "<br>";
    echo "ເພດ = " . $row[3] . "<br>";
    echo "ທັກສະ = " . $row[4] . "<br>";
    echo "<hr>";
    
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<a href="showdata_fetchassoc.php" class="btn btn-warning">showdata_fetchassoc.php</a>