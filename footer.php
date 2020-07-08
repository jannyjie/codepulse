<footer class="footer">
    <div class="container pt-3 pb-lg-3">
        <a href="index.php" class="logo mb-4"><img alt="" src="assets/img/logo.png"></a>
      <div class="row">
        <div class="col-md-6 col-lg-2">
          <h5 class="footer-title"><span>關於我們</span></h5>
            <ul class="list-angle">
                <li><a href="about.php">關於我們</a></li>
                <li><a href="news.php">最新消息</a></li>
                <li><a href="location.php">經銷據點</a></li>
                <li><a href="contact.php">聯絡我們</a></li>
            </ul>
        </div>
          <div class="col-md-6 col-lg-4">
          <h5 class="footer-title"><span>聯絡我們</span></h5>
            <ul>
                <li><a href="tel:0223650660">Tel: 02 23650660</a></li>
                <li><a href="line://ti/p/@123456">Line @123456</a></li>
                <li>Open: 10:00-18:00</li>
                <li><a href="mailto:service@codepulse.com.tw">Email: service@codepulse.com.tw</a></li>
                <li><a href="https://www.google.com.tw/maps/place/可思科技股份有限公司/" title="" target="_blank">106台北市大安區羅斯福路三段191號3樓</a></li>
            </ul>
        </div>
        <div class="col-md-6 col-lg-3">
          <h5 class="footer-title"><span>我們的地點</span></h5>
          <div class="iframe">
            <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCmdcMYTojkRAR_PAwWl7m2jv9Mk0tiY8Q&amp;q=106台北市大安區羅斯福路三段191號3樓" frameborder="0" style="border:0" allowfullscreen=""></iframe>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <h5 class="footer-title"><span>Facebook</span></h5>
          <div class="iframe">
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcodepulse168%2F&amp;tabs=timeline&amp;width=600&amp;small_header=false&amp;adapt_container_width=false&amp;hide_cover=false&amp;show_facepile=true&amp;appId" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            </div>
        </div>
      </div>
    </div>
  <p class="copyright">Copyright © 2019 Codepulse ー All Rights Reserved.</p>
  </footer>        
<a class="scrollToTop" href="#"><i class="fas fa-chevron-up"></i></a>
        <script src="assets/js/jquery-3.4.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.slick-1.9.0.min.js"></script>
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