<?php
function themdmpt($tenpt,$image,$sodt,$email,$vaitro){
    $conn=connectdb();
    $sql="INSERT INTO tb_pt (tenpt,image,sodt,email,vaitro)  VALUES ('".$tenpt."','".$image."','".$sodt."','".$email."','".$vaitro."')";
    $conn->exec($sql);
}
function updatedmpt($id,$tenpt,$image,$sodt,$email,$vaitro){
    $conn=connectdb();
    if($image==""){
        $sql = "UPDATE tb_pt SET tenpt='".$tenpt."', sodt='".$sodt."', email='".$email."', vaitro='".$vaitro."' WHERE id=".$id;
    }else{ 
        $sql = "UPDATE tb_pt SET tenpt='".$tenpt."', image='".$image."',sodt='".$sodt."', email='".$email."', vaitro='".$vaitro."' WHERE id=".$id;   
    }
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function getonedmpt($id){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM tb_pt WHERE id=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $ketqua=$stmt->fetchAll();
    return  $ketqua;
}
function getonenamedmpt($id){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT tenpt FROM tb_pt WHERE id=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $ketqua=$stmt->fetchAll();
    return $ketqua[0]['tenpt'];
}
function deldmpt($id){
    $conn=connectdb();
    $sql="DELETE FROM tb_pt WHERE id=".$id;
    $conn->exec($sql);
}
function getall_dmpt(){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM tb_pt");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $dsdmpt=$stmt->fetchAll();
    return $dsdmpt;
}
?>