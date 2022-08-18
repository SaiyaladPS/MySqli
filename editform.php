<?php
        //ເຊືອມຕໍ່ກັບຖານຂໍ້ມູນ
        require('dbconnect.php');

        // ຮັບຄ່າຈາກແບບຟອນ
        $id = $_GET["id"];

        // ຄຳສັ່ງແກ້ໄຂຂໍ້ມູນ
        $sql = "SELECT * FROM employees WHERE id = $id";

        $result = mysqli_query($con,$sql);

        //ດືງຂໍ້ມູນອອກມາແລ້ວເກັບໄວ້ຕົວປ່ຽນ //ດວ້ຍນຳເອົາຜົນທີ່ໄດ້ໄປໃສແບບຟອນ
        $row = mysqli_fetch_assoc($result);


        // ກ່ຽມຕົວເລືອໃຫ້ປຽບຟອນ ມີຢູ່ 4 ຕົວເລືອກ 
        $skills_arr = array("java","php","html","css");// ລະບຸໃຫ້ຕົງກັບ value

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ບັນທືກຂໍ້ມູນຂອງພະນັກງານ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        *{
            font-family: saysettha ot;
        }
    </style>
</head>
<body>
    <div class="container">
    <h2 class="text-center mt-2 bg-danger">ແບບຟ້ອນແກ້ໄຂຂໍ້ມູນ</h2>
    <form action="updateData.php" method="post">
        <!-- ເປັາການເຊືອງແລະບໍ່ສາມາດປ່ຽນໄດ້ ລະຫັດພະນັກງານຂອງການທີ່ຕ້ອງການຈະແກ້ໄຂຂໍ້ມູນ -->
    <input type="hidden" value="<?php echo $row['id']?>" name="id"><!-- ສ້າງມາເພືອຈະໄປສົ່ງຂໍ້ມູນ ແລະ ຈະໄດ້ອ້າງອີງການແກ້ໄຂຂໍ້ມູນພະນັກງານ ຕາມເລກ id ຂອງພະນັກງານ -->


        <div class="form-group">
            <!-- ແກ້ໄຂຂໍ້ມູນແບບ text -->
            <label for="fname">ຊື່ພະນັກງານ</label>
            <input type="text" name="fname" class="form-control" value="<?php echo $row['fname'] ?>"><!-- ການດືງເອົາຄ່າເດິມຈາກຂໍ້ມູນໃຫ້ຕາຕະລາງຂອງຄົນທີ່ຕ້ອງການແກ້ໄຂມາສະສແດງໃນແບບຟອນ -->
        </div>
        <div class="form-group">
            <label for="lname">ນາມສະກຸນພະນັກງານ</label>
            <input type="text" name="lname" class="form-control" value="<?php echo $row['lname'] ?>">
        </div>


        <!-- ແກ້ໄຂຂໍ້ມູນແບບ radio -->
        <div class="form-group">
            <label for="gender">ເພດ</label>
            <!-- ຈະເປັນການເຊັກວ່າຄ່າທີ່ສົ່ງມາເປັນຫຍັງ ແລ້ວກໍໃຫ້ ຕິກເອົາ ເພດ ທີ່ສົ່ງມາ -->
            <?php if ($row['gender'] == "male") {
            echo "<input type = 'radio' name = 'gender' value = 'male'checked>ຊາຍ";
            echo "<input type = 'radio' name = 'gender' value = 'female'>ຍິງ";
            echo "<input type = 'radio' name = 'gender' value = 'other'>ອືນໆ";
            } else if ($row['gender'] == "female") {
                echo "<input type = 'radio' name = 'gender' value = 'male'>ຊາຍ";
            echo "<input type = 'radio' name = 'gender' value = 'female' checked>ຍິງ";
            echo "<input type = 'radio' name = 'gender' value = 'other'>ອືນໆ";
            } else {
                echo "<input type = 'radio' name = 'gender' value = 'male'>ຊາຍ";
                echo "<input type = 'radio' name = 'gender' value = 'female'>ຍິງ";
                echo "<input type = 'radio' name = 'gender' value = 'other' checked>ອືນໆ";
            }
            ?>
        </div>

        <!-- ແກ້ໄຂ ຂໍ້ມູນແບບ checkbox -->
        <div class="form-group">
            <label for="skill">ທັກສະຄວາມສາມາດ</label>
        
            <?php 
            // ຕ້ອງໄດ້ປ່ຽນ ສະຕິງໃຫ້ເປັນເອເລີທີ່ເກົ່າ
             $skill = explode(",",$row['skills']);//ດືງເອົາທັກສະຂອງພະນັກງານຢູ່ໃນຖານຂໍ້ມູນ
            // ທຳການປ່ຽບທ່ຽບກັນລະຫວ່າງ $skill and value ດວ້ຍໃຫ້ໄປດືງເອົາຂໍ້ມູນທີ່ຢູ່ໃນ ຕົວປ່ຽນ $skill ແລ້ວໄປເກັບໄວ້ value ແລ້ວເອົາໄປເຊັກ
            foreach($skills_arr as $value){//ເປັນການສ້າງຕົວເລືອກ ດວ້ຍອີງຈຳນວນຕົວເລກຈາກ $skills_arr
                    // ເຊັກວ່າຂໍ້ມູນທີ່ຢູ່ໃນ $skills_arr ກັນຕົງກັບ ສະທັກຂອງພະນັກງານບໍ່(value)
                    if(in_array($value,$skill)) {
                        // ຖ້າຕົງກັນ ກໍໃນສ້າງຕົວເລືອກຂື້ນມາແລ້ວຕິກເອົາຕົວເລືອກນັ້ນ
                        echo " <input type='checkbox' name='skills[]' value='$value' checked>$value";
                    } else {
                        // ຖ້າວ່າບໍ່ຕົງກັນ ຖ້າໃຫ້ສ້າງມາເຊັ້ນກັນ ແຕ່ບໍ່ໃຫ້ຕິກເອົາ
                        echo " <input type='checkbox' name='skills[]' value='$value'>$value";
                    }
            }

              ?>
        </div>

        <div class="form-group mt-2">
        <input type="submit" value="ແກ້ໄຂ້" class="btn btn-success">
        <input type="reset" value="ລ້າງຂໍ້ມູນ" class="btn btn-danger">
        <a href="index.php" class="btn btn-primary">ກັບໜ້າຫຼັກ</a>
        <a href="showdata_fetchrow.php" class="btn btn-warning">ການໃຊ້ fetch ຕ່າງໆ</a>
        <a href="showdata_table.php" class="btn btn-info">ຂໍ້ມູນຕາຕະລາງ</a>
        </div>
    </form>
    </div>
</body>
</html>