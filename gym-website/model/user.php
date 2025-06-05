<?php
function updatetaikhoan($id,$user,$pass){
    $conn=connectdb();
    $sql = "UPDATE user SET user='".$user."', pass='".$pass."' WHERE id=".$id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function update_user($id, $tenkh,$user, $pass, $image, $sodt, $email, $diachi){
    $conn=connectdb();
 
    $sql = "UPDATE user SET namee='".$tenkh."', user='".$user."', pass='".$pass."', image='".$image."', phone_number='".$sodt."', email='".$email."', addresss='".$diachi."' WHERE id=".$id;
    
    if($image==""){
        $sql = "UPDATE user SET namee='".$tenkh."', user='".$user."', pass='".$pass."', phone_number='".$sodt."', email='".$email."', addresss='".$diachi."' WHERE id=".$id;
    }else{
        $sql = "UPDATE user SET namee='".$tenkh."', user='".$user."', pass='".$pass."', image='".$image."', phone_number='".$sodt."', email='".$email."', addresss='".$diachi."' WHERE id=".$id;
    }
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function checkuser($user,$pass){
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM user WHERE user='".$user."' AND pass='".$pass."'");
    $stmt->execute();
    $result=$stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    if(count($kq)>0) return $kq[0]['role'];
    else return 0;
    
}


function add_user($user, $pass, $name, $image, $address, $phone_number, $email){
        $conn=connectdb();
		$sql = ("INSERT INTO user (user, pass, namee, image, addresss, phone_number, email) VALUES ('".$user."', '".$pass."', '".$name."', '".$image."','". $address."', '".$phone_number."','". $email."')");
		$conn->exec($sql);
}
function getoneuser($id){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM user WHERE id=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $ketqua=$stmt->fetchAll();
    return $ketqua;
}
// function getall_user(){
//     $conn=connectdb();
//     $stmt = $conn->prepare("SELECT * FROM user");
//     $stmt->execute();
//     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//     $ketqua=$stmt->fetchAll();
//     return $ketqua;
// }

function getall_user($idpt=0,$kyw=""){
    $conn=connectdb();
    $sql="SELECT * FROM user WHERE 1";
  
   
    if($idpt>0) $sql.=" AND idpt=".$idpt;
     if($kyw!="") $sql.=" AND namee like '%".$kyw."%'";
     $sql.=" order by id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $ketqua=$stmt->fetchAll();
    return $ketqua;
}
function delkh($id){
    $conn=connectdb();
    $sql="DELETE FROM user WHERE id=".$id;
    $conn->exec($sql);
}
function showpro2($dskh){
    $i=1;
        
          foreach ($dskh as $kh){
            if ($kh['role'] == 1){
            echo '
            
            <tr>
            <td>'.$i.'</td>
            <td>'.$kh['namee'].'</td>
            <td><img style="width: 120px;height:100px" src="'.$kh['image'].'"></td>
            <td>'.$kh['phone_number'].'</td>
            <td>'.$kh['addresss'].'</td>
            <td>'.$kh['email'].'</td>
            <td></td>
            <td></td>
           <td>
            <a class=" form-control text-bg-warning text-decoration-none text-center" href = "controllers.php?act=updatekh&id='.$kh['id'].'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
            </td>
            <td><a class="p-2 form-control text-bg-danger text-center" href = "controllers.php?act=delkh&id='.$kh['id'].'"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
            </tr>';
            }
            $i++;
          }
        }
?>