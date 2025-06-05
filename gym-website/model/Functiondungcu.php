
<?php
function themdc($iddmdc,$image,$tendc,$gia,$tinhtrang,$soluong){
    $conn=connectdb();
    $sql="INSERT INTO tb_dungcu(iddmdc,image,tendc,gia,tinhtrang,soluong)  VALUES ('".$iddmdc."','".$image."','".$tendc."','".$gia."','".$tinhtrang."','".$soluong."')";
    $conn->exec($sql);
}
function updatedc($id,$image,$tendc,$gia,$tinhtrang,$soluong,$iddmdc){
    $conn=connectdb();
    if($image==""){
        $sql = "UPDATE tb_dungcu SET tendc='".$tendc."', gia='".$gia."',tinhtrang='".$tinhtrang."', soluong='".$soluong."', iddmdc='".$iddmdc."' WHERE id=".$id;
    }else{
        $sql = "UPDATE tb_dungcu SET tendc='".$tendc."', image='".$image."', gia='".$gia."',tinhtrang='".$tinhtrang."',soluong='".$soluong."', iddmdc='".$iddmdc."' WHERE id=".$id;
    }
   
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function getonedc($id){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM tb_dungcu WHERE id=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $ketqua =$stmt->fetchAll();
    return $ketqua;
}
function deldc($id){
    $conn=connectdb();
    $sql="DELETE FROM tb_dungcu WHERE id=".$id;
    $conn->exec($sql);
}
function getall_dungcu($iddmdc=0,$kyw=""){
    $conn=connectdb();
    $sql="SELECT * FROM tb_dungcu WHERE 1";
    if($iddmdc>0) $sql.=" AND iddmdc=".$iddmdc;
     if($kyw!="") $sql.=" AND tendc like '%".$kyw."%'";
     $sql.=" order by id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $ketqua=$stmt->fetchAll();
    return $ketqua;
}
function showpro3($ds){
    foreach ($ds as $dc){
        echo '
            <div class="row">
              <div style="padding:25px" class="mt-3">
                <div class="card">
                <img style="width:100%;height: 280px;" src="'.$dc['image'].'" >
                  <div class="container">
                    <h2>'.$dc['tendc'].'</h2>
                    <p class="title">Giá mua: '.$dc['gia'].'vnđ</p>
                    <p>Thương hiệu sản xuất: liên doanh giữa Mỹ và  Trung Quốc</p>
                    <p>Tình trạng: '.$dc['tinhtrang'].'</p>
                    <p>Số lượng: '.$dc['soluong'].'</p>
                    <div class="d-flex justify-content-around text-bg-dark p-2 mb-2">
                    <div><a style="text-decoration:none;font-weight:bold"  href= "controllers.php?act=updatedc&id='.$dc['id'].'">Sửa</a></div>
                    <div><a style="text-decoration:none;font-weight:bold"  href = "controllers.php?act=deldc&id='.$dc['id'].'">Xóa</a></div>
                     
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
        ';
      }
}
?>
