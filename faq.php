<?php include('header.php'); ?>
<div class="pagecont border-top pt-3">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">首頁</a></li>
      <li class="breadcrumb-item active"><a href="news.php">常見問題</a></li>
    </ol>
  </div>
  <section>
    <div class="container">
      
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <h1 class="text-center">常見問題
            <span class="border-under-title mx-auto"></span>
          </h1>
          <ul class="list-faq">
            <? for($n=0;$n<10;$n++): ?>
            <li class="item">
              <h5 class="toggleopen">網站架設完了之後，請問隱私權政策要寫什麼?</h5>
              <div class="ans edit-area">
                <p>請參考 <a href="info.php">隱私權政策</a> 頁面。</p>
              </div>
            </li>
            <? endfor;?>
          </ul>
        </div>
      </div>
    </div>
  </section>
</div>
<?php include('footer.php'); ?>