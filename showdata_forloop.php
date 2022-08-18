<?php
// ເຊືອມຕໍ່ກັບຖານຂໍ້ມູນ
    require('dbconnect.php');

    //ດືງຂໍ້ມູນຈາກຕາຕະລາງ
    $sql = "SELECT * FROM employees";

    //ສັ່ງລັນຄຳສັັ່ງ sql
    $result = mysqli_query($con,$sql);

    //ການນັບຈຳນວນຂອງພະນັກງານ ດວ້ຍໃຊ້ mysqli_num_rows
    $count = mysqli_num_rows($result);
    echo $count . "<br>";

    
    //ການເຮັດຊຳດວ້ຍໃຊ້ for loop
    for($i = 0;$i<$count;$i++){ // ເປັນການດຶງຈຳນວນຈາກຕົວປ່ຽນ $conut ທີ່ເຮົາໄດ້ເກັບຂໍ້ມູນຈຳນວນໄວ້
        $row = mysqli_fetch_object($result);//ການດືງຂໍ້ມູນຈາກຕາຕະລາງ ຈະໃຊ້ເປັນ fetchrow, fetchassoc, fetcharray, fetchobject ກໍໄດ້ແຕ່ຈະຍົກຕົວຢ່າງເປັນ fetchboject ໃຫ້ເບິ່ງ
        echo "ລະຫັດພະນັກງານ = " . $row -> id . "<br>";
        echo "ຊື່ = " . $row -> fname . "<br>";
        echo "ນາມສະກຸນ = " . $row -> lname . "<br>";
        echo "ເພດ = " . $row -> gender . "<br>";
        echo "ທັກສະ = " . $row -> skills . "<br>";
        echo "<hr>";
    }
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<a href="showdata_whileloop.php" class="btn btn-warning">showdata_whileloop.php</a>