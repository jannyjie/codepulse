<? include("header.php");?>
<div class="pagecont">
  <div class="container pt-4">
      <div class="title-page">
        <h1>網頁元素運用
        <span>Elements</span></h1>
      </div>
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="basic">
            <span class="en">Oswald /</span> Arial 思源黑體
          </div>
        </div>
        <div class="col-md-6">
          <div class="between colors">
            <div class="main"></div>
            <div class="second"></div>
            <div class="light"></div>
            <div class="black"></div>
            <div class="grey"></div>
            <div class="red"></div>
          </div>
        </div>
      </div>
    <div class="border p-4 mb-4">
      <h2>Typography</h2>
      <h3 class="title-sec">區塊標題</h3>
      <h3 class="title-sec small">區塊標題 (較小)</h3>
      <hr>
      <h5 class="title-card">項目標題</h5>
      <hr>
      <div class="title-page">
        <h1>頁面標題
        <span>小標</span></h1>
      </div>
      <hr>
      <p class="price">價格</p>
      <p class="price special">價格(強調)</p>
      <hr>
      <p>
        <span>Text</span>
        <span class="text-danger">Error message</span>
        <a href="#">Link</a>
      </p>
    </div>
    <div class="border p-4 mb-4">
      <h2>Buttons / Form</h2>
      <a href="#" class="btn">default</a>
      <a href="#" class="btn btn-main">main</a>
      <a href="#" class="btn btn-main-2">second</a>
      <a href="#" class="btn btn-white">white</a>
      <a href="#" class="btn btn-more">More</a>
      <a href="#" class="btn btn-banner">Banner</a>
      <span class="tag hot">tag-hot</span>
      <span class="tag new">tag-new</span>
      
      <a href="#" class="btn-dark btn">arrow icon<span class="i_arrow"></span></a>
      <a href="#" class="btn-sec">section</a>
      <h6 class="sub">數量</h6>
      <div class="box-qty">
        <button><i class="fas fa-plus"></i></button>
        <input type="text" value="1">
        <button><i class="fas fa-minus"></i></button>
      </div>
      <h6 class="sub">表單填寫</h6>
      <div class="row">
        <div class="col-md-4">
          <h6 class="sub">Default</h6>
          <div class="form-item">
              <label>Label</label>
              <input type="text" placeholder="placeholder">
            </div>
          <div class="form-item">
              <label>Select</label>
              <select>
                <option>Option</option>
                <option>Option</option>
                <option>Option</option>
            </select>
            </div>
        </div>
        <div class="col-md-4">
          <h6 class="sub">Inline</h6>
          <div class="form-item inline">
              <label>Label</label>
              <input type="text" placeholder="placeholder">
            </div>
        </div>
        <div class="col-md-4">
          <h6 class="sub">Checkbox / Radio</h6>
          <label class="checkbox">
            <input type="checkbox">
            <span>Checkbox</span>
          </label><br>
          <label class="checkbox radio">
            <input type="radio" name="radio">
            <span>Radio 1</span>
          </label>
          <label class="checkbox radio">
            <input type="radio" name="radio">
            <span>Radio 2</span>
          </label>
        </div>
      </div>
    </div>
    <div class="border p-4 mb-4">
      <h2>List</h2>
      <h6 class="sub">News list</h6>
        <ul class="list-news">
          <li>
            <span class="date">2000-01-01</span>
            <h6 class="title mb-0">title</h6>
            <a href="article.php" class="stretched-link">MORE <i class="i_arrow"></i></a>
          </li>
          <li>
            <span class="date">2000-01-01</span>
            <h6 class="title mb-0">title</h6>
            <a href="article.php" class="stretched-link">MORE <i class="i_arrow"></i></a>
          </li>
          <li>
            <span class="date">2000-01-01</span>
            <h6 class="title mb-0">title</h6>
            <a href="article.php" class="stretched-link">MORE <i class="i_arrow"></i></a>
          </li>
        </ul>
      <div class="row">
        <div class="col-md-4">
          <h6 class="sub">pagination</h6>
          <ul class="list-page">
            <li><a href="#" class="active">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h6 class="sub">infomation</h6>
          <ul class="list-info">
            <li><span>key</span> value</li>
            <li><span>key</span> value</li>
            <li><span>key</span> value</li>
            <li><span>key</span> value</li>
          </ul>
        </div>
        <div class="col-md-4">
          <h6 class="sub">left angle list</h6>
          <ul class="list-angle">
            <li><a href="#">item</a></li>
            <li><a href="#">item</a></li>
            <li><a href="#">item</a></li>
            <li><a href="#">item</a></li>
          </ul>
        </div>
      </div>
    </div>
      
    <div class="border p-4 mb-4">
      <h2>內容框架</h2>
      <div class="row">
        <div class="col-md-6 col-xl-3">
          <h6 class="sub">Picture frame(.r-4-3/.r-16-9)</h6>
          <div class="box-img" style="background-image:url('assets/img/demo-news.png')"></div>
        </div>
        <div class="col-md-6 col-xl-3">
          <h6 class="sub">Picture frame with description</h6>
          <div class="card shadow card-news">
              <div class="box-img" style="background-image:url('assets/img/demo-news.png')"></div>
              <div class="card-body">
                <h4 class="title-card"><a href="article.php" class="stretched-link" tabindex="0">Title</a></h4>
                <p>Abstract: 我是簡述，我是簡述，我是簡述，我是簡述，我是簡述，我是簡述，我是簡述，我是簡述，我是簡述。</p>
              </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <h6 class="sub">board</h6>
          <div class="board">
            <h4>Title 標題</h4>
            <p>text 內文內文</p>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <h6 class="sub">icon</h6>
          <div class="oval shadow">
            <img src="assets/img/logo.png">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<? include("footer.php");?>