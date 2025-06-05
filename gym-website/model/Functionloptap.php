<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
function themloptap($idkh, $tenloptap, $gia, $soluong, $thoigian, $tenkh, $diachi, $sdt, $email, $dangki, $thoihan)
{
    $conn = connectdb();
    $sql = "INSERT INTO loptap(idkh, tenloptap, gia, soluong, thoigian, tenkh, diachi, sdt, email, dangki, thoihan)  VALUES ('" . $idkh . "','" . $tenloptap . "','" . $gia . "','" . $soluong . "','" . $thoigian . "','" . $tenkh . "','" . $diachi . "','" . $sdt . "','" . $email . "','" . $dangki. "','" . $thoihan. "')";
    $conn->exec($sql);
}
function updategt($id, $tenloptap, $gia, $soluong, $thoigian, $tenkh, $diachi, $sdt, $email)
{
    $conn = connectdb();

    // Use placeholders in the SQL query
    $sql = "UPDATE loptap SET tenloptap=?, gia=?, soluong=?, thoigian=?, tenkh=?, diachi=?, sdt=?, email=? WHERE id=?";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bindParam(1, $tenloptap);
    $stmt->bindParam(2, $gia);
    $stmt->bindParam(3, $soluong);
    $stmt->bindParam(4, $thoigian);
    $stmt->bindParam(5, $tenkh);
    $stmt->bindParam(6, $diachi);
    $stmt->bindParam(7, $sdt);
    $stmt->bindParam(8, $email);
    $stmt->bindParam(9, $id);

    // Execute the statement
    $stmt->execute();
}


function updateState($id)
{
    $conn = connectdb();
    $sql = "UPDATE loptap SET state = '1' WHERE id=" . $id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function getmail($id)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT email FROM loptap WHERE id = :id"); 
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $email = $stmt->fetchColumn();
    return $email;
}

function getonegt($id)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM loptap WHERE id=" . $id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $ketqua = $stmt->fetchAll();
    return $ketqua;
}
function delgt($id)
{
    $conn = connectdb();
    $sql = "DELETE FROM loptap WHERE id=" . $id;
    $conn->exec($sql);
}
function getall_goitap($idkh = 0, $iddmgoitap = 0, $kyw = "")
{
    $conn = connectdb();
    $sql = "SELECT * FROM loptap";

    if ($idkh > 0)
        $sql .= " AND idkh=" . $idkh;
    if ($iddmgoitap > 0)
        $sql .= " AND iddmgoitap=" . $iddmgoitap;
    if ($kyw != "")
        $sql .= " AND tenloptap like '%" . $kyw . "%'";
    $sql .= " order by id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $ketqua = $stmt->fetchAll();
    return $ketqua;
}

function getall_goitapState($idkh = 0, $iddmgoitap = 0, $kyw = "")
{
    $conn = connectdb();
    $sql = "SELECT * FROM loptap WHERE state = '1' ";

    if ($idkh > 0)
        $sql .= " AND idkh=" . $idkh;
    if ($iddmgoitap > 0)
        $sql .= " AND iddmgoitap=" . $iddmgoitap;
    if ($kyw != "")
        $sql .= " AND tenloptap like '%" . $kyw . "%'";
    $sql .= " order by id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $ketqua = $stmt->fetchAll();
    return $ketqua;
}
function getall_goitap1($idkh = 0, $kyw = "")
{
    $conn = connectdb();
    $sql = "SELECT * FROM loptap WHERE 1";

    if ($idkh > 0)
        $sql .= " AND idkh=" . $idkh;

    if ($kyw != "")
        $sql .= " AND tengt like '%" . $kyw . "%'";
    $sql .= " order by id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $ketqua = $stmt->fetchAll();
    return $ketqua;
}
function getall_goitap2($iddmgoitap = 0, $kyw = "")
{
    $conn = connectdb();
    $sql = "SELECT * FROM loptap WHERE 1";
    if ($iddmgoitap > 0)
        $sql .= " AND iddmgoitap=" . $iddmgoitap;


    if ($kyw != "")
        $sql .= " AND tengt like '%" . $kyw . "%'";
    $sql .= " order by id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $ketqua = $stmt->fetchAll();
    return $ketqua;
}

