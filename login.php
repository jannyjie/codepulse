<?php include('header.php'); ?>
<div class="pagecont">
    <nav class="breadcrumbwrap">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">首頁</a></li>
                <li class="breadcrumb-item active"><a href="_login.php">會員登入</a></li>
            </ol>
        </div>
    </nav>
    <div class="container pb-lg-5 pb-4">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="box mt-lg-3 mt-0">
                    <h1 class="title-page">會員登入<span>Login</span></h1>
                    <form action="account.php">
                        <div class="form-item inline">
                            <label>帳號<br>(E-mail)</label>
                            <input type="text" />
                        </div>
                        <div class="form-item inline">
                            <label>密碼</label>
                            <input type="password" />
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <label class="checkbox">
                                    <input type="checkbox">
                                    <span>記住我</span>
                                </label>
                            </div>
                            <div class="col-6 text-right">
                                <a href="_forget.php">忘記密碼</a>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-main">登入</button>
                    </form>
                    <hr>
                    <h4 class="text-center mb-3">社群登入</h4>
                    <div class="row social_login">
                        <div class="col-sm-6">
                            <button class="btn btn-facebook">facebook</button>
                        </div>
                        <div class="col-sm-6 mt-3 mt-sm-0">
                            <button class="btn btn-google">google</button>
                        </div>
                    </div>
                    <hr>
                    <h4 class="text-center mb-3">成為會員</h4>
                    <a href="register.php" class="btn btn-main-2 w-100">會員註冊</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>