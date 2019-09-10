<?php include('header.php'); ?>
<div class="pagecont">
    <nav class="breadcrumbwrap">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">首頁</a></li>
                <li class="breadcrumb-item active"><a href="#">會員登入</a></li>
              </ol>
        </div>
    </nav>
    <div class="container pb-lg-5 pb-4">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="box mt-lg-3 mt-0">
                    <div class="pagetitle text-center"><h1>會員登入</h1></div>
                    <form action="member.php">
                        <div class="item">
                            <label>帳號(E-mail)</label>
                            <input type="text"/>
                        </div>
                        <div class="item">
                            <label>密碼</label>
                            <input type="password"/>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <label class="checkwrap">
                                    <input type="checkbox">
                                    <span>記住我</span>
                                </label>
                            </div>
                            <div class="col-6 text-right">
                                <a href="forget.php">忘記密碼</a>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">登入</button>
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
                    <a href="register.php" class="btn btn-dark w-100">會員註冊</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>