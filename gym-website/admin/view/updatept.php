<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard | By Code Info</title>
  <link rel="stylesheet" href="style.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <style>/*  import google fonts */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700");
*{
  margin: 0;
  padding: 0;
  outline: none;
  border: none;
  text-decoration: none;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body{
  background: #dfe9f5;
}


/* Main Section */
.main{
  position: relative;
  padding: 20px;
  width: 100%;
}
.main-top{
  display: flex;
  width: 100%;
}
.main-top i{
  position: absolute;
  right: 0;
  margin: 10px 30px;
  color: rgb(110, 109, 109);
  cursor: pointer;
}
.main-skills{
  display: flex;
  margin-top: 20px;
}
.main-skills .card{
  width: 25%;
  margin: 10px;
  background: #fff;
  text-align: center;
  border-radius: 20px;
  padding: 10px;
  box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}
.main-skills .card h3{
  margin: 10px;
  text-transform: capitalize;
}
.main-skills .card p{
  font-size: 12px;
}
.main-skills .card button{
  background: orangered;
  color: #fff;
  padding: 7px 15px;
  border-radius: 10px;
  margin-top: 15px;
  cursor: pointer;
}
.main-skills .card button:hover{
  background: rgba(223, 70, 15, 0.856);
}
.main-skills .card i{
  font-size: 22px;
  padding: 10px;
}

/* Courses */
.main-course{
  margin-top:20px ;
  text-transform: capitalize;
}
.course-box{
  width: 100%;
  height: auto;
  padding: 10px 10px 30px 10px;
  margin-top: 10px;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 5px 35px rgba(0, 0, 0, 0.2);
}
.course-box ul{
  list-style: none;
  display: flex;
}
.course-box ul li{
  margin: 10px;
  color: gray;
  cursor: pointer;
}
.course-box ul .active{
  color: #000;
  border-bottom: 1px solid #000;
}
.course-box .course{
  display: flex;
}
.box{
  width: 345px;
  padding: 30px;
  margin: 30px 32px;
  border-radius: 10px;
  background: rgb(235, 233, 233);
  box-shadow: 10px 20px 20px rgba(0, 0, 0, 0.2);
}
.box p{
  font-size: 12px;
  margin-top: 5px;
}
.box button{
  margin-bottom: 0px;
  width: 100px;
  background: green;
  color: white;
  font-weight: bold;
  padding: 10px 10px;
  border-radius: 10px;

  cursor: pointer;
}
.box button:hover{
  background: rgba(0, 0, 0, 0.842);
}
.box i{
  font-size: 7rem;
  float: right;
  margin: -20px 20px 20px 0;
}
.html{
  color: rgb(25, 94, 54);
}
.css{
  color: rgb(104, 179, 35);
}
.js{
  color: rgb(28, 98, 179);
}
input[type=text],
    input[type=number],
    input[type=file],
    select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button {
      background-color: #04AA6D;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      opacity: 0.8;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }

    /* Center the image and position the close button */
    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
      position: relative;
    }



    .container {
      padding: 16px;
    }

    span.psw {
      float: right;
      padding-top: 16px;
    }

    /* The Modal (background) */
    .modal {
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      z-index: 1;
      /* Sit on top */
      left: 0;
      top: 0;
      width: 100px;
      /* Full width */
      height: 100px;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.4);
      /* Black w/ opacity */
      padding-top: 60px;
    }

    /* Modal Content/Box */
    .modal-content {
      background-color: #fefefe;
      margin: 5% auto 15% auto;
      /* 5% from the top, 15% from the bottom and centered */
      border: 1px solid #888;
      width: 80%;
      /* Could be more or less, depending on screen size */
    }

    /* The Close Button (x) */
    .close {
      position: absolute;
      right: 25px;
      top: 0;
      color: #000;
      font-size: 35px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: red;
      cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
      -webkit-animation: animatezoom 0.6s;
      animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
      from {
        -webkit-transform: scale(0)
      }

      to {
        -webkit-transform: scale(1)
      }
    }

    @keyframes animatezoom {
      from {
        transform: scale(0)
      }

      to {
        transform: scale(1)
      }
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.psw {
        display: block;
        float: none;
      }

      .cancelbtn {
        width: 100%;
      }
    }
  </style>
