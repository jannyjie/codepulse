<?php include('header.php'); ?>
<div class="pagecont">
    <nav class="breadcrumbwrap">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">首頁</a></li>
                <li class="breadcrumb-item active"><a href="category.php">分類名稱</a></li>
              </ol>
        </div>
    </nav>
    <div class="container">
      <div class="title-page">
        <h1>分類名稱
        <span>Catalog</span></h1>
      </div>
        <div class="row">
            <?php foreach($products as $p): ?>
            <div class="col-lg-3 col-sm-4 col-6">
                <div class="card">
                    <div class="box-img" style="background-image:url('<?=$p['image'];?>')"></div>
                    <div class="card-body">
                        <a href="product.php" class="stretched-link"><h5 class="txt-l1"><?=$p['name'];?></h5></a>
                        <p class="mb-0 txt-l2"><?=$p['short_description'];?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center">
            <ul class="list-page">
                <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                <li><a href="#"><i class="fas fa-angle-left"></i></a></li>
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fas fa-angle-right"></i></a></li>
                <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
              </ul>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>