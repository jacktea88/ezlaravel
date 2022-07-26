<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
  <title>Snacks Restaurants Category Flat Bootstrap Responsive Web Template | Home :: W3layouts</title>
  <!-- Meta tag Keywords -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8" />
  <meta name="keywords"
    content="Snacks Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script>
    addEventListener("load", function () {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>

{{-- 可選擇是否要繼承的style部份 --}}
@section('style_filterDiv')
<style>
    .filterDiv {
      float: left;
      background-color: #2196F3;
      color: #ffffff;
      width: 100px;
      line-height: 100px;
      text-align: center;
      margin: 2px;
      display: none;
    }
</style>
@show

@section('style_show')
<style>
    .show {
      display: block;
    }
</style>
@show

@section('style_container')
<style>
    .container {
      margin-top: 20px;
      overflow: hidden;
    }
</style>
@show

@section('style_btn')
<style>
    /* Style the buttons */
    .btn {
      border: none;
      outline: none;
      padding: 12px 16px;
      background-color: #f1f1f1;
      cursor: pointer;
    }

    .btn:hover {
      background-color: #ddd;
    }

    .btn.active {
      background-color: #666;
      color: white;
    }
</style>
@show

  <!--// Meta tag Keywords -->

  <!-- Custom-Files -->
  {{-- 將以下全部原模板的css & js & image檔案路徑都改成laravel專案的路徑assets --}}
  <!-- jack0708 update to BS5 -->
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <!-- BS5.2 CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <!-- Bootstrap-Core-CSS -->
  {{-- <link rel="stylesheet" href="css/smoothbox.css" type='text/css' media="all" /> --}}
  <link href="{{ asset('assets/css/smoothbox.css') }}" rel="stylesheet">

  <!-- gallery light box -->
  {{-- <link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> --}}
  <link href="{{ asset('assets/css/style-food.css') }}" rel="stylesheet">

  <!-- Style-CSS -->
  {{-- <link rel="stylesheet" href="css/fontawesome-all.css"> --}}
  <link href="{{ asset('assets/css/fontawesome-all.css') }}" rel="stylesheet">

  <!-- Font-Awesome-Icons-CSS -->
  <!-- //Custom-Files -->

  <!-- Web-Fonts -->
  <!-- <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
    rel="stylesheet">
  <link
    href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=latin-ext"
    rel="stylesheet"> -->
  <!-- //Web-Fonts -->

</head>

<body>
  <!-- header -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light py-4">
      <div class="container">
        <h1>
          <a class="navbar-brand" href="index.html">
            <i class="fas fa-utensils"></i>Yumeal
          </a>
        </h1>
        <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse"
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <ul class="navbar-nav mx-auto text-center">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link scroll" href="#about">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Pages
              </a>
              <div class="dropdown-menu text-lg-left text-center" aria-labelledby="navbarDropdown">
                <a class="dropdown-item scroll" href="#services">Services</a>
                <a class="dropdown-item scroll" href="#specials">Specials</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item scroll" href="#gallery">Gallery</a>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link scroll" href="#contact">Contact Us</a>
            </li>
          </ul>
          <div class="forms-w3ls-agilesm text-center mt-lg-0 mt-4">
            <ul>
              <li class="login-list-w3ls d-inline border-right pr-3 mr-3">
                <a href="#" class="text-white" data-bs-toggle="modal" data-bs-target="#exampleModalCenter1">Login</a>
              </li>
              <li class="login-list-w3ls d-inline">
                <a href="#" class="text-white" data-bs-toggle="modal" data-bs-target="#exampleModalCenter2">Register</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- login -->
  <!-- jack0708 update to BS5 -->
  <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="login px-sm-4 mx-auto mw-100">
            <h5 class="text-center mb-4">Login Now</h5>
            <form action="#" method="post">
              <div class="form-group">
                <label>Your Name</label>
                <input type="text" class="form-control" name="name" placeholder="" required="">
              </div>
              <div class="form-group">
                <label class="mb-2">Password</label>
                <input type="password" class="form-control" name="password" placeholder="" required="">
              </div>
              <button type="submit" class="btn btn-primary submit mb-4">Login</button>
              <p class="text-center pb-4">
                <a href="#">Forgot your password?</a>
              </p>
              <p class="text-center pb-4 create-w3ls">
                Don't have an account?
                <a href="#" data-toggle="modal" data-target="#exampleModalCenter2">Create one now</a>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- //login -->
  <!-- register -->
  <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="login px-sm-4 mx-auto mw-100">
            <h5 class="text-center mb-4">Register Now</h5>
            <form action="#" method="post">
              <div class="form-group">
                <label>Your Name</label>
                <input type="text" class="form-control" name="name" placeholder="" required="">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="" required="">
              </div>
              <div class="form-group">
                <label class="mb-2">Password</label>
                <input type="password" class="form-control" name="password" id="password1" placeholder="" required="">
              </div>
              <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" name="password" id="password2" placeholder="" required="">
              </div>
              <button type="submit" class="btn btn-primary submit mb-4">Register</button>
              <p class="text-center pb-4">
                <a href="#">By clicking Register, I agree to your terms</a>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- //register -->
  <!-- //header -->



@yield('Content')

  <!-- banner -->
  <div class="callbacks_container">
    <ul class="rslides" id="slider3">
      <li>
        <div class="slider-info bg1">
          <div class="w3l-overlay">
            <div class="banner-text text-center container">
              <h3 class="text-white mb-md-4 mb-3">來份不須將就的餐點吧

              </h3>
              <p class="movetxt text-white mb-4">不愛的芹菜、香菜、青椒、紅蘿蔔、苦瓜都不會出現....</p>





              <div class="search-agile">
                <form action="#" method="post">
                  <!--             <input type="search" name="search" placeholder="Search here..." required="">
                  <input type="submit" value="Search">
                  <div class="clearfix"> </div>-->



                </form>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li>
        <div class="slider-info bg2">
          <div class="w3l-overlay">
            <div class="banner-text text-center container">
              <h3 class="text-white mb-md-4 mb-3">認識個味覺相近的新朋友一同用餐

              </h3>
              <p class="movetxt text-white mb-4">幫我推薦新朋友</p>
              <div class="search-agile">
                <form action="#" method="post">
                  <input type="search" name="search" placeholder="Search here..." required="">
                  <input type="submit" value="Search">
                  <div class="clearfix"> </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
  <!-- //banner -->






  <!-- middle section one -->
  <div class="w3ls-middle-works py-5 text-center" id="specials">
    <div class="py-xl-5 py-lg-3">

      <h3 class="title text-center text-dark mb-lg-5">
        <span>Fresh, organic ingredients,</span>Carefully prepared, Eat green for a reason.
      </h3>

      <div>

        <div id="myBtnContainer">
          <button class="btn active" onclick="filterSelection('all')"> Show all</button>
          <button class="btn" onclick="filterSelection('中式餐點')"> 中式餐點</button>
          <button class="btn" onclick="filterSelection('西式餐點')"> 西式餐點</button>
          <button class="btn" onclick="filterSelection('飲料點心')"> 飲料點心</button>
          <button class="btn" onclick="filterSelection('異國美食')"> 異國美食</button>
        </div>
        <div class="row">
          <div class="offset-1 col-10">


            <div class="container  <!-- d-flex --> justify-content-center align-items-center flex-wrap" >
              <div class="filterDiv 中式餐點">雞腿飯</div>
              <div class="filterDiv 異國美食 fruits">椰汁綠咖哩飯</div>
              <div class="filterDiv 中式餐點">牛肉麵</div>
              <div class="filterDiv 異國美食">酸辣河粉</div>
              <div class="filterDiv 中式餐點 飲料點心">胡椒餅</div>
              <div class="filterDiv 異國美食">親子井</div>
              <div class="filterDiv 西式餐點">漢堡</div>
              <div class="filterDiv 西式餐點">義大利麵</div>
              <div class="filterDiv 飲料點心">紅茶</div>
              <div class="filterDiv 飲料點心 異國美食">印度拉茶</div>
              <div class="filterDiv 飲料點心">起司蛋糕</div>
              <div class="filterDiv 飲料點心">提拉米蘇</div>
            </div>


          </div>
        </div>
        <script>
          filterSelection("all")
          function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("filterDiv");
            if (c == "all") c = "";
            for (i = 0; i < x.length; i++) {
              w3RemoveClass(x[i], "show");
              if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
          }

          function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
              if (arr1.indexOf(arr2[i]) == -1) { element.className += " " + arr2[i]; }
            }
          }

          function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
              while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
              }
            }
            element.className = arr1.join(" ");
          }

          // Add active class to the current button (highlight it)
          var btnContainer = document.getElementById("myBtnContainer");
          var btns = btnContainer.getElementsByClassName("btn");
          for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function () {
              var current = document.getElementsByClassName("active");
              current[0].className = current[0].className.replace(" active", "");
              this.className += " active";
            });
          }
        </script>

      </div>



      <a href="#" class="col-12 button-w3ls my-4 text-center" data-toggle="modal"
        data-target="#exampleModalCenter1">幫我過濾以下食材
        <i class="fas fa-long-arrow-alt-right ml-3"></i>
      </a>
      <div class="text-dark">
        <div class="form-check form-check-inline"><input type="checkbox" class="text-white">芹菜</div>
        <div class="form-check form-check-inline"><input type="checkbox">香菜</div>
        <div class="form-check form-check-inline"><input type="checkbox">青椒</div>
        <div class="form-check form-check-inline"><input type="checkbox">茄子</div>
        <div class="form-check form-check-inline"><input type="checkbox">紅蘿蔔</div>
        <div class="form-check form-check-inline"><input type="checkbox">皮蛋</div>
        <div class="form-check form-check-inline"><input type="checkbox">苦瓜</div> <span>更多</span><button
          class="btn btn-primary  ml-3">篩選</button>
        <div class="clearfix"> </div>
      </div>



    </div>
  </div>
  <!-- //middle section one -->


  <!-- about -->
  <div class="about py-5" id="about">
    <div class="container py-xl-5 py-lg-3">
      <h3 class="title text-center text-dark mb-sm-5 mb-4">
        <span>餐點推薦</span> world's no.1 tasty food
      </h3>
      <div class="row about-bottom-w3l text-center pt-lg-5">
        <div class="col-sm-6 col-lg-3 about-grid ">
          <div class="about-grid-main">
            {{-- <img src="images/a1.jpg" alt="" class="img-fluid"> --}}
            <img src="{{ asset('assets/images/a1.jpg') }}" alt="" class="img-fluid">

            <h4 class="mb-3">Clean & Continental Place</h4>
            <p> Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
            <a href="#" class="button-w3ls mt-4" data-toggle="modal" data-target="#exampleModalCenter1">Read More
              <i class="fas fa-long-arrow-alt-right ml-3"></i>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 about-grid mt-sm-0 mt-4">
          <div class="about-grid-main">
            {{-- <img src="images/a2.jpg" alt="" class="img-fluid"> --}}
            <img src="{{ asset('assets/images/a2.jpg') }}" alt="" class="img-fluid">

            <h4 class="mb-3">100% Healthy Food</h4>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
            <a href="#" class="button-w3ls mt-4" data-toggle="modal" data-target="#exampleModalCenter1">Read More
              <i class="fas fa-long-arrow-alt-right ml-3"></i>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 about-grid mt-sm-0 mt-4">
          <div class="about-grid-main">
            {{-- <img src="images/a2.jpg" alt="" class="img-fluid"> --}}
            <img src="{{ asset('assets/images/a2.jpg') }}" alt="" class="img-fluid">

            <h4 class="mb-3">100% Healthy Food</h4>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
            <a href="#" class="button-w3ls mt-4" data-toggle="modal" data-target="#exampleModalCenter1">Read More
              <i class="fas fa-long-arrow-alt-right ml-3"></i>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 about-grid mt-sm-0 mt-4">
          <div class="about-grid-main">
            {{-- <img src="images/a2.jpg" alt="" class="img-fluid"> --}}
            <img src="{{ asset('assets/images/a2.jpg') }}" alt="" class="img-fluid">

            <h4 class="mb-3">100% Healthy Food</h4>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
            <a href="#" class="button-w3ls mt-4" data-toggle="modal" data-target="#exampleModalCenter1">Read More
              <i class="fas fa-long-arrow-alt-right ml-3"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- //about -->

  <!-- about -->
  <div class="about py-5" id="about">
    <div class="container py-xl-5 py-lg-3">
      <h3 class="title text-center text-dark mb-sm-5 mb-4">
        <span>味覺與您接近的小夥伴</span> world's no.1 tasty food
      </h3>
      <div class="row about-bottom-w3l text-center pt-lg-5">
        <div class="col-sm-6 col-lg-3 about-grid mt-sm-0 mt-4">
          <div class="about-grid-main">
            {{-- <img src="images/05.jpg" alt="" class="img-fluid"> --}}
            <img src="{{ asset('assets/images/05.jpg') }}" alt="" class="img-fluid">

            <h4 class="mb-3">阿南仔</h4>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
            <a href="#" class="button-w3ls mt-4" data-toggle="modal" data-target="#exampleModalCenter1">Read More
              <i class="fas fa-long-arrow-alt-right ml-3"></i>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 about-grid mt-sm-0 mt-4">
          <div class="about-grid-main">
            {{-- <img src="images/04.jpg" alt="" class="img-fluid"> --}}
            <img src="{{ asset('assets/images/04.jpg') }}" alt="" class="img-fluid">

            <h4 class="mb-3">陳大東</h4>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
            <a href="#" class="button-w3ls mt-4" data-toggle="modal" data-target="#exampleModalCenter1">Read More
              <i class="fas fa-long-arrow-alt-right ml-3"></i>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 about-grid mt-sm-0 mt-4">
          <div class="about-grid-main">
            {{-- <img src="images/02.jpg" alt="" class="img-fluid"> --}}
            <img src="{{ asset('assets/images/02.jpg') }}" alt="" class="img-fluid">

            <h4 class="mb-3">小虎兒</h4>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
            <a href="#" class="button-w3ls mt-4" data-toggle="modal" data-target="#exampleModalCenter1">Read More
              <i class="fas fa-long-arrow-alt-right ml-3"></i>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 about-grid mt-sm-0 mt-4">
          <div class="about-grid-main">
            {{-- <img src="images/01.jpg" class="img-fluid"> --}}
            <img src="{{ asset('assets/images/01.jpg') }}" alt="" class="img-fluid">

            <h4 class="mb-3">莉莉安</h4>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
            <a href="#" class="button-w3ls mt-4" data-toggle="modal" data-target="#exampleModalCenter1">Read More
              <i class="fas fa-long-arrow-alt-right ml-3"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- //about -->



  <!-- gallery -->
  <div class="gallery pt-5" id="gallery">
    <div class="container py-xl-5 py-lg-3">
      <div class="row gallery_grids">
        <div class="col-4 agile-gallery_grid_main">
          <div class="gallery-img-grid gallery_grid1 hover14 column">
            <div class="gallery_effect">
              <a href="{{ asset('assets/images/g1.jpg') }}" class="sb"
                title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                <figure>
                  {{-- <img src="images/g1.jpg" alt=" " class="img-fluid" /> --}}
            <img src="{{ asset('assets/images/g1.jpg') }}" alt="" class="img-fluid">

                </figure>
              </a>
            </div>
          </div>
          <div class="gallery-img-grid hover14 column">
            <div class="gallery_effect">
              <a href="{{ asset('assets/images/g2.jpg') }}" class="sb"
                title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                <figure>
                  {{-- <img src="images/g2.jpg" alt=" " class="img-fluid" /> --}}
            <img src="{{ asset('assets/images/g2.jpg') }}" alt="" class="img-fluid">

                </figure>
              </a>
            </div>
          </div>
          <div class="gallery-img-grid hover14 column">
            <div class="gallery_effect">
              <a href="{{ asset('assets/images/g3.jpg') }}" class="sb"
                title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                <figure>
                  {{-- <img src="images/g3.jpg" alt=" " class="img-fluid" /> --}}
            <img src="{{ asset('assets/images/g3.jpg') }}" alt="" class="img-fluid">

                </figure>
              </a>
            </div>
          </div>
        </div>
        <div class="col-4 agile-gallery_grid_main">
          <div class="gallery-img-grid hover14 column">
            <div class="gallery_effect">
              <a href="{{ asset('assets/images/g7.jpg') }}" class="sb"
                title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                <figure>
                  {{-- <img src="images/g7.jpg" alt=" " class="img-fluid" /> --}}
            <img src="{{ asset('assets/images/g7.jpg') }}" alt="" class="img-fluid">

                </figure>
              </a>
            </div>
          </div>
          <div class="gallery-img-grid hover14 column">
            <div class="gallery_effect">
              <a href="{{ asset('assets/images/g8.jpg') }}" class="sb"
                title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                <figure>
                  {{-- <img src="images/g8.jpg" alt=" " class="img-fluid" /> --}}
            <img src="{{ asset('assets/images/g8.jpg') }}" alt="" class="img-fluid">

                </figure>
              </a>
            </div>
          </div>
        </div>
        <div class="col-4 agile-gallery_grid_main">
          <div class="gallery-img-grid gallery_grid1 hover14 column">
            <div class="gallery_effect">
              <a href="{{ asset('assets/images/g4.jpg') }}" class="sb"
                title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                <figure>
                  {{-- <img src="images/g4.jpg" alt=" " class="img-fluid" /> --}}
            <img src="{{ asset('assets/images/g4.jpg') }}" alt="" class="img-fluid">

                </figure>
              </a>
            </div>
          </div>
          <div class="gallery-img-grid hover14 column">
            <div class="gallery_effect">
              <a href="{{ asset('assets/images/g5.jpg') }}" class="sb"
                title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                <figure>
                  {{-- <img src="images/g5.jpg" alt=" " class="img-fluid" /> --}}
            <img src="{{ asset('assets/images/g5.jpg') }}" alt="" class="img-fluid">

                </figure>
              </a>
            </div>
          </div>
          <div class="gallery-img-grid hover14 column">
            <div class="gallery_effect">
              <a href="{{ asset('assets/images/g6.jpg') }}" class="sb"
                title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                <figure>
                  {{-- <img src="images/g6.jpg" alt=" " class="img-fluid" /> --}}
            <img src="{{ asset('assets/images/g6.jpg') }}" alt="" class="img-fluid">

                </figure>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- //gallery -->

  <!-- contact -->
  <div class="address py-5" id="contact">
    <div class="container py-xl-5 py-lg-3">
      <h3 class="title text-center text-dark mb-sm-5 mb-4">
        <span>Contact US</span> world's no.1 tasty food
      </h3>
      <div class="row address-row pt-lg-5">
        <div class="col-lg-6">
          <div class="address-right p-sm-5 p-4">
            <div class="address-info wow fadeInRight animated" data-wow-delay=".5s">
              <h4 class="mb-3">Address</h4>
              <p>123 San Sebastian, Hill Towers 4567,
                <span>New York City, USA</span>
              </p>
            </div>
            <div class="address-info address-mdl wow fadeInRight animated my-sm-5 my-4" data-wow-delay=".7s">
              <h4 class="mb-3">Phone </h4>
              <p>+222 111 333 4444</p>
              <p>+222 111 333 5555</p>
            </div>
            <div class="address-info agileits-info wow fadeInRight animated" data-wow-delay=".6s">
              <h4 class="mb-3">Mail</h4>
              <p>
                <a href="mailto:example@mail.com"> mail@example.com</a>
              </p>
              <p>
                <a href="mailto:example@mail.com"> mail2@example.com</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 address-left wow agile fadeInLeft animated mt-lg-0 mt-5" data-wow-delay=".5s">
          <div class="address-grid p-sm-5 p-4">
            <h4 class="wow fadeIndown animated mb-3" data-wow-delay=".5s">Get In Touch</h4>
            <form action="#" method="post">
              <div class="form-group">
                <input type="text" placeholder="Name" name="name" class="form-control" required="">
              </div>
              <div class="form-group">
                <input type="email" placeholder="Email" name="email" class="form-control" required="">
              </div>
              <div class="form-group">
                <textarea placeholder="Message" name="Message" class="form-control" required=""></textarea>
              </div>
              <input type="submit" value="SEND">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--//contact-->

