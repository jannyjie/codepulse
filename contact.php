<?php include('header.php'); ?>
<div class="pagecont border-top pt-3">
    <div class="container">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">首頁</a></li>
          <li class="breadcrumb-item active"><a href="contact.php">聯絡我們</a></li>
        </ol>
    </div>
  <section>
    <div class="container">
      <h1 class="mb-4 mb-lg-5">
        聯絡我們
      </h1>
        <div class="row">
            <div class="col-lg-4">
                <ul class="list-contact-info">
                    <li><a href="tel:"><i class="fas fa-phone"></i> 02-2222-2222</a></li>
                    <li><i class="fas fa-fax"></i> 02-2222-2222</li>
                    <li><a href="mailto:service@codepulse.com.tw"><i class="fas fa-envelope"></i> service@codepulse.com.tw</a></li>
                    <li><i class="far fa-clock"></i> 週一至週五10:00-18:00 週休二日</li>
                    <li><a href="line://ti/p/@id"><i class="fab fa-line"></i>id</a></li>
                    <li><a href="https://www.facebook.com/codepulse168/"><i class="fab fa-facebook-square"></i> 粉絲專頁</a></li>
                    <li>
                      <a href="https://www.google.com.tw/maps/place/可思科技股份有限公司/" title="" target="_blank"><i class="fas fa-map-marker-alt"></i> 台北市大安區羅斯福路三段191號3樓</a>
                      <div class="box-iframe mt-2">
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCmdcMYTojkRAR_PAwWl7m2jv9Mk0tiY8Q&q=可思科技" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                      </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-8 pl-lg-5">
                <form action="success.php">
                    <div class="form-row">
                        <div class="form-item col-md-6">
                            <label>姓名 <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="" required>
                            <span class="text-danger">姓名至少要輸入1個字</span>
                        </div>
                        <div class="form-item col-md-6">
                            <label>聯絡電話</label>
                            <input type="tel" class="form-control" placeholder="">
                        </div>
                        <div class="form-item col-12">
                            <label>Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-item col-12">
                            <label>主旨</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="form-item col-12">
                            <label>訊息 <span class="text-danger">*</span></label>
                            <textarea rows="3" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="text-right"><button type="submit" class="btn btn-main">送出</button></div>
                </form>
            </div>
        </div>
    </div>
  </section>
</div>
<?php include('footer.php'); ?>