function ngayconlai($dangki, $thoigian){
    $dangki = strtotime($dangki);
        
        $ngayhomnay = strtotime(date("Y-m-d"));
        $ngayconlai = ($dangki + ($thoigian * 86400)) - $ngayhomnay;

        // Chuyển đổi thời gian thành ngày và hiển thị kết quả
        $ngayconlai = round($ngayconlai / 86400);
    return $ngayconlai;
}
function showpro6($ds)
{
    $i = 1;
    foreach ($ds as $gt) {
        $state = "Duyệt thanh toán";
        $color = "danger";
        if ($gt['state'] != 0) {
            $state = "Đã thanh toán";
            $color = "success";
        }
        echo '<input type="hidden" name="id" value="' . $gt['id'] . '">';

        echo '
        <tr>
        
        <td>' . $i . '</td>
        <td>' . $gt['tenloptap'] . '</td>
        <td>' . $gt['gia'] . '</td>
        <td>' . $gt['soluong'] . '</td>
        <td>' . $gt['thoigian'] . '</td>
        <td>' . $gt['tenkh'] . '</td>
        <td>' . $gt['diachi'] . '</td>
        <td>' . $gt['sdt'] . '</td>
        <td>' . $gt['email'] . '</td>
        <td>' . $gt['dangki'] . '</td>
        <td>' . $gt['thoihan'] . '</td>
        
        <td>' . ngayconlai($gt['dangki'],$gt['thoigian'] ). ' ngày</td>
        <td>
            <a class=" form-control text-bg-warning text-decoration-none text-center" href = "controllers.php?act=update_goitap&id=' .$gt['id'] .'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
        </td>
        <td><a class="p-2 form-control text-bg-danger text-center" href = "controllers.php?act=delgt&id=' . $gt['id'] . '"><i class="fa fa-trash" aria-hidden="true"></i></a></td>  
        <td><a class="p-2 form-control text-bg-' . $color . ' text-center" href = "controllers.php?act=updatestate&id=' . $gt['id'] . '">' . $state . '</a></td>
        </tr>';
        $i++;
    }
}


function showpro4($ds)
{
    $i = 1;
    $tong = 0;
    foreach ($ds as $gt) {
        $tt = $gt['gia'];
        $tong += $tt;
        echo '
                        <tr>
                        
                        <td>' . $i . '</td>
                        <td>' . $gt['tenloptap'] . '</td>
        <td>' . $gt['gia'] . '</td>
        <td>' . $gt['soluong'] . '</td>
        <td>' . $gt['thoigian'] . '</td>
        <td>' . $gt['tenkh'] . '</td>
        <td>' . $gt['diachi'] . '</td>
        <td>' . $gt['sdt'] . '</td>
        <td>' . $gt['email'] . '</td>
        <td>' . $gt['dangki'] . '</td>
        <td>' . $gt['thoihan'] . '</td>
        
    
     
         
         
        <td><a class="p-2 form-control text-bg-danger text-center" href = "controllers.php?act=delgt&id=' . $gt['id'] . '"><i class="fa fa-trash" aria-hidden="true"></i></a></td>  

        <td><a class="p-2 form-control text-bg-info text-center" href = "controllers.php?act=thongbaoMail&id=' . $gt['id'] . '">Thông báo mail</a></td>  
                        </tr>';
                        
                        
        $i++;
    }
    echo '<tr><td colspan="7" ></td><td class="text-bg-warning">Tổng tiền thu được: </td><td class="text-bg-warning">' . $tong . ' vnđ</td></tr>';
}

function showprolichsu($idkh, $ds)
{
    $i = 1;
    foreach ($ds as $gt) {
        
        if ($gt['state'] != 0 && $idkh == $gt['idkh'] ) {
            
        
        echo '<input type="hidden" name="id" value="' . $gt['id'] . '">';
            
        echo '
        
        <tr>
        
      
        <td>' . $gt['tenloptap'] . '</td>
        <td>' . $gt['gia'] . '</td>
        <td>' . $gt['soluong'] . '</td>
        <td>' . $gt['thoigian'] . '</td>

        <td>' . $gt['diachi'] . '</td>
        <td>' . $gt['sdt'] . '</td>
        <td>' . $gt['email'] . '</td>
        <td>' . $gt['dangki'] . '</td>
        <td>' . $gt['thoihan'] . '</td>
        
        <td>' . ngayconlai($gt['dangki'],$gt['thoigian'] ). ' ngày</td>' ;
        
    }
        
    }
}

?>