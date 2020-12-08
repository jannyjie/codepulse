<?php include('header.php'); ?>
<!-- slick -->
<link href="assets/css/slick.css" rel="stylesheet" type="text/css">
<div class="pagecont border-top pt-3">
  <section class="container">
    <h2>Select2 套件</h2>

    <div class="col-8">
      <form action="success.php">
        <div class="form-row mb-5 ">
          <!-- Item -->
          <!-- 詢問項目(dropdown) -->
          <div class="form-item col-12">
            <label>詢問項目</label>
            <select class="js-select2 form-control" required>
            　<option>Option1</option>
            　<option>Option2</option>
            　<option>Option3</option>
            　<option>Option4</option>
            　<option>Option5</option>
            </select>
          </div>
          <!-- Action Button -->
          <button type="submit"class="btn-main">Submit</button>
        </div>
      </form>
    </div>
  </section>

  <section class="container">
    <div class="row">
      <div class="col-12 mb-5">
        <h4>Button Wave Animation</h4>
        <a href="http://fian.my.id/Waves/" target="_blank">使用套件: node-waves (點此看套件官網)</a>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-5">
        <h5>button wave (淺色)</h5>
        <p> .waves-effect + .waves-light</p>

        <div class="btn btn-main waves-effect waves-light">Waves Light</div>
        <div class="btn btn-light waves-effect waves-light">Waves Light</div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-5">
        <h5>button waves (深色)</h5>
        <p>.waves-effect + .waves-float</p>
        <div class="btn btn-primary waves-effect waves-float">Waves Float</div>
        <div class="btn btn-light waves-effect waves-float">Waves Float</div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-5">
        <h5>div waves (一般)</h5>
        <div class="waves-effect waves-block card" style="width: 300px; height: 300px;">Please Click this card to see the effect</div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-5">
        <h5>div waves (陰影效果)</h5>
        <div class="waves-effect waves-block waves-float card" style="width: 300px; height: 300px;">Please Click this card to see the effect</div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-5">
      <h5>圖片波浪效果 (需用 JS 動態加)</h5>

      <div class="waves-effect">
        <img class="w-100" src="https://farm2.staticflickr.com/1297/1091511802_2fb2451ecc_n.jpg">
      </div>
      </div>
    </div>
  </section>

</body>
</html>
<?php include('footer.php'); ?>
<script src='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/node-waves/0.7.6/waves.min.js" integrity="sha512-MzXgHd+o6pUd/tm8ZgPkxya3QUCiHVMQolnY3IZqhsrOWQaBfax600esAw3XbBucYB15hZLOF0sKMHsTPdjLFg==" crossorigin="anonymous"></script>
<script>
$(document).ready(function (e) {
  // JQuery select2
  $('.js-select2').select2({
    width: '100%',
    theme: 'default',
    minimumResultsForSearch: Infinity
  })

  // node-waves animation
  if (Waves) Waves.init({ duration: 1000 })
})

</script>