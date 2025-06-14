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


<div class="site-section" id="schedule-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8  section-heading">
           
            <h2 class="heading mb-3">Lịch tập cả tuần của phòng Gym</h2>
            
          </div>
        </div>
        <?php

//  kết nối
$conn = mysqli_connect("localhost", "root", "", "databasegym",3307); 
$sql = "SELECT * FROM tb_lichtap ";
    $result = mysqli_query($conn, $sql); ?>
 <?php
$days = array("Thứ Hai", "Thứ Ba", "Thứ Tư", "Thứ Năm", "Thứ Sáu", "Thứ Bảy", "Chủ Nhật");

// Hiển thị tab cho từng ngày trong tuần
echo '<div class="row">
        <div class="col-12">
            <ul class="nav days d-flex" role="tablist">';
for ($i = 0; $i < count($days); $i++) {
    $tabId = strtolower(str_replace(' ', '-', $days[$i])); // Tạo id từ tên ngày
    $ariaSelected = ($i === 0) ? 'true' : 'false'; // Xác định tab đầu tiên có active

    echo '<li class="nav-item">
            <a class="nav-link ' . (($i === 0) ? 'active' : '') . '" id="' . $tabId . '-tab" data-toggle="tab" href="#' . $tabId . '" role="tab" aria-controls="' . $tabId . '" aria-selected="' . $ariaSelected . '">' . $days[$i] . '</a>
          </li>';
}
echo '</ul>
    </div>
</div>';

// Hiển thị nội dung cho từng ngày trong tuần
echo '<div class="tab-content bg-light">';
for ($i = 0; $i < count($days); $i++) {
    $tabId = strtolower(str_replace(' ', '-', $days[$i])); // Tạo id từ tên ngày

    echo '<div class="tab-pane fade ' . (($i === 0) ? 'show active' : '') . '" id="' . $tabId . '" role="tabpanel" aria-labelledby="' . $tabId . '-tab">';

    // Phân trang cho danh sách lịch tập của mỗi ngày
    $sql = "SELECT COUNT(*) AS total FROM tb_lichtap WHERE NgayTap = '" . $days[$i] . "'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $totalRecords = $row['total'];

    $limit = 4; // Số lượng bản ghi trên mỗi trang
    $totalPages = ceil($totalRecords / $limit);

    if (!isset($_GET['page_' . $tabId])) {
        $page = 1;
    } else {
        $page = $_GET['page_' . $tabId];
    }

    $start = ($page - 1) * $limit;

    $sql = "SELECT * FROM tb_lichtap WHERE NgayTap = '" . $days[$i] . "' LIMIT $start, $limit";
    $result = mysqli_query($conn, $sql);
   
    // Hiển thị danh sách lịch tập cho từng trang
    echo '<div class="row">';
    while ($row = mysqli_fetch_array($result)) {
        
             echo   '<div class="col-lg-6">
                    <div class="class-item d-flex align-items-center">
                        <a href="single.html" class="class-item-thumbnail">
                            <img src="../images/img_1.jpg" alt="Free website template by Free-Template.co">
                        </a>
                        <div class="class-item-text">
                            <span>' . $row["BatDau"] . '-' . $row["KetThuc"] . '</span>
                            <h2><a href="">' . $row["Ten"] . '</a></h2>
                            <span>Phòng tập: </span>
                            <span>' . $row["phongtap"] . '</span>
                        </div>
                    </div>
            </div>';
    }
   echo '</div>';

    // Hiển thị link phân trang
    echo '<ul class="pagination">';
for ($j = 1; $j <= $totalPages; $j++) {
    echo '<li class="page-item"><a class="page-link" href="?act=schedule&page_' . $tabId . '=' . $j . '">' . $j . '</a></li>';
}
echo '</ul>';

    echo '</div>'; // Đóng div của tab-pane
}
echo '</div>'; // Đóng div của tab-content
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