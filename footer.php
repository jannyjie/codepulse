<footer class="footer">
    <div class="container pt-4 pb-lg-3">
      <div class="row">
        <div class="col-md-6 col-lg-2 d-none d-lg-block">
          <a href="index.php" class="logo"><img alt="" src="assets/images/logo.png"></a>
        </div>
        <div class="col-md-6 col-lg-2">
          <h5 class="footer-title"><span>關於我們</span></h5>
            <ul class="list-unstyled lefticon">
                <li><a href="about.php"><i class="fas fa-angle-right"></i>關於我們</a></li>
                <li><a href="news.php"><i class="fas fa-angle-right"></i>最新消息</a></li>
                <li><a href="location.php"><i class="fas fa-angle-right"></i>經銷據點</a></li>
                <li><a href="contact.php"><i class="fas fa-angle-right"></i>聯絡我們</a></li>
<!--                <li><a href="support.php"><i class="fas fa-angle-right"></i>支援服務</a></li>-->
            </ul>
        </div>
          <div class="col-md-6 col-lg-4">
          <h5 class="footer-title"><span>聯絡我們</span></h5>
            <ul class="lefticon list-unstyled">
                <li><a href="tel:0223650660"><i class="fas fa-phone"></i>02 23650660</a></li>
                <li><i class="fas fa-clock"></i>10:00-18:00</li>
                <li><a href="mailto:service@codepulse.com.tw"><i class="fas fa-envelope"></i>service@codepulse.com.tw</a></li>
                <li><a href="https://www.google.com.tw/maps/place/可思科技股份有限公司/" title="" target="_blank"><i class="fas fa-map-marker-alt"></i>106台北市大安區羅斯福路三段191號3樓</a></li>
            </ul>
        </div>
        <div class="col-md-6 col-lg-4">
          <h5 class="footer-title"><span>我們的地點</span></h5>
          <div class="iframewrap">
            <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCmdcMYTojkRAR_PAwWl7m2jv9Mk0tiY8Q&amp;q=106台北市大安區羅斯福路三段191號3樓" frameborder="0" style="border:0" allowfullscreen=""></iframe>
            </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 text-center text-lg-right order-lg-2">
            <ul class="iconlist list-unstyled">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
              </ul>
          </div>
          <div class="col-lg-9 text-center text-lg-left">
            <p class="m-0 pt-3 pb-3 copyright">Copyright © 2019 Codepulse ー All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </footer>        
<a class="scrollToTop" href="#"><i class="fas fa-chevron-up"></i></a>
        <script src="assets/js/jquery-3.4.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.magnificpopup-1.1.0.min.js"></script>
        <script src="assets/js/common.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
  var lazyImages = [].slice.call(document.querySelectorAll(".lazy"));

  if ("IntersectionObserver" in window) {
    let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          let lazyImage = entry.target;
          lazyImage.src = lazyImage.dataset.src;
          lazyImage.classList.remove("lazy");
          lazyImageObserver.unobserve(lazyImage);
            console.log(lazyImage.id);
        }
      });
    });

    lazyImages.forEach(function(lazyImage) {
      lazyImageObserver.observe(lazyImage);
    });
  } else {
  }
});

</script>
	</body>
</html>