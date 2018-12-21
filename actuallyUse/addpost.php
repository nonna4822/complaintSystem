<html lang="en">
    
    <style>
        h2#K1{color:darkcyan}
        h4#C1{color: aliceblue}




.topnav {
    background-color:darkslategray;
    overflow: hidden;
}


.topnav a {
    float: right;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 30px 16px;
    text-decoration: none;
    font-size: 17px;
}


.topnav a:hover {
    background-color: #ddd;
    color: black;
        width: 13.5%;
    height: 13.5%;
}

.active1 {
    background-color: #4CAF50;
    color: white;
    width: 13.5%;
    height: 13.5%;
        }
.active {
    background-color: darkcyan;
    color: white;
    
    
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}


@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
      
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
        
.topnav .icon {
    display: none;
}
        
.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color:darkcyan;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
    
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}


.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}


.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}


.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}


.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
    </style>
    
<head>
  <title>Add Post</title>
  <meta charset="utf-8">
    <link rel="shortcut icon" href="รูป/8.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    
<body> 

<div class="sidebar">
    <img src="รูป/logo_KU-cb.jpg" width="200" height="200" >
  <a  href="home.html">Home</a>
  <a class="active" href="addpost.html">แจ้งเรื่องร้องเรียน</a>
    <a  href="check.html">เช็คสถานะเรื่องร้องเรียน</a>
  <a href="#about">About</a>
</div>

<div class="w3-top" style="padding-left: 14.7%; ">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large" >
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
     <label for="country" style="padding-left: 10; padding-top: 7; font-size: 25px; color: #ddd;"><strong>KASETSART UNIVERSITY</strong></label>
     <div class="w3-dropdown-hover w3-hide-small w3-right">
    <button class="w3-button w3-padding-large" style="height:53px;width:100px; font-size: 15; padding-top: 10%;">Logout</button>        

  </div>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white dropdown" title="My Account">
      
      <img src="รูป/4.jpg" class="w3-circle dropbtn" style="height:26px;width:25px" alt="Avatar"><label for="country" style="padding-left: 10; padding-top: 5; font-size: 10px; color: #ddd;"><strong>b5920559999</strong></label>      

  </a>
  <div class="w3-dropdown-hover w3-hide-small w3-right">
    <button class="w3-button w3-padding-large" title="Notifications" style="height:53px;width:100px"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></button>        

  </div>
 </div>
</div><br><br><br><br>

    <label for="country" style="padding-left: 25%;">หมวดหมู่เรื่องร้องเรียน</label>
<div class="container" style="padding-left: 16.8%;">
    <select name="catid" style="width:500px;">
      <?php foreach($Category_list as $Category){echo "<option value= $Category->catid> $Category->catname</option>"; }?>
    </select>
</div><br>
    
    
<div class="form-group" style="padding-left: 25%">
  <label for="usr">หัวข้อเรื่องร้องเรียน : </label>
  <input type="text" class="form-control" id="usr" style="width:600px">
</div>

<div class="form-group" style="padding-left: 25%">
  <label for="comment">เนื้อหาเรื่องร้องเรียน :</label>
  <textarea class="form-control" rows="5" id="comment" style="width:800px"></textarea>
</div>  <br>

<div style="padding-left: 25%">
    <label>เร่งด่วน</label>
<input type="range" list="number"  min="1" max="3" style="width:300px">
    <label>เร่งด่วนมาก</label>
<datalist id="number" >
  <option value="1">
  <option value="2">
  <option value="3">
</datalist>
    </div><br>
    <label style="padding-left: 25%">การตั้งค่าสถานะเรื่องร้องเรียน</label>
    
<div style="padding-left: 25%">
    <h5>Public</h5>
    <label class="switch"> 
  <input type="checkbox">
  <span class="slider round"></span>
</label>
</div>
    
<div style="padding-left: 25%">
    <h5>Private</h5>
    <label class="switch"> 
  <input type="checkbox">
  <span class="slider round"></span>
</label>
</div>
    
    <ul class="nav justify-content-center" >

        <button type="button" class="btn btn-primary" >ส่งเรื่อง</button>
    </ul><br>
    
    
    
<script>
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
        var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}


window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
    


    
</body>
</html>