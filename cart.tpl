<?php echo $header; ?>
<div class="container">
  <ul class="breadcrumb">
    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
    <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
    <?php } ?>
  </ul>
  <?php if ($attention) { ?>
  <div class="alert alert-info"><i class="fa fa-info-circle"></i> <?php echo $attention; ?>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
  </div>
  <?php } ?>
  <?php if ($success) { ?>
  <div class="alert alert-success"><i class="fa fa-check-circle"></i> <?php echo $success; ?>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
  </div>
  <?php } ?>
  <?php if ($error_warning) { ?>
  <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
  </div>
  <?php } ?>
  <div class="row">
    <div id="content" class="<?php echo $class; ?>">
      <h1><?php echo $heading_title; ?>
        <?php if ($weight) { ?>
        &nbsp;(<?php echo $weight; ?>)
        <?php } ?>
      </h1>
      <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <td class="text-center"><?php echo $column_image; ?></td>
                <td class="text-left"><?php echo $column_name; ?></td>
                <td class="text-left"><?php echo $column_model; ?></td>
                <td class="text-left"><?php echo $column_quantity; ?></td>
                <td class="text-right"><?php echo $column_price; ?></td>
                <td class="text-right"><?php echo $column_total; ?></td>
                <td></td>
              </tr>
            </thead>
            <tbody id="cp-cart-table">
              <tr v-if="products.length>0" v-for="(p,i) in products">
                  <td class="text-center">
                    <a v-bind:href="p.href"><img v-bind:src="p.thumb" alt="p.name" title="p.name" class="img-thumbnail" /></a>
                  </td>
                  <td class="text-left">
                    <a v-bind:href="p.href">{{p.name}}</a>
                  </td>
                  <td class="text-left">{{p.model}}</td>
                  <td class="text-left">
                    <div class="input-group btn-block" style="max-width: 200px;">
                      <button type="button" data-toggle="tooltip" title="<?php echo $button_minus; ?>" class="btn btn-danger cp-product-quantity-minus-btn" @click="p.quantity--;edit(i,p.cart_id,p.quantity)"><i class="fa fa-minus"></i></button>
                      <input type="text" name="quantity[p.cart_id]" v-model="p.quantity" size="1" class="form-control cp-product-quantity-cell" style="width:20%;float: none;display: inline-block;" @change="edit(i,p.cart_id,p.quantity)"/>
                      <button type="button" data-toggle="tooltip" title="<?php echo $button_plus; ?>" class="btn btn-primary cp-product-quantity-add-btn" @click="p.quantity++;edit(i,p.cart_id,p.quantity)"><i class="fa fa-plus"></i></button>
                    </div>
                    <span class="text-danger cp-product-stock-warning" v-if="p.stock!=1"><?=$text_out_of_stock?></span>
                  </td>
                  <td class="text-right cp-product-price-cell" v-if="p.special"><b>{{ p.special}}</b> <span style="text-decoration: line-through">{{p.price}}</span></td>
                  <td class="text-right cp-product-price-cell" v-else>{{p.price}}</td>
                  <td class="text-right cp-product-total-cell">{{p.total}}</td>
                  <td><button @click="remove(i,p.cart_id)" type="button" data-toggle="tooltip" title="<?php echo $button_remove; ?>" class="btn btn-danger cp-cart-delete-btn"><i class="fa fa-times-circle"></i></button></td>
                </tr>
                
              <tr v-else><td colspan="7"><?=$text_empty?></td></tr>
              <?php foreach ($vouchers as $voucher) { ?>
              <tr>
                <td></td>
                <td class="text-left"><?php echo $voucher['description']; ?></td>
                <td class="text-left"></td>
                <td class="text-left"><div class="input-group btn-block" style="max-width: 200px;">
                    <input type="text" name="" value="1" size="1" disabled="disabled" class="form-control" />
                    <span class="input-group-btn">
                    <button type="button" data-toggle="tooltip" title="<?php echo $button_remove; ?>" class="btn btn-danger" onclick="voucher.remove('<?php echo $voucher['key']; ?>');"><i class="fa fa-times-circle"></i></button>
                    </span></div></td>
                <td class="text-right"><?php echo $voucher['amount']; ?></td>
                <td class="text-right"><?php echo $voucher['amount']; ?></td>
              </tr>
              <?php } ?>
            </tbody>
            <tfoot id="cp-cart-empty-status">
              <tr>
                <td colspan="4"></td>
                <td class="text-right">商品總計</td>
                <td class="text-right">{{total}}</td>
                <td></td>
              </tr>
            </tfoot>
          </table>
        </div>
      </form>
      
      <br />

      <div class="buttons">
        <div class="pull-left"><a href="<?php echo $continue; ?>" class="btn btn-default"><?php echo $button_shopping; ?></a></div>
        <div class="pull-right"><a href="<?php echo $checkout; ?>" class="btn btn-primary"><?php echo $button_checkout; ?></a></div>
      </div>
    </div>
  </div>
</div>
<?php echo $footer; ?>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
var app = new Vue({
  el: '#content',
  data: {
    products: [<?php foreach ($products as $product) : ?>{
      'cart_id': "<?=$product['cart_id']?>",
      'thumb': "<?=$product['thumb']?>",
      'name': "<?=$product['name']?>",
      'model': "<?=$product['model']?>",
      'quantity': <?=$product['quantity']?>,
      'stock': "<?=$product['stock']?>",
      'price': "<?=$product['price']?>",
      'special': "<?=$product['special']?>",
      'total': "<?=$product['total']?>",
      'href': "<?=$product['href']?>"
    },<?php endforeach; ?>],
    total:"<?=$price_total?>",
  },
  methods:{
    edit:function(i,id,q){
        var t = this ;
        axios.post("<?=$url_edit_cart?>","quantity[" + id + "]=" + q)
        .then(function(response) {
            console.log(response.data)
            t.products[i].quantity = response.data.update_patch[id].quantity;
            t.products[i].total = response.data.update_patch[id].total;
            t.products[i].stock = response.data.update_patch[id].stock;
            t.total = response.data.total
        })
        .catch(function (error) {
            console.log(error);
        });
    },
    remove:function(i,id){
        var t = this ;
        axios.post("<?=$url_edit_remove?>","key=" + id)
        .then(function(response) {
            t.products.splice([i],1);
            t.total = response.data.price_total;
            console.log(response.data)
        })
        .catch(function (error) {
            console.log(error);
        });
    },
  },
})
</script>
<!--
<script type="text/javascript" src="catalog/view/js/cpcart.js"></script>
<script type="text/javascript">
  CPcart.init({
    container : "#cp-cart-table",
    itemTemplate : "#cp-cart-row-template"
  });
  CPcart.url_update = "<?=$url_edit_cart?>";
  CPcart.url_remove = "<?=$url_edit_remove?>";


  CPcart.renderList(<?=$json_products?>);
</script>-->
