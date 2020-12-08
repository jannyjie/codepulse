<?php include('header.php'); ?>
<div class="pagecont">
    <nav class="breadcrumbwrap">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">首頁</a></li>
                <li class="breadcrumb-item active"><a href="#">會員註冊</a></li>
              </ol>
        </div>
    </nav>
    <div class="container pb-lg-5 pb-4">
        <div class="row">
            <div class="col-12">
                <div class="box mt-lg-3 mt-0">
                    <div class="pagetitle"><h1>會員註冊</h1></div>
                    <form action="success.php">
                        <div class="row">
                            <div class="col-lg-6">
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
                                <div class="item">
                                    <label>帳號(E-mail)</label>
                                    <input type="email"/>
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
                                    <label class="radiowrap">
                                        <input type="radio" name="gender" value="m"> <span>男</span>
                                    </label>
                                    <label class="radiowrap">
                                        <input type="radio" name="gender" value="f"> <span>女</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <?php include('address_combo.php'); ?>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="item">
                                            <label>密碼</label>
                                            <input type="passwrod"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="item">
                                            <label>確認密碼</label>
                                            <input type="confirm"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <label class="checkwrap">
                                        <input type="checkbox">
                                        <span>我已經閱讀並同意 <a href="info.php">網站服務條款</a></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" class="btn btn-main">註冊</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>