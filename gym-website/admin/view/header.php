<style>
  #mainNav {
  padding-top: 0px;
  padding-bottom: 0px;
  font-family: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-weight: 700;
}
#mainNav .navbar-brand {
  color: #fff;
}
#mainNav .navbar-nav {
  margin-top: 0px;
}
#mainNav .navbar-nav li.nav-item a.nav-link {
  color: #fff;
}
#mainNav .navbar-nav li.nav-item a.nav-link:hover {
  color: #1abc9c;
}
#mainNav .navbar-nav li.nav-item a.nav-link:active, #mainNav .navbar-nav li.nav-item a.nav-link:focus {
  color: #fff;
}
#mainNav .navbar-nav li.nav-item a.nav-link.active {
  color: #1abc9c;
}
#mainNav .navbar-toggler {
  font-size: 10px;
  padding: 0.8rem;
}

@media (min-width: 992px) {
  #mainNav {
    
    transition: padding-top 0.3s, padding-bottom 0.3s;
  }
  #mainNav .navbar-brand {
    font-size: 1.75em;
    transition: font-size 0.3s;
  }
  #mainNav .navbar-nav {
    margin-top: 0px;
  }
  #mainNav .navbar-nav > li.nav-item > a.nav-link.active {
    color: #fff;
    background: #1abc9c;
  }
  #mainNav .navbar-nav > li.nav-item > a.nav-link.active:active, #mainNav .navbar-nav > li.nav-item > a.nav-link.active:focus, #mainNav .navbar-nav > li.nav-item > a.nav-link.active:hover {
    color: #fff;
    background: #1abc9c;
  }
  #mainNav.navbar-shrink {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
  }
  #mainNav.navbar-shrink .navbar-brand {
    font-size: 1.5em;
  }
}
@media (max-width: 767px) {
    
  
}
@media screen and (max-width: 576px) {
#header{
  display: none;
}
#font{
  margin-left: 60px;
}
  }
</style>
<div class="container-fluit " style="  background-image: linear-gradient(0deg, 
#292e49, #16222A);">
    <div class="p-4 text-white text-left container d-flex justify-content-between">
      <div id="font" class="mt-5 text-center col-sm-4 ">
        <h4 style=" font-size: 30px;color:aqua;font-weight:bold;
        text-shadow: rgba(0,0,255,1) -1px -2px 0.5em;margin-bottom:30px">HỆ THỐNG QUẢN LÝ<br> PHÒNG GYM</h4>
        <!-- <h5 style="color: white;font-weight:bold;
  text-shadow: 2px 2px 4px black;">Trưởng phòng</h5> -->
        <!-- <p style="text-shadow: 2px 2px 8px black;">Trần Xuân Đức</p>
        <p style="text-shadow: 2px 2px 8px black;">Nguyễn Trung Nhật</p> -->
        <!-- <button type="submit" class="btn btn-light ">Xem thêm</button> -->
      </div>
      <div id="header" class="col-sm-8 ">
         <img src="../uploaded/header.jpg" alt="" style="height: 300px;width: 800px;">
      </div>
    </div>
  </div>
<!-- <div  class="container-fluit p-2 ps-3 bg-success ">
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a  class="nav-link active" href="index.php?act=trangchu">TRANG CHỦ</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="index.php?act=nhanvien">NHÂN VIÊN</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="index.php?act=khachhang">KHÁCH HÀNG</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="index.php?act=danhmucPT">PT</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="index.php?act=dungcu">DỤNG CỤ</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="index.php?act=goitap">GÓI TẬP</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="index.php?act=thongke">DOANH THU</a>
    </li>
  </ul>
</div> -->
<nav  class="navbar navbar-expand-lg bg-success text-uppercase " id="mainNav">
            <div class="container">
                <a class="navbar-brand ps-3" href="#page-top">FITNESS</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto ps-3">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded text-info" href="controllers.php?act=trangchu">TRANG CHỦ</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="controllers.php?act=nhanvien">NHÂN VIÊN</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="controllers.php?act=khachhang">KHÁCH HÀNG</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="controllers.php?act=danhmucPT">PT</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="controllers.php?act=dungcu">DỤNG CỤ</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="controllers.php?act=danhmucloptap">LỚP TẬP</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="controllers.php?act=lichtap">LỊCH TẬP</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="controllers.php?act=goitap">GÓI TẬP</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="controllers.php?act=thongke">DOANH THU</a></li>
                    </ul>
                </div>
            </div>
        </nav>

