<?php 
 
// Load the database configuration file 
$conn = mysqli_connect("localhost", "root", "", "databasegym", 3307); 
 
// Include XLSX generator library 
require_once 'PhpXlsxGenerator.php'; 
 
// Excel file name for download 
$fileName = "doanhthu-data_" . date('Y-m-d') . ".xlsx"; 
 
// Define column names 
$excelData[] = array('ID', 'Ten lop tap', 'Gia', 'So luong', 'Thoi gian', 'Ten khach hang', 'Dia chi', 'SDT', 'Email', 'NgayDangKi', 'NgayHetHan'); 
 
// Fetch records from database and store in an array 
$query = $conn->query("SELECT * FROM loptap Where state = 1"); 
if($query->num_rows > 0){ 
    while($row = $query->fetch_assoc()){ 
        $state = ($row['state'] == 1)?'DaThanhToan':'ChuaThanhToan'; 
        $lineData = array($row['id'], $row['tenloptap'], $row['gia'], $row['soluong'], $row['thoigian'], $row['tenkh'], $row['diachi'], $row['sdt'], $row['email'],$row['dangki'], $row['thoihan'], $state);  
        $excelData[] = $lineData; 
    } 
} 
 
// Export data to excel and download as xlsx file 
$xlsx = CodexWorld\PhpXlsxGenerator::fromArray( $excelData ); 
$xlsx->downloadAs($fileName); 
 
exit; 
 
?>