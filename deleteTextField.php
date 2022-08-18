<?php

    // ເຊົືອມຕໍ່ກັບຖານຂໍ້ມູນ
    require('dbconnect.php');

    // ຮັບຂໍ້ມູນທີ່ສົ່ງມາຈາກຟອນ
    $id = $_POST['idemployees'];


    // ຄຳສັ່ງລົບຂໍ້ມູນ 
    $sql = "DELETE FROM employees WHERE id = $id";
     
    // ຄຳສັງລັບຄຳສ່ັງຂອງ ການລົບຕາຕະລາງ
    $query = mysqli_query($con,$sql);

    if($query) {
        echo "ລົບຂໍ້ມູນແລ້ວ!";
        header("location: showdata_table.php");
        exit(0);
    } else {
        echo "ມີຂໍ້ຜິດພາດ";
    }
?>