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

<div class="site-section" id="schedule-section">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-md-8  section-heading">
        <span class="subheading">Fitness Class</span>
        <h2 class="heading mb-3">Gói tập</h2>
      </div>
    </div>

    <?php

    // session_start();
    //  kết nối
    $conn = mysqli_connect("localhost", "root", "", "databasegym",3307); ?>
    <?php
    $sql = "SELECT * FROM tb_danhmucloptap WHERE id = " . $_GET['idlt'];
    $result = mysqli_query($conn, $sql);

    // Hiển thị gói tập
    echo '<div class="container">';
    echo '<div class="row g-4 justify-content-center">';
    
    while ($row = mysqli_fetch_array($result)) {
        $idpt = $row['idpt'];
        
        $pt_sql = "SELECT tenpt FROM tb_pt WHERE id = $idpt";
        $pt_result = mysqli_query($conn, $pt_sql);
        $pt_row = mysqli_fetch_array($pt_result);
    
        echo '<div class="col-lg-3 col-md-6">';
        echo '<div class="package-item">';
        echo '<div class="overflow-hidden">
                  <img class="img-fluid" src="../images/img_1.jpg" alt="">
              </div>';
        echo '<div class="d-flex border-bottom">
                  <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2">' . $row["thoigian"] . ' ngày</i></small>
                  <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>' . $pt_row["tenpt"] . '</small>
                  <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i> 1 Người</small>
              </div>';
        echo '<div class="text-center p-4">
                  <h3 class="mb-0">' . $row["gia"] . '</h3>
                  <div class="mb-3"></div>
                  <p>' . $row["tenloptap"] . '</p>
                  <div class="d-flex justify-content-center mb-2">
                  <form action="" method="POST">
                  <input type="hidden" id="soluong" name="soluong" value="1">
                  
                  <button type="submit" class="btn btn-success" name="themvaogio">Thêm vào giỏ</button>
              </form>
                  </div>
              </div>';
        echo '</div>'; // Kết thúc package-item
        echo '</div>'; // Kết thúc col-lg-3
    }
    
    echo '</div>'; // Kết thúc row
    echo '</div>'; // Kết thúc container
     


if (isset($_SESSION['soluong'])) {
    $_SESSION['ok'] = 1;
}

