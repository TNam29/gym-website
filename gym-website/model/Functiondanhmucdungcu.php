<?php
// function themdmdc($tendmdc){
//     $conn=connectdb();
//     $sql="INSERT INTO tb_danhmucdungcu (tendmdc)  VALUES ('".$tendmdc."')";
//     $conn->exec($sql);
// }
// function updatedmdc($id,$tendmdc){
//     $conn=connectdb();
//     $sql = "UPDATEtb_danhmucdungcu SET tendmdc='".$tendmdc."' WHERE id=".$id;
//     $stmt = $conn->prepare($sql);
//     $stmt->execute();
// }
function getonedmdc($id){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM tb_danhmucdungcu WHERE id=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $ketqua=$stmt->fetchAll();
    return $ketqua;
}
// function deldmdc($id){
//     $conn=connectdb();
//     $sql="DELETE FROM tb_danhmucdungcu WHERE id=".$id;
//     $conn->exec($sql);
// }
function getall_danhmucdungcu(){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM tb_danhmucdungcu");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $ketqua=$stmt->fetchAll();
    return $ketqua;
}
?>