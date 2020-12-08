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
                    <div class="item"> 
                      <a href="assets/img/demo-product.jpg" class="popup w-100">
                        <div class="box-img" style="background-image:url('assets/img/demo-product.jpg')"></div>
                      </a> 
                    </div>
                    <div class="item"> 
                      <a href="assets/img/demo-product.jpg" class="popup w-100">
                        <div class="box-img" style="background-image:url('assets/img/demo-product.jpg')"></div>
                      </a> 
                    </div>
<!--
                    <div class="item"> 
                      <a href="assets/img/demo-product.jpg" class="popup w-100">
                        <div class="box-img" style="background-image:url('assets/img/demo-product.jpg')"></div>
                      </a> 
                    </div>
                    <div class="item"> 
                      <a href="assets/img/demo-product.jpg" class="popup w-100">
                        <div class="box-img" style="background-image:url('assets/img/demo-product.jpg')"></div>
                      </a> 
                    </div>
                    <div class="item"> 
                      <a href="assets/img/demo-product.jpg" class="popup w-100">
                        <div class="box-img" style="background-image:url('assets/img/demo-product.jpg')"></div>
                      </a> 
                    </div>
-->

                </div>
                <div class="thumbs">
                    <div class="item">
                      <a href="javascript:void(0);" title="" class="w-100">
                      <div class="box-img" style="background-image:url('assets/img/demo-product.jpg')"></div>
                      </a>
                    </div>
                    <div class="item">
                      <a href="javascript:void(0);" title="" class="w-100">
                      <div class="box-img" style="background-image:url('assets/img/demo-product.jpg')"></div>
                      </a>
                    </div>
<!--
                    <div class="item">
                      <a href="javascript:void(0);" title="" class="w-100">
                      <div class="box-img" style="background-image:url('assets/img/demo-product.jpg')"></div>
                      </a>
                    </div>
                    <div class="item">
                      <a href="javascript:void(0);" title="" class="w-100">
                      <div class="box-img" style="background-image:url('assets/img/demo-product.jpg')"></div>
                      </a>
                    </div>
                    <div class="item">
                      <a href="javascript:void(0);" title="" class="w-100">
                      <div class="box-img" style="background-image:url('assets/img/demo-product.jpg')"></div>
                      </a>
                    </div>
-->
                </div>
                <div class="mt-3">
                    <p class="text-main mb-1">促銷活動：</p>
                    <a href="#" class="tag new">保養品全系列 9折</a>
                    <a href="#" class="tag new">保養品組合全系列 8折</a>
                </div>
            </div>
            <div class="col-xl-7 col-md-6 mt-4 mt-md-0">
                <h2 class="title-sec">Bioderma貝膚黛瑪 舒益高效修護組</h2>
                <p class="small text-muted">
                    商品型號：OD1234
                </p>
                <p>【專業進階級防曬】臨界波長381.8nm 有效抵抗紫外線長波UVA，Boots Star ★★★★ 全寬頻防護，有效預防曬紅、曬黑、曬傷、光老化。 <br><br>
                    【輕盈水感】水為基底搭配無油配方、三效獨特霧光Dry Touch成分，提供給肌膚絲絨般霧面觸感，使肌膚清爽無負擔。 <br><br>
                    【專業成分Cellular Bioprotection™】有效保護肌膚，提升肌膚防禦力。</p>
                <hr>
                <div class="options">
                    <span>選項</span>
                    <select>
                        <option>一件</option>
                        <option>全套組</option>
                    </select>
                </div>
                <div class="options">
                    <span>數量</span>
                    <input type="text" value="1">
                </div>
                <hr>
                <p class="price">
                    <s>NT$998</s>
                    <span class="price special">NT$899</span>
                </p>
                <div class="btns">
                    <button type="button" class="btn btn-main">加入購物車</button>
                    <button type="button" class="btn btn-main-2">立即購買</button>
                    <button type="button" class="btn btn-more"><span class="d-none d-lg-inline">加入收藏</span> <i class="far fa-heart"></i></button>
                </div>
                <div class="btns">分享：
                    <button type="button" class="btn btn-facebook"><i class="fab fa-facebook-f"></i></button>
                    <button type="button" class="btn btn-line"><i class="fab fa-line"></i></button>
                </div>
            </div>
        </div>
        <h2 class="title-sec">商品詳情</h2>
        <div class="desc">
            <p>【專業進階級防曬】臨界波長381.8nm 有效抵抗紫外線長波UVA，Boots Star ★★★★ 全寬頻防護，有效預防曬紅、曬黑、曬傷、光老化。 <br><br>
                    【輕盈水感】水為基底搭配無油配方、三效獨特霧光Dry Touch成分，提供給肌膚絲絨般霧面觸感，使肌膚清爽無負擔。 <br><br>
                    【專業成分Cellular Bioprotection™】有效保護肌膚，提升肌膚防禦力。</p>
        </div>
        <h2 class="title-sec mt-5">相關商品</h2>
        <div class="row no-gutters">
            <?php foreach(array_slice($products,0,5) as $i => $p): ?>
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
    </div>
</div>
<?php include('footer.php'); ?>