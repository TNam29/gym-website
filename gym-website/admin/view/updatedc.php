<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Freelancer - Start Bootstrap Theme</title> 
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
  /* width: 100%; */
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
  

  
<form class="modal-content animate" action="controllers.php?act=dungcu_update" method="post" enctype="multipart/form-data">
    

    <div class="container">
    <select name="iddmdc" id="">
                            <option value=0>Chọn danh mục</option>
                            <?php
                            $iddmdccur=$dcct[0]['iddmdc'];
                            if(isset($dsdmdc)){
                              foreach($dsdmdc as $dc){
                                if($dc['id']==$iddmdccur)
                                   echo '<option value = "'.$dc['id'].'" selected>'.$dc['tendmdc'].'</option>';
                                else
                                   echo '<option value = "'.$dc['id'].'" >'.$dc['tendmdc'].'</option>';
                              }
                            }
                            ?>
        </select>
        <label for=""><b>Tên dụng cụ</b ></label>
      <input type="text"  name="tendc" value="<?=$dcct[0]['tendc']?>" >
      <label for="psw"><b>Hình ảnh</b></label>
      <input type="file" name="image" >
      
      <label for=""><b>Giá</b ></label>
      <input type="number" name="gia" value="<?=$dcct[0]['gia']?>">
      <label for=""><b>Tình trạng</b ></label>
      <input type="text" name="tinhtrang" value="<?=$dcct[0]['tinhtrang']?>">
      <label for=""><b>Số lượng</b ></label>
      <input type="number" name="soluong" value="<?=$dcct[0]['soluong']?>">
      <input type=hidden name="id" value="<?=$dcct[0]['id']?>">
      <input type="submit" name="capnhap" value="Cap nhap">
    
      
    </div>

    <!-- <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
  
    </div> -->
  </form>


  <!-- --------------- ------------------------------------------------------------------>
    
            
        
    
            <div class="container d-flex justify-content-between">
              <div style="font-weight:bold;font-size:30px;color:#8B0000">
                Danh sách sản phẩm
                
                    <?php
                        foreach($dsdmdc as $dm){
                            echo '<a class="dropdown-item text-primary" href="controllers.php?act=dungcu&id='.$dm['id'].'">'.$dm['tendmdc'].'</a>';
                        }
                      ?>
                    
              </div>
              <div class="d-flex flex-row">
              <div>
                  <form class="d-flex flex-row">
                  <input style="width:500px" class="form-control me-2" type="text" placeholder="Search">
                  <button style="width:150px;height:50px" class="btn btn-primary mt-2" type="button">Search</button>
                  </form>
                </div>
               
              </div>
              
            </div>
            
            <div class="container mt-3 mb-3">
            <div class="  d-flex  bg-secondary mb-3 ">
                   <div class=" pt-2 d-flex flex-wrap bg-info">
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

       
