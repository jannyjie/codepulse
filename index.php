<?php include('header.php'); ?>
<div class="pagecont">
    <section class="slidersec">
      <div class="mainslider">
        <div class="item">
            <div class="bigbanner overlay" style="background-image:url('assets/img/banner.png')">
                <div class="content wow animated fadeIn">
                  <h2>提供您最好的品質</h2>
                    <h5 class=" sub-title">Hikari作為觀賞魚飼料的先驅，我們為世界提供最高品質和新產品<br>邀請您加入我們的世界</h5>
                    <a href="category.php" class="btn-w">了解更多</a>
                    <a href="category.php" class="stretched-link"></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="bigbanner overlay" style="background-image:url('assets/img/banner.png')">
                <div class="content wow animated fadeIn">
                  <h2>提供您最好的品質</h2>
                    <h5 class=" sub-title">Hikari作為觀賞魚飼料的先驅，我們為世界提供最高品質和新產品<br>邀請您加入我們的世界</h5>
                    <a href="category.php" class="btn-w">了解更多</a>
                    <a href="category.php" class="stretched-link"></a>
                </div>
            </div>
        </div>
      </div>
    </section>
    <?php for ($i=0; $i<10; $i++) {?>
    <div style="margin:200px auto">
        <img data-src="assets/img/demo.jpg" id="l<?=$i?>" class="lazy">
    </div>
    <?php } ?>
</div>
<?php include('footer.php'); ?>