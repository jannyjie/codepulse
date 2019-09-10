<?php include('header.php'); ?>
<div class="pagecont">
    <nav class="breadcrumbwrap">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">首頁</a></li>
                <li class="breadcrumb-item active"><a href="#">重置密碼</a></li>
              </ol>
        </div>
    </nav>
    <div class="container pb-lg-5 pb-4">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="box mt-lg-3 mt-0">
                    <div class="pagetitle text-center"><h1>重置密碼</h1></div>
                    <form action="success.php">
                        <div class="item">
                            <label>新密碼</label>
                            <input type="password"/>
                        </div>
                        <div class="item">
                            <label>確認新密碼</label>
                            <input type="confirm"/>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">送出</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>