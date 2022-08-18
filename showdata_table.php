<?php
        // ເຊືອມຕໍ່ກັບຖານຂໍ້ມູນ
        require('dbconnect.php');

        // ຊອກຫາຂໍມູນ ໃນຕາຕະລາງດວ້ຍການໃຊ້ sql
        $sql = "SELECT * FROM employees ORDER BY fname ASC "; //ORDER BY fname ASC "ການຈັດລຽງລາຍຊື່

        // ລັນຄຳສັ່ງໃຫ້ $sql ທຳງານ
        $result = mysqli_query($con,$sql);

        $count = mysqli_num_rows($result); // ຈະເປັນການນັບຈຳນວນວ່າມີຂໍ້ມູນຢູ່ໃນຕາຕະລາງຖານຂໍ້ມູນບໍ

        // ສ້າງຕົວປ່ຽນເພືອໄວ້ເກັບ ດຳລັບຂອງພະນັກງານ
        $order = 1;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        *{
            font-family: saysettha ot;
        }
        table tr th{
           border: 1px solid #000;
           padding: 2px;
        }
        table tr td{
           border: 1px solid #000;
           padding: 2px;
        }
    </style>
</head>
<body>
   <div class="container">
   <h1 class="text-center">ຕາຕະລາງຂໍ້ມູນພະນັກງານ</h1>
        <!-- ວິທີການສະແດງຖ້າບໍ່ມີຂໍ້ມູນຂອງພະນັກງານ ຈະບໍ່ໄດ້ສະແດງຟິວຕາຕະລາງຫຼຶລຸ່ມລົບ ແຕ່ຈະໃຫ້ສະແດງແຕ່ສະເພາະ ປຸ່ມບັນທຶກ ຫຼຶ ວ່າມີຂໍ້ມູນພະນັກງານຫຼາຍກວ່າ 1 ຄົນຂື້ນໄປຈຶງສະແດງຕາຕະລາງ ແລະ ປຸ່ມລົບ -->
        <?php if($count>0){ //ເປັນການໃຊ້ເງືອນໄຂວ່າຖ້ານັບຈຳນວນແລ້ວ ມີຫຼາຍກວ່າ 0 ຖ້າໃຫ້ສະແດງຜົນຂອງຕາຕະລາງ ?>


               <!-- ຟ້ອນການລົບຂໍ້ມູນໃຫ້ຕາຕະລາງ ດວ້ຍການອ້າງອີງໃສລະຫັັດພະນັກງານ -->
   <form action="deleteTextField.php" class="form-group" method="POST">
    <label for="">ລະຫັດພະນັກງານ</label>
        <input type="text" placeholder="ປ້ອນລະຫັດພະນັກງານເພືອລົບ" name="idemployees" class="form-control">
        <input type="submit" value="ລົບ" class="btn btn-danger mb-2 mt-2">
   </form>


   <!-- ແບບຟອນການຄົ້ນຫວາຂໍ້ມູນຂອງພະນັກງານ ການຄົ້ນຫາຈະມີຢູ່ຫຼາຍໃນການຄົ້ນຫາ ບໍ່ວ່າຈະເປັນ ຄົ້ນຫາຊື່ ຄົ້ນຫາລະຫັດ ຫຼຶ ນາມສະກຸນ ແຕ່ ຈະຍົກຕົວຢ່າງ ຄື ການ ຄົ້ນຫາ ດວ້ຍການປ້ອນຊື່ຂອງພະນັກງານ-->
     <form action="searchData.php" method="post">
    <label for="">ຄົ້ນຫາ</label>
    <input type="text" placeholder="ປ້ອນຊື່ພະນັກງານ" class="form-control" name="empname">
    <input type="submit" value="ຄົ້ນຫາ" class="btn btn-dark my-2">
   </form>

    <!-- ການສະແດງຂໍ້ມູນພະນັກງານໃຫ້ຮູບແບບຂອງຕາຕະລາງ -->
    <table class="table table-dark table-striped"> 
        <thead>
            <tr>
                <th>ລຳດັບ</th>
                <th>ລະຫັດພະນັກງານ</th>
                <th>ຊື່</th>
                <th>ນາມສະກຸນ</th>
                <th>ເພດ</th>
                <th>ທັກສະຄວາມສາມາດ</th>
                <th>ແກ້ໄຂ້ຂໍ້ມູນ</th>
                <th>ລົບຂໍ້ມູນ</th>
                <th>ເລືອກເພືອລົບຂໍ້ມູນ (Checkbox)</th>
            </tr>
        </thead>
        <tbody>
            <?php  while($row = mysqli_fetch_assoc($result)){ ?> <!-- ເປັນການສະແດງຂອງມູນຂອງພະນັກງານອອກດວ້ຍການເຮັດຊຳ ໃນຮູບແບບຂອງ mysqli_fetch_assoc -->
            <tr>
                <!-- ເປັນການໃຊ້ PHP ແຊກ ໃນແທັກຂອງ HTML  -->
                <td><?php echo $order++?></td>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['fname'] ?></td>
                <td><?php echo $row['lname'] ?></td>

                <!-- ການປ່ຽນແປງດວ້ຍໃຊ້ເງືອນໄຂ ປ່ຽນ ເພດ ຈາກອັງກິດ ເປັນພາສາລາວ -->
                <td><?php if($row['gender'] == "male") { ?>
                        ຊາຍ
                    <?php } else if($row['gender'] == "female") { ?>
                        ຍິງ
                    <?php } else{ ?>
                        ອືນໆ
                    <?php } ?>
                </td>

                
                <td><?php echo $row['skills'] ?></td>

                <!-- ການແກ້ໄຂຂໍ້ມູນ -->
                <td>
                    <a href="editform.php?id=<?php echo $row["id"]?>" class="btn btn-primary">ແກ້ໄຂ</a>
                </td>

                <!-- ປຸມຂອງການລົບຂໍ້ມູນ ແບບ Query String idmep ເປັນການສ້າງຕົວປ່ຽນທີ່ຈົງສົ່ງໄປຫາຟາຍນັ້ນໆ -->
                <td>
                    <!--  echo $row['id'] ຄືການບອກວ່າຈະສົງ id ຂອງຄົນທີ່ຈະນຳໄປລົບ -->
                    <a href="deleteQueryString.php?idemp=<?php echo $row['id']?>" class="btn btn-danger" onclick="return confirm('ຍັນຍືນການລົບຂໍ້ມູນນີ້')">ລົບຂໍ້ມູນ</a>
                </td>

                        <!-- ສ້າງຟອນສຳລັບລົບຂໍ້ມູນ ດວ້ຍ (Checkbox) -->
                        <form action="multipleDelete.php" method="post">    
                <td>
                    <!-- ການລົບຂໍ້ມູນ ຫຼາຍໆ ແຖວ ດວ້ຍ (Checkbox) ຈະມີການໃຊ້ [] ເພືອບົງບອກວ່າເປັນ array -->
                    <input type="checkbox" name="idcheckbox[]" id=""  value="<?php echo $row['id']; ?>">
                </td>
               

            </tr>
            <?php } ?> <!-- ເປັນການປິດຄຳສັ່ງຂອງ while ດ້ວຍການແຊກຄຳສັ່ງຂອງ PHP ໄປ -->
        </tbody>
    </table>
        <?php } else {?>
            <div class="alert alert-danger text-center" role="alert">
                <h5><b>ບໍ່ມີຂໍ້ມູນຂອງພະນັກງານໃນຖານຂໍ້ມູນ !!!</b></h5>
            </div>

          <?php } ?>

    <a href="insertform.php" class="btn btn-success mb-3">ບັນທຶກຂໍ້ມູນຂອງພະນັກງານ</a>

    <!-- ຖ້າວ່າຖານຂໍ້ມູນມີຂໍ້ມູນຫຼາຍກວ່າ 0 ກໍໃຫ້ສະແດງ ປຸ່ມລົບຂໍ້ມູນ Checkbox -->
            <?php if($count>0) { ?>
                
    <!-- ປຸ່ມລົບຂອງລົບຂອງ (Checkbox) -->
    <input type="submit" value="ລົບຂໍ້ມູນທີ່ເລືອກ (checkbox)" class="btn btn-danger mb-3">
    
    </form>
    <!-- ປຸ່ມເລືອກທັງໝົດ ແລະ ຍົກເລີກທັງໝົດ -->
    <button class="btn btn-primary mb-3" onclick="checkAll()">ເລືອກທັງໝົດ</button>
    <button class="btn btn-warning mb-3" onclick="uncheckAll()">ຍົກເລີກ</button>
    <?php } ?>


                
   </div>
</body>

<script>

    // ການສ້າງປຸ່ມເລືອງທັງໝົດ
    function checkAll(){
        // ເປັນການດືງຂໍ້ມູນຈາກແບບ ຟ້ອນຕົວທີ່ 1
        let formele = document.forms[2].length;


        for(i=0;i<formele-1;i++){
            document.forms[2].elements[i].checked=true;
        }
         
    }

// ການສ້າງປຸ່ມ ຍົກເລີກການເລືອກທັງໝົດ
    function uncheckAll(){
        // ເປັນການດືງຂໍ້ມູນຈາກແບບ ຟ້ອນຕົວທີ່ 1
        let formele = document.forms[2].length;

        for(i=0;i<formele-1;i++){
            document.forms[2].elements[i].checked=false;
        }
         
    }
</script>
</html>