@yield('footer')

  <!-- footer -->
  <footer class="pt-5">
    <div class="container py-xl-5 py-lg-3">
      <div class="row footer-grids py-4">
        <div class="col-lg-4 footer-grid text-left">
          <div class="footer-logo">
            <h2 class="mb-3">
              <a class="logo text-white" href="index.html">
                <i class="fas fa-utensils mr-2"></i>Snacks</a>
            </h2>
          </div>
        </div>
        <div class="col-lg-2 col-6  footer-grid my-lg-0 my-4">
          <h3 class="mb-sm-4 mb-3 pb-3">Home</h3>
          <ul class="list-unstyled">
            <li>
              <a href="index.html">Index</a>
            </li>
            <li class="my-2">
              <a class="scroll" href="#about">About</a>
            </li>
            <li>
              <a class="scroll" href="#services">Services</a>
            </li>
            <li class="my-2">
              <a class="scroll" href="#gallery">Gallery</a>
            </li>
            <li>
              <a class="scroll" href="#contact">Contact Us</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-2 col-6 footer-grid my-lg-0 my-4">
          <h3 class="mb-sm-4 mb-3 pb-3"> Navigation </h3>
          <ul class="list-unstyled">
            <li>
              <a class="scroll" href="#services">Advantages</a>
            </li>
            <li class="my-2">
              <a class="scroll" href="#specials">Specials</a>
            </li>
            <li>
              <a class="scroll" href="#some">Some More</a>
            </li>
            <li class="my-2">
              <a class="scroll" href="#gallery">Gallery</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-2 col-6 footer-grid">
          <h3 class="mb-sm-4 mb-3 pb-3"> Company</h3>
          <ul class="list-unstyled">
            <li>
              <a href="#">Link Here</a>
            </li>
            <li class="my-2">
              <a href="#">Link Here</a>
            </li>
            <li>
              <a href="#">Link Here</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-2 col-6 footer-grid footer-contact">
          <h3 class="mb-sm-4 mb-3 pb-3"> Contact Us</h3>
          <ul class="list-unstyled">
            <li>
              +01(24) 8543 8088
            </li>
            <li class="mt-2">
              <a href="mailto:info@example.com">info@example.com</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- copyright -->
    <div class="copy_right">
      <p class="text-center text-white py-sm-4 py-3">© 2018 Snacks. All rights reserved | Design by
        <a href="http://w3layouts.com/">W3layouts</a>
      </p>

    </div>
    <!-- //copyright -->
  </footer>
  <!-- //footer -->


  <!-- Js files -->
  <!-- JavaScript -->
