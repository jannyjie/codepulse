<?php include('header.php'); ?>
<div class="pagecont">
    <nav class="breadcrumbwrap">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">首頁</a></li>
                <li class="breadcrumb-item"><a href="_account.php">會員中心</a></li>
                <li class="breadcrumb-item"><a href="_addresslist.php">地址簿</a></li>
                <li class="breadcrumb-item active"><a href="_addressform.php">編輯地址</a></li>
              </ol>
        </div>
    </nav>
    <div class="container pb-lg-5 pb-4">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="box mt-lg-3 mt-0">
                    <div class="pagetitle text-center"><h1>編輯地址</h1></div>
                    <form action="_account.php">
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
                        <?php include('address_combo.php'); ?>
                        <div class="item">
                            <label class="mr-4">預設地址</label>
                            <label class="radiowrap">
                                <input type="radio" name="default" value="m"> <span>是</span>
                            </label>
                            <label class="radiowrap">
                                <input type="radio" name="default" value="f"> <span>否</span>
                            </label>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <a class="btn btn-light" href="_addresslist.php">返回</a>
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