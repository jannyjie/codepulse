<?php include('header.php'); ?>
<div class="pagecont">
    <nav class="breadcrumbwrap">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">首頁</a></li>
                <li class="breadcrumb-item"><a href="#">最新消息</a></li>
                <li class="breadcrumb-item active"><a href="#">文章標題</a></li>
              </ol>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="pagetitle">
                    <span class="date">2019-05-02</span>
                    <h1>文章標題</h1>
                </div>
                <img src="assets/img/news/pic-news-1.png" class="w-100">
                <div class="description mt-4 mb-4">
                    <p>文章內文</p>
                    <p>文章內文</p>
                    <p>文章內文</p>
                    <p>文章內文</p>
                </div>
                <hr>
                <div class="row">
                    <div class="col-4"><a href="news.php" class="textbtn"><i class="fas fa-angle-left"></i> 上一篇</a></div>
                    <div class="col-4 text-center"><a href="news.php" class="textbtn">回列表</a></div>
                    <div class="col-4 text-right"><a href="news.php" class="textbtn">下一篇 <i class="fas fa-angle-right"></i></a></div>
                </div>
                <hr class="mb-5">
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>