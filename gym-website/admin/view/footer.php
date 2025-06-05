<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap");
/* =========== Browser Reset ============ */
:root {
  /* Color Variables */
  --primary: #ffc400;
  --text-1: #0f2341;
  --text-2: #a9a9a9;
  --white: #fff;
  --shadow-300: 0 5px 5px rgba(0, 0, 0, 0.3);
  --shadow-500: 0 5px 5px rgba(0, 0, 0, 0.5);
  --transition-300: all 300ms ease-in-out;
  --transition-500: all 500ms ease-in-out;
}



a {
  text-decoration: none;
}

li {
  list-style: none;
}

    /* =========== Footer ============ */
.footer {
  height: 255px;
  background-color: var(--text-1); 
}

.footer .row {
  margin-left: -80px;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  padding: 20px 10px;
}

.footer .row .col:last-child {
  display: grid;
  grid-template-columns: repeat(2, minmax(10rem, 1fr));
  gap: 2rem;
}

.footer .row .col:last-child img {
  height: 90px;
  width: 150px;
}

.footer .row .col {
  display: flex;
  flex-direction: column;
}

.footer .row .col h3 {
  font-size: 19px;
  color: var(--white);
  margin-bottom: 2rem;
}

.footer .row .col a {
  display: inline-block;
  color: var(--white);
  font-size: 15px;
  margin-bottom: 0.5rem;
}
.footer .row .col .social  i{
  font-size: 25px;
}
@media (max-width: 767px) {
  .footer .row {
    row-gap: 7rem;
    grid-template-columns: repeat(2, 1fr);
  }
  
}

@media (max-width: 567px) {

  #b, #c{
    display: none;
  }
  #a{
   margin-left: 180px;
  }
}
/* @media screen and (max-width: 576px) {
#header{
  display: none;
}
#font{
  margin-left: 60px;
}
  } */
  </style>
</head>
<body>
 <!-- Footer -->
 <footer class="footer">
      <div class="row container">
      <div class="col">
         
         </div>
      <div id="a" class="col">
    
                    <h3>Contact Info</h3>
                    <ul style="margin-left:-50px">
                        <li><a href="#">470 Trần Đại Nghĩa</a></li>
                        <li><a href="#">Đà Nẵng, Việt Nam 2023</a></li>
                        <li><a href="#">+84 367462316</a></li>
                        <li><a href="#">xuanductran71@gmail.com.vn</a></li>
                    </ul>
             

              
                   
              
          
        </div>
        
        <div id="b" class="col">
        <h3>Connect</h3>
                    <div class="social " >
                        <a href="#"><i class='bx bxl-facebook'></i></a>
                        <a href="#"><i class='bx bxl-instagram' ></i></a>
                        <a href="#"><i class='bx bxl-twitter' ></i></a>
                        <a href="#"><i class='bx bxl-linkedin' ></i></a>
                    </div>
        </div>
       
        <div id="c" class="col">
          <img src="../images/nenphong1.jpg" alt="" />
          <img src="../images/nenphong2.jpg" alt="" />
          <img src="../images/nenphong3.jpg" alt="" />
          <img src="../images/nenphong4.jpg" alt="" />
        </div>
      </div>
  </footer>
</body>
</html>
