<?php include('header.php'); ?>
<div class="pagecont">
    <nav class="breadcrumbwrap">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">首頁</a></li>
                <li class="breadcrumb-item"><a href="#">會員中心</a></li>
                <li class="breadcrumb-item active"><a href="#">會員資料</a></li>
              </ol>
        </div>
    </nav>
    <div class="container pb-lg-5 pb-4">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="form-box mt-lg-3 mt-0">
                    <div class="pagetitle text-center"><h1>會員資料</h1></div>
                    <form action="account.php">
                        <div class="item">
                            <label>帳號(E-mail)</label>
                            <p>test@codepulse.com.tw</p>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="item">
                                    <label>姓氏</label>
                                    <input type="text"/>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="item">
                                    <label>名字</label>
                                    <input type="text"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="item">
                                    <label>聯絡電話</label>
                                    <input type="text"/>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="item">
                                    <label>生日</label>
                                    <input type="date"/>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <label class="mr-4">性別</label>
                            <div class="form-group">
                                <label class="radiowrap">
                                    <input type="radio" name="gender" value="m"><span>男</span>
                                </label>
                                <label class="radiowrap">
                                    <input type="radio" name="gender" value="f"><span>女</span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <a class="btn btn-light" href="account.php">返回</a>
                            </div>
                            <div class="col-6 text-right">
                                <button class="btn btn-add">確認</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>