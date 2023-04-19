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
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy thông tin đăng nhập từ biểu mẫu
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Kiểm tra thông tin đăng nhập
        if($username == "quan" && $password == "abc123") {
            // Tạo cookie để lưu trữ thông tin đăng nhập
            setcookie("username", $username, time() + 3600, "/"); // cookie có hiệu lực trong 1 giờ

            // Chuyển hướng đến trang chào mừng
            header("Location: welcome.php");
            exit();
        } else {
            echo "Tên đăng nhập hoặc mật khẩu không đúng.";
        }
    }
    ?>
    <?php
	if(isset($_COOKIE["username"])) {
		echo "<h2>Chào mừng " . $_COOKIE["username"] . "!</h2>";
		echo "<p><a href='clearcookie.php'>Đăng xuất</a></p>";
	} else {
		echo "<h2>Bạn chưa đăng nhập!</h2>";
	}
	?>
</body>
</html>