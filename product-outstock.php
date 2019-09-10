<?php include('header.php'); ?>
<div class="pagecont">
    <div class="withsidebar">
        <div class="side d-none d-lg-block">
            <ul class="list list-unstyled">
                <?php foreach($categories as $c): ?>
                <li class="<?=($c['children'])?'has_submenu':'';?>"><a href="category.php"><?=$c['name']?></a>
                    <? if($c['children']):?>
                    <ul>
                        <?php foreach($c['children'] as $ch): ?>
                        <li><a href="category.php"><?=$ch['name']?></a></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="container-fluid">
        <div class="main">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">首頁</a></li>
                <li class="breadcrumb-item active"><a href="#">全部商品</a></li>
              </ol>
            <div class="row mt-5 mb-4">
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
                            <span class="special"><small>$</small> 998</span>
                            <span class="origin"><small>$</small> 899</span>
                        </p>
                    <div class="btns">
                        <button type="button" class="btn btn-secondary">缺貨中</button>
                        <button type="button" class="btn btn-wish"><span class="d-none d-lg-inline">加入收藏</span> <i class="far fa-heart"></i></button>
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
                <div class="col-xl-p20 col-lg-3 col-md-4 col-6">
                    <div class="card product">
                        <div class="card-body">
                            <?php if($p['discount']): ?>
                            <span class="tag"><span><?=$p['discount'];?></span></span>
                            <?php endif; ?>
                            <div class="hoverbtn">
                                <button class="wishbtn" type="button" title="加入收藏"><i class="far fa-heart"></i></button>
                                <button class="addbtn" type="button" title="加入購物車"><i class="fas fa-cart-arrow-down"></i></button>
                            </div>
                            <a href="product.php" class="stretched-link" tabindex="0">
                                <img src="<?=$p['image'];?>" class="mb-2">
                            </a>
                            <h5 class="txtbox line2"><?=$p['name'];?></h5>
                            <p class="price">
                                <?php if($p['special']): ?>
                                <span class="special"><small>$</small> <?=$p['special'];?></span>
                                <span class="origin"><small>$</small> <?=$p['price'];?></span>
                                <?php else: ?>
                                <small>$</small> <?=$p['price'];?>
                                <?php endif; ?>
                            </p>
                          </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>