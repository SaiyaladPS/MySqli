<?php

// ເຊືອມຕໍ່ກັບຖານຂໍ້ມູນ
    require('dbconnect.php');

    //ດືງຂໍ້ມູນຈາກຕາຕະລາງ
    $sql = "SELECT * FROM employees";

    //ສັ່ງລັນຄຳສັັ່ງ sql
    $result = mysqli_query($con,$sql);

    // ການດືງຂໍ້ມູນອອກມາສະແດງຢູ່ໜ້າເວັບແບບ mysqli_fetch_arra ຈະເປັນການປະສົມລະຫວ່າງ row ແລະ assoc ຈະລະບຸຕົວເຂົ້າຫາເປັນ ເລກ index ຫຼຶ ຟິວຂອງຕາຕະລາງກໍໄດ້ 
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);//MYSQLI_ASSOC ເປັນການບອກວ່າຕ້ອງການສວບຖາມດ້ວຍການເອົາ ຊື່ຟິວຕາຕະລາງ ເປັນຕົວອ່າງອີງການເຂົ້າເຖິງ
    // ຮຸບແບບ ຂອງ ຟິວຕາຕະລາງ
    echo "ລະຫັດພະນັກງານ = " . $row['id'] . "<br>";
    echo "ຊື່ = " . $row['fname'] . "<br>";
    echo "ນາມສະກຸນ = " . $row['lname'] . "<br>";
    echo "ເພດ = " . $row['gender'] . "<br>";
    echo "ທັກສະ = " . $row['skills'] . "<br>";
    echo "<hr>";
    
    // ຮູບແບບຂອງ ເລກ index
    $row = mysqli_fetch_array($result,MYSQLI_NUM);// MYSQLI_NUM ເປັນການບອກວ່າຕ້ອງການສວບຖາມດ້ວຍການເອົາເລກ index ເປັນຕົວອ່າງອີງການເຂົ້າເຖິງ
    echo "ລະຫັດພະນັກງານ = " . $row[0] . "<br>";
    echo "ຊື່ = " . $row[1] . "<br>";
    echo "ນາມສະກຸນ = " . $row[2] . "<br>";
    echo "ເພດ = " . $row[3] . "<br>";
    echo "ທັກສະ = " . $row[4] . "<br>";
    echo "<hr>";

    //ຮູບແບບການປະສົມ
    $row = mysqli_fetch_array($result,MYSQLI_BOTH);//MYSQLI_BOTH ເປັນການບອກວ່າຕ້ອງການສວບຖາມດວ້ຍການເອົາ ເລກ index ແລະ ຊື່ຟິວຕາຕະລາງ ເປັນຕົວອ່າງອີງການເຂົ້າເຖິງ
    echo "ລະຫັດພະນັກງານ = " . $row['id'] . "<br>";
    echo "ຊື່ = " . $row[1] . "<br>";
    echo "ນາມສະກຸນ = " . $row['lname'] . "<br>";
    echo "ເພດ = " . $row['gender'] . "<br>";
    echo "ທັກສະ = " . $row[4] . "<br>";
    echo "<hr>";

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<a href="showdata_fechobject.php" class="btn btn-warning">showdata_fechobject.php</a>