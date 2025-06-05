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

<body>
    <?php
    session_start();
    ob_start();
    include "../view/header.php";
    // include_once "../view/home.php";
    // if (isset($_SESSION['role']) && ($_SESSION['role'] == 1)) {
    include "../../model/db.php";
    include "../../model/user.php";
    include "../../model/Functionnhanvien.php";
    // include "../../model/Functiongoitap.php";

    include "../../model/Functiondanhmucdungcu.php";
    include "../../model/Functionloptap.php";
    include "../../model/Functiondungcu.php";
    include "../../model/FunctionPT.php";
    // $dsdmgt = getall_danhmucgoitap();
    
    $dsdmpt = getall_dmpt();
    $dsdmdc = getall_danhmucdungcu();
   


    include "../view/header.php";
    if (isset($_GET['act'])) {
        switch ($_GET['act']) {
            case 'trangchu':
                include "../view/trangchu.php";
                break;

            case 'BMI':
                include "../view/BMI.php";
                break;
            case 'schedule':
                include "../view/schedule.php";
                break;
            case 'class':
                include "../view/class.php";
                break;
            case 'them':

                include "../view/them.php";
                break;
            case 'Chitietgoitap':
                $productId = $_GET['idlt'];
                include "../view/Chitietgoitap.php";
                break;

            case 'cart':

                include "../view/cart.php";
                break;
            case 'lichsu':

                $dsgt = getall_goitap();
                include "../view/lichsu.php";
                break;
            case 'contact':
        
                include "../view/contact.php";
                break;
            case 'themcmt':
    
                include "../view/thembinhluan.php";
                break;
            case 'delcart':
                $id = $_GET['productid'];
                if ($id == 0) {
                    unset($_SESSION['cart']);
                } else {
                    unset($_SESSION['cart'][$id]);
                }
                include "../view/cart.php";
                
                break;
            case 'checkout':
                include "../view/checkout.php";
                break;
            // -------------------------------
            case 'nhanvien':
                $dsnv = getall_nhanvien();
                $ketqua = getall_nhanvien();
                include "../view/nhanvien.php";
                break;
            case 'nhanvien_add':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $image = $_FILES['image']['name'];
                    $tennv = $_POST['tennv'];
                    $sodt = $_POST['sodt'];
                    $email = $_POST['email'];
                    $diachi = $_POST['diachi'];
                    $vaitro = $_POST['vaitro'];
                    $target_dir = "uploaded/";
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);
                    $image = $target_file;
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                    if (
                        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                        && $imageFileType != "gif"
                    ) {
                        // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        $uploadOk = 0;
                    }
                    if ($uploadOk == 1) {
                        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                        themnv($tennv, $image, $sodt, $email, $diachi, $vaitro);
                    }
                }
                $dsnv = getall_nhanvien();
                $ketqua = getall_nhanvien();
                include "../view/nhanvien.php";
                break;
            case 'delnv':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    delnv($id);
                }
                $dsnv = getall_nhanvien();
                include "../view/nhanvien.php";
                break;
            case 'updatenv':


                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    // $id=$_GET['id'];
                    $nvct = getonenv($_GET['id']);
                }
                $dsnv = getall_nhanvien();
                // $ketqua = getall_dungcu();
                include "../view/updatenv.php";
                break;
            case 'nhanvien_update':

                if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                    $id = $_POST['id'];
                    $tennv = $_POST['tennv'];
                    $image = $_FILES['image']['name'];
                    // $image = "ALL";
                    $sodt = $_POST['sodt'];
                    $email = $_POST['email'];
                    $diachi = $_POST['diachi'];
                    $vaitro = $_POST['vaitro'];
                    if ($_FILES['image']['name'] != "") {

                        $target_dir = "uploaded/";
                        $target_file = $target_dir . basename($_FILES["image"]["name"]);
                        $image = $target_file;
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                        if (
                            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                            && $imageFileType != "gif"
                        ) {
                            // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                            $uploadOk = 0;
                        }
                        if ($uploadOk == 1) {

                            move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                            // themsp($iddm,$image,$tensp,$gia);
                        }
                    } else {
                        $image = "";
                    }
                    updatenv($id, $tennv, $image, $sodt, $email, $diachi, $vaitro);
                }
                $dsnv = getall_nhanvien();
                // $ketqua = getall_nhanvien();
                include "../view/nhanvien.php";

                break;

            //------------------------------------------------
            case 'trainer':
                $dsdmpt = getall_dmpt();
                include "../view/trainer.php";
                break;
            case 'pt_add':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $image = $_FILES['image']['name'];
                    $tenpt = $_POST['tenpt'];
                    $sodt = $_POST['sodt'];
                    $email = $_POST['email'];
                    $vaitro = $_POST['vaitro'];
                    $target_dir = "uploaded/";
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);
                    $image = $target_file;
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                    if (
                        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                        && $imageFileType != "gif"
                    ) {
                        // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        $uploadOk = 0;
                    }
                    if ($uploadOk == 1) {
                        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                        themdmpt($tenpt, $image, $sodt, $email, $vaitro);
                    }
                }
                $dsdmpt = getall_dmpt();
                $ketqua = getall_dmpt();
                include "../view/pt.php";
                break;
            case 'updatept':


                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    // $id=$_GET['id'];
                    $ptct = getonedmpt($_GET['id']);
                }
                $dspt = getall_dmpt();
                // $ketqua = getall_dungcu();
                include "../view/updatept.php";
                break;
            case 'pt_update':

                if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                    $id = $_POST['id'];
                    $tenpt = $_POST['tenpt'];
                    $image = $_FILES['image']['name'];
                    $sodt = $_POST['sodt'];
                    $email = $_POST['email'];

                    $vaitro = $_POST['vaitro'];
                    if ($_FILES['image']['name'] != "") {

                        $target_dir = "uploaded/";
                        $target_file = $target_dir . basename($_FILES["image"]["name"]);
                        $image = $target_file;
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                        if (
                            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                            && $imageFileType != "gif"
                        ) {
                            // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                            $uploadOk = 0;
                        }
                        if ($uploadOk == 1) {

                            move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                            // themsp($iddm,$image,$tensp,$gia);
                        }
                    } else {
                        $image = "";
                    }
                    updatedmpt($id, $tenpt, $image, $sodt, $email, $vaitro);
                }
                $dspt = getall_dmpt();

                include "../view/pt.php";

                break;
            case 'deldmpt':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    deldmpt($id);
                }
                $ketqua = getall_dmpt();
                include "../view/pt.php";
                break;

            case 'thongke':
                $id = "";
                //$ketqua = getall_sanpham();
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                }
                $dsgt = getall_goitap($id, "");
                include "../view/thongke.php";
                break;
            case 'khachhang':
                $id = "";

                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                }
                $kyw = "";
                if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                    $kyw = $_POST['kyw'];
                } else {
                    $kyw = "";
                }

                $ketqua = getall_khachhang();
                $dskh = getall_khachhang($id, $kyw);

                include "../view/khachhang.php";

                break;
            case 'khachhang_add':
                if (isset($_POST['themmoikh']) && ($_POST['themmoikh'])) {

                    $idpt = $_POST['idpt'];
                    $image = $_FILES['image']['name'];
                    $tenkh = $_POST['tenkh'];
                    $sodt = $_POST['sodt'];
                    $email = $_POST['email'];
                    $diachi = $_POST['diachi'];
                    $target_dir = "uploaded/";
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);
                    $image = $target_file;
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                    if (
                        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                        && $imageFileType != "gif"
                    ) {
                        // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        $uploadOk = 0;
                    }
                    if ($uploadOk == 1) {

                        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                        themkh($idpt, $image, $sodt, $email, $diachi, $tenkh);
                    }
                }
                $dskh = getall_khachhang();
                $ketqua = getall_khachhang();
                include "../view/khachhang.php";
                break;
            case 'delkh':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    delkh($id);
                }
                $dskh = getall_khachhang();
                $ketqua = getall_khachhang();
                include "../view/khachhang.php";
                break;
            case 'updatekh':


                $dsdmpt = getall_dmpt();
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    // $id=$_GET['id'];
                    $khct = getonekh($_GET['id']);
                }
                $dskh = getall_khachhang();
                // $ketqua = getall_dungcu();
                include "../view/updatekh.php";
                break;
            case 'khachhang_update':

                $dsdmpt = getall_dmpt();
                if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {

                    $idpt = $_POST['idpt'];
                    $tenkh = $_POST['tenkh'];
                    $image = $_FILES['image']['name'];
                    $sodt = $_POST['sodt'];


                    $email = $_POST['email'];
                    $diachi = $_POST['diachi'];
                    $id = $_POST['id'];

                    if ($_FILES['image']['name'] != "") {

                        $target_dir = "uploaded/";
                        $target_file = $target_dir . basename($_FILES["image"]["name"]);
                        $image = $target_file;
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                        if (
                            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                            && $imageFileType != "gif"
                        ) {
                            // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                            $uploadOk = 0;
                        }
                        if ($uploadOk == 1) {

                            move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                            // themsp($iddm,$image,$tensp,$gia);
                        }
                    } else {
                        $image = "";
                    }
                    updatekh($id, $tenkh, $image, $sodt, $email, $diachi, $idpt);
                }
                $dskh = getall_khachhang();
                $ketqua = getall_khachhang();
                include "../view/khachhang.php";
                break;
            //-------------------------------------------------
            case 'danhmucdungcu':
                $ketqua = getall_danhmucdungcu();
                include "../view/danhmucdungcu.php";
                break;
            case 'dungcu':
                $id = "";
                //$ketqua = getall_sanpham();
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                }
                $kyw = "";
                if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                    $kyw = $_POST['kyw'];
                } else {
                    $kyw = "";
                }
                $dsdc = getall_dungcu($id, $kyw);
                include "../view/dungcu.php";
                break;
            case 'dungcu_add':

                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $iddmdc = $_POST['iddmdc'];
                    $image = $_FILES['image']['name'];
                    $tendc = $_POST['tendc'];
                    $gia = $_POST['gia'];
                    $tinhtrang = $_POST['tinhtrang'];
                    $soluong = $_POST['soluong'];
                    // if($_FILES['image']['tmp_name']!="") $image_tmp = $_FILES['image']['tmp_name']; else $image="";
    
                    $target_dir = "uploaded/";
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);
                    $image = $target_file;
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                    if (
                        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                        && $imageFileType != "gif"
                    ) {
                        // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        $uploadOk = 0;
                    }
                    if ($uploadOk == 1) {

                        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                        themdc($iddmdc, $image, $tendc, $gia, $tinhtrang, $soluong);
                    }
                }
                $dsdc = getall_dungcu();
                $ketqua = getall_dungcu();
                include "../view/dungcu.php";
                break;
            case 'updatedc':
                $dsdmdc = getall_danhmucdungcu();
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {

                    $dcct = getonedc($_GET['id']);
                }
                $dsdc = getall_dungcu();
                // $ketqua = getall_dungcu();
                include "../view/updatedc.php";
                break;
            case 'dungcu_update':
                $dsdmdc = getall_danhmucdungcu();
                if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                    $iddmdc = $_POST['iddmdc'];
                    $image = $_FILES['image']['name'];
                    $tendc = $_POST['tendc'];
                    $gia = $_POST['gia'];
                    $tinhtrang = $_POST['tinhtrang'];
                    $soluong = $_POST['soluong'];
                    $id = $_POST['id'];

                    if ($_FILES['image']['name'] != "") {

                        $target_dir = "uploaded/";
                        $target_file = $target_dir . basename($_FILES["image"]["name"]);
                        $image = $target_file;
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                        if (
                            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                            && $imageFileType != "gif"
                        ) {
                            // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                            $uploadOk = 0;
                        }
                        if ($uploadOk == 1) {

                            move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                            // themsp($iddm,$image,$tensp,$gia);
                        }
                    } else {
                        $image = "";
                    }
                    updatedc($id, $image, $tendc, $gia, $tinhtrang, $soluong, $iddmdc);
                }
                $dsdc = getall_dungcu();
                $ketqua = getall_dungcu();
                include "../view/dungcu.php";
                break;
            case 'deldc':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    deldc($id);
                }
                $dsdc = getall_dungcu();
                $ketqua = getall_dungcu();
                include "../view/dungcu.php";
                break;
            // ------------------------------------------------
            case 'goitap':

                $dsgt = getall_goitap();
                include "../view/goitap.php";
                break;
            case 'goitap1':

                $id1 = "";


                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $id1 = $_GET['id'];

                }



                $dsgt = getall_goitap1($id1, "");
                include "../view/goitap.php";
                break;
            case 'goitap2':

                $id2 = "";


                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $id2 = $_GET['id'];

                }



                $dsgt = getall_goitap2($id2, "");
                include "../view/goitap.php";
                break;
            case 'goitap_add':

                if (isset($_POST['themmoigt']) && ($_POST['themmoigt'])) {
                    $idkh = $_POST['idkh'];
                    $iddmgoitap = $_POST['iddmgoitap'];
                    $tengt = $_POST['tengt'];
                    $gia = $_POST['gia'];

                    $soluong = $_POST['soluong'];
                    $ngaybatdau = $_POST['ngaybatdau'];
                    $ngayhethan = $_POST['ngayhethan'];

                    themgt($idkh, $iddmgoitap, $tengt, $soluong, $gia, $ngaybatdau, $ngayhethan);
                }
                $dsgt = getall_goitap();
                $ketqua = getall_goitap();
                include "../view/goitap.php";
                break;
            case 'updategt':
                // $dsdmgt = getall_danhmucgoitap();
                $dskh = getall_khachhang();
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {

                    $gtct = getonegt($_GET['id']);
                }
                $dsgt = getall_goitap();
                // $ketqua = getall_dungcu();
                include "../view/updategt.php";
                break;
            // case 'dungcu_update':
            //     $dsdmdc = getall_danhmucdungcu();
            //     if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
            //         $iddmdc = $_POST['iddmdc'];
            //         $image = $_FILES['image']['name'];
            //         $tendc = $_POST['tendc'];
            //         $gia = $_POST['gia'];
            //         $tinhtrang = $_POST['tinhtrang'];
            //         $soluong = $_POST['soluong'];
            //         $id = $_POST['id'];

            //         if ($_FILES['image']['name'] != "") {

            //             $target_dir = "uploaded/";
            //             $target_file = $target_dir . basename($_FILES["image"]["name"]);
            //             $image = $target_file;
            //             $uploadOk = 1;
            //             $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            //             if (
            //                 $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            //                 && $imageFileType != "gif"
            //             ) {
            //                 // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            //                 $uploadOk = 0;
            //             }
            //             if ($uploadOk == 1) {

            //                 move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
            //                 // themsp($iddm,$image,$tensp,$gia);
            //             }
            //         } else {
            //             $image = "";
            //         }
            //         updatedc($id, $image, $tendc, $gia, $tinhtrang, $soluong, $iddmdc);
            //     }
            //     $dsdc = getall_dungcu();
            //     $ketqua = getall_dungcu();
            //     include "../view/dungcu.php";
            //     break;
            case 'delgt':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    delgt($id);
                }
                $dsgt = getall_goitap();
                $ketqua = getall_goitap();
                include "../view/goitap.php";
                break;
            case 'user':

                include "../view/updateuser.php";
                break;
            case 'user_update':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $ketqua = getoneuser($_GET['id']);
                    include "../view/updateuser.php";
                }
                if (isset($_POST['id'])) {
                    $id = $_POST['id'];
                    $user = $_POST['user'];

                    $pass = $_POST['pass'];


                    updatetaikhoan($id, $user, $pass);
                    include "../view/updateuser.php";
                }




                break;

            //------------------------------------------------
    

            case 'logout':
                if (isset($_SESSION['role'])){
                    unset($_SESSION['role']);
                header('location: ../../admin/');
                }
                break;
            default:
                include_once "../view/home.php";
                break;
        }
    } else {
        include_once "../view/home.php";
    }

    include "../view/footer.php";

    ?>


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