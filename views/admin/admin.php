<?php
 session_start();
 ob_start();
 include "../../models/pdo.php";
 include "../../models/taikhoan.php";


 if (isset($_POST['dangnhap'])&&($_POST['dangnhap'])) {
  $user_name = $_POST['user_name'];
  $pass_word = $_POST['pass_word'];

  // Consider enhancing the security of your authentication function
  $name_role = user($user_name,$pass_word);

   $_SESSION['name_role'] = $name_role;
  $roler = $name_role['name_role'];
   
      if($roler == 3 || $roler ==2) {
      header('Location: index.php');
     
  } else {
      header('Location: admin.php');
      
  }
}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <title>Login Form</title>
  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      background-color: #f8f9fa;
    }

    .login-form {
      width: 300px;
      margin: auto;
    }
  </style>


</head>
<body>

<div class="login-form">
  <h2 class="text-center mb-4">Login</h2>
  
  
  <form action="<?php  echo $_SERVER['PHP_SELF'];?>" method="POST">
    
  
<div class="form-group">
      
      
<label for="user_name">Username:</label>
      
      
<input type="text" class="form-control" id="user_name" name="user_name" required>
    </div>
    
    
<div class="form-group">
      <label for="pass_word">Password:</label>
      <input type="password" class="form-control" id="pass_word" name="pass_word" required>
    
 
</div>
    <input type="submit" name="dangnhap" class="btn btn-primary btn-block" value="Đăng nhập"></input>

</div>
</form>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



 


</body>

 
</html>


