<?php include('header.php'); ?>
<div class="pagecont">
    <nav class="breadcrumbwrap">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">首頁</a></li>
                <li class="breadcrumb-item"><a href="#">會員中心</a></li>
                <li class="breadcrumb-item"><a href="#">訂單記錄</a></li>
                <li class="breadcrumb-item active"><a href="#">#3</a></li>
              </ol>
        </div>
    </nav>
    <div class="container pb-lg-5 pb-4">
        <div class="row">
            <div class="col-12">
            <div class="box mt-lg-3 mt-0">
                <div class="pagetitle"><h1>訂單記錄 #3</h1></div>
                <div class="row">
                    <div class="col-xl-4">
                        <ul class="list-unstyled orderinfo">
                            <li><b>訂單日期：</b> 2018-07-02</li>
                            <li><b>付款方式：</b> 貨到付款</li>
                            <li><b>運送方式：</b> 郵寄/宅配運費</li>
                            <li><b>付款地址：</b> <br>張富山, 台灣, 台北市內湖區 114, 麗山街364巷2號</li>
                            <li><b>運送地址：</b> <br>張富山, 台灣, 台北市內湖區 114, 麗山街364巷2號</li>
                        </ul>
                    </div>
                    <div class="col-xl-8">
                        <b>訂單詳情</b>
                        <div class="itemlist mb-3">
                        <ul class="list-unstyled">
                            <li class="d-none d-md-flex">
                                <div class="cartitem">
                                    <span>商品</span>
                                    <div class="qtywrap">
                                        <div class="qtybox text-center">
                                            價格
                                        </div>
                                        
                                        <p class="mb-0">
                                            數量
                                        </p>
                                    </div>
                                </div>
                                <span>小計</span>
                            </li>
                            <li>
                                <div class="cartitem">
                                    <a href="product.php" class="info">
                                        <h5>Bioderma貝膚黛瑪 舒益高效修護組</h5>
                                    </a>
                                    <div class="qtywrap">
                                        <div class="qtybox text-center">
                                            
                                            <p class="price" style="font-size:14px">
                                                <span class="special">$998</span>
                                                <span class="origin">$899</span>
                                            </p>
                                        </div>
                                        <span><span class="d-md-none">× </span>1</span>
                                        
                                    </div>
                                </div>
                                <span>$998</span>
                            </li>
                            <li>
                                <div class="cartitem">
                                    <a href="product.php" class="info">
                                        <h5>Bioderma貝膚黛瑪 舒益高效修護組</h5>
                                    </a>
                                    <div class="qtywrap">
                                        <div class="qtybox text-center">
                                            
                                            <p class="price" style="font-size:14px">
                                                <span class="special">$998</span>
                                                <span class="origin">$899</span>
                                            </p>
                                        </div>
                                        <span><span class="d-md-none">× </span>1</span>
                                        
                                    </div>
                                </div>
                                <span>$998</span>
                            </li>
                        </ul>
                    </div>
                    <ul class="list-unstyled totals">
                        <li><span>商品小計</span>$998</li>
                        <li><span>郵寄/宅配運費</span>$60</li>
                        <li><span>免運費</span>$-60</li>
                        <li><span>訂單總計</span><b class="text-primary">$998</b></li>
                    </ul>
                    </div>
                </div>
                <b>訂單記錄</b>
                <table class="table mt-3">
                      <thead>
                        <tr>
                          <td>日期</td>
                          <td>狀態</td>
                          <td>備註</td>
                        </tr>
                      </thead>
                      <tbody>
                          <tr>
                          <td>2018-07-02</td>
                          <td>待處理</td>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>
                <a class="btn btn-light" href="orderlist.php">返回</a>
            </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>