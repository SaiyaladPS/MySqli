<style>
        *{
            font-family: saysettha ot;
        }
    </style>

<?php
// ເຊືອມຕໍ່ຖານຂໍ້ມູນ
require('dbconnect.php');

// ການຮັບຂໍ້ມູນຈາກແບບຟ້ອນ insertfrom.php ເປັນການຮັບຂໍ້ມູນ(ຮັບຄ່າ)
$fname = $_POST['fname'];
$lname = $_POST['lname'];

// ການຮັບຄ່າເພດ
$gender = $_POST['gender'];

// ການຮັບຄ່າ ທັກສະຄວາມສາມາດທີ່ເປັນເອລາ
 $emskill = implode(",",$_POST["skill"]); // ທຳການປ່ຽນ ອາເລ ໃຫ້ເປັນ ສະຕິງ  ດວ້ຍຕົວລະແຕ່ ຈະຄັນດວ້ຍເຄືອງໜາຍ ( , )
// ບັນທືກ
 $sql = "INSERT INTO employees (fname,lname,gender,skills) VALUES('$fname','$lname','$gender','$emskill')";

     // ລັນໃຫ້ຄຳສັ່ງ SQL ທຳງານ ບັນທຶກຂໍ້ມູນ
     $result = mysqli_query($con,$sql);

 //ຖ້າວ່າທຳງານຖືກຕ້ອງ
 if($result) {
     echo "ບັນທືກຂອງມູນແລ້ວ";
     header("location: showdata_table.php");//ເມືອບັນທຶກຂໍ້ມູນແລ້ວກໍໍໃຫ້ເດັ່ງໄປໜ້າທີ່ກຳນົດ
     exit(0); //ຈະເປັນການບອກວ່າສິນສຸດໜ້ານີ້
 } else{
     echo mysqli_error($con); // ຖ້າວ່າມືຂໍ້ຜິດພາດກໍໃຫ້ສະແດງໃນຮູບແບບ error ຜ່ານ $con ກໍຄືຖານຂໍ້ມູນ
 }
 ?>
