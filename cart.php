<?php include('header.php'); ?>
<div class="pagecont">
    <nav class="breadcrumbwrap">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">首頁</a></li>
                <li class="breadcrumb-item active"><a href="#">購物車</a></li>
            </ol>
        </div>
    </nav>
    <div class="container pb-lg-5 pb-4">
        <div class="row">
            <div class="col-12">
                <div class="mt-lg-3 mt-0">
                    <div class="pagetitle text-center">
                        <h1>購物車</h1>
                    </div>

                    <h4>Style 1: RWD Table</h4>
                    <hr>
                    <table class="table rwd-table table-bordered mb-5">
                        <thead class="text-second">
                            <tr class="active">
                                <td class="text-nowrap">Name</td>
                                <td class="">Price</td>
                                <td class="text-nowrap">Amount</td>
                                <td class="text-nowrap">Subtotal</td>
                                <td class="text-nowrap">Delete</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="td-with-img text-center mobile-active">
                                    <a href="#" class="w-100">
                                        <img src="assets/img/demo-product.jpg">
                                        <h5>Merchandise Name</h5>
                                    </a>
                                </td>
                                <td class="text-center text-nowrap">
                                    <span class="mobile-th">Price</span>
                                    NT $1,000
                                </td>
                                <td class="text-center">
                                    <span class="mobile-th">Amount</span>

                                    <div class="input-number" data-max="10" data-min="1" data-step="1">
                                        <a href="javascript:void(0)" class="minus">-</a>
                                        <input type="text" value="1">
                                        <a href="javascript:void(0)" class="plus">+</a>
                                    </div>
                                </td>

                                <td class="text-center text-nowrap">
                                    <span class="mobile-th">Subtotal</span>
                                    NT $1,000
                                </td>
                                <td class="text-center">
                                    <span class="mobile-th">Delete</span>
                                    <a class="btn btn-icon cart-del-btn"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="td-with-img text-center mobile-active">
                                    <a href="#" class="w-100">
                                        <img src="assets/img/demo-product.jpg">
                                        <h5>Merchandise Name</h5>
                                    </a>
                                </td>
                                <td class="text-center text-nowrap">
                                    <span class="mobile-th">Price</span>
                                    NT $1,000
                                </td>
                                <td class="text-center">
                                    <span class="mobile-th">Amount</span>

                                    <div class="input-number" data-max="10" data-min="1" data-step="1">
                                        <a href="javascript:void(0)" class="minus">-</a>
                                        <input type="text" value="1">
                                        <a href="javascript:void(0)" class="plus">+</a>
                                    </div>
                                </td>

                                <td class="text-center text-nowrap">
                                    <span class="mobile-th">Subtotal</span>
                                    NT $1,000
                                </td>
                                <td class="text-center">
                                    <span class="mobile-th">Delete</span>
                                    <a class="btn btn-icon cart-del-btn"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot class="tfoot-borderless">
                            <tr>
                                <td colspan="3" class="cart-total-empty-td"></td>
                                <th class="py-1 text-nowrap cart-total-th">Subtotal</th>
                                <td class="py-1 text-nowrap cart-total-td">NT $1,000</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="cart-total-empty-td"></td>
                                <th class="py-1 text-nowrap cart-total-th">Discount</th>
                                <td class="py-1 text-nowrap cart-total-td">NT $200</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="cart-total-empty-td"></td>
                                <th class="py-1 text-nowrap cart-total-th">Total</th>
                                <td class="py-1 text-nowrap cart-total-td">NT $1,200</td>
                            </tr>
                        </tfoot>
                    </table>

                    <h4>Style 2: Item List</h4>
                    <hr>
                    <div class="itemlist mb-5">
                        <ul class="list-unstyled">
                            <li>
                                <div class="cartitem">
                                    <a href="product.php" class="info">
                                        <img src="assets/img/demo-product.jpg" class="thumb">

                                        <h5>Bioderma貝膚黛瑪 舒益高效修護組</h5>
                                        <p class="price">
                                            <span class="special">$998</span>
                                            <span class="origin">$899</span>
                                        </p>
                                    </a>
                                    <div class="qtywrap">
                                        <div class="qtybox">
                                            <button type="button"><i class="fas fa-minus"></i></button>
                                            <input type="text" value="1">
                                            <button type="button"><i class="fas fa-plus"></i></button>
                                        </div>
                                        <span>$998</span>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-link text-main"><i class="fas fa-trash-alt"></i></button>
                            </li>
                            <li>
                                <div class="cartitem">
                                    <a href="product.php" class="info">
                                        <img src="assets/img/demo-product.jpg" class="thumb">

                                        <h5>Bioderma貝膚黛瑪 舒益高效修護組</h5>
                                        <p class="price">
                                            <span class="special">$998</span>
                                            <span class="origin">$899</span>
                                        </p>
                                    </a>
                                    <div class="qtywrap">
                                        <div class="qtybox">
                                            <button type="button"><i class="fas fa-minus"></i></button>
                                            <input type="text" value="1">
                                            <button type="button"><i class="fas fa-plus"></i></button>
                                        </div>
                                        <span>$998</span>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-link text-main"><i class="fas fa-trash-alt"></i></button>
                            </li>
                            <li>
                                <div class="cartitem">
                                    <a href="product.php" class="info">
                                        <img src="assets/img/demo-product.jpg" class="thumb">

                                        <h5>Bioderma貝膚黛瑪 舒益高效修護組</h5>
                                        <p class="price">
                                            <span class="special">$998</span>
                                            <span class="origin">$899</span>
                                        </p>
                                    </a>
                                    <div class="qtywrap">
                                        <div class="qtybox">
                                            <button type="button"><i class="fas fa-minus"></i></button>
                                            <input type="text" value="1">
                                            <button type="button"><i class="fas fa-plus"></i></button>
                                        </div>
                                        <span>$998</span>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-link text-main"><i class="fas fa-trash-alt"></i></button>
                            </li>
                        </ul>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-6">
                            <div class="row mb-4 mb-lg-0">
                                <div class="col-8">
                                    <input type="text" placeholder="請輸入優惠券代碼" class="w-100" style="line-height:2em">
                                </div>
                                <div class="col-4">
                                    <button type="button" class="btn btn-main">使用</button>
                                </div>
                            </div>
                            <hr class="d-lg-none">
                        </div>
                        <div class="col-lg-6 text-right">
                            <h4><small>商品總計：</small><b class="text-main">$998</b></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <a class="btn btn-main" href="account.php">繼續購物</a>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn btn-main" href="checkout.php">結帳</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>


<script src="assets/js/wan-spinner.js"></script>
<script>
$('.input-number').each(function(i, element) {
    var elem = $(element);
    var min = elem.data('min');
    var max = elem.data('max');
    var step = elem.data('step');
    var start = elem.find('input').val();
    elem.WanSpinner({
        start: start,
        step: step,
        minValue: min,
        maxValue: max,
        valueChanged: function() {
            return false;
        }
    });
});
</script>