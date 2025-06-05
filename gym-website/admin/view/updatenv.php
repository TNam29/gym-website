<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Freelancer - Start Bootstrap Theme</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <style>
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

    /*  import google fonts */
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

    * {
      margin: 0;
      padding: 0;
      outline: none;
      border: none;
      text-decoration: none;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }



    /* MAin Section */
    .container1 {

      background-color: #f1f1f1;
      width: 100%;
    }

    .main-top {

      width: 100%;
    }

    .main-top i {
      position: absolute;
      right: 0;
      margin: 10px 30px;
      color: rgb(110, 109, 109);
      cursor: pointer;
    }

    .main .users {


      width: 410px;
    }

    .users .card {

      width: 365px;
      margin: 15px 32px;
      background-image: linear-gradient(0deg, #085078, #85d8ce);
      text-align: center;
      border-radius: 10px;
      padding: 10px;
      box-shadow: 10px 10px 5px #888888;

    }

    .users .card h4 {
      text-transform: uppercase;
    }

    .users .card p {
      font-size: 12px;
      margin-bottom: 15px;
      text-transform: uppercase;
    }

    .users table {
      margin: auto;
    }

    .per {
      margin-left: 20px;
    }

    .users .per span {

      padding: 5px;
      border-radius: 10px;
      background: rgb(223, 223, 223);
    }

    .users td {
      padding-top: 5px;
      font-size: 14px;
      padding-right: 15px;
    }

    .users .card a {
      width: 100%;
      margin-top: 8px;
      padding: 7px;
      cursor: pointer;
      border-radius: 10px;
      background-image: linear-gradient(0deg, #16a085, #f4d03f);
      border: 1px solid #4AD489;
    }

    .users .card a:hover {
      background: red;
      color: #fff;
      transition: 0.5s;
    }

    /*Attendance List serction  */
    .attendance {
      margin-top: 20px;
      /* text-transform: capitalize; */
    }

    .attendance-list {
      border: 1px solid gainsboro;
      width: 100%;
      padding: 10px;
      margin-top: 40px;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 30px 20px rgba(0, 0, 0, 0.2);
    }

    .table {
      border-collapse: collapse;
      margin: 25px 0;
      font-size: 15px;
      min-width: 100%;
      overflow: hidden;
      border-radius: 5px 5px 0 0;
    }

    table thead tr {
      color: #fff;
      background: #34AF6D;
      text-align: left;
      font-weight: bold;
    }


    .table tbody tr {
      border-bottom: 1px solid #ddd;
    }

    .table tbody tr:nth-of-type(odd) {
      background: #f3f3f3;
    }

    .table tbody tr.active {
      font-weight: bold;
      color: #4AD489;
    }

    .table tbody tr:last-of-type {
      border-bottom: 2px solid #4AD489;
    }

    .table button {
      padding: 6px 20px;
      border-radius: 10px;
      cursor: pointer;
      background: transparent;
      border: 1px solid #4AD489;
    }

    .table button:hover {
      background: #4AD489;
      color: #fff;
      transition: 0.5rem;
    }
  </style>
</head>

<body>
  <script>
    $(document).ready(function() {
      $("#hide").click(function() {
        $(".attendance").hide();
      });
      $("#show").click(function() {
        $(".attendance").show();
      });
    });
  </script>

  <!-- themmoi -->

  <div id="id01" class="modal" style="width: 100%;height:100%">
    <form style="width:800px;margin-left:300px;background:white;padding:10px" action="controllers.php?act=nhanvien_add" method="post" enctype="multipart/form-data">


      <div class="container ">
        <h5 style="color:blue">Thông tin cá nhân:</h5>
        <label for="uname"><b>Tên nhân viên</b></label>
        <input type="text" name="tennv" required>

        <label for="psw"><b>Hình ảnh</b></label>
        <input type="file" name="image" required>
        <label for="psw"><b>Số điện thoại</b></label>
        <input type="number" name="sodt" required>

        <label for="uname"><b>Email</b></label>
        <input type="text" name="email" required id="txtEmail" aria-describedby="msgEmail">
        <label for="uname"><b>Địa chỉ</b></label>
        <input type="text" name="diachi" required>
        <label for="uname"><b>Vai trò</b></label>
        <input type="text" name="vaitro" required>
        <input type="submit" name="themmoi" value="Đăng kí">
      </div>
      <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

      </div>
    </form>
  </div>

  <div class="container1">

    <section class="container">
      <div class="main-top">
        <form class="modal-content animate p-3" action="controllers.php?act=nhanvien_update" enctype="multipart/form-data" method="post">
          <div class="mb-3 mt-3 ">


            <label for="uname"><b>Tên khách hàng</b></label>
            <input type="text" name="tennv" value="<?= $nvct[0]['tennv'] ?>" required>

            <label for="psw"><b>Hình ảnh</b></label>
            <input type="file" name="image">
            <!-- <img src="<?= '../'. $nvct[0]['image'] ?>" width="50"> -->
            <label for="uname"><b>Số điện thoại</b></label>
            <input type="number" name="sodt" value="<?= $nvct[0]['sodt'] ?>" required>
            <label for="uname"><b>Email</b></label>
            <input type="text" name="email" value="<?=$nvct[0]['email'] ?>"  id="txtEmail" required>
            <small id="msgEmail" class="text-muted" style="color:red !important;display:none"> </small><br>
            <label for="uname"><b>Địa chỉ</b></label>
            <input type="text" name="diachi" value="<?= $nvct[0]['diachi'] ?>" required>
            <label for="uname"><b>Vai trò</b></label>
            <input type="text" name="vaitro" value="<?= $nvct[0]['vaitro'] ?>" required>
            <input type=hidden name="id" value="<?= $nvct[0]['id'] ?>">

            <input type="submit" name="capnhap" value="Cập nhập" class="form-control text-bg-danger" >
          </div>
        </form>
         <!-- kiem tra email -->
        <h1 style="text-shadow: 0 0 5px gold, 0 0 7px #0000FF;">DANH SÁCH NHÂN VIÊN</h1>
      </div>

      <div class=" d-flex flex-wrap">
        <?php
        if (isset($ketqua) && (count($ketqua) > 0)) {
          $i = 1;
          foreach ($ketqua as $nv) {
            echo '
    
        <div class="users">
         <div class="card">
            <img style="margin-left: 130px;
            width: 70px;
            height: 70px;
            border-radius: 50%;" src="' . $nv['image'] . '">
            <h4>' . $nv['tennv'] . '</h4>
            <p>' . $nv['vaitro'] . '</p>
           <div class="per">
                <table>
                  <tr>
                    <td><span>100%</span></td>
                    <td><span>90%</span></td>
                  </tr>
                  <tr>
                    <td>Nhiệt tình</td>
                    <td>Kinh nghiệm</td>
                  </tr>
                </table>
            </div>
            
            <a class=" p-2 form-control text-bg-warning text-decoration-none text-center" href = "controllers.php?act=updatenv&id=' . $nv['id'] . '"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
          </div>
        </div>
  
        ';
            $i++;
          }
        }
        ?>




      </div>

      <button id="show" style="border-radius:8px" class="text-bg-info p-2 mb-2 ">XEM CHI TIẾT!</button>
      <section class="attendance">
        <div class="attendance-list">
          <h1 style="text-shadow: 0 0 5px gold, 0 0 7px #0000FF;">THÔNG TIN CÁ NHÂN:</h1>
          <div class="d-flex flex-row">
            <div>

              <button onclick="document.getElementById('id01').style.display='block'" class="form-control ms-2 ps-3 pe-3 text-bg-success"><i class="fa fa-plus-square" aria-hidden="true"></i></button>
            </div>
            

          </div>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Họ và tên</th>
                <th>Ảnh</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Vai trò</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
              if (isset($dsnv) && (count($dsnv) > 0)) {
                $i = 1;
                foreach ($dsnv as $nv) {
                  echo '
            <tr>
            <tr>
            <td>' . $i . '</td>
            <td>' . $nv['tennv'] . '</td>
            <td><img style="width:120px;height:100px" src="' . $nv['image'] . '"></td>
            <td>' . $nv['sodt'] . '</td>
            <td>' . $nv['email'] . '</td>
            <td>' . $nv['diachi'] . '</td>
            <td>' . $nv['vaitro'] . '</td>
            <td>
            <a class=" p-2 form-control text-bg-warning text-decoration-none text-center" href = "controllers.php?act=updatenv&id=' . $nv['id'] . '"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
            </td>
            <td><a class="p-2 form-control text-bg-danger text-center" href = "controllers.php?act=delnv&id=' . $nv['id'] . '"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
            </tr>';
                  $i++;
                }
              }
              ?>
            </tbody>
          </table>
        </div>

      </section>
      <br><button id="hide" style="border-radius:8px;width:125px" class="text-bg-info p-2">RÚT GỌN!</button>
    </section>
  </div>


  <!-- --------------- -->

</body>

</html>