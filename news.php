<?php include('header.php'); ?>
<div class="pagecont">
    <nav class="breadcrumbwrap">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">首頁</a></li>
                <li class="breadcrumb-item active"><a href="#">最新消息</a></li>
              </ol>
        </div>
    </nav>
    <div class="container">
        <div class="pagetitle"><h1>最新消息</h1></div>
        <div class="row">
            <?php foreach($news as $n): ?>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="card mb-4">
                        <a href="article.php" tabindex="0">
                            <div class="imgwrap r16by9"><img src="<?=$n['thumb']?>"></div>
                        </a>
                        <div class="card-body">
                                <p class="cate mb-2 small text-primary"><i class="fas fa-calendar-alt"></i> <?=$n['date']?></p>
                                <h6 class="textbtn txtbox line1"><a href="article.php" class="stretched-link" tabindex="0"><?=$n['title']?></a></h6>

                            <p class="card-text txtbox line2 mb-2 text-muted"><?=$n['description']?></p>
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