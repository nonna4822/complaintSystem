<?php
if(isset($_GET['controller'])&&isset($_GET['action']))
{	$controller = $_GET['controller'];
	$action = $_GET['action'];
}else
{	$controller = 'pages';
	$action = 'home';
} ?>
<html lang="en">
    <style >
        body{background-image: url(รูป/03-897.jpg)}
        h2#K1{color:darkcyan}
        h4#C1{color: aliceblue}
        p.sansserif {
    font-family: 'Kanit', sans-serif;
    }
    </style>
<head>
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <title>การจัดการ</title>
    <link rel="shortcut icon" href="รูป/8.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style style="text/css">
        img{
            padding: 10px;
        }
    </style>

</head>

<body>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

    <ul class="nav">
        <li class="nav-item">
            <img src="รูป/8.png" width="100" height="85">

        </li>
    </ul>

    <ul class="nav justify-content-end" style="padding-left:1em">
        <li class="nav-item ">
            <h2 id="K1"><p class ="sansserif">ระบบจัดการเรื่องร้องเรียนสำหรับนิสิต</h2>
            <h4 id="C1"><p class ="sansserif">ภาควิชาวิศวกรรมคอมพิวเตอร์</h4>
        </li>
    </ul>
     <ul class="nav justify-content-end" style="padding-left:47em">

        <button type="button" class="btn btn-outline-primary"><p class ="sansserif"><a href = "index.html" >ออกจากระบบ</a></p></button></ul>

</nav><br>
<div class="container"><br>

    <center><h2><p class ="sansserif">การจัดการ</p></h2></center><br>
          <div class = "row">
          <div class="col-xs-12 col-sm-4 col-md-4">
              <p align = "center">
          <img src="%E0%B8%A3%E0%B8%B9%E0%B8%9B/login.png" class="img-responsive"  width="250" height="200">
                  <a href="#" class = "btn btn-success">จัดการผู้ร้องเรียน</a></p>
              </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <p align = "center">
          <img src="รูป/12.png" class="img-responsive"  width="250" height="200">
                    <a href="#" class = "btn btn-success">จัดการผู้รับเรื่องร้องเรียน</a></p>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4">
            <p align = "center">
          <img src="รูป/15.png" class="img-responsive" width="250" height="200">
            <a href="#" class = "btn btn-success">จัดการหมวดหมู่</a></p>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4">
            <p align = "center"><br>
          <img src="%E0%B8%A3%E0%B8%B9%E0%B8%9B/complaints.png" class="img-responsive" width="250" height="200">
            <a href="#" class = "btn btn-success">จัดการเรื่องร้องเรียน</a></p>
              </div>
</div><br>
<?php require_once("routes.php"); ?>
</body>
</html>
