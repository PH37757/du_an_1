<?php
// session_start();
if (session_status() == PHP_SESSION_NONE) {
    // Nếu session chưa được khởi tạo, khởi động session
    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $cart = json_decode($_POST['cart'], true);
        $_SESSION['mycart'] = $cart;
        echo 'Cart updated successfully';
    } else {
        echo 'Invalid request';
    }
    
}

?>