</head>
<body>
<div id="id01" class="modal" style="height: 100%;width:100%">
    <form style="width:800px;margin-left:300px;background:white;padding:10px" action="controllers.php?act=pt_add" method="post" enctype="multipart/form-data">


      <div class="container ">
        <h5 style="color:blue">Thông tin cá nhân:</h5>
        <label for="uname"><b>Tên PT</b></label>
        <input type="text" name="tenpt" required>

        <label for="psw"><b>Hình ảnh</b></label>
        <input type="file" name="image" required>
        <label for="psw"><b>Số điện thoại</b></label>
        <input type="number" name="sodt" required>
         
        <label for="uname"><b>Email</b></label>
        <input type="text" name="email" required>
        <label for="uname"><b>Vai trò</b></label>
        <input type="text" name="vaitro" required>
        <input type="submit" name="themmoi" value="Đăng kí">
      </div>
      <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

      </div>
  </form>
</div>
  <div class="container">

    <section class="main">
    <form class="modal-content animate" action="controllers.php?act=pt_update" method="post" enctype="multipart/form-data">


<div class="container">
  
  

  <label for="uname"><b>Tên huấn luyện viên</b></label>
  <input type="text" name="tenpt" value="<?= $ptct[0]['tenpt'] ?>" required>

  <label for="psw"><b>Hình ảnh</b></label>
  <input type="file" name="image">
  <!-- <img src="<?= $khct[0]['imagse'] ?>" width="50"> -->
  <label for="uname"><b>Số điện thoại</b></label>
  <input type="number" name="sodt" value="<?= $ptct[0]['sodt'] ?>" required>
  <label for="uname"><b>Email</b></label>
  <input type="text" name="email" value="<?= $ptct[0]['email'] ?>" required id="txtEmail" aria-describedby="msgEmail">
  <small id="msgEmail" class="text-muted" style="color:red !important;display:none">
  </small><br>
  <label for="uname"><b>Vai trò</b></label>
  <input type="text" name="vaitro" value="<?= $ptct[0]['vaitro'] ?>" required>
  <input type=hidden name="id" value="<?= $ptct[0]['id'] ?>">

  <input type="submit" name="capnhap" value="Cập nhập" class="form-control text-bg-danger" 
          onclick="return ktEmail('txtEmail','msgEmail','Sai định dạng Email !')">

</div>
<script>
  function ktEmail(idTag, idMsg, msg) {
    var idTag = document.getElementById(idTag);
    var idMsg = document.getElementById(idMsg);
    var valueInput = idTag.value;
    var redExr = /^^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
    if (!redExr.test(valueInput) != "") {
      idMsg.style.display = "block";
      idMsg.innerHTML = msg;
      return false;
    } else {
      idMsg.style.display = "none";
      return true;
    }
  }
</script>

</form>
   

      <section class="main-course">
        
        <div class=" d-flex  justify-content-between">
          <div> <h1>Danh SÁCH PT</h1></div>
       
        <div class=" d-flex">
                <div>

                  <button onclick="document.getElementById('id01').style.display='block'" class="form-control ms-2 text-bg-warning">Đăng kí</button>
                </div>
                

              </div>
        </div>
        <div class="course-box">
        
          <div class=" d-flex flex-wrap">
                   <?php
      if (isset($dspt) && (count($dspt) > 0)) {
        $i = 1;
        
              
              
        foreach ($dspt  as $dm) {
          echo '
          <div class="box">
          <div class="d-flex justify-content-around">
              <div> <h4>' . $dm['tenpt'] . '</h4>
              <p>' . $dm['vaitro'] . '</p>
              <p>' . $dm['sodt'] . '</p>
              <p>' . $dm['email'] . '</p>
              </div>
              <div><img style="margin-left:5px;margin-bottom:30px;
              width:auto;
              height: 90px;
              border-radius: 10px;" src="../' . $dm['image'] . '"></div>
          </div>
         
          <div class="d-flex justify-content-center">
          <div> <a class="form-control  text-bg-success text-decoration-none" href="controllers.php?act=lichtap&id=' . $dm['id'] . '">Lớp tập </a></div>
            <div> <a class="form-control  text-bg-danger text-center text-decoration-none" href = "controllers.php?act=updatept&id='.$dm['id'].'">Cập nhập</a></div>
             <div> 
             <a class=" form-control text-bg-danger text-center text-decoration-none" href = "controllers.php?act=deldmpt&id=' .$dm['id']. '">Xóa</a></div>
          </div>
        
         
         
        </div>
        
  
        ';
          $i++;
        }
        
      }
      ?>
              
          
            
            
         </div>
            
          </div>
        </div>
      </section>
    </section>
  </div>
</body>
</html>
