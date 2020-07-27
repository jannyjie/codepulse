<?php include('header.php'); ?>
<div class="pagecont">
  <section class="slidersec">
    <div class="mainslider">
      <? for($i=0;$i<3;$i++): ?>
      <div class="item">
          <div class="bigbanner" style="background-image:url('assets/img/pic-banner.png')">
              <div class="content wow animated fadeIn">
                  <div class="container">
                      <h2>標題</h2>
                      <a href="category.php" class="btn btn-banner stretched-link">了解更多</a>
                  </div>
              </div>
          </div>
      </div>
      <? endfor; ?>
    </div>
  </section>
  <section>
    <div class="container">
      <h2 class="title-sec">關於我們</h2>
    </div>
  </section>
</div>
<?php include('footer.php'); ?>