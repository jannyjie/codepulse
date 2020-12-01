<?php include('header.php'); ?>
<div class="pagecont border-top pt-3">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">首頁</a></li>
      <li class="breadcrumb-item"><a href="news.php">最新消息</a></li>
      <li class="breadcrumb-item active"><a href="article.php">文章標題</a></li>
    </ol>
  </div>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <span class="date">2019-05-02</span>
          <h1>文章標題</h1>
          <div class="text-center py-3">
            <img src="assets/img/pic-banner.png">
          </div>
          <div class="edit-area mt-4 mb-4">
            <p>文章內文</p>
            <p>文章內文</p>
            <p>文章內文</p>
            <p>文章內文</p>
          </div>
          <hr>
          <div class="row no-gutters">
            <div class="col-4"><a href="news.php" class="textbtn"><i class="fas fa-angle-left"></i> 上一篇</a></div>
            <div class="col-4 text-center"><a href="news.php" class="textbtn">回列表</a></div>
            <div class="col-4 text-right"><a href="news.php" class="textbtn">下一篇 <i class="fas fa-angle-right"></i></a></div>
          </div>
          <hr>
        </div>
      </div>
    </div>
  </section>
</div>
<?php include('footer.php'); ?>
<script>
 $(function() {
   $('.edit-area table').wrap('<div class="table-responsive"></div>')
 })
</script>