@section('js_jquery')
  {{-- <script src="js/jquery-2.2.3.min.js"></script> --}}
  <script src="{{ asset('assets/js/jquery-2.2.3.min.js') }}"></script>
  <!-- Default-JavaScript-File -->
@show

@section('js_banner')
  <!-- banner slider -->
  {{-- <script src="js/responsiveslides.min.js"></script> --}}
  <script src="{{ asset('assets/js/responsiveslides.min.js') }}"></script>


  <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      // Slideshow 4
      $("#slider3").responsiveSlides({
        auto: true,
        pager: true,
        nav: false,
        speed: 500,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });

    });
  </script>
  <!-- //banner slider -->
  @show

  @section('js_password')
  <!-- password-script -->
  <script>
    window.onload = function () {
      console.log("start");
      document.getElementById("password1").onchange = validatePassword;
      document.getElementById("password2").onchange = validatePassword;
      console.log("password1");
    }

    function validatePassword() {
      console.log("validate start");
      var pass2 = document.getElementById("password2").value;
      var pass1 = document.getElementById("password1").value;
      console.log(pass1);
      if (pass1 != pass2)
        document.getElementById("password2").setCustomValidity("Passwords Don't Match");
      else
        document.getElementById("password2").setCustomValidity('');
      //empty string means no validation error
    }
  </script>
  <!-- //password-script -->
