<!DOCTYPE html>
<html lang="en">

<head>
  <title>Stamina &mdash; Free Website Template by Free-Template.co</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="Free-Template.co" />

  <link rel="shortcut icon" href="../ftco-32x32.png">

  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="../fonts/icomoon/style.css">

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/jquery-ui.css">
  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">

  <link rel="stylesheet" href="../css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="../css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="../css/aos.css">
  <link href="../css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="../css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">


    <div class="site-section" id="schedule-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8  section-heading">
            <!-- <span class="subheading">Fitness Class</span> -->
            <h2 class="heading mb-3">Lớp tập</h2>
            <p>Hãy nhớ rằng, mỗi buổi tập là một bước nhỏ nhưng chắc chắn trên con đường chinh phục mục tiêu sức khỏe và thể chất của bạn. Đừng so sánh mình với người khác; hãy so sánh bản thân bạn với phiên bản một ngày trước đó, và hãy là người đánh bại chính mình mỗi ngày.</p>
          </div>
        </div>

        <?php $conn = mysqli_connect("localhost", "root", "", "databasegym",3307); ?>
        <?php
        $sql = "SELECT * FROM tb_danhmucloptap ";
        $result = mysqli_query($conn, $sql);

        // Hiển thị danh sách gói tập
        echo '<div class="container">';
echo '<div class="row g-4 justify-content-center">';

while ($row = mysqli_fetch_array($result)) {
    $idpt = $row['idpt'];
    
    $pt_sql = "SELECT tenpt FROM tb_pt WHERE id = $idpt";
    $pt_result = mysqli_query($conn, $pt_sql);
    $pt_row = mysqli_fetch_array($pt_result);

    echo '<div class="col-lg-4 col-md-6">';
    echo '<div class="package-item">';
    echo '<div class="overflow-hidden">
              <img class="img-fluid" src="../images/img_1.jpg" alt="">
          </div>';
    echo '<div class="d-flex border-bottom">
              <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2">' . $row["thoigian"] . ' ngày</i></small>
              <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>|' . $pt_row["tenpt"] . '</small>
              <small class="flex-fill text-center py-2">|<i class="fa fa-user text-primary me-2"></i> 1 Người</small>
          </div>';
    echo '<div class="text-center p-4">
              <h3 class="mb-0">' . $row["gia"] . '</h3>
              <div class="mb-3"></div>
              <p>' . $row["tenloptap"] . '</p>
              <div class="d-flex justify-content-center mb-2">
                  <a href="?act=Chitietgoitap&idlt= ' . $row['id'] . '" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
              </div>
          </div>';
    echo '</div>'; // Kết thúc package-item
    echo '</div>'; // Kết thúc col-lg-3
}

echo '</div>'; // Kết thúc row
echo '</div>'; // Kết thúc container
 ?>







      </div>
      <!-- .site-wrap -->

      <script src="../js/jquery-3.3.1.min.js"></script>
      <script src="../js/jquery-migrate-3.0.1.min.js"></script>
      <script src="../js/jquery-ui.js"></script>
      <script src="../js/popper.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <script src="../js/owl.carousel.min.js"></script>
      <script src="../js/jquery.stellar.min.js"></script>
      <script src="../js/jquery.countdown.min.js"></script>
      <script src="../js/bootstrap-datepicker.min.js"></script>
      <script src="../js/jquery.easing.1.3.js"></script>
      <script src="../js/aos.js"></script>
      <script src="../js/jquery.fancybox.min.js"></script>
      <script src="../js/jquery.sticky.js"></script>
      <script src="../js/jquery.mb.YTPlayer.min.js"></script>




      <script src="../js/main.js"></script>

</body>

</html>