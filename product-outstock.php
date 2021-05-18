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
        <div class="row mb-4">
            <div class="col-xl-5 col-md-6">
                <div class="gallery">
                    <div class="item"> <a href="assets/img/product/pic-product-1.png" class="popup"><img src="assets/img/product/pic-product-1.png" alt="" /></a> </div>
                    <div class="item"> <a href="assets/img/product/pic-product-2.jpg" class="popup"><img src="assets/img/product/pic-product-2.jpg" alt="" /></a> </div>
                    <div class="item"> <a href="assets/img/product/pic-product-3.jpg" class="popup"><img src="assets/img/product/pic-product-3.jpg" alt="" /></a> </div>
                    <div class="item"> <a href="assets/img/product/pic-product-4.jpg" class="popup"><img src="assets/img/product/pic-product-4.jpg" alt="" /></a> </div>

                </div>
                <div class="thumbs">
                    <div class="item"><a href="javascript:void(0);" title=""><img src="assets/img/product/pic-product-1.png" alt="" /> </a></div>
                    <div class="item"><a href="javascript:void(0);" title=""><img src="assets/img/product/pic-product-2.jpg" alt="" /> </a></div>
                    <div class="item"><a href="javascript:void(0);" title=""><img src="assets/img/product/pic-product-3.jpg" alt="" /> </a></div>
                    <div class="item"><a href="javascript:void(0);" title=""><img src="assets/img/product/pic-product-4.jpg" alt="" /> </a></div>
                </div>
                <div class="mt-3 promotiontags">
                    <p class="text-main mb-1">促銷活動：</p>
                    <a href="#" class="promotiontag">保養品組合全系列 9折</a>
                    <a href="#" class="promotiontag">保養品組合全系列 9折</a>
                    <a href="#" class="promotiontag">保養品組合全系列 9折</a>
                </div>
            </div>
            <div class="col-xl-7 col-md-6 mt-4 mt-md-0">
                <div class="sectitle">
                    <h2>Bioderma貝膚黛瑪 舒益高效修護組</h2>
                </div>
                <p class="small text-muted">
                    商品型號：OD1234
                </p>
                <p>【專業進階級防曬】臨界波長381.8nm 有效抵抗紫外線長波UVA，Boots Star ★★★★ 全寬頻防護，有效預防曬紅、曬黑、曬傷、光老化。 <br><br>
                    【輕盈水感】水為基底搭配無油配方、三效獨特霧光Dry Touch成分，提供給肌膚絲絨般霧面觸感，使肌膚清爽無負擔。 <br><br>
                    【專業成分Cellular Bioprotection™】有效保護肌膚，提升肌膚防禦力。</p>
                <hr>
                <p class="price">
                    <span class="special">NT$998</span>
                    <span class="origin">NT$899</span>
                </p>
                <div class="btns">
                    <button type="button" class="btn btn-secondary">缺貨中</button>
                    <button type="button" class="btn btn-wish"><span class="d-none d-lg-inline">加入收藏</span> <i class="far fa-heart"></i></button>
                </div>
                <div class="btns">分享：
                    <button type="button" class="btn minbtn btn-facebook text-white"><i class="fab fa-facebook-f"></i></button>
                    <button type="button" class="btn minbtn btn-line text-white"><i class="fab fa-line"></i></button>
                </div>
            </div>
        </div>
        <div class="sectitle">
            <h2>商品詳情</h2>
        </div>
        <div class="desc">
            <p>【專業進階級防曬】臨界波長381.8nm 有效抵抗紫外線長波UVA，Boots Star ★★★★ 全寬頻防護，有效預防曬紅、曬黑、曬傷、光老化。 <br><br>
                【輕盈水感】水為基底搭配無油配方、三效獨特霧光Dry Touch成分，提供給肌膚絲絨般霧面觸感，使肌膚清爽無負擔。 <br><br>
                【專業成分Cellular Bioprotection™】有效保護肌膚，提升肌膚防禦力。</p>
        </div>
        <div class="sectitle mt-5">
            <h2>相關商品</h2>
        </div>
        <div class="row no-gutters">
            <?php foreach(array_slice($products,5) as $i => $p): ?>
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
    </div>
</div>
<?php include('footer.php'); ?>