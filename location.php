<?php include('header.php'); ?>
<div class="pagecont border-top pt-3">
    <div class="container">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">首頁</a></li>
          <li class="breadcrumb-item active"><a href="location.php">公司據點</a></li>
        </ol>
    </div>
  <section>
    <div class="container">
      <h1 class="mb-4 mb-lg-5">
        公司據點
      </h1>
        <div class="row">
          <? for($i=0;$i<6;$i++): ?>
            <div class="col-lg-6 mb-4">
              <div class="p-3 p-lg-4 shadow">
                <h4 class="mb-4">據點<?=$i?></h4>
                <ul class="list-contact-info">
                    <li><a href="tel:"><i class="fas fa-phone"></i> 02-2222-2222</a></li>
                    <li><i class="fas fa-fax"></i> 02-2222-2222</li>
                    <li><i class="far fa-clock"></i> 週一至週五10:00-18:00 週休二日</li>
                    <li>
                      <a href="https://www.google.com.tw/maps/place/可思科技股份有限公司/" title="" target="_blank"><i class="fas fa-map-marker-alt"></i> 台北市大安區羅斯福路三段191號3樓</a>
                    </li>
                </ul>
                <div class="text-right">
                  <a href="#map-box" data-iframe="https://www.google.com/maps/embed/v1/place?key=AIzaSyCmdcMYTojkRAR_PAwWl7m2jv9Mk0tiY8Q&q=可思科技股份有限公司"><i class="fas fa-map"></i></a>
                </div>
              </div>
            </div>
          <? endfor; ?>
        </div>
    </div>
  </section>
</div>
<div id="map-box" class="white-popup video mfp-hide box-iframe">
  <iframe src="#" frameborder="0" style="border:0" allowfullscreen=""></iframe>
</div>
<?php include('footer.php'); ?>
<script>
$('[href="#map-box"]').magnificPopup({
    type: 'inline',
    callbacks: {
        elementParse: function(item) {
            $(item.src).find('iframe').attr('src',item.el.data('iframe'));
          },
    },
    mainClass: 'mfp-fade',
});
</script>