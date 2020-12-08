<?php include('header.php'); ?>
<div class="pagecont checkoutpage">
    <nav class="breadcrumbwrap">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">首頁</a></li>
                <li class="breadcrumb-item"><a href="#">購物車</a></li>
                <li class="breadcrumb-item active"><a href="#">結帳</a></li>
              </ol>
        </div>
    </nav>
    <div class="container pb-lg-5 pb-4">
        <div class="row">
            <div class="col-12">
            <div class="mt-lg-3 mt-0">
                <div class="pagetitle text-center"><h1>結帳</h1></div>
                <form action="success.php">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="sectitle no-border"><h2>結帳資訊</h2></div>
                            <div class="item">
                                <select>
                                    <option>選擇地址簿</option>
                                    <option>Ally</option>
                                    <option>Ally2</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="item">
                                        <label>姓氏</label>
                                        <input type="text"/>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="item">
                                        <label>名字</label>
                                        <input type="text"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="item">
                                        <label>E-mail</label>
                                        <input type="email"/>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="item">
                                        <label>聯絡電話</label>
                                        <input type="text"/>
                                    </div>
                                </div>
                            </div>

                            <?php include('address_combo.php'); ?>
                        </div>
                        <div class="col-lg-6">
                            <div class="sectitle no-border"><h2>支付方式</h2></div>
                            <div class="item">
                                <label class="radiowrap w-100">
                                    <input type="radio" name="payment" value="1"> <span>信用卡<img src="assets/img/creditcard.png" class="ml-3 float-right"></span>
                                </label>
                            </div>
                            <div class="item">
                                <label class="radiowrap w-100">
                                    <input type="radio" name="payment" value="2"> <span>虛擬ATM轉帳</span>
                                </label>
                            </div>
                            <div class="item">
                                <label class="radiowrap w-100">
                                    <input type="radio" name="payment" value="3"> <span>超商取貨付款<img src="assets/img/shopicon.jpg" class="ml-3 float-right"></span>
                                </label>
                            </div>
                            <div class="sectitle no-border mt-4"><h2>運送方式</h2></div>
                            <div class="item">
                                <label class="radiowrap">
                                    <input type="radio" name="shipment" value="1"> <span>超商取貨 - NT$60</span>
                                </label>
                            </div>
                            <div class="item">
                                <label class="radiowrap w-100">
                                    <input type="radio" name="shipment" value="2"> <span>郵寄/宅配運費 - NT$60</span>
                                </label>
                            </div>
                            <div class="sectitle no-border"><h2>備註</h2></div>
                            <div class="item">
                                <textarea rows="2" class="w-100"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="sectitle"><h2>訂單詳情</h2></div>
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
                        <li><span>訂單總計</span><b class="text-main">$998</b></li>
                    </ul>
                    <hr>
                    <div class="text-right">
                        <div class="w-100 mb-3">
                            <label class="checkwrap">
                                <input type="checkbox">
                                <span>我已經閱讀並同意 <a href="info.php">購物須知</a></span>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-main">結帳</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>