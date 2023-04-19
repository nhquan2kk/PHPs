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
    $sql = 'select * from monhoc';

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        foreach($result as $row){
        echo 'Ten khoa: ' . $row['TenKhoa'] . ', Ten Mon: ' . $row['TenMon'
        ] . ', So tin chi: ' . $row['SoTinChi'] . ', Ghi chu: ' . $row['GhiChu'] . '<br>';
    }
    } else {
        echo 'Khong co ban ghi nao';
    }
    $conn->close();
?>


<?php
    $conn = new mysqli('localhost', 'root', '', 'quanlyhoc_db');
    if ($conn->connect_error) {
        die('ket noi that bai: ' . $conn->connect_error);
    }
    $sql = 'select * from sinhvien';

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        foreach($result as $row){
            echo 'Ten khoa: ' . $row['TenKhoa'] . ', lop bc: ' . $row['lopbc'] . ', Ho ten: ' . $row['HoTen'
            ] . ', ngay sinh: ' . $row['ngaysinh'] . ', dia chi: ' . $row['dia chi'] . '<br>';
    }
    } else {
        echo 'Khong co ban ghi nao';
    }

?>
</body>
</html>


