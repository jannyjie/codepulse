<?php include('header.php'); ?>
<div class="pagecont">
    <nav class="breadcrumbwrap">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">首頁</a></li>
                <li class="breadcrumb-item active"><a href="#">商店資訊</a></li>
              </ol>
        </div>
    </nav>
    <div class="container pb-lg-5 pb-4">
        <div class="pagetitle"><h1>聯絡我們</h1></div>
        <div class="row">
            <div class="col-lg-6">
                <ul class="lefticon list-unstyled">
                    <li><i class="fas fa-map-marker-alt"></i> 台北市大安區羅斯福路三段191號3樓</li>
                    <li><i class="fas fa-phone"></i> 02-2222-2222</li>
                    <li><i class="fas fa-fax"></i> 02-2222-2222</li>
                    <li><i class="fas fa-envelope"></i> service@codepulse.com.tw</li>
                    <li><i class="far fa-clock"></i> 週一至週五10:00-18:00 週休二日</li>
                    <li><a href="line://ti/p/@id"><i class="fab fa-line"></i>id</a></li>
                    <li><a href="https://www.facebook.com/codepulse168/"><i class="fab fa-facebook-f"></i>可思科技</a></li>
                </ul>
                <div class="iframewrap mt-4">
                    <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCmdcMYTojkRAR_PAwWl7m2jv9Mk0tiY8Q&q=可思科技" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>
            </div>
            <div class="col-lg-6">
                <form action="success.php">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>姓名 <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="" required>
                            <span class="text-danger">姓名至少要輸入1個字</span>
                        </div>
                        <div class="form-group col-md-6">
                            <label>聯絡電話</label>
                            <input type="tel" class="form-control" placeholder="">
                        </div>
                        <div class="form-group col-12">
                            <label>Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group col-12">
                            <label>主旨</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="form-group col-12">
                            <label>訊息 <span class="text-danger">*</span></label>
                            <textarea rows="3" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="text-right"><button type="submit" class="mainbtn">送出</button></div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>