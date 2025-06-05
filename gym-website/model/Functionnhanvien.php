<?php
function themnv($tennv,$image,$sodt,$email,$diachi,$vaitro){
    $conn=connectdb();
    $sql="INSERT INTO tb_nhanvien (tennv,image,sodt,email,diachi,vaitro)  VALUES ('".$tennv."','".$image."','".$sodt."','".$email."','".$diachi."','".$vaitro."')";
    $conn->exec($sql);
}
function updatenv($id,$tennv,$image,$sodt,$email,$diachi,$vaitro){
    $conn=connectdb();
    if($image==""){
        $sql = "UPDATE tb_nhanvien SET tennv='".$tennv."', sodt='".$sodt."', email='".$email."',diachi='".$diachi."', vaitro='".$vaitro."' WHERE id=".$id;
    }else{
        $sql = "UPDATE tb_nhanvien SET tennv='".$tennv."', image='".$image."',sodt='".$sodt."', email='".$email."',diachi='".$diachi."', vaitro='".$vaitro."' WHERE id=".$id;
    }
   
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function getonenv($id){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM tb_nhanvien WHERE id=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $ketqua=$stmt->fetchAll();
    return $ketqua;
}
function delnv($id){
    $conn=connectdb();
    $sql="DELETE FROM tb_nhanvien WHERE id=".$id;
    $conn->exec($sql);
}
function getall_nhanvien(){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM tb_nhanvien");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $ketqua=$stmt->fetchAll();
    return $ketqua;
}
?>