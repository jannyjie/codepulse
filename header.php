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

    <link href="assets/images/favicon.png" rel="shortcut icon" type="image/png">

    <link href="assets/css/animate.css" rel="stylesheet" type="text/css">
    <link href="assets/css/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/fontawesome.all.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/slick.css" rel="stylesheet" type="text/css">
    <link href="assets/css/common.css" rel="stylesheet" type="text/css">
</head>
    
<?php include('data.php'); /*Demo用*/ ?>
    
<body>
    <div class="headerwrap">
        <div class="topbar">
			<div class="container">
                <a href="#">全館優惠</a>
				<ul class="toplist d-none d-sm-flex">
                    <li><a href="about.php"><i class="fas fa-envelope"></i></a></li>
                    <li><a href="login.php"><i class="fas fa-user"></i> 會員註冊/登入</a></li>
                </ul>
			</div>
		</div>
        <header>
            <div class="container">
            <nav class="navbar navbar-expand-lg p-0">
                <a class="navbar-brand" href="index.php"><img src="assets/img/logo.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav mr-0 ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">首頁</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="article.php">關於我們</a>
                        </li>
                        <li class="nav-item has_submenu">
                            <a class="nav-link dropdown-toggle" href="category.php" data-toggle="dropdown">
                                產品
                            </a>
                            <ul>
                                <li><a class="dropdown-item" href="category.php">類別1</a></li>
                                <li><a class="dropdown-item" href="category.php">類別2</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="news.php">最新消息</a>
                        </li>
                    </ul>
                </div>
            </nav>
           </div>
        </header>
    </div>