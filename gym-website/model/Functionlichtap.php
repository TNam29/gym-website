<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
function themlichtap($ten ,$batdau,$ketthuc,$ngaytap, $phongtap){
    $conn=connectdb();
    $sql="INSERT INTO tb_lichtap(Ten, BatDau, KetThuc, NgayTap , phongtap)  VALUES ('".$ten."','".$batdau."','".$ketthuc."','".$ngaytap."','".$phongtap."')";
    $conn->exec($sql);
}

function updatelichtap($id, $ten ,$batdau,$ketthuc,$ngaytap, $phongtap){
    $conn=connectdb();
   
    $sql = "UPDATE tb_lichtap SET Ten='".$ten."', BatDau='".$batdau."',KetThuc='".$ketthuc."', NgayTap='".$ngaytap."', phongtap='".$phongtap."' WHERE id=".$id;
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function getall_lichtap(){
    $conn=connectdb();
    $sql="SELECT * FROM tb_lichtap";

     $sql.=" order by id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $ketqua=$stmt->fetchAll();
    return $ketqua;
}

function getone_lichtap($id){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM tb_lichtap WHERE id=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $ketqua=$stmt->fetchAll();
    return $ketqua;
}


function showpro9($dslt) {
    $i = 1; // Initialize $i
    foreach ($dslt as $kh) {
        // ... (rest of your code)
        echo '<tr>
                <td>'.$kh['Ten'].'</td>
                <td>'.$kh['BatDau'].'</td>
                <td>'.$kh['KetThuc'].'</td>
                <td>'.$kh['NgayTap'].'</td>
                <td>'.$kh['phongtap'].'</td>
                <td></td>
                <td>
                    <a class="form-control text-bg-warning text-decoration-none text-center" href="controllers.php?act=updatelichtap&id='.$kh['id'].'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                </td>
                <td>
                    <a class="p-2 form-control text-bg-danger text-center" href="controllers.php?act=dellichtap&id='.$kh['id'].'"><i class="fa fa-trash" aria-hidden="true"></i></a>
                </td>
              </tr>';
        $i++; // Increment $i
    }
}

        
?>