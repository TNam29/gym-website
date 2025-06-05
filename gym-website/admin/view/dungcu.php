<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Freelancer - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <!-- <link href="../css/styles.css" rel="stylesheet" /> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
<style>
input[type=text], input[type=number],input[type=file],select {
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
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100px; /* Full width */
  height: 100px; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
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
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
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
  
  <!-- themmoi -->
  

<div id="id01" class="modal" style="width:100%;height:100%">
  
  <form class="modal-content animate" style="width:800px;" action="controllers.php?act=dungcu_add" method="post" enctype="multipart/form-data">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    

    <div class="container">
    <select name="iddmdc" id="">
                            <option value=0>Chọn danh mục</option>
                            <?php
                            $iddmdccur=$dcct[0]['iddmdc'];
                            if(isset($dsdmdc)){
                              foreach($dsdmdc as $dmdc){
                                if($dmdc["id"]==$iddmdccur)
                                   echo '<option value = "'.$dmdc['id'].'" selected>'.$dmdc['tendmdc'].'</option>';
                                else 
                                   echo '<option value = "'.$dmdc['id'].'">'.$dmdc['tendmdc'].'</option>';
                              }
                            }
                            ?>
        </select>
      <label for=""><b>Tên dụng cụ</b></label>
      <input type="text" name="tendc" required>view

      <label for="psw"><b>Hình ảnh</b></label>
      <input type="file"  name="image"  required>
      <label for="uname"><b>Giá</b ></label>
      <input type="number"  name="gia"  required>
      <label for="uname"><b>Tình trạng</b ></label>
      <input type="text"  name="tinhtrang" required>
      <label for="uname"><b>Số lượng</b ></label>
      <input type="number" name="soluong" required>
      <input type="submit" name="themmoi" value="Thêm dụng cụ">
    
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
  
    </div>
  </form>
</div>

  <!-- --------------- ------------------------------------------------------------------>
            <div class="container d-flex justify-content-between">
              <div style="font-weight:bold;font-size:30px">
               <div style="text-shadow: 0 0 5px gold, 0 0 7px #0000FF;">DANH SÁCH THIẾT BỊ</div> 
                
                    <?php
                        foreach($dsdmdc as $dm){
                            echo '<a class="dropdown-item text-primary" href="controllers.php?act=dungcu&id='.$dm['id'].'">'.$dm['tendmdc'].'</a>';
                        }
                      ?>
                    
              </div>
              <div class="d-flex flex-row">
              <div>   
                  <form class="d-flex flex-row" action="controllers.php?act=dungcu" method="post">
                    <input style="width:500px" class="form-control me-2" type="text" name="kyw" placeholder="Nhập tên để tìm!">
                    <input type="submit" name="timkiem" style="width:150px;height:50px" class="btn btn-primary mt-2" value="Tìm kiếm" > 
                  </form>
                </div>
                <div>
                <button onclick="document.getElementById('id01').style.display='block'" style="width:150px;height:50px" class="form-control ms-2 mt-2 bg-warning">THÊM</button>
                </div>
              </div>
              
            </div>
            
            <div class="container-fluit ms-4 me-3 mt-3 mb-3">
            <div style="background: rgb(223, 223, 223);" class="  d-flex   mb-3 ">
                   <div class=" ps-3 pe-3 pt-2 pb-3 d-flex flex-wrap">
                    <?php
                      showpro3($dsdc);
                      
                    ?>
                    </div>
            </div>
            
            
         </div>
          
          </div>
      
      </div>
    
</body>
</html>

       
