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
    <h2 class="text-center mt-2 bg-danger">ແບບຟ້ອນບັນທຶກຂໍ້ມູນ</h2>
    <form action="insertdata.php" method="post">
        <div class="form-group">
            <!-- ບັນທືກຂໍ້ມູນແບບ text -->
            <label for="fname">ຊື່ພະນັກງານ</label>
            <input type="text" name="fname" class="form-control">
        </div>
        <div class="form-group">
            <label for="lname">ນາມສະກຸນພະນັກງານ</label>
            <input type="text" name="lname" class="form-control">
        </div>


        <!-- ບັນທືກຂໍ້ມູນແບບ radio -->
        <div class="form-group">
            <label for="gender">ເພດ</label>
            <input type="radio" name="gender" value="male">ຊາຍ
            <input type="radio" name="gender" value="female">ຍິງ
            <input type="radio" name="gender" value="other">ອືນໆ
        </div>


        <!-- ບັນທຶກຂໍ້ມູນແບບ checkbox -->
        <div class="form-group">
            <label for="skill">ທັກສະຄວາມສາມາດ</label>
            <!-- skill[] ໜາຍຄວາມວ່າຖ້າສະນິດຂໍ້ມູນເປັນ ອາເລ ຕ້ອງໃສ [] ຕໍ່ຈາກຊື່ -->
            <input type="checkbox" name="skill[]" value="java">JAVA
            <input type="checkbox" name="skill[]" value="php">PHP
            <input type="checkbox" name="skill[]" value="html">HTML
            <input type="checkbox" name="skill[]" value="css">CSS
        </div>

        <div class="form-group mt-2">
        <input type="submit" value="ບັນທືກຂໍ້ມູນ" class="btn btn-success">
        <input type="reset" value="ລ້າງຂໍ້ມູນ" class="btn btn-danger">
        <a href="index.php" class="btn btn-primary">ກັບໜ້າຫຼັກ</a>
        <a href="showdata_fetchrow.php" class="btn btn-warning">ການໃຊ້ fetch ຕ່າງໆ</a>
        <a href="showdata_table.php" class="btn btn-info">ຂໍ້ມູນຕາຕະລາງ</a>
        </div>
    </form>
    </div>
</body>
</html>