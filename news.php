<?php include('header.php'); ?>
<div class="pagecont border-top pt-3">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">首頁</a></li>
      <li class="breadcrumb-item active"><a href="news.php">最新消息</a></li>
    </ol>
  </div>
  <section>
    <div class="container">
      <h1 class="text-center">
        最新消息
        <span class="border-under-title mx-auto"></span>
      </h1>
      <ul class="text-center">
        <li class="list-inline-item"><a href="news.php">全部</a></li>
        <li class="list-inline-item"><a href="news.php">分類1</a></li>
        <li class="list-inline-item"><a href="news.php">分類2</a></li>
      </ul>
      <hr>
      <div class="row mt-lg-5">
        <?php foreach($news as $n): ?>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="card mb-4">
            <a href="article.php" tabindex="0">
              <div class="box-img r-16-9" style="background-image:url('<?=$n['thumb']?>')"></div>
            </a>
            <div class="card-body">
              <span class="date"><?=$n['date']?></span>
              <h4 class="title-card"><a href="article.php" class="stretched-link txt-l1" tabindex="0"><?=$n['title']?></a></h4>

              <p class="card-text txt-l2 mb-0 text-muted"><?=$n['description']?></p>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <div class="text-center">
        <ul class="list-page">
          <li><a href="news.php"><i class="fas fa-angle-double-left"></i></a></li>
          <li><a href="news.php"><i class="fas fa-angle-left"></i></a></li>
          <li><a href="news.php" class="active">1</a></li>
          <li><a href="news.php">2</a></li>
          <li><a href="news.php">3</a></li>
          <li><a href="news.php"><i class="fas fa-angle-right"></i></a></li>
          <li><a href="news.php"><i class="fas fa-angle-double-right"></i></a></li>
        </ul>
      </div>
    </div>
  </section>
</div>
<?php include('footer.php'); ?>