if (isset($_POST['soluong'])) {
    $quantity = $_POST['soluong'];

    if ($quantity > 0) {
       

         $productId = $_GET['idlt'];
         $productId = trim($productId);
        // Kiểm tra số lượng còn lại của sản phẩm và kiểm tra giỏ hàng
        // Thêm sản phẩm vào giỏ hàng
        if (isset($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId] += $quantity;
        } else {
            $_SESSION['cart'][$productId] = $quantity;
        }

        echo "Sản phẩm đã được thêm vào giỏ hàng.";
        
     
    } else {
        $ErrSoluong = "Số lượng phải lớn hơn 0";
    }
}
?>
    <div class="site-section" id="schedule-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8  section-heading">
            <span class="subheading">Fitness Schedule</span>
            <h2 class="heading mb-3">Lịch tập</h2>
          </div>
        </div>
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

          $limit = 2; // Số lượng bản ghi trên mỗi trang
          $totalPages = ceil($totalRecords / $limit);

          if (!isset($_GET['page_' . $tabId])) {
            $page = 1;
          } else {
            $page = $_GET['page_' . $tabId];
          }

          $start = ($page - 1) * $limit;

          // $sql = "SELECT * FROM tb_tb_lichtap\ WHERE NgayTap = '" . $days[$i] . "' LIMIT $start, $limit";
          // $sql = "SELECT * FROM tb_tb_lichtap\ WHERE idloptap = " . $_GET['idlt'];
          $sql = "SELECT * FROM tb_lichtap 
        WHERE NgayTap = '" . $days[$i] . "' 
        AND idloptap = " . $_GET['idlt'] . " 
        LIMIT $start, $limit";
          $result = mysqli_query($conn, $sql);

          // Hiển thị danh sách lịch tập cho từng trang
          echo '<div class="row">';
          while ($row = mysqli_fetch_array($result)) {

            echo '<div class="col-lg-6">
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
            echo '<li class="page-item"><a class="page-link" href="?act=Chitietgoitap&idlt=' . $_GET['idlt'] . '&page_' . $tabId . '=' . $j . '">' . $j . '</a></li>';
          }
          echo '</ul>';
          echo '</div>'; // Đóng div của tab-pane
        }
        echo '</div>'; // Đóng div của tab-content
        ?>

      </div>
      <!-- .site-wrap -->
      <!-- Bình luận -->
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Bình luận sản phẩm</h2>
            <input type="hidden" id="idlt" value="<?php echo $_GET['idlt']; ?>">
            <form action="" method="post">
              <div class="form-group">
                <label for="name">Tên</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên của bạn">
              </div>
              <div class="form-group">
                <label for="title">Tiêu đề</label>
                <input type="text" class="form-control" id="title" name="title"
                  placeholder="Nhập tiêu đề của bình luận">
              </div>
              <div class="form-group">
                <label for="content">Nội dung</label>
                <textarea class="form-control" id="comment" name="comment" rows="5"></textarea>
              </div>
              <button type="submit" class="btn btn-primary" id="btnGui">Gửi bình luận</button>
            </form>
          </div>
          <div class="col-md-6">
            <?php
            $results_per_page = 4; // Số lượng kết quả trên mỗi trang
            $sql = "SELECT COUNT(*) AS total FROM binhluan WHERE idlt = " . $_GET['idlt'];
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $total_pages = ceil($row['total'] / $results_per_page); // Tổng số trang
            
            if (!isset($_GET['page'])) {
              $page = 1;
            } else {
              $page = $_GET['page'];
            }

            $this_page_first_result = ($page - 1) * $results_per_page; // Kết quả bắt đầu từ vị trí nào trong truy vấn
            
            $sql = "SELECT * FROM binhluan WHERE idlt = " . $_GET['idlt'] . " LIMIT $this_page_first_result, $results_per_page";
            $kq = mysqli_query($conn, $sql);

            echo '<div id="dsbinhluan">';
            echo ' <h2>Danh sách bình luận</h2>';
            echo '<div class="container">
            <div class="row">';
            while ($row = mysqli_fetch_array($kq)) {
              echo '<div class="col-md-2">
                <img src="https://www.gravatar.com/avatar/?d=mm&f=y&s=50" alt="Ảnh đại diện" class="rounded-circle" width="20px">
                <span><h5 class="list-group-item-heading">' . $row["name"] . '</h5></span>
              </div>
              <div class="col-md-10">
                <h5 class="list-group-item-text">Tiêu đề: ' . $row["title"] . '</h5>
                <p class="list-group-item-text" style="display: block;">' . $row["comment"] . '</p>
                <hr>
              </div>';
            }
            echo '</div></div>';

            // Hiển thị các liên kết đến các trang khác
            echo '<div class="pagination">';
            for ($page = 1; $page <= $total_pages; $page++) {
              echo '<li class="page-item"><a class="page-link" href="?act=Chitietgoitap&idlt=' . $_GET['idlt'] . '&page=' . $page . '">' . $page . '</a></li>';
            }
            echo '</div>';
            ?>
          </div>
        </div>
      </div>
      <script>
  $(document).ready(function () {
    $('#btnGui').click(function (e) {
      e.preventDefault(); // Prevent the default form submission behavior

      var idlt = $('#idlt').val();
      var name = $('#name').val();
      var title = $('#title').val();
      var comment = $('#comment').val();

      $.ajax({
        type: 'POST',
        url: '?act=themcmt', 
        data: {
          idlt: idlt,
          name: name,
          title: title,
          comment: comment
        },
        success: function (data) {
      
          $('#dsbinhluan').load(location.href + ' #dsbinhluan'); 
        

          $('#name').val('');
          $('#title').val('');
          $('#comment').val('');
        },
        
        error: function (xhr, status, error) {
          console.error(error);
          
        }
      });
    });
  });
</script>



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