<?php
function themdmloptap($tenloptap, $gia, $thoigian, $idpt){
    $conn = connectdb();
    $sql = "INSERT INTO tb_danhmucloptap (tenloptap, gia, thoigian, idpt) VALUES ('$tenloptap', '$gia', '$thoigian', '$idpt')";
    $conn->exec($sql);
}

function updateloptap($id, $tenloptap, $gia, $thoigian, $idpt){
    $conn = connectdb();
    $sql = "UPDATE tb_danhmucloptap SET tenloptap = '$tenloptap', gia = '$gia', thoigian = '$thoigian', idpt = '$idpt' WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function getonedmloptap($id){
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tb_danhmucloptap WHERE id = $id");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $ketqua = $stmt->fetchAll();
    return $ketqua;
}

function deldmloptap($id){
    $conn = connectdb();
    $sql = "DELETE FROM tb_danhmucloptap WHERE id = $id";
    $conn->exec($sql);
}

// function getall_danhmucloptap(){
//     $conn = connectdb();
//     $stmt = $conn->prepare("SELECT * FROM tb_danhmucloptap");
//     $stmt->execute();
//     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//     $ketqua = $stmt->fetchAll();
//     return $ketqua;
    
// } 
function getall_danhmucloptap($idloptap=0,$kyw=""){
    $conn=connectdb();
    $sql="SELECT * FROM tb_danhmucloptap WHERE 1";
  
   
    if($idloptap>0) $sql.=" AND id=".$idloptap;
     if($kyw!="") $sql.=" AND tenloptap like '%".$kyw."%'";
     $sql.=" order by id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $ketqua=$stmt->fetchAll();
    return $ketqua;
}

function showprodmloptap($ds){
    $i = 1;
    foreach ($ds as $loptap){
        $tenptArray = getonenamedmpt($loptap['idpt']);
        echo '
        <tr>
            <td>'.$i.'</td>
            <td>'.$loptap['tenloptap'].'</td>
            <td>'.$loptap['gia'].'</td>
            <td>'.$loptap['thoigian'].'</td>
            <td>'.$tenptArray.'</td>
            <td>
                    <a class="form-control text-bg-warning text-decoration-none text-center" href="controllers.php?act=updateloptap&id='.$loptap['id'].'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                </td>
            <td><a class="p-2 form-control text-bg-danger text-center" href="controllers.php?act=deldmloptap&id='.$loptap['id'].'"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
        </tr>';
        $i++;
    }
}
?>
