@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-4 col-lg-3 page-sidebar">
      <aside>
        <div class="sidebar-box">
          <div class="user">
            <figure>
              <a href="#"><img src="{{ auth()->user()->gravatar }}" alt="{{ auth()->user()->name }}"></a>
            </figure>
            <div class="usercontent">
              <h3>@lang('Hello :name', ['name' => auth()->user()->name])</h3>
              <h4>@lang(auth()->user()->roles->first()->name)</h4>
            </div>
          </div>
          <nav class="navdashboard">
            <ul>
              <li>
                <a class="active" href="{{ route('home') }}">
                  <i class="lni-dashboard"></i>
                  <span>@lang('Dashboard')</span>
                </a>
              </li>
              <li>
                <a href="account-profile-setting.html">
                  <i class="lni-cog"></i>
                  <span>Profile Settings</span>
                </a>
              </li>
              <li>
                <a href="account-myads.html">
                  <i class="lni-layers"></i>
                  <span>My Ads</span>
                </a>
              </li>
              <li>
                <a href="offermessages.html">
                  <i class="lni-envelope"></i>
                  <span>Offers/Messages</span>
                </a>
              </li>
              <li>
                <a href="payments.html">
                  <i class="lni-wallet"></i>
                  <span>Payments</span>
                </a>
              </li>
              <li>
                <a href="account-favourite-ads.html">
                  <i class="lni-heart"></i>
                  <span>My Favourites</span>
                </a>
              </li>
              <li>
                <a href="privacy-setting.html">
                  <i class="lni-star"></i>
                  <span>Privacy Settings</span>
                </a>
              </li>
              <li>
                <a href="{{ route('logout', ['source' => 'dashboard']) }}">
                  <i class="lni-enter"></i>
                  <span>@lang('Logout')</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="widget">
          <h4 class="widget-title">@lang('Advertisement')</h4>
          <div class="add-box">
            <div class="text-center">
                <img src="https://lh6.ggpht.com/iR8AoaX4JzGa8XVUFS1rwIfxV9eMrvPOGgEg5RXyJVLWtYcu9j1rm1qojmATUZbW7zU5PbM=w200" alt="">
            </div>
          </div>
        </div>
      </aside>
    </div>

    <div class="col-sm-12 col-md-8 col-lg-9">
      <div class="page-content">
        <div class="inner-box">
          <div class="dashboard-box">
            <h2 class="dashbord-title">@lang('Dashboard')</h2>
          </div>
          <div class="dashboard-wrapper">
            <div class="dashboard-sections">
              <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                  <div class="dashboardbox">
                    <div class="icon"><i class="lni-write"></i></div>
                    <div class="contentbox">
                      <h2><a href="#">Total Ad Posted</a></h2>
                      <h3>480 Add Posted</h3>
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                  <div class="dashboardbox">
                    <div class="icon"><i class="lni-add-files"></i></div>
                    <div class="contentbox">
                      <h2><a href="#">Featured Ads</a></h2>
                      <h3>80 Add Posted</h3>
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                  <div class="dashboardbox">
                    <div class="icon"><i class="lni-support"></i></div>
                    <div class="contentbox">
                      <h2><a href="#">Offers / Messages</a></h2>
                      <h3>2040 Messages</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <table class="table table-responsive dashboardtable tablemyads">
              <thead>
                <tr>
                  <th>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="checkedall">
                      <label class="custom-control-label" for="checkedall"></label>
                    </div>
                  </th>
                  <th>Photo</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Ad Status</th>
                  <th>Price</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr data-category="active">
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="adone">
                      <label class="custom-control-label" for="adone"></label>
                    </div>
                  </td>
                  <td class="photo"><img class="img-fluid" src="assets/img/product/img1.jpg" alt=""></td>
                  <td data-title="Title">
                    <h3>HP Laptop 6560b core i3 3nd generation</h3>
                    <span>Ad ID: ng3D5hAMHPajQrM</span>
                  </td>
                  <td data-title="Category"><span class="adcategories">Laptops & PCs</span></td>
                  <td data-title="Ad Status"><span class="adstatus adstatusactive">active</span></td>
                  <td data-title="Price">
                    <h3>139$</h3>
                  </td>
                  <td data-title="Action">
                    <div class="btns-actions">
                      <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                      <a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
                      <a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr data-category="active">
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="adtwo">
                      <label class="custom-control-label" for="adtwo"></label>
                    </div>
                  </td>
                  <td class="photo"><img class="img-fluid" src="assets/img/product/img2.jpg" alt=""></td>
                  <td data-title="Title">
                    <h3>Jvc Haebr80b In-ear Sports Headphones</h3>
                    <span>Ad ID: ng3D5hAMHPajQrM</span>
                  </td>
                  <td data-title="Category">Electronics</td>
                  <td data-title="Ad Status"><span class="adstatus adstatusactive">Active</span></td>
                  <td data-title="Price">
                    <h3>$189</h3>
                  </td>
                  <td data-title="Action">
                    <div class="btns-actions">
                      <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                      <a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
                      <a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr data-category="inactive">
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="adthree">
                      <label class="custom-control-label" for="adthree"></label>
                    </div>
                  </td>
                  <td class="photo"><img class="img-fluid" src="assets/img/product/img3.jpg" alt=""></td>
                  <td data-title="Title">
                    <h3>Furniture Straps 4-Pack, TV Anti-Tip Metal Wall </h3>
                    <span>Ad ID: ng3D5hAMHPajQrM</span>
                  </td>
                  <td data-title="Category">Real Estate</td>
                  <td>
                    <span class="adstatus adstatusinactive">Inactive</span>
                  </td>
                  <td data-title="Price">
                    <h3>$69</h3>
                  </td>
                  <td data-title="Action">
                    <div class="btns-actions">
                      <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                      <a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
                      <a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr data-category="sold">
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="adfour">
                      <label class="custom-control-label" for="adfour"></label>
                    </div>
                  </td>
                  <td class="photo"><img class="img-fluid" src="assets/img/product/img4.jpg" alt=""></td>
                  <td data-title="Title">
                    <h3>Apple iPhone X, Fully Unlocked 5.8", 64 GB - Black</h3>
                    <span>Ad ID: ng3D5hAMHPajQrM</span>
                  </td>
                  <td data-title="Category">Mobile</td>
                  <td data-title="Ad Status"><span class="adstatus adstatussold">Sold</span></td>
                  <td data-title="Price">
                    <h3>$89</h3>
                  </td>
                  <td data-title="Action">
                    <div class="btns-actions">
                      <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                      <a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr data-category="active">
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="adfive">
                      <label class="custom-control-label" for="adfive"></label>
                    </div>
                  </td>
                  <td class="photo"><img class="img-fluid" src="assets/img/product/img5.jpg" alt=""></td>
                  <td data-title="Title">
                    <h3>Apple Macbook Pro 13 Inch with/without Touch Bar</h3>
                    <span>Ad ID: ng3D5hAMHPajQrM</span>
                  </td>
                  <td data-title="Category">Apple</td>
                  <td data-title="Ad Status"><span class="adstatus adstatusactive">Active</span></td>
                  <td data-title="Price">
                    <h3>$289</h3>
                  </td>
                  <td data-title="Action">
                    <div class="btns-actions">
                      <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                      <a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
                      <a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr data-category="sold">
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="adsix">
                      <label class="custom-control-label" for="adsix"></label>
                    </div>
                  </td>
                  <td class="photo"><img class="img-fluid" src="assets/img/product/img6.jpg" alt=""></td>
                  <td data-title="Title">
                    <h3>Apple MQDT2CL/A 10.5-Inch 64GB Wi-Fi iPad Pro</h3>
                    <span>Ad ID: ng3D5hAMHPajQrM</span>
                  </td>
                  <td data-title="Category">Apple iPad</td>
                  <td data-title="Ad Status"><span class="adstatus adstatussold">Sold</span></td>
                  <td data-title="Price">
                    <h3>$159</h3>
                  </td>
                  <td data-title="Action">
                    <div class="btns-actions">
                      <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                      <a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr data-category="expired">
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="adseven">
                      <label class="custom-control-label" for="adseven"></label>
                    </div>
                  </td>
                  <td class="photo"><img class="img-fluid" src="assets/img/product/img7.jpg" alt=""></td>
                  <td data-title="Title">
                    <h3>Essential Phone 8GB Unlocked with Dual Camera</h3>
                    <span>Ad ID: ng3D5hAMHPajQrM</span>
                  </td>
                  <td data-title="Category">Mobile</td>
                  <td data-title="Ad Status"><span class="adstatus adstatusexpired">Expired</span></td>
                  <td data-title="Price">
                    <h3>$89</h3>
                  </td>
                  <td data-title="Action">
                    <div class="btns-actions">
                      <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                      <a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
                      <a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr data-category="inactive">
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="adeight">
                      <label class="custom-control-label" for="adeight"></label>
                    </div>
                  </td>
                  <td class="photo"><img class="img-fluid" src="assets/img/product/img8.jpg" alt=""></td>
                  <td data-title="Title">
                    <h3>LG Nexus 5x LG-H791 32GB GSM Smartphone</h3>
                    <span>Ad ID: ng3D5hAMHPajQrM</span>
                  </td>
                  <td data-title="Category">Mobile</td>
                  <td>
                    <span class="adstatus adstatusinactive">Inactive</span>
                  </td>
                  <td data-title="Price">
                    <h3>$59</h3>
                  </td>
                  <td data-title="Action">
                    <div class="btns-actions">
                      <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                      <a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
                      <a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr data-category="expired">
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="adnine">
                      <label class="custom-control-label" for="adnine"></label>
                    </div>
                  </td>
                  <td class="photo"><img class="img-fluid" src="assets/img/product/img9.jpg" alt=""></td>
                  <td data-title="Title">
                    <h3>Samsung Galaxy G550T On5 GSM Unlocked Smartphone</h3>
                    <span>Ad ID: ng3D5hAMHPajQrM</span>
                  </td>
                  <td data-title="Category">Mobile</td>
                  <td data-title="Ad Status"><span class="adstatus adstatusexpired">Expired</span></td>
                  <td data-title="Price">
                    <h3>$129</h3>
                  </td>
                  <td data-title="Action">
                    <div class="btns-actions">
                      <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                      <a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
                      <a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr data-category="deleted">
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="adten">
                      <label class="custom-control-label" for="adten"></label>
                    </div>
                  </td>
                  <td class="photo"><img class="img-fluid" src="assets/img/product/img10.jpg" alt=""></td>
                  <td data-title="Title">
                    <h3>Apple iMac Pro 27" All-in-One Desktop, Space Gray</h3>
                    <span>Ad ID: ng3D5hAMHPajQrM</span>
                  </td>
                  <td data-title="Category">Apple iMac</td>
                  <td data-title="Ad Status"><span class="adstatus adstatusdeleted">Deleted</span></td>
                  <td data-title="Price">
                    <h3>$389</h3>
                  </td>
                  <td data-title="Action">
                    <div class="btns-actions">
                      <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                      <a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
                      <a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>  
</div>    
@endsection
