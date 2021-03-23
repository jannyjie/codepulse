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

      <!-- Card:Start -->
      <h2 class="text-center">Card Default Style</h2>
      <div class="row mb-lg-5">
        <?php foreach($news as $n): ?>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="card mb-4">
            <a href="article.php" tabindex="0">
              <div class="box-img r-16-9" style="background-image:url('<?=$n['thumb']?>')"></div>
            </a>
            <div class="card-body">
              <span class="date"><?=$n['date']?></span>
              <h4 class="title-card"><a href="article.php" class="stretched-link txt-l1"
                  tabindex="0"><?=$n['title']?></a></h4>

              <p class="card-text txt-l2 mb-0 text-muted"><?=$n['description']?></p>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <!-- Card:End -->

      <!-- Card Style2:Start -->
      <h2 class="text-center">Card Style 2</h2>
      <div class="row mb-lg-5">
        <!-- Category:Start -->
        <div class="col-12 col-lg-3 mb-5">
          <div class="list-menu mb-5">
            <div class="list-menu-group">
              <div class="text list-title has-submenu opened">分類名稱1</div>
              <div class="list-content">
                <a href="#" class="list-item active">子分類1</a>
                <a href="#" class="list-item">子分類2</a>
                <a href="#" class="list-item">子分類3</a>
              </div>
            </div>

            <div class="list-menu-group">
              <div class="text list-title has-submenu">分類名稱2</div>
              <div class="list-content">
                <a href="#" class="list-item active">子分類1</a>
                <a href="#" class="list-item">子分類2</a>
                <a href="#" class="list-item">子分類3</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Category:End -->

        <!-- Card Items:Start -->
        <div class="col-12 col-lg-9">
          <div class="row">
            <?php foreach($news as $n): ?>
            <div class="col-sm-6 col-lg-12">
              <div class="card card-news no-shadow mb-5">
                <a href="article.php" tabindex="0">
                  <div class="box-img r-3-2" style="background-image:url('<?=$n['thumb']?>');"></div>
                </a>

                <div class="card-body">
                  <a href="article.php">
                    <h4 class="title-card mb-1 txt-l1"><?=$n['title']?></h4>
                    <p class="card-text txt-l2 mb-3 text-muted"><?=$n['description']?></p>
                  </a>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        <!-- Card Items:End -->
      </div>
      <!-- Card Style2:End -->

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

<script>
  $(function() {
    function setupCategoryMenu () {
      var list_title = $('.list-menu .list-title.has-submenu')

      list_title.each(function(idx, el) {
        if ($(el).hasClass('opened')) {
          toggleOpen($(el))
        } else {
          toggleClose($(el))
        }
      })

      list_title.on('click', function(e) {
        if ($(this).hasClass('opened')) {
          toggleClose($(this))
        } else {
          // close other submenu
          toggleClose(list_title.not($(this)))

          toggleOpen($(this))
        }
      });

      function toggleOpen ($el) {
        $el.addClass('opened');
        $el.siblings('.list-content').slideDown(200);
      }

      function toggleClose ($el) {
        $el.removeClass('opened');
        $el.siblings('.list-content').slideUp(200);
      }
    }


    setupCategoryMenu()

  })
</script>