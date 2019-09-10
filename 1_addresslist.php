<?php include('header.php'); ?>
<div class="pagecont">
    <nav class="breadcrumbwrap">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">首頁</a></li>
                <li class="breadcrumb-item"><a href="#">會員中心</a></li>
                <li class="breadcrumb-item active"><a href="#">地址簿</a></li>
              </ol>
        </div>
    </nav>
    <div class="container pb-lg-5 pb-4">
        <div class="row">
            <div class="col-12">
            <div class="mt-lg-3 mt-0">
                <div class="pagetitle"><h1>地址簿</h1></div>
                <div class="itemlist mb-4">
                    <ul class="list-unstyled">
                        <li>
                            <a href="addressform.php"><span class="badge badge-secondary">預設</span> 張富山, 台灣, 台北市內湖區 114, 麗山街364巷2號</a>
                            <div class="links">
                                <a href="addressform.php" class="text-primary"><i class="fas fa-edit"></i></a>
                                <a href="#" class="text-secondary"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </li>
                        <li>
                            <a href="addressform.php">吳小學, 台灣, 台北市大安區 106, 羅斯福路三段191號3樓</a>
                            <div class="links">
                                <a href="addressform.php" class="text-primary"><i class="fas fa-edit"></i></a>
                                <a href="#" class="text-secondary"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </li>
                        <li>
                            <a href="addressform.php">王小力, 台灣, 台北市大安區 106, 羅斯福路三段191號1樓</a>
                            <div class="links">
                                <a href="addressform.php" class="text-primary"><i class="fas fa-edit"></i></a>
                                <a href="#" class="text-secondary"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-6">
                        <a class="btn btn-light" href="member.php">返回</a>
                    </div>
                    <div class="col-6 text-right">
                        <a class="btn btn-add" href="addressform.php"><i class="fas fa-plus"></i> 新地址</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>