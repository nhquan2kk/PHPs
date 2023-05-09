<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $conn = new mysqli('localhost', 'root', '', 'quanlyhoc_db');
    if ($conn->connect_error) {
        die('ket noi that bai: ' . $conn->connect_error);
    }
    // $sql = 'select * from monhoc';

    // $result = $conn->query($sql);
    // if ($result->num_rows > 0) {
    //     foreach($result as $row){
    //     echo 'Ten khoa: ' . $row['TenKhoa'] . ', Ten Mon: ' . $row['TenMon'
    //     ] . ', So tin chi: ' . $row['SoTinChi'] . ', Ghi chu: ' . $row['GhiChu'] . '<br>';
    // }
    // } else {
    //     echo 'Khong co ban ghi nao';
    // }

    // $sql = 'select * from sinhvien';

    // $result = $conn->query($sql);
    // if ($result->num_rows > 0) {
    //     foreach($result as $row){
    //         echo 'ten khoa: ' . $row['TenKhoa'] . ', Lop bc: ' . $row['LopBC'] . ', ho ten: ' . $row['HoTen'
    //         ] . ', ngay sinh: ' . $row['NgaySinh'] . ', dia chi: ' . $row['DiaChi'] . '<br>';
    // }
    // } else {
    //     echo 'Khong co ban ghi nao';
    // }


    // them data vao bang khoa_dao_tao
    $sql = 'insert into khoa_dao_tao(MaKhoa, TenKhoa, DienThoai) values("5","luat", "0123456543")';
    if ($conn->query($sql) == true) {
    echo 'Them du lieu thanh cong';
    } else
    echo 'Them du lieu khong thanh cong: ' . $conn->error;

    //update data trong bang khoa_dao_tao
    $sql = 'update khoa_dao_tao set TenKhoa = "luat updated" where MaKhoa = 5';
    if ($conn->query($sql) == true) {   
    echo 'Cap nhat du lieu thanh cong';
    } else
    echo 'Cap nhat du lieu khong thanh cong: ' . $conn->error;

    //xoa data trong bang khoa_dao_tao
    $sql = 'delete from khoa_dao_tao where MaKhoa = 5';
    if ($conn->query($sql) == true) {
    echo 'Xoa du lieu thanh cong';
    } else
    echo 'Xoa du lieu khong thanh cong: ' . $conn->error;                                                           
?>
</body>
</html>


