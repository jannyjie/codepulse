<?php include('header.php'); ?>
<div class="pagecont">
    <nav class="breadcrumbwrap">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">首頁</a></li>
                <li class="breadcrumb-item active"><a href="#">分類名稱</a></li>
              </ol>
        </div>
    </nav>
    <div class="container">
        <div class="pagetitle"><h1>分類名稱</h1></div>
        <div class="row">
            <?php foreach($products as $p): ?>
            <div class="col-lg-3 col-sm-4 col-6">
                <div class="card product">
                    <a href="product.php" class="imgwrap"><img src="<?=$p['image'];?>" class="card-img-top"></a>
                    <div class="card-body">
                        <h5 class="txtbox line1"><?=$p['name'];?></h5>
                        <p class="mb-0 txtbox line2"><?=$p['short_description'];?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="pagingwrap text-center">
            <ul>
                <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                <li><a href="#"><i class="fas fa-angle-left"></i></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fas fa-angle-right"></i></a></li>
                <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
              </ul>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>