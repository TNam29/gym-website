<!DOCTYPE html>
<html lang="vi" class="h-100">


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

    <link rel="stylesheet" href="../css/app.css">

    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">



</head>

<body>
    <!-- header -->
    <?php
    // session_start();
    if (isset($_POST['btnThanhToan'])) {
        header("location: ?act=checkout");
        echo var_dump($_SESSION['id']);
    }
    include("header.php");
    ?>
    <!-- end header -->

    <main role="main" class="mt-5">
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <div class="container mt-4">
            <div id="thongbao" class="alert alert-danger d-none face" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <h1 class="text-center">Giỏ hàng</h1>
            <div class="row">
                <div class="col col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Chọn</th>
                                <!-- <th>Ảnh</th> -->
                                <th>Tên lớp tập</th>
                                <th>Giá</th>
                                <th>Thời gian</th>
                                <!-- <th>hành động</th> -->
                            </tr>
                        </thead>

                        <?php



                        $ok = 1;
                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $k => $v) {
                                if (isset($k)) {
                                    $ok = 2;
                                }
                            }
                        }
                        if ($ok == 1) {
                            // echo "khong co sp";

                        } else {

                            // echo "<form action='cart.php' method='POST'>";
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $item[] = $key;
                            }
                            $str = implode(",", $item);
                            $conn = mysqli_connect("localhost", "root", "", "databasegym",3307);

                            // Truy vấn
                            $sql = "SELECT * FROM tb_danhmucloptap WHERE id in ($str)";

                            $kq = mysqli_query($conn, $sql);
                            if (!$kq) {
                                die("Lỗi SQL: " . mysqli_error($conn));
                            }
                            while ($row = mysqlI_fetch_array($kq)) {



                                ?>
                                <!-- ... mã HTML của bạn ... -->
                                <tbody id="datarow">
                                    <?php
                                    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                                        foreach ($_SESSION['cart'] as $key => $value) {
                                            $item[] = $key;
                                        }
                                        $str = implode(",", $item);
                                        $conn = mysqli_connect("localhost", "root", "", "databasegym",3307);

                                        // Truy vấn
                                        $sql = "SELECT * FROM tb_danhmucloptap WHERE id in ($str)";

                                        $kq = mysqli_query($conn, $sql);
                                        if (!$kq) {
                                            die("Lỗi SQL: " . mysqli_error($conn));
                                        }
                                        while ($row = mysqli_fetch_array($kq)) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <form id="myform" action="" method="POST">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" name="option[]"
                                                                value="<?php echo $row['id']; ?>">
                                                        </div>

                                                </td>
                                                <!-- <td>
                                                    <img src="/images/<?php echo $row['images'] ?>" class="hinhdaidien">
                                                </td> -->
                                                <td>
                                                    <?php echo $row['tenloptap'] ?>
                                                </td>
                                                <td class="text-right">
                                                    <?php echo number_format($row['gia'], 0) . "VND" ?>
                                                </td>
                                                <td class="text-right">
                                                    <?php echo $row['thoigian']; ?>
                                                </td>
                                                <td>
                                                    <a id="delete_1" data-sp-ma="2" class="btn btn-danger btn-delete-sanpham"
                                                        href='?act=delcart&productid=<?php echo $row['id'] ?>'>
                                                        <i class="fa fa-trash" aria-hidden="true"></i> Xóa
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        echo "<tr><td colspan='6'>Không có sản phẩm trong giỏ hàng.</td></tr>";
                                    }
                            }
                        }
                        ?>
                        </tbody>
                    </table>
                    <?php
                    if (isset($_POST['option'])) {
                        $_SESSION['id'] = $_POST['option'];
                        // echo var_dump($_SESSION['id']);
                    } else {
                        $_SESSION['id'] = NULL;
                    }

                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        if (isset($_POST['option'])) {
                            $selectedOptions = $_POST['option'];
                            // Xử lý các giá trị đã chọn ở đây
                            // Ví dụ: in ra các giá trị đã chọn
                            foreach ($selectedOptions as $selectedOption) {
                                echo $selectedOption . "<br>";
                            }
                        } else {
                            echo 'Không có giá trị được gửi đi';
                        }
                    }
                    ?>



                    <a href="?act=home" class="btn btn-warning btn-md"><i class="fa fa-arrow-left"
                            aria-hidden="true"></i>&nbsp;Quay
                        về trang chủ</a>


                    <input type="submit" class="btn btn-primary btn-md" name="btnThanhToan" value="Thanh toán">
                    <!-- <a href="?act=checkout" class="btn btn-primary btn-md">Thanh toán</a> -->
                    </form>

                </div>
            </div>

            <!-- End block content -->
    </main>

    <!-- footer -->
    <footer class="footer mt-auto py-3">
        <div class="container">
            <span>Bản quyền © bởi <a href="https://nentang.vn">Nền Tảng</a> -
                <script>document.write(new Date().getFullYear());</script>.
            </span>
            <span class="text-muted">Hành trang tới Tương lai</span>

        </div>
    </footer>

    <?php
    include('footer.php')
        ?>
    <!-- end footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popperjs/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Custom script - Các file js do mình tự viết -->
    <script src="assets/js/app.js"></script>

</body>

</html>