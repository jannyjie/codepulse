<!doctype html>
<html>
<head>
    <title>Codepulse Demo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Codepulse" />
    <!-- 防瀏覽器快取 -->
    <meta http-equiv="expires" content="0">
    <!-- ​​Pragma (cache模式) -->
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">

    <link href="assets/img/fav.png" rel="shortcut icon" type="image/png">
  
    <!--  Font family -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC:300,400,500,600,700,900|Oswald:400,500,700,900&display=swap" rel="stylesheet" type="text/css">
  
    <!--  Plugins -->
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css">
    <link href="assets/css/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/fontawesome.all.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/slick.css" rel="stylesheet" type="text/css">
    <!-- Plugins for vendors.php -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/node-waves/0.7.6/waves.min.css" integrity="sha512-bsNktdxsLu4ooy7axuzyyFz87SWrDBaCmZsk2Dvin1/2noq49vt1jfNWUAfdybRpFCzRjdWygAOEopdbo8cGpA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />

    <!--  Customized -->
    <link href="assets/css/common.css?t=<?=time()?>" rel="stylesheet" type="text/css">
</head>
    
<?php include('data.php'); /*Demo用*/ ?>
    
<body>
    <div class="headerwrap">
        <div class="topbar">
			<div class="container">
                <div class="between">
                    <a href="article.php">全館優惠</a>
                    <ul>
                        <li class="list-inline-item"><a href="about.php"><i class="fas fa-envelope"></i></a></li>
                        <li class="list-inline-item has_submenu">
                            <a href="login.php"><i class="fas fa-user"></i> 會員中心</a>
                            <div class="submenu">
                                <ul>
                                    <li><a href="account.php">會員中心</a></li>
                                    <li><a href="addresslist.php">地址資訊</a></li>
                                    <li><a href="edit.php">編輯資料</a></li>
                                    <li><a href="password.php">變更密碼</a></li>
                                    <li><a href="orderlist.php">訂單列表</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
			</div>
		</div>
        <header>
            <div class="container">
            <nav class="navbar navbar-expand-lg p-0">
                <a class="navbar-brand" href="index.php">
                  <img src="assets/img/logo.png">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav mr-0 ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="sitemap.php">Sitemap</a>
                        </li>
                        <li class="nav-item has_submenu">
                            <a class="nav-link dropdown-toggle" href="category.php">
                                dropdown sample
                            </a>
                            <div class="submenu">
                              <ul>
                                  <li><a class="dropdown-item" href="category.php">Link 1</a></li>
                                  <li><a class="dropdown-item" href="category.php">Link 2</a></li>
                              </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
           </div>
        </header>
    </div>