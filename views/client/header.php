<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/dist/output.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
   <!-- <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css"> -->
   <link rel="stylesheet" href="../../config/plugins/fontawesome-free/css/all.min.css">
   <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>
<body class="max-w-full">
  <div class="max-w-full">
    <div class=" backdrop-grayscale-0 bg-white/10 h "></div>
     <header class=" backdrop-grayscale-0 bg-white/10 h " >
        <nav class="header-nav container" >
            <ul style="background-color: #000; color:#fff" id="nav" class="nav d-none btn btn-info  justify-content-center  d-lg-flex">
               
                <li class=" nav-item d-none d-md-flex active  text-white"><a style="display:block;margin-top:4px" href="index.php "><img width="30px" src="https://bizweb.dktcdn.net/100/414/728/files/vector-smart-object.png?v=1669965363192" alt=""></a></li>
                <li class=" nav-item d-none d-md-flex active  text-white"><a class="nav-link text-light" href="index.php ">Trang chủ</a></li>
              
                <li class="nav-item d-none d-md-flex "><a href="index.php?act=contact" class="nav-link text-light"  >Liên Hệ</a></li>
               
                <li class="nav-item d-none d-md-flex "><a href="index.php?act=bangsize" class="nav-link text-light"  >Bảng size</a></li>
              
                <li class="nav-item dropdown">
                    <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Danh mục
                    </a>
                    <ul class="dropdown-menu text-red-500" aria-labelledby="navbarDropdown">
                      <?php
                        foreach ($list_poduct_category as $value)  {extract($value)  ?>
                          <li><a class="dropdown-item text-red-500" href="index.php?act=list_category&id=<?=$id?>"><?=$name_cate?></a></li>
                        <?php } ?>
                      <!-- <li><hr class="dropdown-divider"></li> -->
                    </ul>
                  </li>
                <ul class=" ">
                    <form class="d-flex" action="index.php#" method="POST">
                        <input class="form-control me-2"  name="keyword" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-success" type="submit">Search</button>
                      </form>
                </ul>
                <ul>
                    <a class="text-light" href="index.php?act=cart">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                      </svg>
                    </a>

                    <?php
                  if(isset($_SESSION['user_name'])){
                     extract($_SESSION['user_name']);
                  ?> 
                  <a style="margin-left:10px" href="index.php?act=thongtintk"><i class="fa fa-user" ></i></a>
                  <a style="margin-left:10px" href="index.php?act=dangxuat">Đăng Xuất</a>
                  
                  <?php }else{ ?>
                </ul>
                <a href="login.php" class="text-light mt-1 mx-5">
                <i class="fa fa-user" >Đăng nhập</i>
                </a>
              </ul>
              <?php } ?>
                  </div>
              
        