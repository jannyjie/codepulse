<?php include('header.php'); ?>
<div class="pagecont">
    <nav class="breadcrumbwrap">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">首頁</a></li>
                <li class="breadcrumb-item"><a href="#">會員中心</a></li>
                <li class="breadcrumb-item active"><a href="#">變更密碼</a></li>
            </ol>
        </div>
    </nav>
    <div class="container pb-lg-5 pb-4">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="box mt-lg-3 mt-0">
                    <div class="pagetitle text-center">
                        <h1>變更密碼</h1>
                    </div>
                    <form action="account.php">
                        <div class="item">
                            <label>原密碼</label>
                            <input type="password" />
                        </div>
                        <div class="item">
                            <label>新密碼</label>
                            <input type="password" />
                        </div>
                        <div class="item">
                            <label>確認新密碼</label>
                            <input type="confirm" />
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <a class="btn btn-light" href="account.php">返回</a>
                            </div>
                            <div class="col-6 text-right">
                                <button class="btn btn-main">確認</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>