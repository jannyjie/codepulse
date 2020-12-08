<?php include('header.php'); ?>
<div class="pagecont">
    <nav class="breadcrumbwrap">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">首頁</a></li>
                <li class="breadcrumb-item active"><a href="_account.php">會員中心</a></li>
              </ol>
        </div>
    </nav>
    <div class="container pb-lg-5 pb-4">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="mt-lg-3 mt-0">
                    <div class="title-page">
                        <h1>會員中心
                        <span>Member</span>
                        </h1>
                    </div>
                    <div class="row no-gutters member-func">
                        <div class="col-12 text-right mb-3">
                            <a href="logout.php">
                                <i class="fas fa-sign-out-alt"></i> 會員登出
                            </a>
                        </div>

                        <div class="col-6 col-lg-4">
                            <div class="card">
                                <a href="_edit.php">
                                    <i class="fas fa-id-card"></i>
                                    <h4>會員資料</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4">
                            <div class="card">
                                <a href="_password.php">
                                    <i class="fas fa-shield-alt"></i>
                                    <h4>變更密碼</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4">
                            <div class="card">
                                <a href="_addresslist.php">
                                    <i class="fas fa-address-book"></i>
                                    <h4>地址簿</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4">
                            <div class="card">
                                <a href="_orderlist.php">
                                    <i class="fas fa-shopping-bag"></i>
                                    <h4>訂單記錄</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4">
                            <div class="card">
                                <a href="_wishlist.php">
                                    <i class="fas fa-heart"></i>
                                    <h4>收藏清單</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4">
                            <div class="card">
                                <a href="_point.php">
                                    <i class="fas fa-hand-holding-usd"></i>
                                    <h4>購物金記錄</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>