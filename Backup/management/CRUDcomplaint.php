<html lang="en">
    <style>
        body{background-image: url(../รูป/03-897.jpg)}
        h2#K1{color:darkcyan}
        h4#C1{color: aliceblue}
        p.sansserif {
    font-family: 'Kanit', sans-serif;
    }
    </style>
<head>
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <title>จัดการเรื่องร้องเรียน</title>
    <link rel="shortcut icon" href="../รูป/8.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

    <ul class="nav">
        <li class="nav-item">
            <img src="../รูป/8.png" width="100" height="85">

        </li>
    </ul>

    <ul class="nav justify-content-end" style="padding-left:1em">
        <li class="nav-item ">
            <h2 id="K1"><p class ="sansserif">ระบบจัดการเรื่องร้องเรียนสำหรับนิสิต</h2>
            <h4 id="C1"><p class ="sansserif">ภาควิชาวิศวกรรมคอมพิวเตอร์</h4>
        </li>
    </ul>
    <ul class="nav justify-content-end" style="padding-left:37em">
      <form action="../management/management.php">
       <button type="submit" class="btn btn-outline-primary"><p class ="sansserif">กลับสู่หน้าการจัดการ</p></button>
       </form>
      <form action="../loginSystem/logout.php">
       <button type="submit" class="btn btn-outline-primary"><p class ="sansserif">ออกจากระบบ</p></button>
     </ul>
     </form>
</nav><br><br><br>
<div class="container">
  <center><h2 style="color: black"><p class ="sansserif">จัดการเรื่องร้องเรียน</h2></center><br><br>
  <table class="table table-dark table-hover table-bordered" >
    <thead>
      <tr>
        <th><center style="width:250px;">ชื่อเรื่องร้องเรียน</center></th>
        <th><center style="width:170px;">ชื่อหมวดหมู่</center></th>
        <th><center style="width:170px;">รหัสผู้แจ้งเรื่อง</center></th>
        <th><center style="width:170px;">ชื่อผู้แจ้งเรื่อง</center></th>
        <th><center style="width:170px;">เวลา</center></th>
        <th colspan="3" style="width:200px;"><center>Modify</center></th>
      </tr>
    </thead>
    <tbody>
      <?php
        require ('../managementsystem/category/querycomplaint.php');
       ?>
    </tbody>
  </table>
</div>
</body>
</html>
