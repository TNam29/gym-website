<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Travel Website | By Code Info</title>
  <link rel="stylesheet" href="style.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <style>/*  import google fonts */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Work+Sans:ital,wght@0,400;0,500;1,300&display=swap');
*{
  margin: 0;
  padding: 0;
  border: none;
  outline: none;
  text-decoration: none;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
.container{
  width: 100%;
  margin: auto;
}
.nav_bar{
  padding: 15px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.logo{
  display: flex;
  align-items: center;
  font-size: 1.4rem;
}
.logo i{
  margin-right: 10px;
  color: rgb(228, 151, 8);
  font-size: 1.8rem;
}

/* menu list style */
.menu_list a{
  margin: 1.2rem;
  font-size: 14px;
  color: rgb(82, 79, 79);
}
.login_btn{
  width: 80px;
  margin-left: 2rem;
  padding: 5px 1rem;
  border-radius: 10px;
  color: #fff;
  background: rgb(228, 151, 8);
  cursor: pointer;
}
.menu_list a:hover{
  color: #000;
}

/* Home section style */
.home_section{
  background-image: url(img/header.jpg);
  background-size: cover;
  height: 100vh;
}
.overlay{
  height: 100%;
  background: rgba(0, 0, 0, 0.6);
}
.home{
  height: 100vh;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
}
.home h1{
  font-size: 4rem;
  color: #fff;
  text-transform: capitalize;
}
.home span{
  color: rgb(228, 151, 8);
}
.home_buttons{
  margin-top: 2rem;
}
.home_buttons button{
  padding: 10px 1rem;
  border-radius: 10px;
  margin: 1rem;
  cursor: pointer;
  font-size: 1rem;
}
.home_buttons button i{
  margin-right: 10px;
}
.home_buttons .btn1{
  background: rgb(228, 151, 8);
  color: #fff;
}

/* services */
.services{
  background: rgb(223, 223, 223);
  padding: 2rem 1rem;
}
.services .title{
  text-align: center;
}
.title h1{
  font-size: 2rem;
  text-transform: capitalize;
}
.title span{
  color: rgb(228, 151, 8);
}
.title .slogan{
  font-size: 1rem;
  color: gray;
}
.services_boxes{
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  margin-top: 1rem;
}
.box{
  width: 29vh;
  background: #fff;
  padding: 2rem;
  margin: 1rem 2rem;
  text-align: center;
  border-radius: 10px;
  border: 2px solid transparent;
  box-shadow: 1px 30px 20px rgba(0, 0, 0, 0.1);
}
.box i{
  font-size: 4rem;
  color: rgb(228, 151, 8);
  margin-bottom: 2rem;
}
.box p{
  color: gray;
  margin-top: 10px;
}
.box:hover, .br{
  border: 2px solid rgb(228, 151, 8);
}</style>
</head>

<body>



  <section class="services">
    <div class="container">
      <div class="title">
        <h1>Chào mừng bạn đến với <span>quản lí phòng GYM</span></h1>
    
      </div>
      <div class="services_boxes">
        <div class="box">
        <a class="nav-link text-white" href="controllers.php?act=nhanvien"><i class="fa-solid fa-person-breastfeeding"></i></a>
          <h4>Nhân viên</h4>
          
        </div>

        <div class="box br col-sm-6 col-md-4">
        <a class="nav-link text-white" href="controllers.php?act=khachhang"><i class="fa-sharp fa-solid fa-person"></i></a>
          <h4>Khách hàng</h4>
          
        </div>

        <div class="box col-sm-6 col-md-4">
        <a class="nav-link text-white" href="controllers.php?act=danhmucPT"><i class="fa-solid fa-people-group"></i></a>
          <h4>PT</h4>
          
        </div>
        <div class="box col-sm-6 col-md-4">
        <a class="nav-link text-white" href="controllers.php?act=dungcu"><i class="fa-solid fa-dumbbell"></i></a>
          <h4>Dụng cụ</h4>
        
        </div>
        <div class="box col-sm-6 col-md-4">
        <a class="nav-link text-white" href="controllers.php?act=thongke"><i class="fa-solid fa-money-check-dollar"></i></a>
          <h4>Doanh thu</h4>
          
        </div>
        <div class="box col-sm-6 col-md-4">
        <a class="nav-link text-white" href="controllers.php?act=bmi"><i class="fa-sharp fa-solid fa-list-check"></i></a>
          <h4>Kiểm tra chỉ số BMI</h4>
        
        </div>
       
          <div class="box col-sm-6 col-md-4">
          <a class="nav-link text-white" href="../../admin/"><i class="fa-solid fa-right-from-bracket"></i></a>
            <h4>Đăng xuất</h4>
          </div>
        
    
        
            
            
            
  
  
        
      </div>
  </div>
  </section>

</body>
</html>