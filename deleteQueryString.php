<?php
    // ເປັນການຮັບຂໍ້ມູນຈາກຕົວປ່ຽນ idemp ທີ່ສົງມາກັບ url
    // echo $_GET['idemp'];

    // ເຊົືອມຕໍ່ກັບຖານຂໍ້ມູນ
    require('dbconnect.php');

    // ຮັບຂໍ້ມູນທີ່ສົ່ງມາຈາກຟອນ ປ່ຽນການສົງຂໍ້ມູນແບບ $_PSOT ເປັນ $_GET ເພາະສົ່ງມາກັບ $_GET ກໍຕ້ອງຮັບແບບ $_GET
    $id = $_GET['idemp'];


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