@show

@section('js_gallery')
  <!-- gallery light box -->
  {{-- <script src="js/smoothbox.jquery2.js"></script> --}}
  <script src="{{ asset('assets/js/smoothbox.jquery2.js') }}"></script>
  <!-- //gallery light box -->
@show

@section('js_scrolling')
  <!-- smooth scrolling -->
  {{-- <script src="js/SmoothScroll.min.js"></script> --}}
  <script src="{{ asset('assets/js/SmoothScroll.min.js') }}"></script>
  <!-- //smooth scrolling -->
@show

@section('js_moveTop')
  <!-- move-top -->
  {{-- <script src="js/move-top.js"></script> --}}
  <script src="{{ asset('assets/js/move-top.js') }}"></script>
@show

@section('js_easing')
  <!-- easing -->
  {{-- <script src="js/easing.js"></script> --}}
  <script src="{{ asset('assets/js/easing.js') }}"></script>
@show

@section('js_snacks')
  <!--  necessary snippets for few javascript files -->
  {{-- <script src="js/snacks.js"></script> --}}
  <script src="{{ asset('assets/js/snacks.js') }}"></script>
@show

  <!-- jack0708 update to BS5 -->
  <!-- <script src="js/bootstrap.js"></script> -->
  <!-- Necessary-JavaScript-File-For-Bootstrap -->
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  <!-- //Js files -->

</body>

</html>
