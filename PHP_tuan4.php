<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- giai pt bac 1 -->
    <!-- <?php
            $a = 3;
            $b = 1;
            if ($a == '') {
                echo "ban chua nhap a";
            } else if ($b == '') {
                echo  "ban chua nhap b";
            } else if ($a == 0) {
                echo "a khong the = 0";
            } else {
                echo - ($b) / $a;
            }
            ?> -->

    <!-- mang - bai 1  -->
    <?php
    $mang1 = array(360, 310, 310, 330, 313, 375, 456, 111, 256);
    $mang2 = array(350, 340, 356, 330, 321);
    $mang3 = array(630, 340, 570, 635, 434, 255, 298);
    // hien thi cac mang
    print_r($mang1);
    echo "<br>";
    print_r($mang2);
    echo "<br>";
    print_r($mang3);
    echo "<br>";
    // sap xep theo thu tu tang dan
    sort($mang1);
    print_r($mang1);
    echo "<br>";
    sort($mang2);
    print_r($mang2);
    echo "<br>";
    sort($mang3);
    print_r($mang3);
    echo "<br>";
    //xoa ptu thu 3 cua mang 1
    unset($mang1[3]);
    print_r($mang1);
    echo "<br>";
    //them ptu 55 vao cuoi mang2
    $mang2[] = 55;
    print_r($mang2);
    echo "<br>";
    //gan gia tri 68 cho ptu thu 4 cua mang 3
    $mang3[4] = 68;
    print_r($mang3);
    echo "<br>";
    //chen ptu 88 vao sau ptu thu 2 cua mang 2
    array_splice($mang2, 3, 0, 88);
    print_r($mang2);
    echo "<br>";
    //tim gia tri lon nhat va be nhat cua mang
    echo max($mang1) . "<br>";
    echo max($mang2) . "<br>";
    echo max($mang3) . "<br>";
    echo min($mang1) . "<br>";
    echo min($mang2) . "<br>";
    echo min($mang3) . "<br>";
    echo "<br>";
    ?>


    <!-- Bai 2 -->
    <?php
    echo "-------------------------------------";
    echo "<br>";
    echo "Bai 2";
    echo "<br>";
    $colors = array(0 => 'Red', 4 => 'Green', 2 => 'White', 1 => 'Black', 3 => 'Red',);
    $numbers = array(0 => 100, 1 => 200, 2 => 100, 3 => -10, 4 => -10, 5 => 0,     6 => 80,);
    //in ra mang
    print_r($colors);
    echo "<br>";
    print_r($numbers);
    echo "<br>";

    //sap xep theo key
    ksort($colors);  //tang dan theo key
    print_r($colors);
    echo "<br>";
    krsort($numbers);  //giam dan theo key
    print_r($numbers);
    echo "<br>";
    //xoa ban sao giong nhau trong cac mang
    $colors = array_unique($colors);
    print_r($colors);
    echo "<br>";
    $numbers = array_unique($numbers);
    print_r($numbers);
    echo "<br>";
    //tim key lon nhat
    $maxkeyColors = max(array_keys($colors));
    print_r($maxkeyColors);
    echo "<br>";
    $maxkeyNumbers = max(array_keys($numbers));
    print_r($maxkeyNumbers);
    echo "<br>";
    //lay key cua gia tri lon nhat
    $maxvalue = max($numbers);
    $maxkey = array_search($maxvalue, $numbers);
    print_r($maxkey);
    echo "<br>";
    ?>

    <!-- Bai 3 -->
    <?php
    $Schools = array(
        "students" => array(
            array(
                "hoten" => "Nguyen Van A",
                "ngaysinh" => "01/01/2000",
                "gioitinh" => "Nam",
                "DTB" => 8.5
            ),
            array(
                "hoten" => "Tran Thi B",
                "ngaysinh" => "02/02/2000",
                "gioitinh" => "Nu",
                "DTB" => 9.0
            ),
            array(
                "hoten" => "Le Van C",
                "ngaysinh" => "03/03/2000",
                "gioitinh" => "Nam",
                "DTB" => 7.5
            ),
            array(
                "hoten" => "Pham Thi D",
                "ngaysinh" => "04/04/2000",
                "gioitinh" => "Nu",
                "DTB" => 8.0
            ),
            array(
                "hoten" => "Hoang Van E",
                "ngaysinh" => "05/05/2000",
                "gioitinh" => "Nam",
                "DTB" => 9.5
            )
        ),
        "teacher" => array(
            array(
                "hoten" => "Tran Van X",
                "ngaysinh" => "01/01/1980",
                "gioitinh" => "Nam",
                "hocphan" => "Toan cao cap"
            ),
            array(
                "hoten" => "Nguyen Thi Y",
                "ngaysinh" => "02/02/1980",
                "gioitinh" => "Nu",
                "hocphan" => "Ly thuyet dai so"
            ),
            array(
                "hoten" => "Le Van Z",
                "ngaysinh" => "03/03/1980",
                "gioitinh" => "Nam",
                "hocphan" => "Giai tich 1"
            )
        )
    );

    echo "<h2>Danh sach sinh vien</h2>";
    echo "<table border = 1>";
    echo "
        <tr>
            <th>Ho ten</th>
            <th>Ngay sinh</th>
            <th>Gioi tinh</th>
            <th>Diem trung binh</th>
        </tr>
    ";
    foreach ($Schools["students"] as $student) {
        echo "<tr>";
        echo "<td>" . $student["hoten"] . "</td>";
        echo "<td>" . $student["ngaysinh"] . "</td>";
        echo "<td>" . $student["gioitinh"] . "</td>";
        echo "<td>" . $student["DTB"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    echo "<h2>Danh sach giang vien</h2>";
    echo "<table border = 1>";
    echo "
        <tr>
            <th>Ho ten</th>
            <th>Ngay sinh</th>
            <th>Gioi tinh</th>
            <th>Hoc phan</th>
        </tr>
    ";
    foreach ($Schools["teacher"] as $teachers) {
        echo "<tr>";
        echo "<td>" . $teachers["hoten"] . "</td>";
        echo "<td>" . $teachers["ngaysinh"] . "</td>";
        echo "<td>" . $teachers["gioitinh"] . "</td>";
        echo "<td>" . $teachers["hocphan"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
