<?php include('header.php'); ?>
<div class="pagecont">
    <nav class="breadcrumbwrap">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">首頁</a></li>
                <li class="breadcrumb-item active"><a href="#">忘記密碼</a></li>
              </ol>
        </div>
    </nav>
    <div class="container pb-lg-5 pb-4">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="box mt-lg-3 mt-0">
                    <div class="pagetitle text-center"><h1>忘記密碼</h1></div>
                    <p>請輸入註冊時的Email</p>
                    <form action="success.php">
                        <div class="item">
                            <label>E-mail</label>
                            <input type="text"/>
                        </div>
                        <button type="submit" class="btn btn-main w-100">送出</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>