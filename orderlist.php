<?php include('header.php'); ?>
<div class="pagecont">
    <nav class="breadcrumbwrap">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">首頁</a></li>
                <li class="breadcrumb-item"><a href="#">會員中心</a></li>
                <li class="breadcrumb-item active"><a href="#">訂單記錄</a></li>
              </ol>
        </div>
    </nav>
    <div class="container pb-lg-5 pb-4">
        <div class="row">
            <div class="col-12">
            <div class="mt-lg-3 mt-0">
                <div class="pagetitle"><h1>訂單記錄</h1></div>
                <div class="itemlist mb-4">
                    <ul class="list-unstyled">
                        <li>
                            <a href="orderinfo.php"> 
                                <span class="badge badge-info">#3</span>
                                2019-08-20 
                                <span class="gap">|</span> 
                                Ally 
                                <span class="gap">|</span> 
                                共2件，總計NT$6,300 
                            </a>
                            <a href="orderinfo.php" class="text-primary">處理中</a>
                        </li>
                        <li>
                            <a href="orderinfo.php">
                                <span class="badge badge-info">#2</span> 
                                2019-08-10 
                                <span class="gap">|</span> 
                                Ally 
                                <span class="gap">|</span> 
                                共2件，總計NT$6,300 
                            </a>
                            <a href="orderinfo.php" class="text-primary">已出貨</a>
                        </li>
                        <li>
                            <a href="orderinfo.php">
                                <span class="badge badge-info">#1</span> 
                                2019-08-10 
                                <span class="gap">|</span> 
                                Ally 
                                <span class="gap">|</span> 
                                共2件，總計NT$6,300 
                            </a>
                            <a href="orderinfo.php" class="text-primary">交易取消</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-6">
                        <a class="btn btn-light" href="account.php">返回</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>