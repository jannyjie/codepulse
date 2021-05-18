<?php include('header.php'); ?>
<div class="pagecont">
    <nav class="breadcrumbwrap">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">首頁</a></li>
                <li class="breadcrumb-item"><a href="#">會員中心</a></li>
                <li class="breadcrumb-item active"><a href="#">購物金記錄</a></li>
            </ol>
        </div>
    </nav>
    <div class="container pb-lg-5 pb-4">
        <div class="row">
            <div class="col-12">
                <div class="box mt-lg-3 mt-0">
                    <div class="pagetitle text-center">
                        <h1>購物金記錄</h1>
                    </div>
                    <div class="row">
                        <div class="col-xl-5">
                            <h6 class="text-main">購物金介紹</h6>
                            <ul class="orderinfo">
                                <li><b>取得方式：</b> <br>總訂單金額的 1% 將會回饋為購物金。</li>
                                <li><b>折抵方式：</b> <br>總訂單金額的30%為最高折抵上限</li>
                                <li>購物金沒有有效期限。</li>
                                <li>結帳時若選擇購物金折抵，將會扣除最高折抵上限（若不足最高折抵上限，則全數折抵）。</li>
                            </ul>
                        </div>
                        <div class="col-xl-7">
                            <hr class="d-xl-none mt-0">
                            <h6 class="text-xl-right">累積購物金：<span class="text-main">70</span></h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>日期</td>
                                        <td>說明</td>
                                        <td>點數</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2018-09-02</td>
                                        <td>使用購物金折抵消費</td>
                                        <td>-80</td>
                                    </tr>
                                    <tr>
                                        <td>2018-07-09</td>
                                        <td>消費回饋</td>
                                        <td>55</td>
                                    </tr>
                                    <tr>
                                        <td>2018-07-02</td>
                                        <td>消費回饋</td>
                                        <td>25</td>
                                    </tr>
                                    <tr>
                                        <td>2018-06-02</td>
                                        <td>消費回饋</td>
                                        <td>70</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-light" href="account.php">返回</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>