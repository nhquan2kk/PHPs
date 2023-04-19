<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Lấy thông tin đăng nhập gửi từ biểu mẫu
	$username = $_POST["username"];
	$password = $_POST["password"];

	// Kiểm tra thông tin đăng nhập
	if ($username == "quan" && $password == "123") {
		// Thành công - tạo session lưu trữ tên tài khoản
		$_SESSION["username"] = $username;
		header("Location: welcome.php");
		exit();
	} else {
		// Thất bại - hiển thị thông báo lỗi
		echo "Invalid username or password";
	}
}
?>

<?php
    session_start();

    // Kiểm tra xem session đã được tạo
    if (isset($_SESSION["username"])) {
        // Session đã được tạo - hiển thị tên tài khoản
        echo "Xin chào, " . $_SESSION["username"] . "!";

        // Hiển thị nút để xoá session
        echo "<br><br>";
        echo "<a href='clearsession.php'>Clear Session</a>";
    } else {
        // Session chưa được tạo - chuyển hướng đến trang đăng nhập
        header("Location: login.html");
        exit();
    }
?>